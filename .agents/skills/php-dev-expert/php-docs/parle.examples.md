# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/parle.examples.php

---

# Examples

## Índice

- [Exemplos de Lexer](parle.examples.lexer.md)
- [Exemplos de Parser](parle.examples.parser.md)

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
