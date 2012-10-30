<?php

class prettyPrettyAdmin extends Plugin
{
	/**
	 * Adds pretty pretty stylesheet!.
	 *
	 */
	public function action_admin_header( $theme )
	{
		Stack::add('admin_stylesheet', array($this->get_url(true) . 'prettypretty.css', 'screen'), 'prettypretty-css', array( 'admin-css' ));
	}
}

?>
