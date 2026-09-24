<?php
defined('ABSPATH') || exit;

class WordClever_API_Handler {
    public static function generate_content($content_type, $keyword, $tone, $resp_count = 1) {
        $username = get_option('wordclever_current_user');

       if (!$username) {
           return new WP_Error('username_error', 'No username found.');
       }
       
        $endpoint = WORDCLEVER_ENDPOINT . '/openai_get_results';
    
        $request_data = [
            'username'     => $username,
            'content_type' => $content_type,
            'keyword'      => $keyword,
            'tone'         => $tone,
            'resp_count'  => $resp_count,
        ];
    
        $response = wp_remote_post($endpoint, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => wp_json_encode($request_data),
        ]);
    
        if (is_wp_error($response)) {
            return new WP_Error('server_error', 'Failed to connect to the server endpoint.');
        }
    
        $response_body = wp_remote_retrieve_body($response);

        $decoded_response = json_decode($response_body, true);
    
        if (!empty($decoded_response['results'])) {
        if (!empty($decoded_response['user_data']['used_request'])) {
            update_option('wordclever_used_request_', $decoded_response['user_data']['used_request']);
        }
            return $decoded_response['results']; // returns 'results' as an array
        }
    
        return new WP_Error('generation_error', 'Error: Unable to generate content.');
    }

    //for login / signup
    public static function auth_login_signup($username, $password, $email_id = '', $action = 'login') {
        $site_url = get_site_url();
        $endpoint = WORDCLEVER_ENDPOINT . '/auth_login_signup';
    
        // Prepare the API request data
        $request_data = [
            'username' => $username,
            'password' => $password,
            'site_url'  => esc_url_raw($site_url),
            'email_id' => $email_id,
            'action' => $action,
        ];
    
        $response = wp_remote_post($endpoint, [
            'method'    => 'POST',
            'body'      => wp_json_encode($request_data),
            'timeout'   => 15,
            'headers'   => [
                'Content-Type' => 'application/json',
            ],
        ]);
    
        if (is_wp_error($response)) {
            return [
                'success' => false,
                'data' => ['message' => __('Failed to connect to the API.', 'wordclever-ai-content-writer')]
            ];
        }
    
        $response_body = wp_remote_retrieve_body($response);
        $response_data = json_decode($response_body, true);
    
        // Ensure valid JSON
        if (json_last_error() !== JSON_ERROR_NONE) {
            return [
                'success' => false,
                'data' => ['message' => __('Invalid JSON response from the server.', 'wordclever-ai-content-writer')]
            ];
        }
    
        // Handle success case explicitly
        if (!empty($response_data['status']) && strtolower($response_data['status']) === 'success') {
            update_option('wordclever_current_user', $username);
            return [
                'success' => true,
                'data' => ['message' => 'Registration successful! Please log in.']
            ];
        }
        if (!empty($response_data['message']) && $response_data['message'] === 'User logged in.') {

            update_option('wordclever_current_user', $username);
            $user_data = $response_data['data'];
              // Save user data 
              update_option('wordclever_request_count_' , $user_data['request_count']);
              update_option('wordclever_used_request_' , $user_data['used_request']);
            return [
                'success' => true,
                'data' => ['message' => 'User is already logged in.']
            ];
        }
        return [
            'success' => false,
            'data' => ['message' => $response_data['message'] ?? 'Unknown error occurred.']
        ];
    }


    //for user data 
    public static function get_user_data_by_username($username) {
        
        $endpoint = WORDCLEVER_ENDPOINT . '/get_data_by_username';
        
        $request_data = [
            'username' => $username,
        ];
        
        $response = wp_remote_post($endpoint, [
            'method'    => 'POST',
            'body'      => wp_json_encode($request_data),
            'timeout'   => 15,
            'headers'   => [
                'Content-Type' => 'application/json',
            ],
        ]);
        
        if (is_wp_error($response)) {
            return $response;
        }
        
        $response_body = wp_remote_retrieve_body($response);
        $response_data = json_decode($response_body, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return new WP_Error('json_error', __('Invalid JSON response from the server.', 'wordclever-ai-content-writer'));
        }
        
        return $response_data;
    }
    
   
}
