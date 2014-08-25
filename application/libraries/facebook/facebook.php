<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// pre-session init, inherit from the 3.x SDK
if ( session_status() == PHP_SESSION_NONE ) {
    session_start();
}


// add base FB libs ~ loaded by spl_autoload (custom build)
use Facebook\GraphSessionInfo;
use Facebook\FacebookSession;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookResponse;
use Facebook\FacebookAuthorizationException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRequest;
use Facebook\FacebookSDKException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphObject;
use Facebook\GraphUser;
//

/*
 * Facebook
 * Facebook library loader for Official Facebook PHP-SDK-4.x
 * @since 2014
 */
class Facebook {
    var $ci;
    var $helper;
    var $session;

	/**
	 * __construct
	 * FB app init/config, FB.session init
	 */
	public function __construct() {
        $this->ci =& get_instance();
     
        
        FacebookSession::setDefaultApplication(
            $this->ci->config->item('api_id', 'facebook'),
            $this->ci->config->item('app_secret', 'facebook')
        );
        
        $this->session = new FacebookSession($this->ci->config->item('access_token', 'facebook'));
        
    }
    //

	/**
	 * test_request
	 *
	 * A test request to demostrate the FB App simple GET method
	 * @param none
	 * @access public
	 * @version 0.1
	 * @return String Array|Exception|FacebookRequestException
	 */
	public function test_request() {
        try {
            $me = (new FacebookRequest($this->session, 'GET', '/me'))->execute()->getGraphObject(GraphUser::className());
            return $me->getName();
        } catch (FacebookRequestException $e) {
            // The Graph API returned an error
	        return $e;
        } catch (\Exception $e) {
            // Some other error occurred
	        return $e;
        }
	    // catch end
    }
	// fn end
    
    
}
// class end