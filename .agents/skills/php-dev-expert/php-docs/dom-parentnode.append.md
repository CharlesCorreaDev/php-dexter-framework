# Acrescenta nós após o último nó filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-parentnode.append.php

---

# Dom\ParentNode::append

(PHP 8 >= 8.4.0)

Dom\ParentNode::append — Acrescenta nós após o último nó filho

### Descrição

public function **Dom\ParentNode::append**([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Acrescenta um ou muitos `nodes` à lista de filhos após o último nó filho.

### Parâmetros

`nodes`
:   Os nós a serem acrescentados.
    As strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se este nó é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou o próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Veja também

- [Dom\ParentNode::prepend()](dom-parentnode.prepend.md) - Insere nós antes do primeiro nó filho

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
