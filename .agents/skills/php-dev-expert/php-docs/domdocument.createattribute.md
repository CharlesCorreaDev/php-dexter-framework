# Cria um novo attribute

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createattribute.php

---

# DOMDocument::createAttribute

(PHP 5, PHP 7, PHP 8)

DOMDocument::createAttribute — Cria um novo attribute

### Descrição

public function **DOMDocument::createAttribute**([string](language.types.string.md) `$localName`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe [DOMAttr](class.domattr.md).
Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`localName`
:   O nome do atributo.

### Valor Retornado

O novo [DOMAttr](class.domattr.md) ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `localName` contiver um caractere inválido.

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
- [DOMDocument::createCDATASection()](domdocument.createcdatasection.md) - Cria um novo nó de CDATA
- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe
- [DOMDocument::createDocumentFragment()](domdocument.createdocumentfragment.md) - Cria novo fragmento de documento
- [DOMDocument::createElement()](domdocument.createelement.md) - Cria novo nó de elemento
- [DOMDocument::createElementNS()](domdocument.createelementns.md) - Cria novo nó de elemento com um namespace associado
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
