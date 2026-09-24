<?php
defined('ABSPATH') || exit;

class WordClever_MetaBox {
    public static function init() {
        add_action('add_meta_boxes', [__CLASS__, 'add_metabox']);
        add_action('admin_enqueue_scripts', [__CLASS__, 'enqueue_assets']);
        add_action('wp_ajax_wordclever_generate_content', [__CLASS__, 'generate_content']);
        add_action('admin_menu', [__CLASS__, 'add_admin_menu']);
        add_action('admin_menu', function() {
            remove_submenu_page('wordclever_dashboard', 'wordclever_dashboard');
        });
        add_action('wp_ajax_wordclever_get_used_request', [__CLASS__, 'wordclever_get_used_request']);

        //for login and registration
        add_action('wp_ajax_wordclever_auth', [__CLASS__, 'handle_auth']);
    }

    public static function add_metabox() {
        add_meta_box(
            'wordclever_metabox',
            __('WordClever AI Content Writer', 'wordclever-ai-content-writer'),
            [__CLASS__, 'render_metabox'],
            ['product'],
            'side'
        );
    }

    //for used request

    public static function wordclever_get_used_request() {
        check_ajax_referer('wordclever_nonce', 'security');
        
        $current_user = get_option('wordclever_current_user');
        if (empty($current_user)) {
            wp_send_json_error(['message' => __('User is not logged in.', 'wordclever-ai-content-writer')]);
        }
        
        $response = WordClever_API_Handler::get_user_data_by_username($current_user);
        
        if (is_wp_error($response) || empty($response['user_data'])) {
            wp_send_json_error(['message' => __('Failed to fetch user data.', 'wordclever-ai-content-writer')]);
        }
        
        $used_request = $response['user_data']['used_request'] ?? 0;
        update_option('wordclever_used_request_', $used_request);
        
        wp_send_json_success(['used_request' => $used_request]);
    }
    
    //end

