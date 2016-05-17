<?php

class WPUF_Form_Templates{


    public static $form_elements = array(
        'post_form' => array(
            'text' => array(),
            'content' => array(),
            'excerpt' => array(),
            'category' => array(),
            'featured_image' => array()
        ),
        'testimonial' => array(
            'text' => array(
                'label' => 'Testimonial',
                'name' => 'testimonial'
            ),
            'content' => array(),
            'text_meta' => array(
                'label' => ''
            )
        )
    );

    public static $form_settings = array(
        'post_form' => array(
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
            'edit_url' =>,
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

    public static $elements_attr;

    public static function fill_data( $post_id,  $form_type ){

        switch( $form_type ) {

            case 'post_form' :
                self::set_form_data( $form_type );
                break;
        }
    }

    public static function set_form_data( $form_type ) {

        self::$elements_attr = include_once ( dirname(__FILE__).'/form-elements-panel.php');

        $postdata = array();

        if ( isset( self::$form_elements[$form_type] ) ) {

            foreach ( self::$form_elements[$form_type] as $item ) {

                $postdata['wpuf_input'][] = self::$elements_attr[$item];

                $postdata['wpuf_cond'][] = array(
                    'condition_status' => 'no',
                    'cond_field' => array(''),
                    'cond_operator' => array(''),
                    'cond_option' => array('- select -'),
                    'cond_logic' => 'all'
                );
            }
        }
    }


    public static function init() {

    }

}


WPUF_Form_Templates::init();
