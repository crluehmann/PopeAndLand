<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying Comments.
 */
?>
<?php if ( post_password_required() ) : ?>
		<p class="nopassword">This post is password protected. Enter the password to view any comments.</p>
	<?php
		return;
	endif;
?>
<!-- You can start editing here. -->

<div class="comments-box">

	<?php if ( have_comments() ) : ?>
	
	<h3><?php comments_number('No Responses', '1 Respond', '% Responses' );?> for <?php the_title(); ?></h3>
	<div class="clear"></div>
	<ol class="commentlist">
		<?php wp_list_comments('avatar_size=48'); ?>
	</ol>
	
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div> 

<?php else : ?>

<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->

<?php else : ?>

<!-- If comments are closed. -->
<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<?php endif; ?>

<div id="respond">

<?php
$fields =  array(
		  'author' => '<p class="comment-form-author">' . '<label for="author">' . ( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="author" class="txt" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $req . ' /></p>',
		  'email'  => '<p class="comment-form-email"><label for="email">' . ( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="email" class="txt" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $req . ' /></p>',
		  'url'    => '<p class="comment-form-url"><label for="url">' . ( 'Website' ) . '</label>' .
		  '<input id="url" class="txt" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
			);
	
$args = array(
  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
	
	comment_form($args); 

?>

</div> <!--end #respond-->

</div> <!--end #comment-box-->
