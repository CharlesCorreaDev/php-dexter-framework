# Funções de Taint

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.taint.php

---

# Funções de Taint

## Índice

- [is\_tainted](function.is-tainted.md) — Verifica se uma string está contaminada
- [taint](function.taint.md) — Contamina uma string
- [untaint](function.untaint.md) — Descontamina strings

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
