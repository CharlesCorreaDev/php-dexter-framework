# Markdown - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/markdown.html

---

#### parse($text)

Parses Markdown and returns HTML.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$text` | *required* | Markdown text to parse. | |
| Returns | string |
| Example | ``` $string = '# About Markdown  Markdown is a text-to-HTML conversion tool for web writers. Markdown allows you to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid HTML.  * It features bullet points * As well as other handy features';  echo Markdown::parse($string); ```   Returns   ``` <h1>About Markdown</h1> <p>Markdown is a text-to-HTML conversion tool for web writers. Markdown allows you to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid HTML.</p> <ul> <li>It features bullet points</li> <li>As well as other handy features</li> </ul> ``` |
