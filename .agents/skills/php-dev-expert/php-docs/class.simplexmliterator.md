# A classe SimpleXMLIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.simplexmliterator.php

---

# A classe SimpleXMLIterator

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe SimpleXMLIterator provê iterações recursivas em todos os nós de um objeto [SimpleXMLElement](class.simplexmlelement.md).

## Resumo da classe

class ****SimpleXMLIterator****
extends
[SimpleXMLElement](class.simplexmlelement.md)
{

/\* Métodos herdados \*/

public function [SimpleXMLElement::\_\_construct](simplexmlelement.construct.md)(  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$options` = 0,  
    [bool](language.types.boolean.md) `$dataIsURL` = **`false`**,  
    [string](language.types.string.md) `$namespaceOrPrefix` = "",  
    [bool](language.types.boolean.md) `$isPrefix` = **`false`**  
)

public function [SimpleXMLElement::addAttribute](simplexmlelement.addattribute.md)([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [void](language.types.void.md)

public function [SimpleXMLElement::addChild](simplexmlelement.addchild.md)([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [SimpleXMLElement::asXML](simplexmlelement.asxml.md)([?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

public function [SimpleXMLElement::attributes](simplexmlelement.attributes.md)([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [SimpleXMLElement::children](simplexmlelement.children.md)([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [SimpleXMLElement::count](simplexmlelement.count.md)(): [int](language.types.integer.md)

public function [SimpleXMLElement::current](simplexmlelement.current.md)(): [SimpleXMLElement](class.simplexmlelement.md)

public function [SimpleXMLElement::getDocNamespaces](simplexmlelement.getdocnamespaces.md)([bool](language.types.boolean.md) `$recursive` = **`false`**, [bool](language.types.boolean.md) `$fromRoot` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [SimpleXMLElement::getName](simplexmlelement.getname.md)(): [string](language.types.string.md)

public function [SimpleXMLElement::getNamespaces](simplexmlelement.getnamespaces.md)([bool](language.types.boolean.md) `$recursive` = **`false`**): [array](language.types.array.md)

public function [SimpleXMLElement::getChildren](simplexmlelement.getchildren.md)(): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [SimpleXMLElement::hasChildren](simplexmlelement.haschildren.md)(): [bool](language.types.boolean.md)

public function [SimpleXMLElement::key](simplexmlelement.key.md)(): [string](language.types.string.md)

public function [SimpleXMLElement::next](simplexmlelement.next.md)(): [void](language.types.void.md)

public function [SimpleXMLElement::registerXPathNamespace](simplexmlelement.registerxpathnamespace.md)([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [SimpleXMLElement::rewind](simplexmlelement.rewind.md)(): [void](language.types.void.md)

public function [SimpleXMLElement::\_\_toString](simplexmlelement.tostring.md)(): [string](language.types.string.md)

public function [SimpleXMLElement::valid](simplexmlelement.valid.md)(): [bool](language.types.boolean.md)

public function [SimpleXMLElement::xpath](simplexmlelement.xpath.md)([string](language.types.string.md) `$expression`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Métodos iteradores (**SimpleXMLIterator::hasChildren()**, **SimpleXMLIterator::getChildren()**, **SimpleXMLIterator::current()**, **SimpleXMLIterator::key()**, **SimpleXMLIterator::next()**,**SimpleXMLIterator::rewind()**, **SimpleXMLIterator::valid()**) foram movidos para [SimpleXMLElement](class.simplexmlelement.md). |
| 8.0.0 | **SimpleXMLIterator** implementa [Stringable](class.stringable.md) agora. |

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
