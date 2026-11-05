# A Classe Dom\Comment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-comment.php

---

# A Classe Dom\Comment

(PHP 8 >= 8.4.0)

## Introdução

Representa nós de comentário, caracteres delimitados por `<!--`
e `-->`.

Este é o equivalente moderno e compatível com as especificações de
[DOMComment](class.domcomment.md).

## Resumo da classe

class ****Dom\Comment****
extends
[Dom\CharacterData](class.dom-characterdata.md)
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
?[Dom\Element](class.dom-element.md)
[$previousElementSibling](class.dom-characterdata.md#dom-characterdata.props.previouselementsibling);

public
readonly
?[Dom\Element](class.dom-element.md)
[$nextElementSibling](class.dom-characterdata.md#dom-characterdata.props.nextelementsibling);

public
[string](language.types.string.md)
[$data](class.dom-characterdata.md#dom-characterdata.props.data);

public
readonly
[int](language.types.integer.md)
[$length](class.dom-characterdata.md#dom-characterdata.props.length);

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

/\* Métodos herdados \*/

public function [Dom\CharacterData::after](dom-characterdata.after.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [Dom\CharacterData::appendData](dom-characterdata.appenddata.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [Dom\CharacterData::before](dom-characterdata.before.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [Dom\CharacterData::deleteData](dom-characterdata.deletedata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [void](language.types.void.md)

public function [Dom\CharacterData::insertData](dom-characterdata.insertdata.md)([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [Dom\CharacterData::remove](dom-characterdata.remove.md)(): [void](language.types.void.md)

public function [Dom\CharacterData::replaceData](dom-characterdata.replacedata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [Dom\CharacterData::replaceWith](dom-characterdata.replacewith.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [Dom\CharacterData::substringData](dom-characterdata.substringdata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [string](language.types.string.md)

/\* Not documented yet \*/

}

## Veja também

- [» Especificação WHATWG de Comment](https://dom.spec.whatwg.org/#interface-comment)

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
