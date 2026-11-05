# A classe XMLReader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmlreader.php

---

# A classe XMLReader

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A extensão XMLReader é um analisador XML Pull. O leitor atua como um
cursor que avança no fluxo de documentos e para em cada nó ao longo
do caminho.

## Resumo da classe

class ****XMLReader****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[NONE](class.xmlreader.md#xmlreader.constants.none);

public
const
[int](language.types.integer.md)
[ELEMENT](class.xmlreader.md#xmlreader.constants.element);

public
const
[int](language.types.integer.md)
[ATTRIBUTE](class.xmlreader.md#xmlreader.constants.attribute);

public
const
[int](language.types.integer.md)
[TEXT](class.xmlreader.md#xmlreader.constants.text);

public
const
[int](language.types.integer.md)
[CDATA](class.xmlreader.md#xmlreader.constants.cdata);

public
const
[int](language.types.integer.md)
[ENTITY\_REF](class.xmlreader.md#xmlreader.constants.entity-ref);

public
const
[int](language.types.integer.md)
[ENTITY](class.xmlreader.md#xmlreader.constants.entity);

public
const
[int](language.types.integer.md)
[PI](class.xmlreader.md#xmlreader.constants.pi);

public
const
[int](language.types.integer.md)
[COMMENT](class.xmlreader.md#xmlreader.constants.comment);

public
const
[int](language.types.integer.md)
[DOC](class.xmlreader.md#xmlreader.constants.doc);

public
const
[int](language.types.integer.md)
[DOC\_TYPE](class.xmlreader.md#xmlreader.constants.doc-type);

public
const
[int](language.types.integer.md)
[DOC\_FRAGMENT](class.xmlreader.md#xmlreader.constants.doc-fragment);

public
const
[int](language.types.integer.md)
[NOTATION](class.xmlreader.md#xmlreader.constants.notation);

public
const
[int](language.types.integer.md)
[WHITESPACE](class.xmlreader.md#xmlreader.constants.whitespace);

public
const
[int](language.types.integer.md)
[SIGNIFICANT\_WHITESPACE](class.xmlreader.md#xmlreader.constants.significant-whitespace);

public
const
[int](language.types.integer.md)
[END\_ELEMENT](class.xmlreader.md#xmlreader.constants.end-element);

public
const
[int](language.types.integer.md)
[END\_ENTITY](class.xmlreader.md#xmlreader.constants.end-entity);

public
const
[int](language.types.integer.md)
[XML\_DECLARATION](class.xmlreader.md#xmlreader.constants.xml-declaration);

public
const
[int](language.types.integer.md)
[LOADDTD](class.xmlreader.md#xmlreader.constants.loaddtd);

public
const
[int](language.types.integer.md)
[DEFAULTATTRS](class.xmlreader.md#xmlreader.constants.defaultattrs);

public
const
[int](language.types.integer.md)
[VALIDATE](class.xmlreader.md#xmlreader.constants.validate);

public
const
[int](language.types.integer.md)
[SUBST\_ENTITIES](class.xmlreader.md#xmlreader.constants.subst-entities);

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$attributeCount](class.xmlreader.md#xmlreader.props.attributecount);

public
[string](language.types.string.md)
[$baseURI](class.xmlreader.md#xmlreader.props.baseuri);

public
[int](language.types.integer.md)
[$depth](class.xmlreader.md#xmlreader.props.depth);

public
[bool](language.types.boolean.md)
[$hasAttributes](class.xmlreader.md#xmlreader.props.hasattributes);

public
[bool](language.types.boolean.md)
[$hasValue](class.xmlreader.md#xmlreader.props.hasvalue);

public
[bool](language.types.boolean.md)
[$isDefault](class.xmlreader.md#xmlreader.props.isdefault);

public
[bool](language.types.boolean.md)
[$isEmptyElement](class.xmlreader.md#xmlreader.props.isemptyelement);

public
[string](language.types.string.md)
[$localName](class.xmlreader.md#xmlreader.props.localname);

public
[string](language.types.string.md)
[$name](class.xmlreader.md#xmlreader.props.name);

public
[string](language.types.string.md)
[$namespaceURI](class.xmlreader.md#xmlreader.props.namespaceuri);

public
[int](language.types.integer.md)
[$nodeType](class.xmlreader.md#xmlreader.props.nodetype);

public
[string](language.types.string.md)
[$prefix](class.xmlreader.md#xmlreader.props.prefix);

public
[string](language.types.string.md)
[$value](class.xmlreader.md#xmlreader.props.value);

public
[string](language.types.string.md)
[$xmlLang](class.xmlreader.md#xmlreader.props.xmllang);

/\* Métodos \*/

public function [close](xmlreader.close.md)(): [true](language.types.singleton.md)

public function [expand](xmlreader.expand.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$baseNode` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public static function [fromStream](xmlreader.fromstream.md)(  
    [resource](language.types.resource.md) `$stream`,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$documentUri` = **`null`**  
): static

public static function [fromString](xmlreader.fromstring.md)([string](language.types.string.md) `$source`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): static

public static function [fromUri](xmlreader.fromuri.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): static

public function [getAttribute](xmlreader.getattribute.md)([string](language.types.string.md) `$name`): [?](language.types.null.md)[string](language.types.string.md)

public function [getAttributeNo](xmlreader.getattributeno.md)([int](language.types.integer.md) `$index`): [?](language.types.null.md)[string](language.types.string.md)

public function [getAttributeNs](xmlreader.getattributens.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

public function [getParserProperty](xmlreader.getparserproperty.md)([int](language.types.integer.md) `$property`): [bool](language.types.boolean.md)

public function [isValid](xmlreader.isvalid.md)(): [bool](language.types.boolean.md)

public function [lookupNamespace](xmlreader.lookupnamespace.md)([string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

public function [moveToAttribute](xmlreader.movetoattribute.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [moveToAttributeNo](xmlreader.movetoattributeno.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [moveToAttributeNs](xmlreader.movetoattributens.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [moveToElement](xmlreader.movetoelement.md)(): [bool](language.types.boolean.md)

public function [moveToFirstAttribute](xmlreader.movetofirstattribute.md)(): [bool](language.types.boolean.md)

public function [moveToNextAttribute](xmlreader.movetonextattribute.md)(): [bool](language.types.boolean.md)

public function [next](xmlreader.next.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

public static function [open](xmlreader.open.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [XMLReader](class.xmlreader.md)

public function [open](xmlreader.open.md)([string](language.types.string.md) `$uri`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [read](xmlreader.read.md)(): [bool](language.types.boolean.md)

public function [readInnerXml](xmlreader.readinnerxml.md)(): [string](language.types.string.md)

public function [readOuterXml](xmlreader.readouterxml.md)(): [string](language.types.string.md)

public function [readString](xmlreader.readstring.md)(): [string](language.types.string.md)

public function [setParserProperty](xmlreader.setparserproperty.md)([int](language.types.integer.md) `$property`, [bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

public function [setRelaxNGSchema](xmlreader.setrelaxngschema.md)([?](language.types.null.md)[string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [setRelaxNGSchemaSource](xmlreader.setrelaxngschemasource.md)([?](language.types.null.md)[string](language.types.string.md) `$source`): [bool](language.types.boolean.md)

public function [setSchema](xmlreader.setschema.md)([?](language.types.null.md)[string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public static function [XML](xmlreader.xml.md)([string](language.types.string.md) `$source`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [XMLReader](class.xmlreader.md)

public function [XML](xmlreader.xml.md)([string](language.types.string.md) `$source`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

}

## Propriedades

attributeCount
:   O número de atributos no nó

baseURI
:   O URI base do nó

depth
:   Profundidade do nó na árvore, começando em 0

hasAttributes
:   Indica se o nó possui atributos

hasValue
:   Indica se o nó possui um valor de texto

isDefault
:   Indica se o atributo é definido por padrão a partir do DTD

isEmptyElement
:   Indica se o nó é uma tag de elemento vazia

localName
:   O nome local do nó

name
:   O nome qualificado do nó

namespaceURI
:   O URI do namespace associado ao nó

nodeType
:   O tipo de nó para o nó

prefix
:   O prefixo do namespace associado ao nó

value
:   O valor de texto do nó

xmlLang
:   O escopo xml:lang no qual o nó reside

## Constantes predefinidas

## Tipos de nós XMLReader

**`XMLReader::NONE`**
:   Nenhum tipo de nó

**`XMLReader::ELEMENT`**
:   Elemento inicial

**`XMLReader::ATTRIBUTE`**
:   Nó de atributo

**`XMLReader::TEXT`**
:   Nó de texto

**`XMLReader::CDATA`**
:   Nó CDATA

**`XMLReader::ENTITY_REF`**
:   Nó Referência de Entidade

**`XMLReader::ENTITY`**
:   Nó Declaração de Entidade

**`XMLReader::PI`**
:   Nó de Instrução de Processamento

**`XMLReader::COMMENT`**
:   Nó de Comentário

**`XMLReader::DOC`**
:   Nó de Documento

**`XMLReader::DOC_TYPE`**
:   Nó Tipo de Documento

**`XMLReader::DOC_FRAGMENT`**
:   Nó Fragmento de Documento

**`XMLReader::NOTATION`**
:   Nó Notação

**`XMLReader::WHITESPACE`**
:   Nó de espaço em branco

**`XMLReader::SIGNIFICANT_WHITESPACE`**
:   Nó de espaço em branco significativo

**`XMLReader::END_ELEMENT`**
:   Elemento final

**`XMLReader::END_ENTITY`**
:   Entidade Final

**`XMLReader::XML_DECLARATION`**
:   Nó de Declaração XML

## Opções do analisador XMLReader

**`XMLReader::LOADDTD`**
:   Carregar DTD, mas não validar

**`XMLReader::DEFAULTATTRS`**
:   Carregar DTD e atributos padrão, mas não validar

**`XMLReader::VALIDATE`**
:   Carregar DTD e validar enquanto analisa

**`XMLReader::SUBST_ENTITIES`**
:   Substituir entidades e expandir referências

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [XMLReader::close](xmlreader.close.md) — Fecha a entrada XMLReader
- [XMLReader::expand](xmlreader.expand.md) — Retorna uma cópia do nó atual como um objeto DOM
- [XMLReader::fromStream](xmlreader.fromstream.md) — Cria um XMLReader a partir de um fluxo para leitura
- [XMLReader::fromString](xmlreader.fromstring.md) — Cria um XMLReader a partir de uma string XML
- [XMLReader::fromUri](xmlreader.fromuri.md) — Cria um XMLReader a partir de um URI para leitura
- [XMLReader::getAttribute](xmlreader.getattribute.md) — Obtém o valor de um atributo nomeado
- [XMLReader::getAttributeNo](xmlreader.getattributeno.md) — Obtém o valor de um atributo pelo índice
- [XMLReader::getAttributeNs](xmlreader.getattributens.md) — Obtém o valor de um atributo pelo nome local e URI do namespace
- [XMLReader::getParserProperty](xmlreader.getparserproperty.md) — Indica se a propriedade especificada foi definida
- [XMLReader::isValid](xmlreader.isvalid.md) — Indica se o documento analisado é válido
- [XMLReader::lookupNamespace](xmlreader.lookupnamespace.md) — Busca namespace para um prefixo
- [XMLReader::moveToAttribute](xmlreader.movetoattribute.md) — Move o cursor para um atributo nomeado
- [XMLReader::moveToAttributeNo](xmlreader.movetoattributeno.md) — Move o cursor para um atributo pelo índice
- [XMLReader::moveToAttributeNs](xmlreader.movetoattributens.md) — Move o cursor para um atributo nomeado
- [XMLReader::moveToElement](xmlreader.movetoelement.md) — Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToFirstAttribute](xmlreader.movetofirstattribute.md) — Posiciona o cursor no primeiro atributo
- [XMLReader::moveToNextAttribute](xmlreader.movetonextattribute.md) — Posiciona o cursor no próximo atributo
- [XMLReader::next](xmlreader.next.md) — Move o cursor para o próximo nó pulando todas as subárvores
- [XMLReader::open](xmlreader.open.md) — Define o URI que contém o XML a ser analisado
- [XMLReader::read](xmlreader.read.md) — Move para o próximo nó no documento
- [XMLReader::readInnerXml](xmlreader.readinnerxml.md) — Obtém XML do nó atual
- [XMLReader::readOuterXml](xmlreader.readouterxml.md) — Obtém XML do nó atual, incluindo ele mesmo
- [XMLReader::readString](xmlreader.readstring.md) — Lê o conteúdo do nó atual como uma string
- [XMLReader::setParserProperty](xmlreader.setparserproperty.md) — Define opções do analisador
- [XMLReader::setRelaxNGSchema](xmlreader.setrelaxngschema.md) — Define o nome do arquivo ou URI para um esquema RelaxNG
- [XMLReader::setRelaxNGSchemaSource](xmlreader.setrelaxngschemasource.md) — Define os dados contendo um esquema RelaxNG
- [XMLReader::setSchema](xmlreader.setschema.md) — Valida documento contra XSD
- [XMLReader::XML](xmlreader.xml.md) — Define os dados contendo o XML a ser analisado

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
