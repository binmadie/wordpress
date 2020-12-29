// Xóa luôn hình đính kèm khi xóa bài viết trong wordpress
add_action( 'before_delete_post', 'delete_all_attached_media' );
function delete_all_attached_media( $post_id ) {
	if( get_post_type($post_id) == "post" ) {
	$attachments = get_attached_media( '', $post_id );
		foreach ($attachments as $attachment) {
			wp_delete_attachment( $attachment->ID, 'true' );
		}
	}
}
// Khung soạn thảo cơ bản trong wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Custom Fields For Builder Blog Layout
function post_title_shortcode(){
    return get_the_title();
}
add_shortcode('post_title','post_title_shortcode');

function post_content_shortcode(){
    return get_the_content();
}
add_shortcode('post_content','post_content_shortcode');
