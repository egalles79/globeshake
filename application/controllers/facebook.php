<?php

$provider = new League\OAuth2\Client\Provider\Facebook(array(
    'clientId'  =>  'XXXXXXXX',
    'clientSecret'  =>  'XXXXXXXX',
    'redirectUri'   =>  'http://your-registered-redirect-uri/'
));

if ( ! isset($_GET['code'])) {

    // If we don't have an authorization code then get one
    $provider->authorize();

} else {

    try {

        // Try to get an access token (using the authorization code grant)
        $t = $provider->getAccessToken('authorization_code', array('code' => $_GET['code']));

        // NOTE: If you are using Eventbrite you will need to add the grant_type parameter (see below)
        // $t = $provider->getAccessToken('authorization_code', array('code' => $_GET['code'], 'grant_type' => 'authorization_code'));

        try {

            // We got an access token, let's now get the user's details
            $userDetails = $provider->getUserDetails($t);

            foreach ($userDetails as $attribute => $value) {
                var_dump($attribute, $value) . PHP_EOL . PHP_EOL;
            }

        } catch (Exception $e) {

            // Failed to get user details

        }

    } catch (Exception $e) {

        // Failed to get access token

    }
}