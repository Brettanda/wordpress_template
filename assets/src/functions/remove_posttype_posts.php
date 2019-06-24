<?php
// if ( ! function_exists( 'unregister_post_type' ) ) {
// 	function unregister_post_type( $post_type ) {
// 		global $wp_post_types;
// 		if ( isset( $wp_post_types[ $post_type ] ) ) {
// 				unset( $wp_post_types[ $post_type ] );
// 				return true;
// 		}
// 		return false;
// 	}
// }

function remove_post_type() {
	// unregister_post_type("post");
	remove_post_type_support('post', 'title');
	remove_post_type_support('post', 'editor');
	remove_post_type_support('post', 'author');
	remove_post_type_support('post', 'thumbnail');
	remove_post_type_support('post', 'excerpt');
	remove_post_type_support('post', 'trackbacks');
	remove_post_type_support('post', 'custom-fields');
	remove_post_type_support('post', 'comments');
	remove_post_type_support('post', 'revisions');
	remove_post_type_support('post', 'page-attributes');
	remove_post_type_support('post', 'post-formats');
}
add_action("init", "remove_post_type", 0);