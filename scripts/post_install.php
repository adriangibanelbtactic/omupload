<?php
if (! defined('sugarEntry') || ! sugarEntry) die('Not A Valid Entry Point');
function post_install() {
  $_REQUEST['js_admin_repair']='mini';
  require_once("modules/Administration/callJSRepair.php");
}
