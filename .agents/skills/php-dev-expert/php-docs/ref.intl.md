# Funções de Intl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.intl.php

---

# Funções de Intl

## Índice

- [intl\_error\_name](function.intl-error-name.md) — Obtém nome simbólico para um código de erro informado
- [intl\_get\_error\_code](function.intl-get-error-code.md) — Obtém o último código de erro
- [intl\_get\_error\_message](function.intl-get-error-message.md) — Obtém a descrição do último erro
- [intl\_is\_failure](function.intl-is-failure.md) — Verifica se o código de erro fornecido indica falha

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
