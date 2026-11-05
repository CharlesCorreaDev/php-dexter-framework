# Adiciona um novo filho ao final dos filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.appendchild.php

---

# DOMNode::appendChild

(PHP 5, PHP 7, PHP 8)

DOMNode::appendChild — 
Adiciona um novo filho ao final dos filhos

### Descrição

public function **DOMNode::appendChild**([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Esta função acrescenta um filho a uma lista existente de filhos, ou cria
uma nova lista de filhos. O filho pode ser criado, por exemplo, com
[DOMDocument::createElement()](domdocument.createelement.md),
[DOMDocument::createTextNode()](domdocument.createtextnode.md) etc. ou simplesmente pode usaando-se
qualquer outro nó.

Ao usar um nó existente ele será movido.

### Parâmetros

`node`
:   O nó filho anexado.

### Valor Retornado

O nó adicionado ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_NO_MODIFICATION_ALLOWED_ERR`**
:   Lançado se este nó for somente leitura, ou se o pai anterior do nó
    que está sendo inserido for somente leitura.

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Lançada se este nó for de um tipo que não permite que filhos do
    tipo do `node`, ou se o nó a ser
    anexado for um dos ancestrais deste nó, ou se for este próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Lançado se `node` foi criado por um documento diferente
    do documento que criou este nó.

### Examples

O exemplo a seguir irá adicionar um novo nó de elemento de um documento novo.

**Exemplo #1 Adicionando um nó filho**

```
<?php

$doc = new DOMDocument;

$node = $doc->createElement("para");
$newnode = $doc->appendChild($node);

echo $doc->saveXML();
?>
```

**Exemplo #2 Filhos aninhados**

```
<?php

$doc = new DOMDocument;

$headNode = $doc->createElement("head");
$doc->appendChild($headNode);

$titleNode = $doc->createElement("title");
$headNode->appendChild($titleNode);

echo $doc->saveXML();
?>
```

### Veja também

- [DOMChildNode::after()](domchildnode.after.md) - Adiciona nós após o nó
- [DOMNode::insertBefore()](domnode.insertbefore.md) - Adiciona um novo filho antes de um nó de referência
- [DOMNode::removeChild()](domnode.removechild.md) - Remove um filho da lista de filhos
- [DOMNode::replaceChild()](domnode.replacechild.md) - Substitui um filho

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
