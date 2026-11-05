# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.examples.php

---

# Examples

## Índice

- [Arquivos de exemplo collection.xml e collection.xsl](xsl.examples-collection.md)
- [Tratamento de erros com funções de tratamento de erros libxml](xsl.examples-errors.md)

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
