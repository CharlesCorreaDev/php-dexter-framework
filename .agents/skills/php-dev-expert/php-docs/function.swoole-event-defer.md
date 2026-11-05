# Adiciona função de retorno de chamada para o próximo loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.swoole-event-defer.php

---

# swoole\_event\_defer

(PECL swoole >= 1.9.0)

swoole\_event\_defer — Adiciona função de retorno de chamada para o próximo loop de eventos

### Descrição

function **swoole\_event\_defer**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

### Parâmetros

`callback`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
