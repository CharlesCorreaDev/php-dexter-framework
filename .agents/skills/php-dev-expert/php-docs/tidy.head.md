# Retorna um objeto tidyNode começando pela tag <head> da árvore de análise tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.head.php

---

# tidy::head

# tidy\_get\_head

(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)

tidy::head -- tidy\_get\_head — Retorna um objeto [tidyNode](class.tidynode.md) começando pela tag <head> da árvore de análise tidy

### Descrição

Estilo orientado a objetos

public function **tidy::head**(): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Estilo procedural

function **tidy\_get\_head**([tidy](class.tidy.md) `$tidy`): [?](language.types.null.md)[tidyNode](class.tidynode.md)

Retorna um objeto [tidyNode](class.tidynode.md) começando pela
tag <head> da árvore de análise tidy.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna o objeto [tidyNode](class.tidynode.md).

### Examples

**Exemplo #1 Exemplo de **tidy::head()****

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

$head = $tidy->head();
echo $head->value;
?>
```

O exemplo acima produzirá:

```
<head>
<title>test</title>
</head>
```

### Veja também

- [tidy::body()](tidy.body.md) - Retorna um objeto tidyNode começando pela tag <body> da árvore de análise tidy
- [tidy::html()](tidy.html.md) - Retorna um objeto tidyNode começando pela tag <html> da árvore de análise tidy

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
