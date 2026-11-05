# Mobile app setup | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/mobile

---

On this page

To ensure proper functionality of the mobile app, please use version 3.42 or higher.

## Mobile Apps[​](#mobile-apps "Direct link to Mobile Apps")

[![Apple store](https://livehelperchat.com/design/defaulttheme/images/apps/apple.svg)](https://apps.apple.com/us/app/id1530399116)

[![Google Play](https://livehelperchat.com/design/defaulttheme/images/apps/google-play.png)](https://play.google.com/store/apps/details?id=com.livehelperchat.chat)

The most recent build can be found here.

[![Codemagic build status](https://api.codemagic.io/apps/5f50c50be2db272d7690ae45/5f50c50be2db272d7690ae44/status_badge.svg)](https://codemagic.io/apps/5f50c50be2db272d7690ae45/5f50c50be2db272d7690ae44/latest_build)

## Maintaining Online Status[​](#maintaining-online-status "Direct link to Maintaining Online Status")

As background synchronization processes are halted once the app is closed, Live Helper Chat cannot determine your online status. To maintain your online status, consider the following:

- Set up department online hours.
- Change your online status to "Always online" instead of "Based on activity."
- Remember to set yourself to offline once your work shift is over.

## Permissions[​](#permissions "Direct link to Permissions")

For the mobile app to function correctly, the operator must have permission for:

> 'lhrestapi','use\_direct\_logins'

## Voice Messages from the Mobile Application[​](#voice-messages-from-the-mobile-application "Direct link to Voice Messages from the Mobile Application")

If you encounter an error while sending a voice message, you need to allow the upload of `m4a`, `ogg`, and `wav` files. This can be enabled in:

> System configuration > Live help configuration > Files configuration

In the `Allowed files types for operators` setting, add `|ogg|m4a|wav` at the end.

## Notifications[​](#notifications "Direct link to Notifications")

To enable mobile app notifications, enable mobile notifications in:

> Configuration -> System -> Mobile (Settings)

You do not need to change anything else there.

## Notification Categories[​](#notification-categories "Direct link to Notification Categories")

Mobile version 1.7 and LHC version 3.90 and later support mobile notification categories. These categories will appear after you receive your first notification in the mobile app. Afterward, you can customize notification settings for each category.

### Ongoing Trigger Alerts[​](#ongoing-trigger-alerts "Direct link to Ongoing Trigger Alerts")

From version 3.93 onwards, you can also receive notifications in your mobile app when a subject is added to a chat.

To receive notifications when a subject is added to a chat:

- Ensure you are online.
- Choose at least one subject in the ongoing trigger alerts settings.
- Note that if you add the subject yourself, a notification will not be sent.
- You must have permission to write to the relevant department.

### Testing Notifications[​](#testing-notifications "Direct link to Testing Notifications")

The easiest way to test notifications is to log in to the Live Helper Chat back office and go to `System configuration -> Mobile (Sessions)` and edit a session record. In the edit window, click `Send test notification`.

If you are not receiving notifications, check the following:

- Verify that you have enabled notifications in `Configuration -> System -> Mobile (Settings)`.

Often, iPhones may not receive notifications after app installation. If this occurs, try the following:

#### A Option[​](#a-option "Direct link to A Option")

- After opening app for the very first time and granting notifications permissions kill the app
- Reopen the app. Add the server. Before 1.27v on initial login device token was not passed. It's fixed in 1.27v
- Delete the related session record in `Configuration -> System -> Mobile (Sessions)`.
- Try to remove and add server again just.

#### B Option[​](#b-option "Direct link to B Option")

- Uninstall the app.
- Delete the related session record in `Configuration -> System -> Mobile (Sessions)`.
- Reinstall the app.
- Notifications should now function correctly.

### Live Notification Testing[​](#live-notification-testing "Direct link to Live Notification Testing")

If you are not receiving notifications when a chat starts, but you do receive the test notification, check these points:

Floating notifications must be enabled in the notification settings of both Android and iOS. On Android, these can be enabled per notification category.

tip

- Test notifications should only be visible on a locked phone screen.
- iOS
  - Test notifications will be visible on the locked screen.
  - They are not floating notifications and will not be seen on an unlocked phone, only on the locked phone screen.
  - Test notifications do not affect whether the app is running or not.
  - The unread count on iOS will not appear for test notifications.
- Android
  - A red number appears on the unlocked phone app icon.
  - They are not floating notifications and will not be seen on an unlocked phone, only on the locked phone screen.
  - Test notifications do not affect whether the app is running or not.

tip

- Scenario with live notifications:
- App is either running or not, and the phone is locked:
  - iOS
    - Notifications are seen on the locked phone screen.
  - Android
    - Notifications are seen on the locked phone screen.
- The phone is unlocked, and the app is either running in the background or the app window is not active:
  - iOS
    - Notifications are seen on the locked phone screen.
  - Android
    - Notifications are seen on the locked phone screen.
- The phone app is opened:
  - A floating notification is seen at the top.

- Ensure you have the correct operator permissions.
- Verify that you are online as an operator.
- Confirm that you have enabled notifications in `Configuration -> System -> Mobile (Settings)`.
- Ensure you have permission to access the department where the chat started.
- The app uses multiple notification channels, each with potentially different settings. Ensure the app's notification settings are correct.
- If a session's status is "thumbs down," you can delete the session, re-login from the app, and test notifications again.

tip

Currently, clicking a notification does not open the chat window; it only opens the app. This will be addressed in future releases.

## How to Log In[​](#how-to-log-in "Direct link to How to Log In")

To log in to the demo of Live Helper Chat, use the following details:

- URL: <https://demo.livehelperchat.com>
- Login: admin
- Password: demo
- Uncheck "Append index.php to address"

## I'm seeing you are not a chat owner and I can't send a message[​](#im-seeing-you-are-not-a-chat-owner-and-i-cant-send-a-message "Direct link to I'm seeing you are not a chat owner and I can't send a message")

1. Make sure your server config includes `.htaccess` file from below. `Troubleshooting Login Issues`
2. Try to login with `username` and not an `e-mail`.
3. Try remove and add server again after first change.

## Troubleshooting Login Issues[​](#troubleshooting-login-issues "Direct link to Troubleshooting Login Issues")

- Make sure in `Settings > Mobile > Settings` you have enabled `Enable mobile application and mobile notifications`
- Make sure in main `settings.ini.php` file `'disable_rest_api_by_user' => false` is false.
- Ensure that you have entered the domain address correctly. Pay attention to whether your URL requires `www` or not, as `https://www.example.com` and `https://example.com` are treated as different URLs.
- If you still cannot log in, apply the `.htaccess` file provided below, as the `Authorization` headers are sometimes not parsed correctly by the Apache server.
- Make sure your SSL configuration is valid by using <https://www.sslshopper.com/ssl-checker.html>

Apache configuration file for running in a root directory (e.g., `https://example.com/index.php/site_admin/user/login` or `https://example.com/site_admin/user/login`):

```
AddType application/wasm .wasm  
  
<Files ~ "\.(gif|jpe?g?|png|bmp|swf|css|js|svg|otf|eot|ttf|woff|woff2|map|swf|mp3|ogg|wasm|wav|pdf|ico|txt)$">  
  Header always Set Access-Control-Allow-Origin "*"  
  Header always Set Access-Control-Allow-Methods: "GET, POST, OPTIONS, PUT, DELETE"  
  Header always Set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, API-Key, Authorization"  
</Files>  
  
RewriteEngine On  
  
# If you encounter authentication issues with the Rest API, try uncommenting the following lines:  
# https://stackoverflow.com/questions/26475885/authorization-header-missing-in-php-post-request  
  
RewriteCond %{HTTP:Authorization} ^(.*)  
RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]  
  
# Adds support for URLs without index.php  
RewriteRule ^/var/[^/]+/cache/(stylesheets|images|javascripts?)/.* - [L]  
RewriteRule ^upgrade.php - [L]  
RewriteRule !\.(gif|jpe?g|png|bmp|css|js|xml|html|json|ico|mp3|wasm|ogg|wav|ogv|map|swf|flv|otf|woff2|woff|eot|ttf)|var(.+)storage.pdf(.+)\.pdf$ index.php  
  
DirectoryIndex index.php
```

Apache configuration to try if you are running in a subdirectory (e.g., `https://example.com/lhc_web/index.php/site_admin/user/login`):

```
AddType application/wasm .wasm  
  
<Files ~ "\.(gif|jpe?g?|png|bmp|swf|css|js|svg|otf|eot|ttf|woff|woff2|swf|mp3|ogg|wasm|wav|pdf|ico|txt)$">  
  Header always Set Access-Control-Allow-Origin "*"  
  Header always Set Access-Control-Allow-Methods: "GET, POST, OPTIONS, PUT, DELETE"  
  Header always Set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, API-Key, Authorization"  
</Files>  
  
RewriteEngine On  
  
# If you encounter authentication issues with the Rest API, try uncommenting the following lines:  
# https://stackoverflow.com/questions/26475885/authorization-header-missing-in-php-post-request  
  
RewriteCond %{HTTP:Authorization} ^(.*)  
RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]
```

## Entering Subfolder/Subdomain Details[​](#entering-subfoldersubdomain-details "Direct link to Entering Subfolder/Subdomain Details")

- For a subdomain, the host would be `https://<subdomain>.example.org`.
- For a subfolder, the host would be `https://example.org/support`.

## Compiling the App[​](#compiling-the-app "Direct link to Compiling the App")

Refer to the Flutter documentation for compilation instructions. Here are a few quick tips:

You might need to adjust those files location to newer build locations

- Comment out these lines: <https://github.com/LiveHelperChat/lhc_messenger/blob/1.1v/android/app/build.gradle#L18-L20>
- Comment out these lines: <https://github.com/LiveHelperChat/lhc_messenger/blob/1.1v/android/app/build.gradle#L39-L46>
- Comment out these lines: <https://github.com/LiveHelperChat/lhc_messenger/blob/1.1v/android/app/build.gradle#L53>
- Comment out these lines: <https://github.com/LiveHelperChat/lhc_messenger/blob/1.1v/android/app/build.gradle#L72>

<https://github.com/LiveHelperChat/lhc_messenger/tree/5b89256225b3374959b0596eb7da4ad510529e79>

For compilation android studio with those SDK were used

- Flutter 3.35.4
- Dart 3.9.2 • DevTools 2.48.0

### Creating a Firebase Project[​](#creating-a-firebase-project "Direct link to Creating a Firebase Project")

- Create a project at <https://console.firebase.google.com/>.
- In the `Project overview` page, add either Android or iOS, depending on the app you are configuring.

![Mobile screenshot](/assets/images/project-overview-174b9c3c2907532fa29a6cbfaed843be.png)

- Navigate to the `Project settings` page and click the `Service accounts` tab.

![Mobile screenshot](/assets/images/project-settings-34086e021c6a26f2fb374c4bf62078ed.png)

- Click `Generate new private key`.

![Mobile screenshot](/assets/images/service-account-68f09d3cab587e3693b2be5ccc3b94f6.png)

Afterward, you will download a `*.json` file, which you will use to generate a `Bearer token` for notifications.

### Sending Notifications Using Your Own Firebase Project[​](#sending-notifications-using-your-own-firebase-project "Direct link to Sending Notifications Using Your Own Firebase Project")

Refer to this file. Recent versions of Firebase require a Bearer AccessToken, which I generate on my server. <https://github.com/LiveHelperChat/livehelperchat/blob/145d6415a27701a367274550109e9703e5c2f9ba/lhc_web/lib/core/lhmobile/lhmobile.php#L525>

```
<?php  
  
header('Content-Type: application/json');  
  
$presentToken = json_decode(file_get_contents('token.json'),true);  
  
// Present token still valid  
if (isset($presentToken['accessToken']) && $presentToken['exp'] >= time() + 1*60) {  
    echo json_encode($presentToken);  
    exit;  
}  
  
// Path to your service account file  
$serviceAccountFile = 'location/to/service-account.json'; // Outside of web index.php file  
  
// Load service account data  
$serviceAccount = json_decode(file_get_contents($serviceAccountFile), true);  
  
$clientEmail = $serviceAccount['client_email'];  
$privateKey = $serviceAccount['private_key'];  
$firebaseScope = 'https://www.googleapis.com/auth/firebase.messaging';  
$tokenUri = 'https://oauth2.googleapis.com/token';  
  
// Create JWT Header  
$header = [  
    'alg' => 'RS256',  
    'typ' => 'JWT'  
];  
  
// Create JWT Claim Set  
$now = time();  
$exp = $now + 3600; // Token valid for 1 hour  
  
$claims = [  
    'iss' => $clientEmail,  
    'scope' => $firebaseScope,  
    'aud' => $tokenUri,  
    'iat' => $now,  
    'exp' => $exp  
];  
  
// Base64 URL Encode Function  
function base64UrlEncode($data)  
{  
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');  
}  
  
// Encode header and claim set  
$encodedHeader = base64UrlEncode(json_encode($header));  
$encodedClaims = base64UrlEncode(json_encode($claims));  
  
// Sign the JWT  
$signatureInput = $encodedHeader . '.' . $encodedClaims;  
openssl_sign($signatureInput, $signature, $privateKey, 'SHA256');  
  
// Encode the signature  
$encodedSignature = base64UrlEncode($signature);  
  
// Combine header, claims, and signature into the JWT  
$jwt = $encodedHeader . '.' . $encodedClaims . '.' . $encodedSignature;  
  
// Send a POST request to get the access token  
$ch = curl_init();  
  
curl_setopt($ch, CURLOPT_URL, $tokenUri);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_POST, 1);  
curl_setopt($ch, CURLOPT_TIMEOUT, 10);  
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,  10);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($ch, CURLOPT_USERAGENT, 'curl/7.29.0');  
  
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([  
    'grant_type' => 'urn:ietf:params:oauth:grant-type=jwt-bearer',  
    'assertion' => $jwt  
]));  
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);  
  
$response = curl_exec($ch);  
  
if (curl_errno($ch)) {  
    http_response_code(400);  
    echo json_encode(['error' =>  curl_error($ch)]);  
    exit;  
}  
  
curl_close($ch);  
  
// Decode the response to get the access token  
$responseData = json_decode($response, true);  
  
if (isset($responseData['access_token'])) {  
    $accessToken = $responseData['access_token'];  
    $tokenData = json_encode(['accessToken' => $accessToken, 'exp' => $exp]);  
    echo $tokenData;  
    file_put_contents('./token.json', $tokenData);  
} else {  
    http_response_code(400);  
    echo json_encode(['error' => 'Could not get access token!']);  
}
```

### Using local `service-account.json` file[​](#using-local-service-accountjson-file "Direct link to using-local-service-accountjson-file")

In mobile settings enable `Use local service file` and create file `var/external/service_account.php` with content from sample.

```
<?php  
return '{  
    "type": "service_account",  
    "project_id": "",  
    "private_key_id": "",  
    "private_key": "",  
    "client_email": "",  
    "client_id": "",  
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",  
    "token_uri": "https://oauth2.googleapis.com/token",  
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",  
    "client_x509_cert_url": "",  
    "universe_domain": "googleapis.com"  
  }';  
?>
```

## Visitors Cannot See Typing Indicators[​](#visitors-cannot-see-typing-indicators "Direct link to Visitors Cannot See Typing Indicators")

Most likely, this is an Apache configuration issue where the `Authorization` header is being removed. Refer to this [article](docs__docs__development__remove-index-php.md) for a possible solution.

## Demo Images[​](#demo-images "Direct link to Demo Images")

![Mobile screenshot](data:image/jpeg;base64,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J43LhcNa5FVf4AoI/wBNvwQHLEwxqL2IAORgABgYAAYGAAGBgABgYAAYGAAGBgABgYAAYGAAGBgABgYAAYGAAGBgABgYAAYGAAGBgABgYAAYGAAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD5ke2KNz5HI1jUyqryRAOqtq6ehpZKismZDBGmXPeuEQ82vn4t0cEjo7RRPqscOlldoavwTGV/nBhPxA2sn2kub2xvc22wuVIY+SO9tfWv/ABP5Mmei4T6TRFMVX+s7Mly/OcUvSm/i7dkky6goVZ4k1Ivfk1Oz34p2yvkbDc4X2+V3BHq7XHn1rzT+Ux6zwwGu59M4euMRTj7KRerj5frWORkrGvjcjmOTKKi5RUPo8P8Awp2wlt9dFaK6RXUU7tMKuX9J68k+C/8Az/J7e1cplDzfFcLVw1eir9muiuK4zDkAGZcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMf+K1wdQbGVnRqrXzq2BF9Tl4/wDMmwMF+M0Dptj3uamUhmY9fh+X/wDo0cJETfoid4Uufll4KATbRcqm01zKyicxs7EVEV8bZE4pheDkVD2k5x0fPS62ztptmLZdUmVzqyaaJY9PBvR6eOe3Or/hTnpVw2/uSbIWh0NXQuuCzzpPHusKq1vgaF06cJnjxxxPOqqeSqqZqiZUWWV6vcqNRqZVcrhE4J/BwsVXKonXHzP9/ZaqIjs62uVrkc1VRyLlFTsP07srcFuVioap6+HLC1zviqcf+n5hP0Z+H8boNmbdE/g5IWqqeLKZPmfWojRTPzl24fvLVgA861gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWbQUEdytdTRzpmOZisX1Z7SzPmRupuCYmYnMD8r3e3T2q4zUdU3TJE7Gexydip6lIR79ttsnTXyHL06OoYngStTinqXxoeQXXZK7W+RyLTrPGnJ8PhZ/jmeq4T6jbvUxFc4qYblmaZ6dlACUlurVdpSjqFd4uid9i7tGx9yrZGrOzdou1X/m/hPua7nEWrcZqqhSKKp7QhbLWh94u0UKNXoGqjpXeJvi/nkfoq0RdHC1ETCIhmdldn4LZTtip48Jzc5ebl8am1po9DEQ8vx/F/wDKuZjtHZttW9EO4AGF0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB1yxI9ORWVVubJngW4wBmls6Z5EmntbWqnAu9KBERAOiCnbGnBCQAAAAH/9k=)
![Mobile screenshot](/assets/images/screen-2.chat-23595d3c855686f200893998cbc0303d.jpg)
![Mobile screenshot](/assets/images/screen-4.chat-7ab5292edb2b33e1a0adf948d7cfde14.jpg)
![Mobile screenshot](/assets/images/screen-6.chat-b84e03acc757b18c84a08a7cd04ae9a0.jpg)
![Mobile screenshot](/assets/images/screen-7.chat-d8293b4577ac52745326eacaf89fe128.jpg)
![Mobile screenshot](/assets/images/screenshot-8-c492ea4b977cbd4e81edc4359de4cc01.png)
![Mobile screenshot](/assets/images/screenshot-9-45ccaa708913ad5d3d18581748e6237d.png)
