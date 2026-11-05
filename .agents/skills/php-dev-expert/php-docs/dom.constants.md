# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes XML**

| Constantes | Valor | Descrição |
| --- | --- | --- |
| **`XML_ELEMENT_NODE`** ([int](language.types.integer.md)) | 1 | Nó é um [DOMElement](class.domelement.md) / [Dom\Element](class.dom-element.md) |
| **`XML_ATTRIBUTE_NODE`** ([int](language.types.integer.md)) | 2 | Nó é um [DOMAttr](class.domattr.md) / [Dom\Attr](class.dom-attr.md) |
| **`XML_TEXT_NODE`** ([int](language.types.integer.md)) | 3 | Nó é um [DOMText](class.domtext.md) / [Dom\Text](class.dom-text.md) |
| **`XML_CDATA_SECTION_NODE`** ([int](language.types.integer.md)) | 4 | Nó é um [DOMCharacterData](class.domcharacterdata.md) / [Dom\CharacterData](class.dom-characterdata.md) |
| **`XML_ENTITY_REF_NODE`** ([int](language.types.integer.md)) | 5 | Nó é um [DOMEntityReference](class.domentityreference.md) / [Dom\EntityReference](class.dom-entityreference.md) |
| **`XML_ENTITY_NODE`** ([int](language.types.integer.md)) | 6 | Nó é um [DOMEntity](class.domentity.md) / [Dom\Entity](class.dom-entity.md) |
| **`XML_PI_NODE`** ([int](language.types.integer.md)) | 7 | Nó é um [DOMProcessingInstruction](class.domprocessinginstruction.md) / [Dom\ProcessingInstruction](class.dom-processinginstruction.md) |
| **`XML_COMMENT_NODE`** ([int](language.types.integer.md)) | 8 | Nó é um [DOMComment](class.domcomment.md) / [Dom\Comment](class.dom-comment.md) |
| **`XML_DOCUMENT_NODE`** ([int](language.types.integer.md)) | 9 | Nó é um [DOMDocument](class.domdocument.md) / [Dom\Document](class.dom-document.md) |
| **`XML_DOCUMENT_TYPE_NODE`** ([int](language.types.integer.md)) | 10 | Nó é um [DOMDocumentType](class.domdocumenttype.md) / [Dom\DocumentType](class.dom-documenttype.md) |
| **`XML_DOCUMENT_FRAG_NODE`** ([int](language.types.integer.md)) | 11 | Nó é um [DOMDocumentFragment](class.domdocumentfragment.md) / [Dom\DocumentFragment](class.dom-documentfragment.md) |
| **`XML_NOTATION_NODE`** ([int](language.types.integer.md)) | 12 | Nó é um [DOMNotation](class.domnotation.md) / [Dom\Notation](class.dom-notation.md) |
| **`XML_HTML_DOCUMENT_NODE`** ([int](language.types.integer.md)) | 13 |  |
| **`XML_DTD_NODE`** ([int](language.types.integer.md)) | 14 |  |
| **`XML_ELEMENT_DECL_NODE`** ([int](language.types.integer.md)) | 15 |  |
| **`XML_ATTRIBUTE_DECL_NODE`** ([int](language.types.integer.md)) | 16 |  |
| **`XML_ENTITY_DECL_NODE`** ([int](language.types.integer.md)) | 17 |  |
| **`XML_NAMESPACE_DECL_NODE`** ([int](language.types.integer.md)) | 18 |  |
| **`XML_ATTRIBUTE_CDATA`** ([int](language.types.integer.md)) | 1 |  |
| **`XML_ATTRIBUTE_ID`** ([int](language.types.integer.md)) | 2 |  |
| **`XML_ATTRIBUTE_IDREF`** ([int](language.types.integer.md)) | 3 |  |
| **`XML_ATTRIBUTE_IDREFS`** ([int](language.types.integer.md)) | 4 |  |
| **`XML_ATTRIBUTE_ENTITY`** ([int](language.types.integer.md)) | 5 |  |
| **`XML_ATTRIBUTE_NMTOKEN`** ([int](language.types.integer.md)) | 7 |  |
| **`XML_ATTRIBUTE_NMTOKENS`** ([int](language.types.integer.md)) | 8 |  |
| **`XML_ATTRIBUTE_ENUMERATION`** ([int](language.types.integer.md)) | 9 |  |
| **`XML_ATTRIBUTE_NOTATION`** ([int](language.types.integer.md)) | 10 |  |
| **`XML_LOCAL_NAMESPACE`** ([int](language.types.integer.md)) |  | Nó de declaração de namespace. |

**Constantes HTML**

