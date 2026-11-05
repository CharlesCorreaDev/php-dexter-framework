# Cria um novo nó de atributo com um namespace associado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.createattributens.php

---

# DOMDocument::createAttributeNS

(PHP 5, PHP 7, PHP 8)

DOMDocument::createAttributeNS — 
Cria um novo nó de atributo com um namespace associado

### Descrição

public function **DOMDocument::createAttributeNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

Esta função cria uma nova instância da classe
[DOMAttr](class.domattr.md). Este nó não aparecerá no documento a menos que
seja inserido, por exemplo, com [DOMNode::appendChild()](domnode.appendchild.md).

### Parâmetros

`namespace`
:   O URI do namespace.

`qualifiedName`
:   O nome qualificado e o prefixo do atributo, como `prefix:tagname`.

### Valor Retornado

O novo [DOMAttr](class.domattr.md) ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_INVALID_CHARACTER_ERR`**
:   Gerado se `qualifiedName` contiver um caractere inválido.

**`DOM_NAMESPACE_ERR`**
:   Gerado se `qualifiedName` for um nome qualificado
    malformado ou se `qualifiedName` tiver um prefixo e
    `namespace` for **`null`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método sem especificar um prefixo agora escolherá um prefixo em vez de assumir o namespace padrão. Anteriormente, isso criaria um atributo sem prefixo e aplicaria incorretamente o namespace ao elemento pai porque os namespaces padrão não se aplicam a atributos. |
| 8.3.0 | Chamar este método usando um prefixo que já foi declarado no elemento pai com um URI de namespace diferente agora mudará o novo prefixo para evitar criar conflitos de namespace. Isso alinha o comportamento com a especificação DOM. Anteriormente, isso lançava uma [DOMException](class.domexception.md) com o código **`DOM_NAMESPACE_ERR`**. |

### Veja também

- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos
- [DOMDocument::createAttribute()](domdocument.createattribute.md) - Cria um novo attribute
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
