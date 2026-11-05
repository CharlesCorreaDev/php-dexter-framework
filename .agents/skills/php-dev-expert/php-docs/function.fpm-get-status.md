# Retorna o status do pool FPM atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fpm-get-status.php

---

# fpm\_get\_status

(PHP 7 >= 7.3, PHP 8)

fpm\_get\_status — Retorna o status do pool FPM atual

### Descrição

function **fpm\_get\_status**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna o status completo do pool FPM atual como um array associativo. Sempre
retorna o status completo, incluindo informações por processo. Consulte o
[guia da página de status do FPM](fpm.status.md) para mais
detalhes.

Observe que esta função estará definida somente se o FPM estiver sendo usado para servir o script.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array associativo contendo o status completo do pool FPM, ou **`false`** em caso de falha.

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
