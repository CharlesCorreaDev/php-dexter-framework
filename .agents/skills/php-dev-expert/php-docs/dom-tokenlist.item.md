# Retorna um token da lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.item.php

---

# Dom\TokenList::item

(PHP 8 >= 8.4.0)

Dom\TokenList::item — Retorna um token da lista

### Descrição

public function **Dom\TokenList::item**([int](language.types.integer.md) `$index`): [?](language.types.null.md)[string](language.types.string.md)

Retorna um token da lista na posição `index`.

### Parâmetros

`index`
:   A posição do token.

### Valor Retornado

Retorna o token na posição `index` ou **`null`** quando a posição
estiver fora do intervalo.

### Examples

**Exemplo #1 Exemplo de **Dom\TokenList::item()****

Acessa uma posição válida e uma inválida.

```
<?php
$dom = Dom\HTMLDocument::createFromString('<p class="font-bold important"></p>', LIBXML_NOERROR);
$p = $dom->body->firstChild;

$classList = $p->classList;
var_dump(
    $classList->item(0),
    $classList->item(100),
);
?>
```

O exemplo acima produzirá:

```
string(9) "font-bold"
NULL
```

### Notas

> **Nota**:
>
> Este método é equivalente a usar a sintaxe de acesso de array.

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
