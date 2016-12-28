<?php
        
	session_start();
        require_once __DIR__ . '/src/Facebook/autoload.php';

	$fb = new Facebook\Facebook([
		'app_id' => '337172026645188',
		'app_secret' => '8d32afc4cafb4a5bad8566e35bce5aa3',
		'default_graph_version' => 'v2.4',
	]);

	$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','user_likes']; // optional
	

	// getting basic info about user
try {
                $token='EAAEypZCrgWsQBAMAuZBDuEZA1ozGz03OOJZC0qduZCFjInAlZAJ1N7Wd65TBa36T4uyBx8Dex8ew4iZA8EKicuTW5eglkIbkNi91WRVfdQ1jQqazG3zCgswt59QPCVfrwRE3C1nATuZA1qf7bKZCuSIcdf6v8rq2E3eMZD';
		$profile_request = $fb->get('/me/likes?fields=id',$token);
		$profile = $profile_request->getGraphEdge()->asArray();
                $id_one=$profile[0][id];
                $id_two=$profile[1][id];
                $id_three=$profile[2][id];

                $first_page= ($fb->get('/'. $id_one . '/picture?type=large',$token));
                $second_page= ($fb->get('/'. $id_two . '/picture?type=large',$token));
                $third_page= ($fb->get('/'. $id_three . '/picture?type=large',$token));

                $pic1=$first_page->getHeaders()[Location];
                $pic2=$second_page->getHeaders()[Location];
                $pic3=$third_page->getHeaders()[Location];
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	
	// printing $profile array on the screen which holds the basic info about user
	

  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']

	// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www 
	$loginUrl = $helper->getLoginUrl('http://ogonwodoh.com/facebookapi/index.php', $permissions);
	
?>