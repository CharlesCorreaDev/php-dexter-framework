# Versão plural de gettext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ngettext.php

---

# ngettext

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ngettext — Versão plural de gettext

### Descrição

function **ngettext**([string](language.types.string.md) `$singular`, [string](language.types.string.md) `$plural`, [int](language.types.integer.md) `$count`): [string](language.types.string.md)

A versão plural de [gettext()](function.gettext.md). Algumas línguas
têm mais de uma forma para mensagens no plural dependendo da quantidade.

### Parâmetros

`singular`
:   O ID da mensagem singular.

`plural`
:   O ID da mensagem plural.

`count`
:   O número (ex.: contagem de itens) para determinar a translação para o
    respectivo número gramatical.

### Valor Retornado

Retorna a forma plural correta da mensagem identificada por
`singular` e `plural`
para a quantidade em `count`.

### Examples

**Exemplo #1 Exemplo de **ngettext()****

```
<?php

setlocale(LC_ALL, 'cs_CZ');
printf(ngettext("%d window", "%d windows", 1), 1); // 1 okno
printf(ngettext("%d window", "%d windows", 2), 2); // 2 okna
printf(ngettext("%d window", "%d windows", 5), 5); // 5 oken

?>
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
