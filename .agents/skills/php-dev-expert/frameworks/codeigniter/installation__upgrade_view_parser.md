# Upgrade View Parser — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_view_parser.html

---

# Upgrade View Parser[](#upgrade-view-parser "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Template Parser Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/parser.html)
- [View Parser Documentation CodeIgniter 4.x](outgoing__view_parser.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- You have to change the implementation and loading of the Parser Library.
- The Views can copied from CI3. Usually no changes there are required.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Wherever you use the View Parser Library replace `$this->load->library('parser');` with `$parser = service('parser');`.
2. You have to change the render part in your controller from `$this->parser->parse('blog_template', $data);` to `return $parser->setData($data)->render('blog_template');`.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('parser');

$data = array(
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading'
);

$this->parser
    ->parse('blog_template', $data);
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$parser = service('parser');

$data = [
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading',
];

return $parser->setData($data)->render('blog_template');
```
