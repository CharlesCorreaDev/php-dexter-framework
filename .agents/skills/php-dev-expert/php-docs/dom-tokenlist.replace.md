# Substitui um token por outro na lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.replace.php

---

# Dom\TokenList::replace

(PHP 8 >= 8.4.0)

Dom\TokenList::replace — Substitui um token por outro na lista

### Descrição

public function **Dom\TokenList::replace**([string](language.types.string.md) `$token`, [string](language.types.string.md) `$newToken`): [bool](language.types.boolean.md)

Substitui um token por outro na lista.

### Parâmetros

`token`
:   O token a ser substituído.

`newToken`
:   O novo token.

### Valor Retornado

Retorna **`true`** se `token` estiver na lista,
**`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um token contiver algum byte nulo.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\SYNTAX_ERR`** se um token for uma string vazia.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\INVALID_CHARACTER_ERR`** se um token contiver algum
  espaço em branco ASCII.

### Examples

**Exemplo #1 Exemplo de **Dom\TokenList::replace()****

Substitui um token por outro no parágrafo.

```
<?php
$dom = Dom\HTMLDocument::createFromString('<p class="font-bold important"></p>', LIBXML_NOERROR);
$p = $dom->body->firstChild;

$p->classList->replace('font-bold', 'font-small');

echo $dom->saveHtml($p);
?>
```

O exemplo acima produzirá:

```
<p class="font-small important"></p>
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
