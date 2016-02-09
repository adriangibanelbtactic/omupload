# omupload
Open-Manager based plugin for SuiteCRM / SugarCRM 6.X

## What is omupload?
omupload is a plugin designed for SuiteCRM that permits to upload images on:
* Email compose
* Email templates
* PDF templates
* Email quick reply

The plugin stores the images that users upload into `newsletter_images` directory. Each user have a subdirectory using his account ID as folder name and his images are stored here.

## Install the last release
You can install the plugin using the last release available on https://github.com/btactic/omupload/releases  
Just download the last release and install it via Module Loader.

## Install from source code
If you prefer, you can generate an installable version of plugin from source code to get an updated version. If you choose this method you must have git installed. If git is not installed on your machine you can install with those commands:
```
# apt-get update
# apt-get -y install git
```
Now you can generate an installable version of plugin with those commands:
```
$ git clone https://github.com/btactic/omupload.git
$ ./release.sh
```
Finally go to your SuiteCRM installation and install omupload.zip via Module Loader.
