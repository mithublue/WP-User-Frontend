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
