# Sintaxe Básica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.basic-syntax.php

---

# Sintaxe Básica

## Índice

- [Tags PHP](language.basic-syntax.phptags.md)
- [Escapando o HTML](language.basic-syntax.phpmode.md)
- [Separação de instruções](language.basic-syntax.instruction-separation.md)
- [Comentários](language.basic-syntax.comments.md)

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
