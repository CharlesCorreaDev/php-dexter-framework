# Fecha a sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.close.php

---

# SessionHandlerInterface::close

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::close — Fecha a sessão

### Descrição

public function **SessionHandlerInterface::close**(): [bool](language.types.boolean.md)

Fecha a sessão atual. Esta função é executada automaticamente quando
a sessão é fechada ou explicitamente com [session\_write\_close()](function.session-write-close.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

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
