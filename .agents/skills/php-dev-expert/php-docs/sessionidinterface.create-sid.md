# Cria um ID de sessão.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionidinterface.create-sid.php

---

# SessionIdInterface::create\_sid

(PHP 5 >= 5.5.1, PHP 7, PHP 8)

SessionIdInterface::create\_sid — Cria um ID de sessão.

### Descrição

public function **SessionIdInterface::create\_sid**(): [string](language.types.string.md)

Cria um novo ID de sessão. Esta função é executada automaticamente quando é
necessário criar um novo ID de sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O novo ID de sessão.
Observe que este valor é retornado internamente para o PHP para processamento.

### Veja também

- [SessionHandler::create\_sid()](sessionhandler.create-sid.md) - Retorna um novo ID de sessão

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
