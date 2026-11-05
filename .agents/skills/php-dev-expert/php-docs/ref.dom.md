# DOM Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.dom.php

---

# DOM Funções

## Índice

- [dom\_import\_simplexml](function.dom-import-simplexml.md) — Obtém um objeto DOMAttr ou DOMElement a partir de um
  objeto SimpleXMLElement
- [Dom\import\_simplexml](function.dom-ns-import-simplexml.md) — Obtém um objeto Dom\Attr ou Dom\Element a partir de um
  objeto SimpleXMLElement

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
