# Upgrade Output Class — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_responses.html

---

# Upgrade Output Class[](#upgrade-output-class "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Output Class Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/output.html)
- [HTTP Responses Documentation CodeIgniter 4.x](outgoing__response.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- The Output class has been changed to the Response class.
- The methods have been renamed.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. The methods in the HTTP Response class are named slightly different. The most important change in the naming is the switch from underscored method names to camelCase. The method `set_content_type()` from version 3 is now named `setContentType()` and so on.
2. In the most cases you have to change `$this->output` to `$this->response` followed by the method. You can find all methods in [HTTP Responses](outgoing__response.md).

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->output->set_status_header(404);

// ...

$this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('foo' => 'bar')));
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$this->response->setStatusCode(404);

// ...

return $this->response->setJSON(['foo' => 'bar']);
```
