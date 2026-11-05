# Obtém um objeto referenciado fracamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakreference.get.php

---

# WeakReference::get

(PHP 7 >= 7.4.0, PHP 8)

WeakReference::get — Obtém um objeto referenciado fracamente

### Descrição

public function **WeakReference::get**(): [?](language.types.null.md)[object](language.types.object.md)

Obtém um objeto referenciado fracamente.
Se o objeto já tiver sido destruído, retorna **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [object](language.types.object.md) referenciado ou **`null`** se o objeto tiver sido destruído.

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