    public static function render_metabox() {
        wp_nonce_field('wordclever_nonce', 'wordclever_nonce_field');

        $current_user = get_option('wordclever_current_user');
        $request_count = get_option('wordclever_request_count_');
        $used_request = get_option('wordclever_used_request_');
        ?>

          <!-- Username Display -->
          <?php if (!empty($current_user)): ?>
             <div id="wordclever-username" style="margin-bottom: 10px; font-size: 14px; color: #555;">
                 <?php esc_html_e('Logged in as:', 'wordclever-ai-content-writer'); ?> <strong><?php echo esc_html($current_user); ?></strong>
             </div>
         <?php endif; ?>
        
         <!-- Request Information Display -->
         <?php if (!empty($current_user)): ?>
         <div id="wordclever-request-info" style="margin-bottom: 10px; font-size: 14px; color: #555;">
             <p><?php esc_html_e('Free Request Count:', 'wordclever-ai-content-writer'); ?> <strong><?php echo esc_html($request_count); ?></strong></p>
             <p><?php esc_html_e('Used Requests:', 'wordclever-ai-content-writer'); ?> <strong><?php echo esc_html($used_request); ?></strong></p>
         </div>
         <?php endif; ?>


        <!-- Metabox Content -->
         <div id="wordclever-ai-box">
              <label for="wordclever-content-type"><?php esc_html_e('Content Type:', 'wordclever-ai-content-writer'); ?></label>
              <select id="wordclever-content-type">
                  <option value="product_description"><?php esc_html_e('Product Description', 'wordclever-ai-content-writer'); ?></option>
              </select>
          
              <label for="wordclever-keyword"><?php esc_html_e('Keyword:', 'wordclever-ai-content-writer'); ?></label>
              <input type="text" id="wordclever-keyword" placeholder="<?php esc_html_e('Enter a keyword (Max 100 characters)', 'wordclever-ai-content-writer'); ?>" maxlength="100">
          
              <label for="wordclever-tone"><?php esc_html_e('Tone:', 'wordclever-ai-content-writer'); ?></label>
              <select id="wordclever-tone">
                  <option value="formal"><?php esc_html_e('Formal', 'wordclever-ai-content-writer'); ?></option>
                  <option value="informal"><?php esc_html_e('Informal', 'wordclever-ai-content-writer'); ?></option>
                  <option value="professional"><?php esc_html_e('Professional', 'wordclever-ai-content-writer'); ?></option>
                  <option value="creative"><?php esc_html_e('Creative', 'wordclever-ai-content-writer'); ?></option>
              </select>
          
              <label for="wordclever-num-results"><?php esc_html_e('Number of Results:', 'wordclever-ai-content-writer'); ?></label>
              <select id="wordclever-num-results">
                  <?php for ($i = 1; $i <= 3; $i++): ?>
                      <option value="<?php echo esc_attr($i); ?>"><?php echo esc_html($i); ?></option>
                  <?php endfor; ?>
              </select>
          
              <button type="button" id="wordclever-generate-content" <?php echo empty($current_user) ? 'disabled' : ''; ?>>
                  <?php esc_html_e('Generate Content', 'wordclever-ai-content-writer'); ?>
              </button><br><br>
              <strong>Results:</strong>
              <div id="wordclever-results"></div>
          
 
 
             <?php if (empty($current_user)): ?>
                 <div class="wordclever-login-button-parent-box">
                     <button type="button" id="wordclever-login-popup-trigger"><?php esc_html_e('Login / Register', 'wordclever-ai-content-writer'); ?></button>
                 </div>
             <?php endif; ?>
             

            <!-- Login/Register Popup -->
            <div id="wordclever-popup" class="wordclever-popup hidden">
                <div class="wordclever-popup-content">
                    <!-- Login Form -->
                    <div id="wordclever-login-form">
                        <h2><?php esc_html_e('Login', 'wordclever-ai-content-writer'); ?></h2>
                        <input type="text" id="wordclever-login-username" placeholder="<?php esc_html_e('Username', 'wordclever-ai-content-writer'); ?>" required>
                        <div style="position: relative;">
                            <input type="password" id="wordclever-login-password" placeholder="<?php esc_html_e('Password', 'wordclever-ai-content-writer'); ?>" required minlength="6">
                            <span id="toggle-login-password" class="dashicons dashicons-visibility" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></span>
                        </div>
                        <!-- Professional Text Below Password Field -->
                        <p style="font-size: 13px; color: #666; margin-top: 5px;">
                            <?php esc_html_e('Forgot your password? Contact admin for assistance.', 'wordclever-ai-content-writer'); ?> 
                            <a href="mailto:support@wpradiant.net" style="color: #0073aa; text-decoration: underline;">
                                <?php esc_html_e('support@wpradiant.net', 'wordclever-ai-content-writer'); ?>
                            </a>
                        </p>
                        <button id="wordclever-login-submit"><?php esc_html_e('Login', 'wordclever-ai-content-writer'); ?></button>
                        <p><button type="button" id="wordclever-toggle-register"><?php esc_html_e('Register here', 'wordclever-ai-content-writer'); ?></button></p>
                    </div>

                    <!-- Register Form -->
                    <div id="wordclever-register-form" class="hidden">
                        <h2><?php esc_html_e('Register', 'wordclever-ai-content-writer'); ?></h2>
                        <input type="text" id="wordclever-register-username" placeholder="<?php esc_html_e('Username', 'wordclever-ai-content-writer'); ?>" required>
                        <input type="email" id="wordclever-register-email" placeholder="<?php esc_html_e('Email', 'wordclever-ai-content-writer'); ?>" required>
                        <div style="position: relative;">
                            <input type="password" id="wordclever-register-password" placeholder="<?php esc_html_e('Password', 'wordclever-ai-content-writer'); ?>" required minlength="6">
                            <span id="toggle-register-password" class="dashicons dashicons-visibility" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></span>
                        </div>
                        <button id="wordclever-register-submit"><?php esc_html_e('Register', 'wordclever-ai-content-writer'); ?></button>
                        <p><button type="button" id="wordclever-toggle-login"><?php esc_html_e('Back to Login', 'wordclever-ai-content-writer'); ?></button></p>
                    </div>

                   

                    <button id="wordclever-popup-close" aria-label="<?php esc_html_e('Close', 'wordclever-ai-content-writer'); ?>" style="background: none; border: none; cursor: pointer;">
                        <span class="dashicons dashicons-no-alt"></span>
                    </button>

                </div>
            </div>
        </div>

        <?php if (empty($current_user)): ?>
            <p style="color: red;"><?php esc_html_e('You must be logged in to generate content.', 'wordclever-ai-content-writer'); ?></p>
        <?php endif; ?>
                <?php


    }
    
    
    
