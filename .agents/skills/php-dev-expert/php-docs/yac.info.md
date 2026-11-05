# Obtém o status do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.info.php

---

# Yac::info

(PECL yac >= 1.0.0)

Yac::info — Obtém o status do cache

### Descrição

public function **Yac::info**(): [array](language.types.array.md)

Obtém o status do sistema de cache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com as seguintes chaves:
"memory\_size", "slots\_memory\_size", "values\_memory\_size", "segment\_size", "segment\_num",
"miss", "hits", "fails", "kicks", "recycles", "slots\_size" e "slots\_used".

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
