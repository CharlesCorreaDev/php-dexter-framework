# Hybrid Auth Configuration · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Hybrid-Auth-Configuration

---

## Before you start

You first need to enable Hybrid Auth option. To do so: go to admin panel -> System -> Members -> and switch on "Enable HybridAuth" option:

![hybrid-auth-google-5](https://camo.githubusercontent.com/a92cd187cb92061fe56c387031ee8e41576dc71afe69f6d3bee9f8552b637ca1/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d352e706e67)

## Note about Return URLs

If you have a multilingual website you have to specify return URLs for all of your locales:  
[https://yourdomain.com/{locale}/hybrid/?hauth.done={providerName}](https://yourdomain.com/%7Blocale%7D/hybrid/?hauth.done=%7BproviderName%7D)

For example: For Google auth, English and Italian locales would be  
<https://yourdomain.com/en/hybrid/?hauth.done=Google>  
<https://yourdomain.com/it/hybrid/?hauth.done=Google>  
etc.

## Google

- Go to: <https://console.developers.google.com>
- Select Credentials Tab
- Click on Create Credentials
- Select OAuth client ID

![hybrid-auth-google-1](https://camo.githubusercontent.com/b8b1ba3f2710e30cf738c127c18cdd055ef215e31e5af2897b4d185a030fb8b7/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d312e706e67)

- Select Web Application Type
- and specify the return URL in the format: <http://yourdomain.com/hybrid/?hauth.done=Google>  
  or if you have HTTPS enabled, then: <https://yourdomain.com/hybrid/?hauth.done=Google>

![hybrid-auth-google-2](https://camo.githubusercontent.com/0fb9dffadbf5058dd34c18f7fc8c4f3022553981bd8ac86dc2ee6b3590a0e010/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d322e706e67)

- Your API client ID and client secret should appear in the modal

![hybrid-auth-google-3](https://camo.githubusercontent.com/451cd12db4c1962a57edee36991a3b5fd6f0548d34d2545d500f62d36436e7e0/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d332e706e67)

- You should now use newly created API credentials. Please edit file: includes/hybridauth.inc.php like following  
  *Make sure that you don't insert additional spaces before or after the credentials values while copying and pasting.*

![hybrid-auth-google-4](https://camo.githubusercontent.com/24b7e04e86dcaf06ca34f1da7ceda05090351cb39c2aa9b113f0cf5972fddc59/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d342e706e67)

- After that go to registration page and click on the cool red button to register via your Google account:

![hybrid-auth-google-6](https://camo.githubusercontent.com/312f547c76d87fedf9cb049a8f715dd7e1f4b321bca77a21c527c44abd6c664c/687474703a2f2f7374617469632e696e74656c6c69616e74732e636f6d2f77696b692f6879627269642d617574682f6879627269642d617574682d676f6f676c652d362e706e67)

## Facebook

- Go to  
  <https://developers.facebook.com/apps>
- Click on Add a New App button

![hybrid-auth-facebook-1](https://user-images.githubusercontent.com/7892851/39754266-706f63e2-52e3-11e8-8f55-892fdf29ac13.png)

- Give a name for you App and specify the contact email

![hybrid-auth-facebook-2](https://user-images.githubusercontent.com/7892851/39754252-6ee7a0d4-52e3-11e8-9386-5e06efbb8a6b.png)

- On the App configuration page Set Up Facebook Login Product

![hybrid-auth-facebook-3](https://user-images.githubusercontent.com/7892851/39754253-6f0a8fb8-52e3-11e8-94c4-4539d5b18431.png)

- Then click on Settings tab under the Facebook Login product
- and enter Valid OAuth Redirect URLs. The format is <https://yourdomain.com/hybrid/?hauth_done=Facebook>
- Save Changes

**IMPORTANT:** Facebook supports HTTPS ONLY, HTTP is not supported anymore.

![hybrid-auth-facebook-4](https://user-images.githubusercontent.com/7892851/39754254-6f2b70ac-52e3-11e8-955d-4e812d5590cc.png)

- Then go select Basic tab under Settings tab
- and click on Add Platform

![hybrid-auth-facebook-5](https://user-images.githubusercontent.com/7892851/39754255-6f4cedd6-52e3-11e8-8eee-544539217622.png)

- Select Website platform

![hybrid-auth-facebook-6](https://user-images.githubusercontent.com/7892851/39754257-6f6f37ba-52e3-11e8-9982-02e23e07d719.png)

- New input field will appear bellow. Enter the URL of your website
- Then enter domain name to App Domains field

*For Example: Site URL: <https://domain.com/> App Domain: domain.com*

*Don't forget to save changes*

![hybrid-auth-facebook-7](https://user-images.githubusercontent.com/7892851/39754260-6f98f38e-52e3-11e8-978b-f503366939c3.png)

- Copy the App ID and App Secret

![hybrid-auth-facebook-8](https://user-images.githubusercontent.com/7892851/39754261-6fb93b6c-52e3-11e8-9335-1c565d8e2d00.png)

- Specify Privacy Policy URL to be able to change the status of your App to Live

![hybrid-auth-facebook-11](https://user-images.githubusercontent.com/7892851/39754264-7026a17a-52e3-11e8-8db4-bf28376713a3.png)

- Click on Status switcher, select the category in the modal and confirm

![hybrid-auth-facebook-12](https://user-images.githubusercontent.com/7892851/39754265-704ae06c-52e3-11e8-8454-6717b2ea797f.png)

- in `/includes/hybridauth.inc.php` file find lines below

![hybrid-auth-facebook-9](https://user-images.githubusercontent.com/7892851/39754262-6fdd0330-52e3-11e8-8f13-b28d4b394d8b.png)

- Paste App credentials like below  
  *Make sure you have removed leading slashes `//`*

![hybrid-auth-facebook-10](https://user-images.githubusercontent.com/7892851/39754263-700281c8-52e3-11e8-8f4d-e3b237011444.png)

- Now users can sign up via their Facebook accounts

![image](https://user-images.githubusercontent.com/7892851/39755436-a3215b5c-52e7-11e8-95ec-323255f54567.png)

## Twitter

- Go to <https://apps.twitter.com>
- Click on Create New App

![hybrid-auth-twitter-1](https://user-images.githubusercontent.com/7892851/39811248-e54295a6-53a9-11e8-8f92-5365a5258e80.png)

- Fill the form like bellow
- CallbackURL should be in format: yourdomain.com/hybrid/?hauth.done=Twitter

![hybrid-auth-twitter-2](https://user-images.githubusercontent.com/7892851/39811250-e563e09e-53a9-11e8-8573-b1b9f0e59409.png)

- Select Settings tab
- and provide your policy & terms pages' URLs

![hybrid-auth-twitter-3](https://user-images.githubusercontent.com/7892851/39811251-e5841e72-53a9-11e8-9a8c-2f49d46ae6fd.png)

- After that your app can get email address of the user
- Check the checkbox near "Request email adresses from users"

![hybrid-auth-twitter-4](https://user-images.githubusercontent.com/7892851/39811252-e5a582ba-53a9-11e8-8612-d33f8eeaf4dd.png)

- Go to Keys and Access Tokens tab

![hybrid-auth-twitter-5](https://user-images.githubusercontent.com/7892851/39811253-e5c821da-53a9-11e8-9641-13cf8fa775ba.png)

- Copy your credentials and paste in /includes/hybridauth.inc.php like below:  
  **IMPORTANT:** Make sure that `includeEmail` is set to `true`

![hybrid-auth-twitter-6](https://user-images.githubusercontent.com/7892851/39811254-e5eabcea-53a9-11e8-96d6-a0c785679724.png)

*That's it. Your users now can login via their Twitter accounts*

![hybrid-auth-twitter-7](https://user-images.githubusercontent.com/7892851/39811255-e60dcdd4-53a9-11e8-846b-16085b1d29e3.png)
