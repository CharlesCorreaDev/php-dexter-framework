# Cria novo nó PI (Processing Instruction)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createprocessinginstruction.php

---

# DOMDocument::createProcessingInstruction

(PHP 5, PHP 7, PHP 8)

DOMDocument::createProcessingInstruction — Cria novo nó PI (Processing Instruction)

### Descrição

public function **DOMDocument::createProcessingInstruction**([string](language.types.string.md) `$target`, [string](language.types.string.md) `$data` = ""): [DOMProcessingInstruction](class.domprocessinginstruction.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe
[DOMProcessingInstruction](class.domprocessinginstruction.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`target`
:   O alvo da instrução de processamento.

`data`
:   O conteúdo da instrução de processamento.

### Valor Retornado

O novo [DOMProcessingInstruction](class.domprocessinginstruction.md) ou **`false`** em caso de erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `target` contiver um caractere inválido.

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
