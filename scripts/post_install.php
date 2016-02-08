<?php
if (! defined('sugarEntry') || ! sugarEntry) die('Not A Valid Entry Point');
function post_install() {
  global $current_user;
  $_REQUEST['type'] = "mini";
  require_once("include/utils.php");
  require_once("modules/Administration/callJSRepair.php");
  require_once("modules/Administration/RepairJSFile.php");
}