    public static function enqueue_assets($hook) {

        if ($hook == 'toplevel_page_wordclever-templates') {
            wp_enqueue_style('wordclever-template-style', WORDCLEVER_URL . 'assets/css/template-style.css', array(), WORDCLEVER_VERSION, 'all');
            wp_enqueue_style('wordclever-bootstrap', WORDCLEVER_URL . 'assets/css/bootstrap.min.css', array(), WORDCLEVER_VERSION, 'all');

            wp_enqueue_script('wordclever-pagination-js', WORDCLEVER_URL . 'assets/js/templates-pagination.js', array('jquery'), WORDCLEVER_VERSION, true);

            wp_localize_script('wordclever-pagination-js', 'wordclever_pagination_object', array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce'   => wp_create_nonce('wordclever_create_pagination_nonce_action')
            ));
        }

        wp_enqueue_style('wordclever-admin-style', WORDCLEVER_URL . 'assets/css/admin-style.css', array(), WORDCLEVER_VERSION, 'all');
        wp_enqueue_script('wordclever-admin-script', WORDCLEVER_URL . 'assets/js/admin-script.js', ['jquery'], WORDCLEVER_VERSION, true);
        wp_enqueue_style('dashicons');
        //sweetalert
        wp_enqueue_style('wordclever-sweetalert2-css', WORDCLEVER_URL . 'assets/libs/sweetalert2/sweetalert2.min.css', array(), WORDCLEVER_VERSION);
        wp_enqueue_script('wordclever-sweetalert2-js', WORDCLEVER_URL . 'assets/libs/sweetalert2/sweetalert2.min.js', array('jquery'), WORDCLEVER_VERSION, true); 

