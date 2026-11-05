# Cria novo nó de elemento com um namespace associado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createelementns.php

---

# DOMDocument::createElementNS

(PHP 5, PHP 7, PHP 8)

DOMDocument::createElementNS — 
Cria novo nó de elemento com um namespace associado

### Descrição

public function **DOMDocument::createElementNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value` = ""): [DOMElement](class.domelement.md)|[false](language.types.singleton.md)

Esta função cria um novo nó de elemento com um namespace associado.
Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`namespace`
:   O URI do namespace.

`qualifiedName`
:   O nome qualificado do elemento, como `prefixo:nomedatag`.

`value`
:   O valor do elemento. Por padrão, um elemento vazio será criado.
    Pode-se também pode definir o valor posteriormente com [DOMElement::$nodeValue](class.domnode.md#domnode.props.nodevalue).

### Valor Retornado

O novo [DOMElement](class.domelement.md) ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `qualifiedName` contiver um caractere inválido.

**`DOM_NAMESPACE_ERR`**
:   Gerado se `qualifiedName` for um
    nome qualificado malformado.

### Examples

**Exemplo #1 Criando um novo elemento e inserindo-o como raiz**

```
<?php

$dom = new DOMDocument('1.0', 'utf-8');

$element = $dom->createElementNS('http://www.example.com/XFoo', 'xfoo:test', 'Este é o elemento raiz!');

// Inserimos o novo elemento como raiz (filho do documento)
$dom->appendChild($element);

echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<xfoo:test xmlns:xfoo="http://www.example.com/XFoo">Este é o elemento raiz!</xfoo:test>
```

**Exemplo #2 Um exemplo de prefixo de namespace**

```
<?php
$doc  = new DOMDocument('1.0', 'utf-8');
$doc->formatOutput = true;
$root = $doc->createElementNS('http://www.w3.org/2005/Atom', 'element');
$doc->appendChild($root);
$root->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:g', 'http://base.google.com/ns/1.0');
$item = $doc->createElementNS('http://base.google.com/ns/1.0', 'g:item_type', 'house');
$root->appendChild($item);

echo $doc->saveXML(), "\n";

echo $item->namespaceURI, "\n"; // Resultado: http://base.google.com/ns/1.0
echo $item->prefix, "\n";       // Resultado: g
echo $item->localName, "\n";    // Resultado: item_type
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="utf-8"?>
<element xmlns="http://www.w3.org/2005/Atom" xmlns:g="http://base.google.com/ns/1.0">
  <g:item_type>house</g:item_type>
</element>

http://base.google.com/ns/1.0
g
item_type
```

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
- [DOMDocument::createCDATASection()](domdocument.createcdatasection.md) - Cria um novo nó de CDATA
- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe
- [DOMDocument::createDocumentFragment()](domdocument.createdocumentfragment.md) - Cria novo fragmento de documento
- [DOMDocument::createElement()](domdocument.createelement.md) - Cria novo nó de elemento
- [DOMDocument::createEntityReference()](domdocument.createentityreference.md) - Cria novo nó de referência de entidade
- [DOMDocument::createProcessingInstruction()](domdocument.createprocessinginstruction.md) - Cria novo nó PI (Processing Instruction)
- [DOMDocument::createTextNode()](domdocument.createtextnode.md) - Cria novo nó de texto

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
