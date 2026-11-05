# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.resources.php

---

## Tipos de Recurso

Antes do PHP 8.0.0, o recurso `xml` retornado por
[xml\_parser\_create()](function.xml-parser-create.md) e
[xml\_parser\_create\_ns()](function.xml-parser-create-ns.md) referenciava uma
instância de analisador XML a ser usada com as funções fornecidas por esta
extensão.

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
