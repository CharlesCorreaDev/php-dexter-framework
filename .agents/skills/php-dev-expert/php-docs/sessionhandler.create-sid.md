# Retorna um novo ID de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandler.create-sid.php

---

# SessionHandler::create\_sid

(PHP 5 >= 5.5.1, PHP 7, PHP 8)

SessionHandler::create\_sid — Retorna um novo ID de sessão

### Descrição

public function **SessionHandler::create\_sid**(): [string](language.types.string.md)

Gera e retorna um novo ID de sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um ID de sessão válido para o manipulador de sessão padrão.

### Veja também

- [session\_id()](function.session-id.md) - Obtém e/ou define o id de sessão atual
- [session\_create\_id()](function.session-create-id.md) - Cria novo ID de sessão

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
