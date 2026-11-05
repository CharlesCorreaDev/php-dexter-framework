# Substitui um filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.replacechild.php

---

# DOMNode::replaceChild

(PHP 5, PHP 7, PHP 8)

DOMNode::replaceChild — 
Substitui um filho

### Descrição

public function **DOMNode::replaceChild**([DOMNode](class.domnode.md) `$node`, [DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Esta função substitui o filho `child`
pelo novo nó passado. Se o `node` já for um filho,
ele não será adicionado novamente. Se a substituição for bem-sucedida,
o nó antigo é retornado.

### Parâmetros

`node`
:   O novo nó. Ele deve ser um membro do documento de destino, ou seja,
    criado por um dos métodos DOMDocument->createXXX() ou importado
    no documento por [DOMDocument::importNode](domdocument.importnode.md).

`child`
:   O nó antigo.

### Valor Retornado

O nó antigo ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Gerado se este nó for somente leitura ou se o pai anterior do nó
    sendo inserido for somente leitura.

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Gerado se este nó for de um tipo que não permite filhos do
    tipo do nó `node`, ou se o nó a ser
    inserido for um dos ancestrais deste nó ou este nó mesmo.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Gerado se `node` foi criado a partir de um documento
    diferente daquele que criou este nó.

**`DOM_NOT_FOUND_ERR`**
:   Gerado se `child` não for um filho deste nó.

### Veja também

- [DOMChildNode::replaceWith()](domchildnode.replacewith.md) - Substitui o nó por novos nós
- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMNode::removeChild()](domnode.removechild.md) - Remove um filho da lista de filhos

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
