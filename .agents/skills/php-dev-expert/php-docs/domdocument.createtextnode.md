# Cria novo nó de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createtextnode.php

---

# DOMDocument::createTextNode

(PHP 5, PHP 7, PHP 8)

DOMDocument::createTextNode — Cria novo nó de texto

### Descrição

public function **DOMDocument::createTextNode**([string](language.types.string.md) `$data`): [DOMText](class.domtext.md)

Esta função cria uma nova instância da classe
[DOMText](class.domtext.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`data`
:   O conteúdo do texto.

### Valor Retornado

A nova instância de [DOMText](class.domtext.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Em caso de erro, agora é lançada uma [DomException](class.domexception.md). Anteriormente, retornava **`false`**. |

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
- [DOMDocument::createAttributeNS()](domdocument.createattributens.md) - Cria um novo nó de atributo com um namespace associado
- [DOMDocument::createCDATASection()](domdocument.createcdatasection.md) - Cria um novo nó de CDATA
- [DOMDocument::createComment()](domdocument.createcomment.md) - Cria novo nó de comentárioe
- [DOMDocument::createDocumentFragment()](domdocument.createdocumentfragment.md) - Cria novo fragmento de documento
- [DOMDocument::createElement()](domdocument.createelement.md) - Cria novo nó de elemento
- [DOMDocument::createElementNS()](domdocument.createelementns.md) - Cria novo nó de elemento com um namespace associado
- [DOMDocument::createEntityReference()](domdocument.createentityreference.md) - Cria novo nó de referência de entidade
- [DOMDocument::createProcessingInstruction()](domdocument.createprocessinginstruction.md) - Cria novo nó PI (Processing Instruction)

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
