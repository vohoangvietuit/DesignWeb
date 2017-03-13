<?php 

/*

	Template Name: Trang chu

*/

 ?>

<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package A_MyProject_-_WP

 */



get_header(); ?>



<?php 

	get_template_part('content','about');

	get_template_part('content', 'form');

	get_template_part('content','slide');

	get_template_part('content', 'news');

	get_template_part('content', 'contact');

 ?>


<?php

get_footer();

