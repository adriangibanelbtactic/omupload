<?php

global $current_user;
$this->defaultConfig['file_browser_callback'] = 'openmanager';
$this->defaultConfig['open_manager_upload_path'] = "../newsletter_images/{$current_user->id}/";
$this->defaultConfig['plugins'] .= ",openmanager,inlinepopups";
$this->pluginsConfig['email_compose_light'] .= ",openmanager,inlinepopups,advhr,table,preview,searchreplace";
$this->pluginsConfig['email_compose'] .= ",openmanager,inlinepopups";
$openmanagerPath = "newsletter_images/{$current_user->id}/";
if (!is_dir($openmanagerPath)) {
    mkdir($openmanagerPath, 0755);
}
