# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.examples.php

---

# Examples

## Índice

- [Exemplo de Estrutura de Elemento XML](example.xml-structure.md)
- [Exemplo de Mapeamento de Tags XML](example.xml-map-tags.md)
- [Exemplo de Entidade Externa XML](example.xml-external-entity.md)
- [Interpretando XML Com Classes](example.xml-parsing-with-class.md)

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
