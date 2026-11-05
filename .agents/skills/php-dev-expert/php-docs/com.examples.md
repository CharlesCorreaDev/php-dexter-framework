# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.examples.php

---

# Examples

## Índice

- [For Each](com.examples.foreach.md)
- [Arrays e propriedades COM no estilo Array](com.examples.arrays.md)

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
