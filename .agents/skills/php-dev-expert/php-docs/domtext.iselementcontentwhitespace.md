# Retorna se este nó de texto contém espaços em branco no conteúdo do elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domtext.iselementcontentwhitespace.php

---

# DOMText::isElementContentWhitespace

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

DOMText::isElementContentWhitespace — Retorna se este nó de texto contém espaços em branco no conteúdo do elemento

### Descrição

public function **DOMText::isElementContentWhitespace**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
