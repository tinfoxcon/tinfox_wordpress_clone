jQuery(document).ready(function($) {
 
    var isLoading = false;

    function productsAjax( endCursor, templateSearch, collection, actionValue ) {

        var progress = 0;
        var progressInterval = setInterval(function() {
            progress += 10;
            if (progress >= 100) {
                clearInterval(progressInterval);
            }
        }, 300);

        $.ajax({
            url: wordclever_pagination_object.ajaxurl,
            type: 'POST',
            data: {
                action: 'wordclever_get_filtered_products',
                cursor: endCursor,
                search: templateSearch,
                collection: collection,
                wordclever_pagination_nonce: wordclever_pagination_object.nonce
            },
            success: function (response) {

                clearInterval(progressInterval);
                // jQuery('.wordclever-loader').hide();
                // jQuery('.wordclever-loader-overlay').hide();

                if (response.content) {

                    jQuery('.wordclever-load-more').show();

                    isLoading = false;

                    if ( actionValue != 'load' ) {
                        jQuery('.wordclever-templates-grid.wordclever-main-grid').empty();
                    }
                    jQuery('.wordclever-templates-grid.wordclever-main-grid').append(response.content);

                    const hasNextPage = response?.pagination?.hasNextPage;
                    const endCursor = response?.pagination?.endCursor;

                    jQuery('[name="wordclever-end-cursor"]').val(endCursor);
                    if (!hasNextPage) {
                        jQuery('[name="wordclever-end-cursor"]').val('');
                        jQuery('.wordclever-load-more').hide();
                        isLoading = true
                    }
                }
            },
            error: function () {
                
                clearInterval(progressInterval);
                // jQuery('.wordclever-loader').hide();
                // jQuery('.wordclever-loader-overlay').hide();

                console.log('Error loading products');
            }
        });
    }

    function debounce(func, delay) {
        let timeoutId;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                func.apply(context, args);
            }, delay);
        };
    }

    jQuery('.wordclever-templates-collections-group li').on('click', function() {

        // jQuery('.wordclever-loader').show();
        // jQuery('.wordclever-loader-overlay').show();

        let category = '';
        if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');
        } else {
            jQuery('.wordclever-templates-collections-group li').removeClass('active');
            jQuery(this).addClass('active');
            
            category = jQuery(this).attr('data-value');
        }

        jQuery('.wordclever-templates-collections-group').removeClass('active');

        productsAjax( '', '', category, 'category' );
    });

    $('body').on("input", '[name="wordclever-templates-search"]', debounce(function (event) {

        const templateSearch = $('[name="wordclever-templates-search"]').val();

        // jQuery('.wordclever-loader').show();
        // jQuery('.wordclever-loader-overlay').show();
        
        productsAjax( '', templateSearch, '', 'search' );
        
    }, 1000));

    $('body').on("click", '.wordclever-load-more', function (event) {
        event.preventDefault();

        isLoading = true;
        const endCursor = jQuery('[name="wordclever-end-cursor"]').val();
        const templateSearch = jQuery('[name="wordclever-templates-search"]').val();

        let collection = '';
        if (jQuery('.wordclever-templates-collections-group li.active')) {            
            collection = jQuery('.wordclever-templates-collections-group li.active').attr('data-value');
        }

        productsAjax( endCursor, templateSearch, collection, 'load' );
    });

    $('body').on("click", '.wordclever-filter-category-select', function (event) {
        $('.wordclever-templates-collections-group').toggleClass('active');
    });
});