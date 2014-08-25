CodeIgniter Facebook PHP SDK 4 Starter Kit

This little app will demostrate how to put together the CodeIgniter and the newest (currently the 4.x) Facebook PHP SDK.


Dependency:
  - PHP 5.4+
  - Facebook PHP SDK 4+
  - CodeIgniter 2+
  - Spl_autoload module for apache / ngix


Todo:
  - Config addon:
    -- add to the <root>/application/config/config.php >> FB config items
    -- add to the <root>/application/config/autoload.php >> fb_autoload to the helper array
  - Copy the Facebook PHP SDK 4+ sources <fb_zip>/facebook/src/Facebook folder into the <root>/application/libraries/facebook
  - Copy the facebook.php file into the <root>/application/libraries/facebook folder
  - Copy the fb_autoload_helper.php file into the <root>/application/helpers folder


Main parts:

<ROOT>
  |
  |- application
        |-- config
            |--- config.php
            |--- autoload.php
        |-- libraries
            |--- facebook
                    |---- Facebook (sdk folder)
                    |---- facebook.php
        |-- controller
            |--- myfb.php
        |-- helpers
            |--- fb_autoload_helper.php


-----------------------

Config:
 - $config['base_url']: the URL where your app uploaded (not FB canvas app url!), example: https://domain.tld/appfolder
 - $config['facebook']['app_id']: the APP ID
 - $config['facebook']['app_secret']: the app secret token hash
 - $config['facebook']['redirect_url']: the app login url for re-new the fb.session / fb login
 - $config['facebook']['permissions']: future permission array
 - $config['facebook']['access_token']: the app access token for fb.session / fb.login







