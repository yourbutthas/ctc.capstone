<?php
/***
*   This template is for displaying all pages and post types.
*   This is the template that displays all pages by default. Please note that is WordPress construct of  pages and other  
    'pages' on your wp site will use different.
*
* @package CTC Capstone Theme
* @since 1.0.0
*/

//display header
get_header();
?>

<?php if(have_posts()) : ?>
    <!-- start the loop -->
    <?php  while(have_posts()) : the_post(); ?>
        <?php
            //do things -- display content : the function below will pull the content from the template partial.
            get_template_part( 'template-parts/content', 'page' );
        ?>
        <?php  endwhile; ?>
        <!-- end while loop -->

<?php endif; ?> 
 
<!-- //display footer -->
<?php get_footer(); ?>

<!-- Note: You may come across this function/template tag: get_post_format(). This template tag/function automatically picks up the type of post format defined for the post and uses the corresponding template file. -->