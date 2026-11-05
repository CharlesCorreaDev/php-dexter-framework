# Normaliza o documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.normalizedocument.php

---

# DOMDocument::normalizeDocument

(PHP 5, PHP 7, PHP 8)

DOMDocument::normalizeDocument — Normaliza o documento

### Descrição

public function **DOMDocument::normalizeDocument**(): [void](language.types.void.md)

Este método age como se fosse salvo e carregado o documento, colocando o
documento em uma forma "normal".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [» A Especificação DOM](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-Document3-normalizeDocument)
- [DOMNode::normalize()](domnode.normalize.md) - Normaliza o nó

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
