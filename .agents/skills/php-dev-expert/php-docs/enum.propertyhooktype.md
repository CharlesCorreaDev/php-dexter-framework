# A enumeração PropertyHookType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.propertyhooktype.php

---

# A enumeração PropertyHookType

(PHP 8 >= 8.4)

## Introdução

A enumeração **PropertyHookType** lista os tipos
legais de [ganchos de propriedades](language.oop5.property-hooks.md).

## Resumo da enumeração

enum ****PropertyHookType****  
{

case Get
= 'get'
; //
Indica um gancho `get`.

case Set
= 'set'
; //
Indica um gancho `set`.

}

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
