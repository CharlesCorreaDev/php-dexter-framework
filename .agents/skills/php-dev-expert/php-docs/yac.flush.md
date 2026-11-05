# Descarrega o cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.flush.php

---

# Yac::flush

(PECL yac >= 1.0.0)

Yac::flush — Descarrega o cache

### Descrição

public function **Yac::flush**(): [bool](language.types.boolean.md)

Remove todos os valores em cache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna true.

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
