<?php
global $WCFM;

$is_allow_vendors = apply_filters( 'wcfm_is_allow_vendors', true );
if( !$is_allow_vendors ) {
	wcfm_restriction_message_show( "Artist Subscriptions" );
	return;
}

$admin_fee_mode = apply_filters( 'wcfm_is_admin_fee_mode', false );
?>
<p> Something Goes Here...</p>
		<?php
		do_action( 'after_wcfm_vendors' );
		?>
	</div>
</div>
