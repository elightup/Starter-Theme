<?php

class Fields
{

    function __construct()
    {
        add_filter('rwmb_meta_boxes', [ $this, 'register' ]);
    }
    function register( $meta_boxes )
    {
        // $meta_boxes[] = $this->banner(); //ví dụ gọi hàm banner

        return $meta_boxes;

    }

}