# How to install Facebook login/connect button to your website - Jcow Community

> **Fonte / Source:** https://community.jcow.net/wiki/viewstory/2850

---

[![](https://community.jcow.net/themes/gray/logo.png)](https://community.jcow.net)

[Login](https://community.jcow.net/member/login)     [Sign up](https://community.jcow.net/member/signup)

[Create an account](https://community.jcow.net/member/signup)

 [Connect with Facebook](https://community.jcow.net/fblogin)[![](https://community.jcow.net/files/common_css/g-logo.png) Connect with Google](https://community.jcow.net/jcowoauth/google)[Login](https://community.jcow.net/member/login)

Explore

[newspaperHome](https://community.jcow.net/feed)

[live\_helpQuestions](https://community.jcow.net/questions)

[articleBlogs](https://community.jcow.net/blogs)

[Client Area](https://community.jcow.net/clientarea)

[panoramaImages](https://community.jcow.net/images)

[storefrontStore](https://community.jcow.net/store)

[local\_libraryWiki](wiki__index.md)

[linkAffiliate](https://community.jcow.net/jcowaffiliate)

- [View](javascript:void(0))
- [Edit](wiki__editstory__2850.md)
- [History](wiki__viewhistory__2850.md)

[How to install Facebook login/connect button to your website](wiki__viewstory__2850.md)

# Enable Facebook Connect module

Login to your Jcow website as admin, go to Admin CP -> Modules, Enable Facebook Connect module

# 

# Create Facebook App

Go to <https://developers.facebook.com/apps/>, Click "Create App" button, "App type" select "none".

Once App created, you will be redirected to your app dashboard. Click the "Set up" under "Facebook Login". Ignore the "Quick start".

![](https://community.jcow.net/uploads/userfiles/202112/2_17_30_wof83ru4.jpg)

Click the "settings" under the "Facebook login"

![](https://community.jcow.net/uploads/userfiles/202112/2_17_29_zpyttqh7.jpg)

In the "Valid OAuth Redirect URIs" section, input the following URL (Replace the YOUR\_SITE\_URL to your own website url):

```
https://YOUR_SITE_URL/index.php?p=fblogin&act=verify
```

===

# Copy App ID and Secret from Facebook to your Jcow site

In the Facebook App page, click "basic" under "settings" section, you will get App ID and Secret. Copy them.

Go to your Jcow website, click "Admin CP" from sidebar, scroll down and click "Facebook connection settings", then paste the Facebook app ID and Secret and click "Save".

[Jcow Home](https://community.jcow.net/go/Jcow_Home) | [Contact](https://community.jcow.net/go/Contact)

×

You need to login to do this

## Jcow Community

for Jcow users

[Sign up](https://community.jcow.net/member/signup)
[Login](https://community.jcow.net/member/login)

 [Connect with Facebook](https://community.jcow.net/fblogin)[![](https://community.jcow.net/files/common_css/g-logo.png) Connect with Google](https://community.jcow.net/jcowoauth/google)

[Follow @jcownet](https://twitter.com/jcownet)

© Jcow!  

×

####
