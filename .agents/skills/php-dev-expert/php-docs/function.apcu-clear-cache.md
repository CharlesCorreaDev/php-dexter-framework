# Limpa o cache APCu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-clear-cache.php

---

# apcu\_clear\_cache

(PECL apcu >= 4.0.0)

apcu\_clear\_cache — 
Limpa o cache APCu

### Descrição

function **apcu\_clear\_cache**(): [bool](language.types.boolean.md)

Limpa o cache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna sempre **`true`**

### Veja também

- [apcu\_cache\_info()](function.apcu-cache-info.md) - Recupera informação em cache a partir do armazenamento de dados do APCu

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
