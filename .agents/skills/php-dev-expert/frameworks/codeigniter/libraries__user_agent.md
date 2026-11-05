# User Agent Class — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/user_agent.html

---

# User Agent Class[](#user-agent-class "Link to this heading")

The User Agent Class provides functions that help identify information
about the browser, mobile device, or robot visiting your site.

## [Using the User Agent Class](#id1)[](#using-the-user-agent-class "Link to this heading")

### [Initializing the Class](#id2)[](#initializing-the-class "Link to this heading")

The User Agent class is always available directly from the current [IncomingRequest](incoming__incomingrequest.md) instance.
By default, you will have a request instance in your controller that you can retrieve the
User Agent class from:

```
<?php

$agent = $this->request->getUserAgent();
```

### [User Agent Definitions](#id3)[](#user-agent-definitions "Link to this heading")

The user agent name definitions are located in a config file located at:
**app/Config/UserAgents.php**. You may add items to the various
user agent arrays if needed.

### [Example](#id4)[](#example "Link to this heading")

When the User Agent class is initialized it will attempt to determine
whether the user agent browsing your site is a web browser, a mobile
device, or a robot. It will also gather the platform information if it
is available:

```
<?php

$agent = $this->request->getUserAgent();

if ($agent->isBrowser()) {
    $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
} elseif ($agent->isRobot()) {
    $currentAgent = $agent->getRobot();
} elseif ($agent->isMobile()) {
    $currentAgent = $agent->getMobile();
} else {
    $currentAgent = 'Unidentified User Agent';
}

echo $currentAgent;

echo $agent->getPlatform(); // Platform info (Windows, Linux, Mac, etc.)
```

## [Class Reference](#id5)[](#class-reference "Link to this heading")

*class* CodeIgniter\HTTP\UserAgent[](#CodeIgniter\HTTP\UserAgent "Link to this definition")
:   isBrowser([*$key = null*])[](#CodeIgniter\HTTP\UserAgent::isBrowser "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Optional browser name

        Returns:
        :   true if the user agent is a (specified) browser, false if not

        Return type:
        :   `bool`

        Returns true/false (boolean) if the user agent is a known web browser.

        ```
        <?php

        if ($agent->isBrowser('Safari')) {
            echo 'You are using Safari.';
        } elseif ($agent->isBrowser()) {
            echo 'You are using a browser.';
        }
        ```

        Note

        The string “Safari” in this example is an array key in the list of browser definitions.
        You can find this list in **app/Config/UserAgents.php** if you want to add new
        browsers or change the strings.

    isMobile([*$key = null*])[](#CodeIgniter\HTTP\UserAgent::isMobile "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Optional mobile device name

        Returns:
        :   true if the user agent is a (specified) mobile device, false if not

        Return type:
        :   `bool`

        Returns true/false (boolean) if the user agent is a known mobile device.

        ```
        <?php

        if ($agent->isMobile('iphone')) {
            echo view('iphone/home');
        } elseif ($agent->isMobile()) {
            echo view('mobile/home');
        } else {
            echo view('web/home');
        }
        ```

    isRobot([*$key = null*])[](#CodeIgniter\HTTP\UserAgent::isRobot "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Optional robot name

        Returns:
        :   true if the user agent is a (specified) robot, false if not

        Return type:
        :   `bool`

        Returns true/false (boolean) if the user agent is a known robot.

        Note

        The user agent library only contains the most common robot definitions. It is not a complete list of bots.
        There are hundreds of them so searching for each one would not be very efficient. If you find that some bots
        that commonly visit your site are missing from the list you can add them to your
        **app/Config/UserAgents.php** file.

    isReferral()[](#CodeIgniter\HTTP\UserAgent::isReferral "Link to this definition")
    :   Returns:
        :   true if the user agent is a referral, false if not

        Return type:
        :   `bool`

        Returns true/false (boolean) if the user agent was referred from another site.

    getBrowser()[](#CodeIgniter\HTTP\UserAgent::getBrowser "Link to this definition")
    :   Returns:
        :   Detected browser or an empty string

        Return type:
        :   `string`

        Returns a string containing the name of the web browser viewing your site.

    getVersion()[](#CodeIgniter\HTTP\UserAgent::getVersion "Link to this definition")
    :   Returns:
        :   Detected browser version or an empty string

        Return type:
        :   `string`

        Returns a string containing the version number of the web browser viewing your site.

    getMobile()[](#CodeIgniter\HTTP\UserAgent::getMobile "Link to this definition")
    :   Returns:
        :   Detected mobile device brand or an empty string

        Return type:
        :   `string`

        Returns a string containing the name of the mobile device viewing your site.

    getRobot()[](#CodeIgniter\HTTP\UserAgent::getRobot "Link to this definition")
    :   Returns:
        :   Detected robot name or an empty string

        Return type:
        :   `string`

        Returns a string containing the name of the robot viewing your site.

    getPlatform()[](#CodeIgniter\HTTP\UserAgent::getPlatform "Link to this definition")
    :   Returns:
        :   Detected operating system or an empty string

        Return type:
        :   `string`

        Returns a string containing the platform viewing your site (Linux, Windows, OS X, etc.).

    getReferrer()[](#CodeIgniter\HTTP\UserAgent::getReferrer "Link to this definition")
    :   Returns:
        :   Detected referrer or an empty string

        Return type:
        :   `string`

        The referrer, if the user agent was referred from another site. Typically you’ll test for this as follows:

        ```
        <?php

        if ($agent->isReferral()) {
            echo $agent->getReferrer();
        }
        ```

    getAgentString()[](#CodeIgniter\HTTP\UserAgent::getAgentString "Link to this definition")
    :   Returns:
        :   Full user agent string or an empty string

        Return type:
        :   `string`

        Returns a string containing the full user agent string. Typically it will be something like this:

        ```
        Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.4) Gecko/20060613 Camino/1.0.2
        ```

    parse(*$string*)[](#CodeIgniter\HTTP\UserAgent::parse "Link to this definition")
    :   Parameters:
        :   - **$string** (`string`) – A custom user-agent string

        Return type:
        :   `void`

        Parses a custom user-agent string, different from the one reported by the current visitor.
