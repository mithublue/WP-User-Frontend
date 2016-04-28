<?php

return apply_filters( 'wpuf_sample_form_elements', array(

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


) );