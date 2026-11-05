# Obtém a configuração atual do Tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.getconfig.php

---

# tidy::getConfig

# tidy\_get\_config

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.7.0)

tidy::getConfig -- tidy\_get\_config — Obtém a configuração atual do Tidy

### Descrição

Estilo orientado a objetos

public function **tidy::getConfig**(): [array](language.types.array.md)

Estilo procedural

function **tidy\_get\_config**([tidy](class.tidy.md) `$tidy`): [array](language.types.array.md)

Obtém a lista das opções de configuração em uso pelo `tidy`
fornecido.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna um array de opções de configuração.

Para uma explicação sobre cada opção, visite [» https://api.html-tidy.org/#quick-reference](https://api.html-tidy.org/#quick-reference).

### Examples

**Exemplo #1 Exemplo de **tidy::getConfig()****

```
<?php
$html = '<p>test</p>';
$config = array('indent' => TRUE,
                'output-xhtml' => TRUE,
                'wrap' => 200);

$tidy = tidy_parse_string($html, $config);

print_r($tidy->getConfig());
?>
```

O exemplo acima produzirá:

```
Array
(
    [indent-spaces] => 2
    [wrap] => 200
    [tab-size] => 8
    [char-encoding] => 1
    [input-encoding] => 3
    [output-encoding] => 1
    [newline] => 1
    [doctype-mode] => 1
    [doctype] =>
    [repeated-attributes] => 1
    [alt-text] =>
    [slide-style] =>
    [error-file] =>
    [output-file] =>
    [write-back] =>
    [markup] => 1
    [show-warnings] => 1
    [quiet] =>
    [indent] => 1
    [hide-endtags] =>
    [input-xml] =>
    [output-xml] => 1
    [output-xhtml] => 1
    [output-html] =>
    [add-xml-decl] =>
    [uppercase-tags] =>
    [uppercase-attributes] =>
    [bare] =>
    [clean] =>
    [logical-emphasis] =>
    [drop-proprietary-attributes] =>
    [drop-font-tags] =>
    [drop-empty-paras] => 1
    [fix-bad-comments] => 1
    [break-before-br] =>
    [split] =>
    [numeric-entities] =>
    [quote-marks] =>
    [quote-nbsp] => 1
    [quote-ampersand] => 1
    [wrap-attributes] =>
    [wrap-script-literals] =>
    [wrap-sections] => 1
    [wrap-asp] => 1
    [wrap-jste] => 1
    [wrap-php] => 1
    [fix-backslash] => 1
    [indent-attributes] =>
    [assume-xml-procins] =>
    [add-xml-space] =>
    [enclose-text] =>
    [enclose-block-text] =>
    [keep-time] =>
    [word-2000] =>
    [tidy-mark] =>
    [gnu-emacs] =>
    [gnu-emacs-file] =>
    [literal-attributes] =>
    [show-body-only] =>
    [fix-uri] => 1
    [lower-literals] => 1
    [hide-comments] =>
    [indent-cdata] =>
    [force-output] => 1
    [show-errors] => 6
    [ascii-chars] => 1
    [join-classes] =>
    [join-styles] => 1
    [escape-cdata] =>
    [language] =>
    [ncr] => 1
    [output-bom] => 2
    [replace-color] =>
    [css-prefix] =>
    [new-inline-tags] =>
    [new-blocklevel-tags] =>
    [new-empty-tags] =>
    [new-pre-tags] =>
    [accessibility-check] => 0
    [vertical-space] =>
    [punctuation-wrap] =>
    [merge-divs] => 1
)
```

### Veja também

- **tidy\_reset\_config()**
- **tidy\_save\_config()**

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
