# Form - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/form.html

---

#### open($attributes = array(), $hidden = array())

Create a form open tag.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$attributes` | ``` array() ``` | Either a string which will be the action attribute or an array of settings, if action isn't given it will use the current Uri. The attribute's values will be used as html tag properties. | | `$hidden` | ``` array() ``` | An associative array of fieldnames and their values, will all be set as hidden fields. | |
| Returns | string |
| Example | ``` // returns <form action="http://mydomain.com/uri/to/form" accept-charset="utf-8" method="post"> echo Form::open('uri/to/form');  // returns <form action="http://google.com/" accept-charset="utf-8" method="get"> echo Form::open(array('action' => 'http://google.com/', 'method' => 'get')); ``` |
