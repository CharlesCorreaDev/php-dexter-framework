# Access log output from unit tests | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/340/access-log-output-from-unit-tests

---

## [Access log output from unit tests](wiki__340__access-log-output-from-unit-tests.md)

3    0

2

Viewed: 19 437 times

Version: 1.1

Category: [Tips](wiki__index.md)

- [debug](wiki__index.md)
- [Logging](wiki__index.md)
- [testing](wiki__index.md)

Written by: [![Mike](/user/avatar/9?v=3) Mike](https://www.yiiframework.com/user/9)

Updated by: [![Mike](/user/avatar/9?v=3) Mike](https://www.yiiframework.com/user/9)

Created: Jun 14, 2012

Updated: 14 years ago

1. [What is this good for?](#what-is-this-good-for)
2. [What you need](#what-you-need)
3. [How to use from a unit test](#how-to-use-from-a-unit-test)

#### What is this good for? [¶](#what-is-this-good-for)

Say, you want to write a test for a component which provides a caching feature. How would you know, that some method of your component returns a cached result? With the solution described here you can inspect all log outputs. So you could search the logs for accesses to the DB to really make sure, that the result was served from cache.

#### What you need [¶](#what-you-need)

First create a simple log router class. All it does is to keep the log messages in memory and makes them available in a static variable. You could put this class into the `components/` folder of your application:

```
<?php
class DebugLogRoute extends CLogRoute
{
    /**
     * @var array list of messages in this format:
     * array(
     *   [0] => message (string)
     *   [1] => level (string)
     *   [2] => category (string)
     *   [3] => timestamp (float, obtained by microtime(true)
     *  )
     */
    public static $messages=array();

    protected function processLogs($logs)
    {
        foreach($logs as $log)
            self::$messages[]=$log;
    }

    /**
     * Reset collected messages
     */
    public static function flushMessages()
    {
        self::$messages=array();
    }

    /**
     * @param string $pattern regex pattern to search for
     * @param mixed $l optional level to search for
     * @param mixed $c optional category to search for
     * @return bool wether message with given pattern, level and category was found
     */
    public static function hasMessage($pattern, $l=null, $c=null)
    {
        foreach(self::$messages as $m)
            if(
                preg_match($pattern, $m[0]) && 
                ($l===null || $m[1]===$l) && 
                ($c===null || $m[2]===$c)
            )
                return true;

        return false;
    }
}
```

Add the above class to your test configuration in `config/test.php`:

```
<?php
'components'=>array(
    'log'=>array(
        'class'=>'CLogRouter',
        'routes'=>array(
            array('class'=>'DebugLogRoute')
        ),
    ),
    ...
```

#### How to use from a unit test [¶](#how-to-use-from-a-unit-test)

Now inside a unit test you can access the log messages like this:

```
<?php
public function testSomething()
{
    $logger = Yii::getLogger();

    // Flush all messages so far and reset debug log route
    $logger->flush(true);
    DebugLogRoute::flushMessages();

    // ... do tests and add log messages here ...

    $logger->flush(true);
    $logs=DebugLogRoute::$messages;

    // Inspect logs, for example:
    $this->assertTrue(
        DebugLogRoute::hasMessage('Serving .* from cache', 
        'trace',
        'system.caching.CApcCache'
    );

    DebugLogRoute::flushMessages();

    // ... more tests ...

    $logger->flush(true);
    $logs=DebugLogRoute::$messages;

    // ... inspect $logs ...
}
```
