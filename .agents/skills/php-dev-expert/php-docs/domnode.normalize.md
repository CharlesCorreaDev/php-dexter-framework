# Normaliza o nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.normalize.php

---

# DOMNode::normalize

(PHP 5, PHP 7, PHP 8)

DOMNode::normalize — 
Normaliza o nó

### Descrição

public function **DOMNode::normalize**(): [void](language.types.void.md)

Remove nós de texto vazios e mescla nós de texto adjacentes neste nó e em todos os
seus filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [» A Especificação DOM](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-normalize)
- [DOMDocument::normalizeDocument()](domdocument.normalizedocument.md) - Normaliza o documento

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
