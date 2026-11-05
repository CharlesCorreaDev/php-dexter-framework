# Substitui o nó por novos nós

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-childnode.replacewith.php

---

# Dom\ChildNode::replaceWith

(PHP 8 >= 8.4.0)

Dom\ChildNode::replaceWith — Substitui o nó por novos nós

### Descrição

public function **Dom\ChildNode::replaceWith**([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui o nó por novos `nodes`.

### Parâmetros

`nodes`
:   Os nós de substituição.
    As strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se o pai é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou este próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Veja também

- [Dom\ChildNode::after()](dom-childnode.after.md) - Adiciona nós após o nó
- [Dom\ChildNode::before()](dom-childnode.before.md) - Adiciona nós antes do nó
- [Dom\ChildNode::remove()](dom-childnode.remove.md) - Remove o nó
- **Dom\Node::replaceChild()**

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
