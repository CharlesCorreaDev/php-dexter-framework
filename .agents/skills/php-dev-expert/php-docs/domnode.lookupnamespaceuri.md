# Obtém o URI do namespace do nó com base no prefixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.lookupnamespaceuri.php

---

# DOMNode::lookupNamespaceURI

(PHP 5, PHP 7, PHP 8)

DOMNode::lookupNamespaceURI — 
Obtém o URI do namespace do nó com base no prefixo

### Descrição

public function **DOMNode::lookupNamespaceURI**([?](language.types.null.md)[string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

Obtém o URI do namespace do nó com base no
`prefix`.

### Parâmetros

`prefix`
:   O prefixo a ser procurado. Se este parâmetro for **`null`**, o método retornará o URI do namespace padrão, se existir.

### Valor Retornado

Retorna o URI do namespace associado ou **`null`** se nenhum for encontrado.

### Veja também

- [DOMNode::lookupPrefix()](domnode.lookupprefix.md) - Obtém o prefixo do namespace do nó com base no URI do namespace

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
