# A Classe Dom\HTMLDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-htmldocument.php

---

# A Classe Dom\HTMLDocument

(PHP 8 >= 8.4.0)

## Introdução

Representa um documento HTML.

## Resumo da classe

final
class ****Dom\HTMLDocument****
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

public static function [createEmpty](dom-htmldocument.createempty.md)([string](language.types.string.md) `$encoding` = "UTF-8"): [Dom\HTMLDocument](class.dom-htmldocument.md)

public static function [createFromFile](dom-htmldocument.createfromfile.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options` = 0, [?](language.types.null.md)[string](language.types.string.md) `$overrideEncoding` = **`null`**): [Dom\HTMLDocument](class.dom-htmldocument.md)

public static function [createFromString](dom-htmldocument.createfromstring.md)([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$options` = 0, [?](language.types.null.md)[string](language.types.string.md) `$overrideEncoding` = **`null`**): [Dom\HTMLDocument](class.dom-htmldocument.md)

public function [saveHtml](dom-htmldocument.savehtml.md)([?](language.types.null.md)[Dom\Node](class.dom-node.md) `$node` = **`null`**): [string](language.types.string.md)

public function [saveHtmlFile](dom-htmldocument.savehtmlfile.md)([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [saveXml](dom-htmldocument.savexml.md)([?](language.types.null.md)[Dom\Node](class.dom-node.md) `$node` = **`null`**, [int](language.types.integer.md) `$options` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [saveXmlFile](dom-htmldocument.savexmlfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

/\* Métodos herdados \*/

/\* Not documented yet \*/

}

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

## Índice

- [Dom\HTMLDocument::createEmpty](dom-htmldocument.createempty.md) — Cria um documento HTML vazio
- [Dom\HTMLDocument::createFromFile](dom-htmldocument.createfromfile.md) — Analisa um documento HTML a partir de um arquivo
- [Dom\HTMLDocument::createFromString](dom-htmldocument.createfromstring.md) — Analisa um documento HTML a partir de uma string
- [Dom\HTMLDocument::saveHtml](dom-htmldocument.savehtml.md) — Serializa o documento como uma string HTML
- [Dom\HTMLDocument::saveHtmlFile](dom-htmldocument.savehtmlfile.md) — Serializa o documento como um arquivo HTML
- [Dom\HTMLDocument::saveXml](dom-htmldocument.savexml.md) — Serializa o documento como uma string XML
- [Dom\HTMLDocument::saveXmlFile](dom-htmldocument.savexmlfile.md) — Serializa o documento como um arquivo XML

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
