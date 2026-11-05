# A Classe Dom\XMLDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-xmldocument.php

---

# A Classe Dom\XMLDocument

(PHP 8 >= 8.4.0)

## Introdução

Representa um documento XML.

## Resumo da classe

final
class ****Dom\XMLDocument****
extends
[Dom\Document](class.dom-document.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_DISCONNECTED](class.dom-node.md#dom-node.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_PRECEDING](class.dom-node.md#dom-node.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_FOLLOWING](class.dom-node.md#dom-node.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_CONTAINS](class.dom-node.md#dom-node.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_CONTAINED\_BY](class.dom-node.md#dom-node.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.dom-node.md#dom-node.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$xmlEncoding](class.dom-xmldocument.md#dom-xmldocument.props.xmlencoding);

public
[bool](language.types.boolean.md)
[$xmlStandalone](class.dom-xmldocument.md#dom-xmldocument.props.xmlstandalone);

public
[string](language.types.string.md)
[$xmlVersion](class.dom-xmldocument.md#dom-xmldocument.props.xmlversion);

public
[bool](language.types.boolean.md)
[$formatOutput](class.dom-xmldocument.md#dom-xmldocument.props.formatoutput);

/\* Propriedades herdadas \*/

public
readonly
[Dom\Implementation](class.dom-implementation.md)
[$implementation](class.dom-document.md#dom-document.props.implementation);

public
[string](language.types.string.md)
[$URL](class.dom-document.md#dom-document.props.url);

public
[string](language.types.string.md)
[$documentURI](class.dom-document.md#dom-document.props.documenturi);

public
[string](language.types.string.md)
[$characterSet](class.dom-document.md#dom-document.props.characterset);

public
[string](language.types.string.md)
[$charset](class.dom-document.md#dom-document.props.charset);

public
[string](language.types.string.md)
[$inputEncoding](class.dom-document.md#dom-document.props.inputencoding);

public
readonly
?[Dom\DocumentType](class.dom-documenttype.md)
[$doctype](class.dom-document.md#dom-document.props.doctype);

public
readonly
?[Dom\Element](class.dom-element.md)
[$documentElement](class.dom-document.md#dom-document.props.documentelement);

public
readonly
?[Dom\Element](class.dom-element.md)
[$firstElementChild](class.dom-document.md#dom-document.props.firstelementchild);

public
readonly
?[Dom\Element](class.dom-element.md)
[$lastElementChild](class.dom-document.md#dom-document.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.dom-document.md#dom-document.props.childelementcount);

public
readonly
[Dom\HTMLCollection](class.dom-htmlcollection.md)
[$children](class.dom-document.md#dom-document.props.children);

public
?[Dom\HTMLElement](class.dom-htmlelement.md)
[$body](class.dom-document.md#dom-document.props.body);

public
readonly
?[Dom\HTMLElement](class.dom-htmlelement.md)
[$head](class.dom-document.md#dom-document.props.head);

public
[string](language.types.string.md)
[$title](class.dom-document.md#dom-document.props.title);

public
readonly
[int](language.types.integer.md)
[$nodeType](class.dom-node.md#dom-node.props.nodetype);

public
readonly
[string](language.types.string.md)
[$nodeName](class.dom-node.md#dom-node.props.nodename);

public
readonly
[string](language.types.string.md)
[$baseURI](class.dom-node.md#dom-node.props.baseuri);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.dom-node.md#dom-node.props.isconnected);

public
readonly
?[Dom\Document](class.dom-document.md)
[$ownerDocument](class.dom-node.md#dom-node.props.ownerdocument);

public
readonly
?[Dom\Node](class.dom-node.md)
[$parentNode](class.dom-node.md#dom-node.props.parentnode);

public
readonly
?[Dom\Element](class.dom-element.md)
[$parentElement](class.dom-node.md#dom-node.props.parentelement);

public
readonly
[Dom\NodeList](class.dom-nodelist.md)
[$childNodes](class.dom-node.md#dom-node.props.childnodes);

public
readonly
?[Dom\Node](class.dom-node.md)
[$firstChild](class.dom-node.md#dom-node.props.firstchild);

public
readonly
?[Dom\Node](class.dom-node.md)
[$lastChild](class.dom-node.md#dom-node.props.lastchild);

public
readonly
?[Dom\Node](class.dom-node.md)
[$previousSibling](class.dom-node.md#dom-node.props.previoussibling);

public
readonly
?[Dom\Node](class.dom-node.md)
[$nextSibling](class.dom-node.md#dom-node.props.nextsibling);

public
?[string](language.types.string.md)
[$nodeValue](class.dom-node.md#dom-node.props.nodevalue);

public
?[string](language.types.string.md)
[$textContent](class.dom-node.md#dom-node.props.textcontent);

/\* Métodos \*/

/\* Not documented yet \*/

/\* Métodos herdados \*/

/\* Not documented yet \*/

}

## Propriedades

> **Nota**:
>
> Embora a classe [DOMDocument](class.domdocument.md) permita definir certas
> propriedades para influenciar o comportamento do analisador, esta classe usa apenas as
> constantes **`LIBXML_*`** para
> configurar o analisador.

xmlEncoding
:   Um atributo especificando, como parte da declaração XML, a
    codificação deste documento. Isso é **`null`** quando não especificado ou quando
    não é conhecido, como quando o Documento foi criado na memória.

xmlStandalone
:   Um atributo que especifica, como parte da declaração XML, se
    este documento é independente.
    Isso é **`false`** quando não especificado.
    Um documento independente é aquele que não possui declarações de marcações externas.
    Um exemplo de tal declaração de marcação é quando o DTD declara um atributo com um valor padrão.

xmlVersion
:   Um atributo que especifica, como parte da declaração XML, o
    número da versão deste documento. Se não houver declaração e se
    este documento suportar o recurso "XML", o valor é "1.0".

formatOutput
:   Formata bem a saída com recuo e espaço extra.

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

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
