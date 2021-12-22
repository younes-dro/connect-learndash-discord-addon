<?php
$ets_learndash_discord_client_id     = sanitize_text_field( trim( get_option( 'ets_learndash_discord_client_id' ) ) );
$ets_learndash_discord_client_secret = sanitize_text_field( trim( get_option( 'ets_learndash_discord_client_secret' ) ) );
$ets_learndash_discord_bot_token     = sanitize_text_field( trim( get_option( 'ets_learndash_discord_bot_token' ) ) );
$ets_learndash_discord_redirect_url  = sanitize_text_field( trim( get_option( 'ets_learndash_discord_redirect_url' ) ) );
$ets_learndash_discord_redirect_page_id  = sanitize_text_field( trim( get_option( 'ets_learndash_discord_redirect_page_id' ) ) );
$ets_learndash_discord_server_id     = sanitize_text_field( trim( get_option( 'ets_learndash_discord_server_id' ) ) );
?>
<form method="post" action="<?php echo get_site_url() . '/wp-admin/admin-post.php'; ?>">
  <input type="hidden" name="action" value="learndash_discord_application_settings">
	<?php wp_nonce_field( 'save_learndash_discord_general_settings', 'ets_learndash_discord_save_settings' ); ?>
  <div class="ets-input-group">
	<label><?php echo __( 'Client ID', 'learndash-discord' ); ?> :</label>
	<input type="text" class="ets-input" name="ets_learndash_discord_client_id" value="<?php
	if ( isset( $ets_learndash_discord_client_id ) ) {
		echo esc_attr( $ets_learndash_discord_client_id ); }
	?>" required placeholder="Discord Client ID">
  </div>
	<div class="ets-input-group">
	  <label><?php echo __( 'Client Secret', 'learndash-discord' ); ?> :</label>
		<input type="text" class="ets-input" name="ets_learndash_discord_client_secret" value="<?php
		if ( isset( $ets_learndash_discord_client_secret ) ) {
			echo esc_attr( $ets_learndash_discord_client_secret ); }
    ?>" required placeholder="Discord Client Secret">
	</div>
	<div class="ets-input-group">
            <label><?php echo __( 'Redirect URL', 'learndash-discord' ); ?> :</label>
            <p><b><?php echo $ets_learndash_discord_redirect_url ?></b></p>
		<select class= "ets-input" id="ets_learndash_discord_redirect_url" name="ets_learndash_discord_redirect_url" style="max-width: 100%" required>
		<?php echo ets_learndash_discord_pages_list( $ets_learndash_discord_redirect_page_id ) ; ?>
		</select>
		<p class="description"><?php echo __( 'Registered discord app redirect url', 'learndash-discord' ); ?></p>
	</div>
	<div class="ets-input-group">
	  <label><?php echo __( 'Bot Token', 'learndash-discord' ); ?> :</label>
		<input type="text" class="ets-input" name="ets_learndash_discord_bot_token" value="<?php
		if ( isset( $ets_learndash_discord_bot_token ) ) {
			echo esc_attr( $ets_learndash_discord_bot_token ); }
		?>" required placeholder="Discord Bot Token">
	</div>
	<div class="ets-input-group">
	  <label><?php echo __( 'Server ID', 'learndash-discord' ); ?> :</label>
		<input type="text" class="ets-input" name="ets_learndash_discord_server_id"
		placeholder="Discord Server Id" value="<?php
		if ( isset( $ets_learndash_discord_server_id ) ) {
			echo esc_attr( $ets_learndash_discord_server_id ); }
		?>" required>
	</div>
	<?php if ( empty( $ets_learndash_discord_client_id ) || empty( $ets_learndash_discord_client_secret ) || empty( $ets_learndash_discord_bot_token ) || empty( $ets_learndash_discord_redirect_url ) || empty( $ets_learndash_discord_server_id ) ) { ?>
	  <p class="ets-danger-text description">
		<?php echo __( 'Please save your form', 'learndash-discord' ); ?>
	  </p>
	<?php } ?>
	<p>
	  <button type="submit" name="submit" value="ets_discord_submit" class="ets-submit ets-bg-green">
		<?php echo __( 'Save Settings', 'learndash-discord' ); ?>
	  </button>
	  <?php if ( get_option( 'ets_learndash_discord_client_id' ) ) : ?>
		<a href="?action=discord-connect-to-bot" class="ets-btn learndash-btn-connect-to-bot" id="learndash-connect-discord-bot"><?php echo __( 'Connect your Bot', 'learndash-discord' ); ?> <i class='fab fa-discord'></i></a>
	  <?php endif; ?>
	</p>
</form>