        wp_localize_script('wordclever-admin-script', 'wordclever_data', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('wordclever_nonce'),
            'site_url' => get_site_url(), 
        ]);
        
    }


    public static function generate_content() {
        check_ajax_referer('wordclever_nonce', 'security');

        $current_user = get_option('wordclever_current_user');
        if (empty($current_user)) {
            wp_send_json_error(['message' => __('User is not logged in. Please log in to generate content.', 'wordclever-ai-content-writer')]);
        }
    
        $request_count = get_option('wordclever_request_count_' . $current_user_id, 0);
        $used_request = get_option('wordclever_used_request_' . $current_user_id, 0);
    
        if ($used_request >= $request_count) {
            wp_send_json_error(['message' => __('Request limit reached. Upgrade your plan.', 'wordclever-ai-content-writer')]);
        }
    
        $content_type = sanitize_text_field(wp_unslash($_POST['content_type'] ?? ''));
        $keyword = sanitize_text_field(wp_unslash($_POST['keyword'] ?? ''));
        $tone = sanitize_text_field(wp_unslash($_POST['tone'] ?? ''));
        $resp_count = intval($_POST['resp_count'] ?? 1);
    
        if (empty($content_type) || empty($keyword) || empty($tone) || $resp_count < 1) {
            wp_send_json_error(['message' => __('All fields are required.', 'wordclever-ai-content-writer')]);
        }
    
        $response = WordClever_API_Handler::generate_content($content_type, $keyword, $tone, $resp_count);
    
        if (is_wp_error($response)) {
            wp_send_json_error(['message' => $response->get_error_message()]);
        }
    
        if (empty($response)) {
            wp_send_json_error(['message' => __('No content generated. Please try again.', 'wordclever-ai-content-writer')]);
        }
    
        wp_send_json_success(['results' => $response]);
    }
    
    

    
    //for login and register 
    public static function handle_auth() {
        check_ajax_referer('wordclever_nonce', 'security');
    
        $username = sanitize_text_field(wp_unslash($_POST['username'] ?? ''));
        $password = sanitize_text_field(wp_unslash($_POST['password'] ?? ''));
        $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
        $auth_action = sanitize_text_field(wp_unslash($_POST['auth_action'] ?? ''));

    
        if (empty($username) || empty($password)) {
            wp_send_json_error(['message' => __('Username and password are required.', 'wordclever-ai-content-writer')]);
        }
    
        $response = WordClever_API_Handler::auth_login_signup($username, $password, $email, $auth_action);
    
        if (is_wp_error($response)) {
            wp_send_json_error(['message' => $response->get_error_message()]);
        }
    
       // wp_send_json_success($response);

       if (!empty($response['success']) && $response['success']) {
        wp_send_json_success($response);
    } else {
        wp_send_json_error($response['data']);
    }
    
    }

    //end

    public static function add_admin_menu() {
        add_menu_page(
            __('WordClever', 'wordclever-ai-content-writer'),
            __('WordClever', 'wordclever-ai-content-writer'),
            'manage_options',
            'wordclever-templates',
            [__CLASS__, 'render_templates_page'],
            'dashicons-lightbulb'
        );

        add_submenu_page(
            'wordclever-templates',
            'Templates',
            'Templates',
            'manage_options',
            'wordclever-templates',
            [__CLASS__, 'render_templates_page'],
        );

        add_submenu_page(
            'wordclever-templates',
            'Help',
            'Help',
            'manage_options',
            'wordclever-help',
            [__CLASS__, 'render_help_page'],
        );
    }

    public static function render_help_page() {
        ?>
        <div id="wordclever-help" class="wrap">
            <h1><?php esc_html_e('WordClever Help', 'wordclever-ai-content-writer'); ?></h1>
            <p><?php esc_html_e('Welcome to WordClever AI Content Writer!', 'wordclever-ai-content-writer'); ?></p>
            <p><?php esc_html_e('Here’s how to use the plugin:', 'wordclever-ai-content-writer'); ?></p>
            <ol>
                <li><?php esc_html_e('Go to woocommerce product edit screen.', 'wordclever-ai-content-writer'); ?></li>
                <li><?php esc_html_e('Find the "WordClever AI Content Writer" box on the right sidebar.', 'wordclever-ai-content-writer'); ?></li>
                <li><?php esc_html_e('Fill in the required fields (Content Type, Keyword, and Tone).', 'wordclever-ai-content-writer'); ?></li>
                <li><?php esc_html_e('Click "Generate Content" to create AI-powered content!', 'wordclever-ai-content-writer'); ?></li>
            </ol>
            <p><?php esc_html_e('As a free user, you have 10 free content generation requests. After that, you will need to upgrade to a paid plan for more requests.', 'wordclever-ai-content-writer'); ?></p>
            <p><?php esc_html_e('For more details, check our documentation or contact support.', 'wordclever-ai-content-writer'); ?></p>
        </div>
        <?php
    }

    public static function render_templates_page() {
        ?>
        <div id="wordclever-templates" class="wrap">
            <div class="row d-flex wordclever-templates-tabs-box">
                <div class="col-xl-1 col-lg-1 col-md-1 wordclever-templates-collections-logo text-center">
                    <img src="<?php echo esc_url(WORDCLEVER_URL . 'assets/images/logo.png'); ?>" alt="banner-image">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 wordclever-templates-collections-tabs">
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 wordclever-templates-collections-search align-self-center">
                    <div class="search-box d-flex gap-2">
                        <span class="search-outer-box position-relative"><input type="text" name="wordclever-templates-search" autocomplete="off" placeholder="Plumber |">
                            <span class="dashicons dashicons-search"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="wordclever-template-content-box d-flex pt-5 mt-3">
                <div class="wordclever-template-sidebar-main-box col-xl-3 col-lg-4 col-md-6 pe-4">
                    <div class="wordclever-template-banner-image position-relative mb-2">
                        <img src="<?php echo esc_url(WORDCLEVER_URL . 'assets/images/bundle-banner.png'); ?>" alt="banner-image">
                        <div class="wordclever-template-banner-content-box">
                            <div class="wordclever-template-banner-heading"><?php echo esc_attr('WordPress Theme Bundle'); ?></div>
                            <p class="wordclever-template-banner-para"><?php echo esc_attr('Get Access to 45+ Gutenberg WordPress Themes for almost all business Niche'); ?></p>
                            <a class="wordclever-bundle-buy-now wordclever-bundle-btn mt-2" href="<?php echo esc_url( WORDCLEVER_MAIN_URL . '/products/wordpress-theme-bundle' ); ?>" target="_blank"><?php echo esc_html('Buy Bundle at $69'); ?></a>
                        </div>
                    </div>
                    <div class="wordclever-filter-categories-wrapper position-relative">
                        <div class="wordclever-filter-category-select pb-3">
                            <span class="wordclever-filter-category-select-content"><?php echo esc_attr('Themes Categories'); ?></span>
                        </div>
                        <ul class="wordclever-templates-collections-group">
                            <?php
                                $collections_arr = wordclever_get_collections();
                                foreach ( $collections_arr as $collection ) {

                                    if ($collection->handle != 'free-products') { ?>
                                        <li class="wordclever-collection-name pb-3" data-value="<?php echo esc_attr($collection->handle); ?>"><?php echo esc_html($collection->title); ?><span class="wordclever-collection-count align-self-center"><?php echo esc_html($collection->productsCount); ?></span></li>
                                    <?php }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-6 wordclever-templates-grid-outer-box">
                    <div class="wordclever-templates-grid wordclever-main-grid">
                        <?php $get_filtered_products = wordclever_get_filtered_products();
                            if (isset($get_filtered_products['products']) && !empty($get_filtered_products['products'])) {
                                foreach ( $get_filtered_products['products'] as $product ) {
                                    $product_obj = $product->node;

                                    if (isset($product_obj->inCollection) && !$product_obj->inCollection) {
                                        continue;
                                    }
                                    
                                    $demo_url = '';$documentation_url = '';
                                    if (isset($product_obj->metafields->edges)) {
                                        foreach ($product_obj->metafields->edges as $metafield_edge) {
                                            $metafield = $metafield_edge->node;
                                            if ($metafield->key === 'custom.live_preview') {
                                                $demo_url = $metafield->value;
                                            } elseif ($metafield->key === 'custom.button_documentation') {
                                                $documentation_url = $metafield->value;
                                            }
                                        }
                                    }

                                    $product_url = isset($product->node->onlineStoreUrl) ? $product->node->onlineStoreUrl : '';
                                    $image_src = isset($product->node->images->edges[0]->node->src) ? $product->node->images->edges[0]->node->src : '';
                                    $product_price = isset($product->node->variants->edges[0]->node->price) ? $product->node->variants->edges[0]->node->price : ''; ?>

                                    <div class="wordclever-grid-item">
                                        <div class="wordclever-image-wrap">
                                            <div class="wordclever-image-box">
                                                <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($product_obj->title); ?>" loading="lazy">
                                            </div>
                                            <div class="wordclever-image-overlay">
                                                <?php if( $demo_url != '' ) { ?>
                                                    <a class="wordclever-demo-url wordclever-btn" href="<?php echo esc_url($demo_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html('Live Preview'); ?></a>
                                                <?php } else { ?>
                                                    <a class="wordclever-demo-url wordclever-btn" href="<?php echo esc_url( WORDCLEVER_MAIN_URL . '/collections/gutenberg-wordpress-themes' ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html('Live Preview'); ?></a>
                                                <?php } ?>
                                                <footer>
                                                    <h3><?php echo esc_html($product_obj->title); ?></h3>
                                                </footer>
                                                <div class="d-flex" style="justify-content: space-between;">
                                                    <div class="wordclever-price-box">Price:
                                                        <div class="wordclever-price"><?php echo esc_html('$' . $product_price); ?></div>
                                                    </div>
                                                    <a class="wordclever-buy-now wordclever-btn" href="<?php echo esc_attr($product_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html('Buy It Now'); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                        ?>
                    </div>
                    <div class="text-center mt-4">
                        <?php if (isset($get_filtered_products['pagination']->hasNextPage) && $get_filtered_products['pagination']->hasNextPage) { ?>
                            <a href="#" class="wordclever-load-more" data-pagination="<?php echo esc_attr(isset($get_filtered_products['pagination']->endCursor) ? $get_filtered_products['pagination']->endCursor : '') ?>">Load More</a>
                            <input type="hidden" name="wordclever-end-cursor" value="<?php echo esc_attr(isset($get_filtered_products['pagination']->endCursor) ? $get_filtered_products['pagination']->endCursor : '') ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

WordClever_MetaBox::init();

