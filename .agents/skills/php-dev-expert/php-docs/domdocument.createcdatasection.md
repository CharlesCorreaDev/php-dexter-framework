# Cria um novo nó de CDATA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createcdatasection.php

---

# DOMDocument::createCDATASection

(PHP 5, PHP 7, PHP 8)

DOMDocument::createCDATASection — Cria um novo nó de CDATA

### Descrição

public function **DOMDocument::createCDATASection**([string](language.types.string.md) `$data`): [DOMCdataSection](class.domcdatasection.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe
[DOMCDATASection](class.domcdatasection.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`data`
:   O conteúdo do CDATA.

### Valor Retornado

O novo [DOMCDATASection](class.domcdatasection.md) ou **`false`** se ocorrer um erro.

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
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
