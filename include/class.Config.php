<?php

class Config {
	var $debug;
	var $owner_username;
	var $owner_password;
	var $owner_user_id;
	var $site_root_path;
		
	function Config() {
		global $TWITALYTIC_CFG;
		$this->debug=$TWITALYTIC_CFG['debug'];
		$this->owner_username=$TWITALYTIC_CFG['owner_username'];
		$this->owner_password=$TWITALYTIC_CFG['owner_password'];
		$this->owner_user_id=$TWITALYTIC_CFG['owner_user_id'];
		$this->site_root_path=$TWITALYTIC_CFG['site_root_path'];
		$this->webapp_home = "http://".$_SERVER["SERVER_NAME"].$this->site_root_path;

		//putenv($TWITALYTIC_CFG['time_zone']);

		if ($this->debug) {
			ini_set("display_errors", 1);
			ini_set("error_reporting", E_ALL);
		}

	}

}

?>