# Adiciona um novo filho antes de um nó de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.insertbefore.php

---

# DOMNode::insertBefore

(PHP 5, PHP 7, PHP 8)

DOMNode::insertBefore — 
Adiciona um novo filho antes de um nó de referência

### Descrição

public function **DOMNode::insertBefore**([DOMNode](class.domnode.md) `$node`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$child` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Esta função insere um novo nó imediatamente antes do nó de referência.
Se for planejado fazer mais modificações no nó adicionado, deve-se usar
o nó retornado.

Ao usar um nó existente, ele será movido.

### Parâmetros

`node`
:   O novo nó.

`child`
:   O nó de referência. Se não fornecido, `node` é
    anexado aos filhos.

### Valor Retornado

O nó inserido ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se este nó for somente leitura ou se o pai anterior do nó
    sendo inserido for somente leitura.

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Gerado se este nó for de um tipo que não permite filhos do
    tipo do nó `node`, ou se o nó a
    ser anexado for um dos ancestrais deste nó ou este próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Gerado se `node` foi criado a partir de um
    documento diferente daquele que criou este nó.

**`DOM_NOT_FOUND_ERR`**
:   Gerado se `child` não for um filho deste nó.

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos

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
