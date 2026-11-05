# Funções da SimpleXML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.simplexml.php

---

# Funções da SimpleXML

## Índice

- [simplexml\_import\_dom](function.simplexml-import-dom.md) — Obtém um objeto SimpleXMLElement a partir de um nó XML ou HTML
- [simplexml\_load\_file](function.simplexml-load-file.md) — Interpreta um arquivo XML e o transforma em um objeto
- [simplexml\_load\_string](function.simplexml-load-string.md) — Interpreta uma string XML e a transforma em um objeto

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
