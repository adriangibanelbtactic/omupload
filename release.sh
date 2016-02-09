#!/bin/bash

rm -rf Open-Manager openmanager
git clone https://github.com/btactic/Open-Manager.git
mv Open-Manager/openmanager .
rm -rf Open-Manager
zip -r omupload.zip custom include jssource manifest.php modules newsletter_images openmanager scripts
rm -rf openmanager

echo "INFO: An installable version of plugin is available on: omupload.zip"
echo "INFO: Now you can install the plugin on a SuiteCRM installation via the Module Loader"

exit 0
