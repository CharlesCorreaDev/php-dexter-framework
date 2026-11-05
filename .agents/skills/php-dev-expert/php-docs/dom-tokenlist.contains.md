# Informa se a lista contém um token específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.contains.php

---

# Dom\TokenList::contains

(PHP 8 >= 8.4.0)

Dom\TokenList::contains — Informa se a lista contém um token específico

### Descrição

public function **Dom\TokenList::contains**([string](language.types.string.md) `$token`): [bool](language.types.boolean.md)

Informa se a lista contém `token`.

### Parâmetros

`token`
:   O token.

### Valor Retornado

Retorna **`true`** se a lista contiver `token`,
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Dom\TokenList::contains()****

Verifica se duas classes estão presentes no parágrafo.

```
<?php
$dom = Dom\HTMLDocument::createFromString('<p class="font-bold important"></p>', LIBXML_NOERROR);
$p = $dom->body->firstChild;

$classList = $p->classList;
var_dump(
    $classList->contains('important'),
    $classList->contains('font-small'),
);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

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
