<?php

class Template_function
{
    static function rv_get_image_path( $name )
    {
        ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/<?php echo esc_attr($name) ?>" alt="">
        <?php
    }
    static function rv_icon( $name )
    {
        $icon = file_get_contents(get_template_directory() . "/images/$name.svg");
        echo $icon;
    }
    static function rv_get_image_id( $ID )
    {
        ?>
        <div class="entry-thumbnail">
            <?php echo  wp_get_attachment_image($ID, 'full', false) ?>
        </div>
        <?php
    }

}