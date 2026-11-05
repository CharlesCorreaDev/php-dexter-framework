# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.examples.php

---

# Examples

## Índice

- [Uso básico](session.examples.basic.md)
- [Passando o ID de sessão](session.idpassing.md)
- [Manipuladores de Sessão Personalizados](session.customhandler.md)

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
