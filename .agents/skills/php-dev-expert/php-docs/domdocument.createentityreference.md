# Cria novo nó de referência de entidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createentityreference.php

---

# DOMDocument::createEntityReference

(PHP 5, PHP 7, PHP 8)

DOMDocument::createEntityReference — Cria novo nó de referência de entidade

### Descrição

public function **DOMDocument::createEntityReference**([string](language.types.string.md) `$name`): [DOMEntityReference](class.domentityreference.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe
[DOMEntityReference](class.domentityreference.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`name`
:   O conteúdo da referência de entidade, por exemplo, a referência de entidade menos
    os caracteres de `&` iniciais e os caracteres finais
    `;`.

### Valor Retornado

A nova instância de [DOMEntityReference](class.domentityreference.md) ou **`false`** se
ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `name` contiver um caractere inválido.

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
- [DOMDocument::createCDATASection()](domdocument.createcdatasection.md) - Cria um novo nó de CDATA
- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe
- [DOMDocument::createDocumentFragment()](domdocument.createdocumentfragment.md) - Cria novo fragmento de documento
- [DOMDocument::createElement()](domdocument.createelement.md) - Cria novo nó de elemento
- [DOMDocument::createElementNS()](domdocument.createelementns.md) - Cria novo nó de elemento com um namespace associado
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
