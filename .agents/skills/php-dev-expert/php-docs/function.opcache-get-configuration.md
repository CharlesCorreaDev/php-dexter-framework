# Obtém informações de configuração sobre o cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-get-configuration.php

---

# opcache\_get\_configuration

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL ZendOpcache > 7.0.2)

opcache\_get\_configuration — Obtém informações de configuração sobre o cache

### Descrição

function **opcache\_get\_configuration**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna informações de configuração sobre a instância de cache

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma série de informações, incluindo ini, blacklist e versão

### Erros/Exceções

Se `opcache.restrict_api` estiver em uso e o caminho atual
violar a regra, um E\_WARNING será emitido; nenhuma informação de status
será retornada.

### Veja também

- [opcache\_get\_status()](function.opcache-get-status.md) - Obtém informações de status sobre o cache

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
