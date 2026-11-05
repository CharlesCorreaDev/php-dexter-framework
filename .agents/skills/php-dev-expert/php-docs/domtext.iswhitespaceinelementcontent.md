# Indica se este nó de texto contém espaços em branco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domtext.iswhitespaceinelementcontent.php

---

# DOMText::isWhitespaceInElementContent

(PHP 5, PHP 7, PHP 8)

DOMText::isWhitespaceInElementContent — 
Indica se este nó de texto contém espaços em branco

### Descrição

public function **DOMText::isWhitespaceInElementContent**(): [bool](language.types.boolean.md)

Indica se este nó de texto contém apenas espaços em branco ou se está vazio.
O nó de texto é considerado conter espaços em branco no conteúdo do elemento durante
o carregamento do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o nó contiver zero ou mais caracteres de espaço em branco e
nada mais. Retorna **`false`** caso contrário.

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
