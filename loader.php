<?php 
/*
Plugin Name: EcomNuts Customizer
Plugin URI: http://ecomnuts.com/
Description: This plugin allows you to modify the theme and plugin as per your requirement.
Author: Madhvendra singh
Version: 1.0
Author URI: https://www.linkedin.com/in/madhvendras84/
*/


add_action('wp_head', function(){
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:600|Playfair+Display:900|Quattrocento+Sans:regular|Karla:700" rel="stylesheet" type="text/css"/>
<style>
@font-face {
font-family: 'Modena';
src: url('http://ecomnuts.com/bethany/wp-content/uploads/2020/05/modenascript-regular-webfont.woff') format("truetype");
}
@font-face{
    font-family: 'Audrey';
    src:url('http://ecomnuts.com/bethany/wp-content/uploads/2020/05/audrey-normal-webfont.woff');
    }
@font-face{
    font-family: 'Margo';
    src:url('http://ecomnuts.com/bethany/wp-content/uploads/2020/05/margoserif-regular-webfont.woff');
    }

#modena-text h2.elementor-heading-title {
    font-family: 'modena' !important;
}
</style>
<?php
}, 999);
