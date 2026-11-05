# Envia o cache em buffer para o disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-sync.php

---

# eio\_sync

(PECL eio >= 0.0.1dev)

eio\_sync — Envia o cache em buffer para o disco

### Descrição

function **eio\_sync**([int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT, [callable](language.types.callable.md) `$callback` = NULL, [mixed](language.types.mixed.md) `$data` = NULL): [resource](language.types.resource.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_sync()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

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
