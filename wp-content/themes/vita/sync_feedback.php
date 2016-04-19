<?php
if (!wp_next_scheduled('sync_feedback')) {
	wp_schedule_event(time(), 'twicedaily', 'sync_feedback');
}
add_action('sync_feedback', 'get_cron_feedback');

function get_cron_feedback(){
	$xml_filename='http://www.feefo.com/feefo/xmlfeed.jsp?&logon=www.vita.co.uk&mode=both&limit=9999';
	$xmlfiledata = file_get_contents($xml_filename);
	$xmldata = new SimpleXMLElement($xmlfiledata);

	$args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
	$feedback_posts = get_posts( $args );

	foreach($feedback_posts as $feedback) {
		$feedback_id[] = get_post_meta($feedback->ID, 'feedback_id', true);
	}

	$count = $xmldata->SUMMARY->COUNT - 1;
	while( 0 <= $count ) {
		if ( ! in_array( (int) $xmldata->FEEDBACK[ $count ]->FEEDBACKID, $feedback_id ) ) {

			if ( isset( $xmldata->FEEDBACK[ $count ]->PUBLICCUSTOMER->NAME ) ) {
				$title = $xmldata->FEEDBACK[ $count ]->PUBLICCUSTOMER->NAME;
			} else {
				$title = $xmldata->FEEDBACK[ $count ]->REVIEWTITLE;
			}
			$my_post = array(
				'post_title'   => (string) $title,
				'post_content' => (string) $xmldata->FEEDBACK[ $count ]->CUSTOMERCOMMENT,
				'post_status'  => 'publish',
				'post_author'  => 1,
				'post_type'    => 'testimonials',
				'feedback_id'  => (int) $xmldata->FEEDBACK[ $count ]->FEEDBACKID
			);
			$idek    = wp_insert_post( $my_post );

			if ( $idek ) {
				update_post_meta( $idek, 'feedback_id', (int) $xmldata->FEEDBACK[ $count ]->FEEDBACKID );
			}
			
		}
		$count --;
	}

}



