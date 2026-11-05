# Segurança da Sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.sessions.php

---

# Segurança da Sessão

É importante manter o gerenciamento de sessão HTTP seguro. A segurança
relacionada a sessão está descrita na seção
[Segurança de Sessão](session.security.md)
da referência [Módulo de Sessão](book.session.md).

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
