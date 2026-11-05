# Retorna um objeto tidyNode começando pela tag <html> da árvore de análise tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.html.php

---

# tidy::html

# tidy\_get\_html

(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)

tidy::html -- tidy\_get\_html — Retorna um objeto [tidyNode](class.tidynode.md) começando pela tag <html> da árvore de análise tidy

### Descrição

Estilo orientado a objetos

public function **tidy::html**(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Estilo procedural

function **tidy\_get\_html**([tidy](class.tidy.md) `$tidy`): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Retorna um objeto [tidyNode](class.tidynode.md) começando pela
tag <html> da árvore de análise tidy.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o objeto [tidyNode](class.tidynode.md).

### Examples

**Exemplo #1 Exemplo de **tidy::html()****

```
<?php
$html = '
<html>
  <head>
    <title>test</title>
  </head>
  <body>
    <p>paragraph</p>
  </body>
</html>';

$tidy = tidy_parse_string($html);

$html = $tidy->html();
echo $html->value;
?>
```

O exemplo acima produzirá:

```
<html>
<head>
<title>test</title>
</head>
<body>
<p>paragraph</p>
</body>
</html>
```

### Veja também

- [tidy::body()](tidy.body.md) - Retorna um objeto tidyNode começando pela tag <body> da árvore de análise tidy
- [tidy::head()](tidy.head.md) - Retorna um objeto tidyNode começando pela tag <head> da árvore de análise tidy

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
