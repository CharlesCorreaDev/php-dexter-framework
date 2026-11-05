# Obtém o prefixo do namespace do nó com base no URI do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.lookupprefix.php

---

# DOMNode::lookupPrefix

(PHP 5, PHP 7, PHP 8)

DOMNode::lookupPrefix — 
Obtém o prefixo do namespace do nó com base no URI do namespace

### Descrição

public function **DOMNode::lookupPrefix**([string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

Obtém o prefixo do namespace do nó com base no URI do namespace.

### Parâmetros

`namespace`
:   O URI do namespace.

### Valor Retornado

O prefixo do namespace ou **`null`** em caso de erro.

### Veja também

- [DOMNode::lookupNamespaceUri()](domnode.lookupnamespaceuri.md) - Obtém o URI do namespace do nó com base no prefixo

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
