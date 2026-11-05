# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.examples.php

---

# Examples

## Índice

- [Criando um documento XML simples](example.xmlwriter-simple.md)
- [Trabalhando com namespaces XML](example.xmlwriter-namespace.md)
- [Trabalhando com a API Orientada a Objeto](example.xmlwriter-oop.md)

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
