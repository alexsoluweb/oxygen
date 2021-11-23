<?php

/* 
* Description: Get the desired size featured image URL
* $id: the attachment image id (not the post id), default: current loop post id
* $size: the wanted dimension (thumbnail, medium,  medium_large, large, full), default: medium_large
* Example of use to show only thumbnail: asw_get_desired_size_feautured_image_url(null, "thumbnail");
* Return: Desired featured image size URL, or placeholder image from https://via.placeholder.com API
*/
function asw_get_desired_size_feautured_image_url($id=null, $size="medium_large"){
    $id = (isset($id))? get_the_ID(): $id;
    $result =  esc_url(wp_get_attachment_image_src( get_post_thumbnail_id($id), $size)[0]);
    return ($result != false)? $result: "https://via.placeholder.com/500?text=Your+Featured+Image+Here";
}
