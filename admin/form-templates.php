<?php

class WPUF_Form_Templates{

    /**
     * All form elements are listed here
     * @var array
     */
    public static $form_elements = array(
        'post' => array(
            'title' => array(),
            'content' => array(),
            'excerpt' => array(),
            'category' => array(),
            'featured_image' => array()
        ),
    );

    /**
     * post form based settings here
     * @var array
     */
    public static $form_settings = array(
        'post' => array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_format' => 0,
            'default_cat' => -1,
            'guest_post' => false,
            'name_label' => 'Name',
            'email_label' => 'Email',
            'message_restrict' => 'This page is restricted. Please Log in / Register to view this page.',
            'redirect_to' => 'post',
            'message' => 'Post saved',
            'page_id' => 81,
            'url' => '',
            'comment_status' => 'open',
            'submit_text' => 'Submit',
            'draft_post' => 'true',
            'multistep_progressbar_type' => 'step_by_step',
            'ms_ac_txt_color' => '#ffffff',
            'ms_active_bgcolor' => '#00a0d2',
            'ms_bgcolor' => '#E4E4E4',
            'edit_post_status' => 'publish',
            'edit_redirect_to' => 'same',
            'update_message' => 'Post updated successfully',
            'edit_page_id' => 81,
            'edit_url' => '',
            'subscription' => '- Select -',
            'update_text' => 'Update',
            'notification' => Array
                (
                    'new' => 'on',
                    'new_to' => 'a@a.a',
                    'new_subject' => 'New post created',
                    'new_body' => 'Hi Admin,
A new post has been created in your site %sitename% (%siteurl%).

Here is the details:
Post Title: %post_title%
Content: %post_content%
Author: %author%
Post URL: %permalink%
Edit URL: %editlink%',
                    'edit' => 'off',
                    'edit_to' => 'a@a.a',
                    'edit_subject' => 'A post has been edited',
                    'edit_body' => 'Hi Admin,
The post \"%post_title%\" has been updated.

Here is the details:
Post Title: %post_title%
Content: %post_content%
Author: %author%
Post URL: %permalink%
Edit URL: %editlink%'
                ),
            'expiration_settings' => Array
            (
                'enable_post_expiration' => 'on',
                'expiration_time_value' => 1,
                    'expiration_time_type' => 'day',
                    'expired_post_status' => 'draft',
                    'post_expiration_message' => ''
                )

        )
    );

    /**
     * attribute settings for each element is here
     * @var array
     */
    public static $elements_attr = array(

        'title' => array(
            'input_type' => 'text',
            'template' => 'post_title',
            'required' => 'yes',
            'label' => 'Post Title',
            'name' => 'post_title',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'placeholder' => '',
            'default' => '',
            'size' => 2
        ),

        'content' => array(
            'input_type' => 'textarea',
            'template' => 'post_content',
            'required' => 'yes',
            'label' => 'Post Content',
            'name' => 'post_content',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'rows' => 5,
            'cols' => 25,
            'placeholder' => '',
            'default' => '',
            'rich' => 'no',
            'insert_image' => 'yes',
            'word_restriction' => ''
        ),

        'excerpt' => array(
            'input_type' => 'textarea',
            'template' => 'post_excerpt',
            'required' => 'yes',
            'label' => 'Post Excerpt',
            'name' => 'post_excerpt',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'rows' => 5,
            'cols' => 25,
            'placeholder' => '',
            'default' => '',
            'rich' => 'no'
        ),

        'tags' => array(
            'input_type' => 'text',
            'template' => 'post_tags',
            'required' => 'yes',
            'label' => 'Post Tags',
            'name' => 'tags',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'placeholder' => '',
            'default' => '',
            'size' => 40
        ),

        'category' => array(
            'input_type' => 'taxonomy',
            'template' => 'taxonomy',
            'required' => 'yes',
            'label' => 'Post Category',
            'name' => 'category',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'type' => 'select',
            'orderby' => 'name',
            'order' => 'ASC',
            'exclude_type' => 'exclude',
            'exclude' => '',
            'woo_attr' => 'no',
            'woo_attr_vis' => 'no'
        ),

        'fatured_image' => array(
            'input_type' => 'image_upload',
            'template' => 'featured_image',
            'required' => 'yes',
            'label' => 'Thumbnail',
            'name' => 'featured_image',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'count' => 1,
            'max_size' => 1024
        ),

        'text_field' => array(
            'input_type' => 'text',
            'template' => 'text_field',
            'required' => 'yes',
            'label' => 'Text Meta',
            'name' => 'text_meta',
            'is_meta' => 'yes',
            'help' => '',
            'css' => '',
            'placeholder' => '',
            'default' => '',
            'size' => 40
        ),

        'product_type' => array(
            'input_type' => 'taxonomy',
            'template' => 'taxonomy',
            'required' => 'yes',
            'label' => 'Type of Product',
            'name' => 'product_type',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'type' => 'select',
            'orderby' => 'name',
            'order' => 'ASC',
            'exclude_type' => 'exclude',
            'exclude' => '',
            'woo_attr' => 'no',
            'woo_attr_vis' => 'no'
        ),

        'product_category' => array(
            'input_type' => 'taxonomy',
            'template' => 'taxonomy',
            'required' => 'yes',
            'label' => 'Product Category',
            'name' => 'product_cat',
            'is_meta' => 'no',
            'help' => '',
            'css' => '',
            'type' => 'select',
            'orderby' => 'name',
            'order' => 'ASC',
            'exclude_type' => 'exclude',
            'exclude' => '',
            'woo_attr' => 'no',
            'woo_attr_vis' => 'no'
        ),

        'textarea' => array(
            'input_type' => 'textarea',
            'template' => 'textarea_field',
            'required' => 'yes',
            'label' => 'Text Data',
            'name' => 'text_data',
            'is_meta' => '',
            'help' => '',
            'css' => '',
            'rows' => 5,
            'cols' => 25,
            'placeholder' => '',
            'default' => '',
            'rich' => 'no',
            'word_restriction' => ''
        )
    );


    /**
     *
     * fill the form with data
     *
     * @param $form_type type of form
     * @return array post data
     */
    public static function fill_data( $form_type ){
        return self::set_form_data( $form_type );
    }


    /**
     * @param $form_type type of form
     * @return array post data
     */
    public static function set_form_data( $form_type ) {

        $postdata = array();

        if ( isset( self::$form_elements[$form_type] ) ) {

            foreach ( self::$form_elements[$form_type] as $item => $val_array ) {

                if( !isset( self::$elements_attr[$item] ) ) continue;
                $postdata['wpuf_input'][] = self::$elements_attr[$item];

                $postdata['wpuf_cond'][] = array(
                    'condition_status' => 'no',
                    'cond_field' => array(''),
                    'cond_operator' => array(''),
                    'cond_option' => array('- select -'),
                    'cond_logic' => 'all'
                );

                if( isset( self::$form_settings[$form_type] ) ) {
                    $postdata['wpuf_settings'] = self::$form_settings[$form_type];
                }
            }
        }

        return $postdata;
    }


    public static function init() {
        add_action( 'init', function() {
            self::$elements_attr = apply_filters( 'wpuf_add_form_elements', self::$elements_attr );
            self::$form_settings = apply_filters( 'wpuf_add_form_settings', self::$form_settings );
        });
    }

}


WPUF_Form_Templates::init();
