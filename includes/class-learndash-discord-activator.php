<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Learndash_Discord
 * @subpackage Learndash_Discord/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Learndash_Discord
 * @subpackage Learndash_Discord/includes
 * @author     ExpressTech Softwares Solutions Pvt Ltd <contact@expresstechsoftwares.com>
 */
class Learndash_Discord_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		update_option( 'ets_learndash_discord_send_welcome_dm', true );
		update_option( 'ets_learndash_discord_welcome_message', 'Hi [LD_STUDENT_NAME] ([LD_STUDENT_EMAIL]), Welcome, Your courses [LD_COURSES],' );                
		update_option( 'ets_learndash_discord_send_course_complete_dm', true );
		update_option( 'ets_learndash_discord_course_complete_message', 'Hi [LD_STUDENT_NAME] ([LD_STUDENT_EMAIL]), You have completed the course  [LD_COURSE_NAME] at [LD_COURSE_COMPLETE_DATE]' );
		update_option( 'ets_learndash_discord_send_lesson_complete_dm', true );
		update_option( 'ets_learndash_discord_lesson_complete_message', 'Hi [LD_STUDENT_NAME] ([LD_STUDENT_EMAIL]), You have completed the lesson  [LD_LESSON_NAME] at [LD_COURSE_LESSON_DATE]' );                
		update_option( 'ets_learndash_discord_send_topic_complete_dm', true );
		update_option( 'ets_learndash_discord_topic_complete_message', 'Hi [LD_STUDENT_NAME] ([LD_STUDENT_EMAIL]), You have completed the topic  [LD_TOPIC_NAME] at [LD_COURSE_TOPIC_DATE]' );                 
		update_option( 'ets_learndash_discord_retry_failed_api', true );
		update_option( 'ets_learndash_discord_kick_upon_disconnect', false ); 
		update_option( 'ets_learndash_discord_log_messages', false ); 
		update_option( 'ets_learndash_discord_retry_api_count', 5 );
		update_option( 'ets_learndash_discord_job_queue_concurrency', 1 );
		update_option( 'ets_learndash_discord_job_queue_batch_size', 6 );
		update_option( 'ets_learndash_discord_log_api_response', false );
	}

}
