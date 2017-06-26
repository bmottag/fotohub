<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'pruebas';
$config['instagram_client_id']		= '14012a846b8641358122089dd4f6a3e6';
$config['instagram_client_secret']	= '3db7483c68bf417aa31467def264e96e';
$config['instagram_callback_url']	= 'http://thibot.com/fotohub/authorize/get_code/';//e.g. http://yourwebsite.com/authorize/get_code/
$config['instagram_website']		= 'http://thibot.com/fotohub/';//e.g. http://yourwebsite.com/
$config['instagram_description']	= '';
	
/**
 * Instagram provides the following scope permissions which can be combined as likes+comments
 * 
 * basic - to read any and all data related to a user (e.g. following/followed-by lists, photos, etc.) (granted by default)
 * comments - to create or delete comments on a user’s behalf
 * relationships - to follow and unfollow users on a user’s behalf
 * likes - to like and unlike items on a user’s behalf
 * 
 */
$config['instagram_scope'] = 'basic';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 

$config['instagram_ssl_verify']		= FALSE;
