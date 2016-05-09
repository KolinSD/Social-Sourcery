<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Social Sourcery Settings', 'sampletheme' ), __( 'Social Sourcery Settings', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}




/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'sampletheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'sample_theme_options' ); ?>

			<table class="form-table">



				<?php
				/**
				 * A sample text input option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'E-mail', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[emailtext]" class="regular-text" type="text" name="sample_theme_options[emailtext]" value="<?php esc_attr_e( $options['emailtext'] ); ?>" />
						
					</td>
				</tr>
                <tr valign="top"><th scope="row"><?php _e( 'Phone', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[phonetext]" class="regular-text" type="text" name="sample_theme_options[phonetext]" value="<?php esc_attr_e( $options['phonetext'] ); ?>" />
						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Address', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[addresstext]" class="regular-text" type="text" name="sample_theme_options[addresstext]" value="<?php esc_attr_e( $options['addresstext'] ); ?>" />
						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Skype', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[skypetext]" class="regular-text" type="text" name="sample_theme_options[skypetext]" value="<?php esc_attr_e( $options['skypetext'] ); ?>" />
						
					</td>
				</tr>
			
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/