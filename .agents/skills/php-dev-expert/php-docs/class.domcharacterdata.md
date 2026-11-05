# A classe DOMCharacterData

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domcharacterdata.php

---

# A classe DOMCharacterData

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa nós com dados de caracteres. Não há nós que correspondam diretamente a
esta classe, mas outros nós herdam dela.

## Resumo da classe

class ****DOMCharacterData****
extends
[DOMNode](class.domnode.md)
implements
[DOMChildNode](class.domchildnode.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_DISCONNECTED](class.domnode.md#domnode.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_PRECEDING](class.domnode.md#domnode.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_FOLLOWING](class.domnode.md#domnode.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINS](class.domnode.md#domnode.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINED\_BY](class.domnode.md#domnode.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.domnode.md#domnode.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
[string](language.types.string.md)
[$data](class.domcharacterdata.md#domcharacterdata.props.data);

public
readonly
[int](language.types.integer.md)
[$length](class.domcharacterdata.md#domcharacterdata.props.length);

public
readonly
?[DOMElement](class.domelement.md)
[$previousElementSibling](class.domcharacterdata.md#domcharacterdata.props.previouselementsibling);

public
readonly
?[DOMElement](class.domelement.md)
[$nextElementSibling](class.domcharacterdata.md#domcharacterdata.props.nextelementsibling);

/\* Propriedades herdadas \*/

public
readonly
[string](language.types.string.md)
[$nodeName](class.domnode.md#domnode.props.nodename);

public
?[string](language.types.string.md)
[$nodeValue](class.domnode.md#domnode.props.nodevalue);

public
readonly
[int](language.types.integer.md)
[$nodeType](class.domnode.md#domnode.props.nodetype);

public
readonly
?[DOMNode](class.domnode.md)
[$parentNode](class.domnode.md#domnode.props.parentnode);

public
readonly
?[DOMElement](class.domelement.md)
[$parentElement](class.domnode.md#domnode.props.parentelement);

public
readonly
[DOMNodeList](class.domnodelist.md)
[$childNodes](class.domnode.md#domnode.props.childnodes);

public
readonly
?[DOMNode](class.domnode.md)
[$firstChild](class.domnode.md#domnode.props.firstchild);

public
readonly
?[DOMNode](class.domnode.md)
[$lastChild](class.domnode.md#domnode.props.lastchild);

public
readonly
?[DOMNode](class.domnode.md)
[$previousSibling](class.domnode.md#domnode.props.previoussibling);

public
readonly
?[DOMNode](class.domnode.md)
[$nextSibling](class.domnode.md#domnode.props.nextsibling);

public
readonly
?[DOMNamedNodeMap](class.domnamednodemap.md)
[$attributes](class.domnode.md#domnode.props.attributes);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.domnode.md#domnode.props.isconnected);

public
readonly
?[DOMDocument](class.domdocument.md)
[$ownerDocument](class.domnode.md#domnode.props.ownerdocument);

public
readonly
?[string](language.types.string.md)
[$namespaceURI](class.domnode.md#domnode.props.namespaceuri);

public
[string](language.types.string.md)
[$prefix](class.domnode.md#domnode.props.prefix);

public
readonly
?[string](language.types.string.md)
[$localName](class.domnode.md#domnode.props.localname);

public
readonly
?[string](language.types.string.md)
[$baseURI](class.domnode.md#domnode.props.baseuri);

public
[string](language.types.string.md)
[$textContent](class.domnode.md#domnode.props.textcontent);

/\* Métodos \*/

public function [after](domcharacterdata.after.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [appendData](domcharacterdata.appenddata.md)([string](language.types.string.md) `$data`): [true](language.types.singleton.md)

public function [before](domcharacterdata.before.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [deleteData](domcharacterdata.deletedata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [bool](language.types.boolean.md)

public function [insertData](domcharacterdata.insertdata.md)([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [remove](domcharacterdata.remove.md)(): [void](language.types.void.md)

public function [replaceData](domcharacterdata.replacedata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [replaceWith](domcharacterdata.replacewith.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [substringData](domcharacterdata.substringdata.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$count`): [string](language.types.string.md)|[false](language.types.singleton.md)

/\* Métodos herdados \*/

public function [DOMNode::appendChild](domnode.appendchild.md)([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::C14N](domnode.c14n.md)(  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [DOMNode::C14NFile](domnode.c14nfile.md)(  
    [string](language.types.string.md) `$uri`,  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [DOMNode::cloneNode](domnode.clonenode.md)([bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::compareDocumentPosition](domnode.comparedocumentposition.md)([DOMNode](class.domnode.md) `$other`): [int](language.types.integer.md)

public function [DOMNode::contains](domnode.contains.md)([DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md) `$other`): [bool](language.types.boolean.md)

public function [DOMNode::getLineNo](domnode.getlineno.md)(): [int](language.types.integer.md)

public function [DOMNode::getNodePath](domnode.getnodepath.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::getRootNode](domnode.getrootnode.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [DOMNode](class.domnode.md)

public function [DOMNode::hasAttributes](domnode.hasattributes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::hasChildNodes](domnode.haschildnodes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::insertBefore](domnode.insertbefore.md)([DOMNode](class.domnode.md) `$node`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$child` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::isDefaultNamespace](domnode.isdefaultnamespace.md)([string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [DOMNode::isEqualNode](domnode.isequalnode.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSameNode](domnode.issamenode.md)([DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSupported](domnode.issupported.md)([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

public function [DOMNode::lookupNamespaceURI](domnode.lookupnamespaceuri.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::lookupPrefix](domnode.lookupprefix.md)([string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::normalize](domnode.normalize.md)(): [void](language.types.void.md)

public function [DOMNode::removeChild](domnode.removechild.md)([DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::replaceChild](domnode.replacechild.md)([DOMNode](class.domnode.md) `$node`, [DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::\_\_sleep](domnode.sleep.md)(): [array](language.types.array.md)

public function [DOMNode::\_\_wakeup](domnode.wakeup.md)(): [void](language.types.void.md)

}

## Propriedades

data
:   O conteúdo do nó.

length
:   O comprimento do conteúdo.

nextElementSibling
:   O próximo elemento irmão ou **`null`**.

previousElementSibling
:   O elemento irmão anterior ou **`null`**.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | As propriedades nextElementSibling e previousElementSibling foram adicionadas. |
| 8.0.0 | **DOMCharacterData** implementa [DOMChildNode](class.domchildnode.md) agora. |

## Veja também

- [» Especificação do W3C para CharacterData.](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-FF21A306)

## Índice

- [DOMCharacterData::after](domcharacterdata.after.md) — Adiciona nós após os dados de caracteres
- [DOMCharacterData::appendData](domcharacterdata.appenddata.md) — Acrescenta a string ao final dos dados de caractere do nó
- [DOMCharacterData::before](domcharacterdata.before.md) — Adiciona nós antes dos dados de caracteres
- [DOMCharacterData::deleteData](domcharacterdata.deletedata.md) — Remove uma faixa de caracteres dos dados de caracteres
- [DOMCharacterData::insertData](domcharacterdata.insertdata.md) — Insere uma string na posição de ponto de código UTF-8 especificada
- [DOMCharacterData::remove](domcharacterdata.remove.md) — Remove o nó de dados de caractere
- [DOMCharacterData::replaceData](domcharacterdata.replacedata.md) — Substitui uma substring dentro dos dados de caracteres
- [DOMCharacterData::replaceWith](domcharacterdata.replacewith.md) — Substitui os dados de caracteres por novos nós
- [DOMCharacterData::substringData](domcharacterdata.substringdata.md) — Extrai uma faixa de dados dos dados de caracteres

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
