# Indica se dois nós são o mesmo nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.issamenode.php

---

# DOMNode::isSameNode

(PHP 5, PHP 7, PHP 8)

DOMNode::isSameNode — 
Indica se dois nós são o mesmo nó

### Descrição

public function **DOMNode::isSameNode**([DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

Esta função indica se dois nós são o mesmo nó.
A comparação *não* é baseada no conteúdo.

### Parâmetros

`otherNode`
:   O nó comparado.

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