| Constantes | Descrição |
| --- | --- |
| **`Dom\HTML_NO_DEFAULT_NS`** ([int](language.types.integer.md)) | Isso desativa a definição do namespace de elementos durante a análise ao usar [Dom\HTMLDocument](class.dom-htmldocument.md). Isto existe para compatibilidade retroativa com [DOMDocument](class.domdocument.md).  **Cuidado** Alguns métodos DOM dependem do namespace HTML que está sendo definido. Ao utilizar esta opção do analisador, o comportamento desses métodos pode ser influenciado. |

**Constantes [DOMException](class.domexception.md) / **Dom\Exception****

| Constantes | Valor | Descrição |
| --- | --- | --- |
| **`DOM_PHP_ERR`** ([int](language.types.integer.md)) | 0 | Código não pertencente à especificação DOM. Significativa apenas para erros do PHP. Descontinuada a partir do PHP 8.4.0 por não ser mais usada. Antes do PHP 8.4.0, era inconsistentemente usada para indicar situações de falta de memória. |
| **`DOM_INDEX_SIZE_ERR`** / **`Dom\INDEX_SIZE_ERR`** ([int](language.types.integer.md)) | 1 | Se o índice ou tamanho for negativo, ou maior do que o permitido. |
| **`DOMSTRING_SIZE_ERR`** / **`Dom\STRING_SIZE_ERR`** ([int](language.types.integer.md)) | 2 | Se o tamanho do texto especificado não couber em uma [string](language.types.string.md). |
| **`DOM_HIERARCHY_REQUEST_ERR`** / **`Dom\HIERARCHY_REQUEST_ERR`** ([int](language.types.integer.md)) | 3 | Se algum nó for inserido em um lugar ao qual ele não pertence. |
| **`DOM_WRONG_DOCUMENT_ERR`** / **`Dom\WRONG_DOCUMENT_ERR`** ([int](language.types.integer.md)) | 4 | Se um nó é utilizado em um documento diferente do qual foi criado. |
| **`DOM_INVALID_CHARACTER_ERR`** / **`Dom\INVALID_CHARACTER_ERR`** ([int](language.types.integer.md)) | 5 | Se um caracter inválido é utilizado, como por exemplo em um nome. |
| **`DOM_NO_DATA_ALLOWED_ERR`** / **`Dom\NO_DATA_ALLOWED_ERR`** ([int](language.types.integer.md)) | 6 | Se um conteúdo é utilizado com um nó que não suporta conteúdo. |
| **`DOM_NO_MODIFICATION_ALLOWED_ERR`** / **`Dom\NO_MODIFICATION_ALLOWED_ERR`** ([int](language.types.integer.md)) | 7 | Se ocorrer uma tentativa de modificação é feita em um objeto que não permite modificações |
| **`DOM_NOT_FOUND_ERR`** / **`Dom\NOT_FOUND_ERR`** ([int](language.types.integer.md)) | 8 | Se ocorrer uma tentativa de referênciar um nó em um contexto onde o mesmo não existe. |
| **`DOM_NOT_SUPPORTED_ERR`** / **`Dom\NOT_SUPPORTED_ERR`** ([int](language.types.integer.md)) | 9 | Se a implementação não suportar o tipo de objeto ou operação solicitados. |
| **`DOM_INUSE_ATTRIBUTE_ERR`** / **`Dom\INUSE_ATTRIBUTE_ERR`** ([int](language.types.integer.md)) | 10 | Se ocorrer a tentativa de adicionar um atributo que já está em uso em outro lugar. |
| **`DOM_INVALID_STATE_ERR`** / **`Dom\INVALID_STATE_ERR`** ([int](language.types.integer.md)) | 11 | Se ocorrer a tentativa de usar um objeto que não é mais válido. |
| **`DOM_SYNTAX_ERR`** / **`Dom\SYNTAX_ERR`** ([int](language.types.integer.md)) | 12 | Se um conjunto de caracteres inválido ou ilegal for utilizado. |
| **`DOM_INVALID_MODIFICATION_ERR`** / **`Dom\INVALID_MODIFICATION_ERR`** ([int](language.types.integer.md)) | 13 | Se ocorrer a tentativa de modificar o tipo do objeto subjacente. |
| **`DOM_NAMESPACE_ERR`** / **`Dom\NAMESPACE_ERR`** ([int](language.types.integer.md)) | 14 | Se ocorrer a tentativa de criar ou modificar um objeto incorretamente considerando namespaces. |
| **`DOM_INVALID_ACCESS_ERR`** / **`Dom\INVALID_ACCESS_ERR`** ([int](language.types.integer.md)) | 15 | Se o parâmetro ou operação não é suportada pelo objeto subjacente. |
| **`DOM_VALIDATION_ERR`** / **`Dom\VALIDATION_ERR`** ([int](language.types.integer.md)) | 16 | Se uma chamada á um método como insertBefore ou removeChild invalidar o nó respeitando a "validação parcial", essa exceção será lançada e a operação não será realizada. |

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
