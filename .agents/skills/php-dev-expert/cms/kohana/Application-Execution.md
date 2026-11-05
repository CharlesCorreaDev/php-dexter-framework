# Application Execution · kohana/kohana Wiki · GitHub

> **Fonte / Source:** https://github.com/kohana/kohana/wiki/Application-Execution

---

We discussed briefly on IRC some ways to separate requests, routing and execution. Let's articulate and record some goals.

- Sub-execution: It should be possible to execute a controller without affecting the global environment.
- Domain/Protocol: An application should be able to run in its own domain, e.g. a web application thinks/talks HTTP, command-line application uses ENV, pipes, etc.
- It would be great if an application could mix domains during sub-execution.
- It would be great if routing were an optional feature.

### Current implementation

We have classes that encapsulate both an HTTP request and an HTTP response. We rely on these classes and the HTTP protocol (e.g. 404 Not Found) to route incoming information and execute controllers.

### Controller input/output as data objects

Input and output objects are vital to successful sub-execution. We already advocate using `$response->body()` and `$response->headers()` instead of `echo` and `header()` because the former methods do not affect the global environment.

We should implement these objects so that they work well for specific domains. Devising a hierarchy that encompasses all possible input and output isn't necessary. Here are some possible interfaces:

```
<?php
class HTTP_Request
{
  /**
   * Build an HTTP_Request from the global environment. Reads $_SERVER, etc.
   * @return HTTP_Request
   */
  public static function from_environment();

  /** @return string GET, PUT, POST, DELETE, etc */
  public function method();

  /** @return string */
  public function uri();

  /** @return HTTP_Header */
  public function headers();

  /** @return HTTP_Body */
  public function body();

  /**
   * Helper to parse URI
   * @return string
   */
  public function get($name, $default = NULL);

  /**
   * Helper to parse body
   * @return string
   */
  public function post($name, $default = NULL);
}

class HTTP_Response
{
  /**
   * Builds an HTTP_Response from the global environment (headers, protocol, etc)
   * @return HTTP_Response
   */
  public static function from_environment();

  /** @return integer */
  public function status($code);

  /** @return HTTP_Header */
  public function headers();

  /** @return HTTP_Body */
  public function body();

  /** Send both the headers and body */
  public function send();

  /** Set the headers in the global environment */
  public function send_headers();

  /** Print the body */
  public function send_body();
}
```

### CLI Handling

Kohana will either adopt or create a [minion](http://github.com/kohana-minion/core)-esque system which separates cli "tasks" from HTTP "actions". At the moment everything is mixed together, allowing you to interact with HTTP headers, uris, protocols etc. from within a cli action, which obviously doesn't make sense. Using controllers for cli logic can also cause problems if you don't prevent users from accessing the controllers over HTTP.

Minion tries to handle this by creating "tasks" which are essentially controllers for cli requests (albeit each task class can only perform one action). At the moment minion doesn't really cater for running tasks outside of the cli (although tasks can call other tasks), but hopefully that can change when the migration happens.

**NOTE:** Is kohana also adopting the migrations module? Seeing as how some companies are already finding it useful it would probably be a nice addition (again, after a bit of cleaning up)

```
<?php
class CLI_Input
{
  /**
   * Builds a CLI_Input from the global environment. Reads $argv, uses STDIN, etc.
   * @return CLI_Input
   */
  public static function from_environment();

  /** @return array All arguments including the name of the script */
  public function args();

  /**
   * Helper find/fetch a single argument
   * @return string
   */
  public function arg($name, $default = NULL);

  /** @return resource Stream */
  public function input();
}

CLI_Output
{
  /**
   * Builds a CLI_Output from the global environment (STDOUT, STDERR, etc)
   * @return CLI_Output
   */
  public static function from_environment();

  /**
   * Set the exit code. Does not halt execution.
   * @return integer
   */
  public function exit($code);

  /** @return resource Stream */
  public function output();

  /** @return resource Stream */
  public function error();
}
```

### TODO Clients, Execution, Routing
