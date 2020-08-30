<?php
/*
Plugin Name: Easy Image Sizes
Plugin URI:  https://github.com/ShiFuSteve/easy-image-sizes/
Description: Add new images sizes to WordPress the easy way
Version: 1.1.2
Author: Stephen B
License: GPLv2 or later
*/

require(__DIR__ . "/easy_image_sizes_core.php");
require(__DIR__ . "/easy_image_sizes_main.php");

new Easy_Image_Sizes();
