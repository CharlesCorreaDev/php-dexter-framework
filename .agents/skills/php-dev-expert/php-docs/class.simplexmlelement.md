# A classe SimpleXMLElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.simplexmlelement.php

---

# A classe SimpleXMLElement

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa um elemento em um documento XML.

## Resumo da classe

class ****SimpleXMLElement****
implements
[Stringable](class.stringable.md),
[Countable](class.countable.md),
[RecursiveIterator](class.recursiveiterator.md) {

/\* Métodos \*/

public function [\_\_construct](simplexmlelement.construct.md)(  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$options` = 0,  
    [bool](language.types.boolean.md) `$dataIsURL` = **`false`**,  
    [string](language.types.string.md) `$namespaceOrPrefix` = "",  
    [bool](language.types.boolean.md) `$isPrefix` = **`false`**  
)

public function [addAttribute](simplexmlelement.addattribute.md)([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [void](language.types.void.md)

public function [addChild](simplexmlelement.addchild.md)([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [asXML](simplexmlelement.asxml.md)([?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

public function [attributes](simplexmlelement.attributes.md)([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [children](simplexmlelement.children.md)([?](language.types.null.md)[string](language.types.string.md) `$namespaceOrPrefix` = **`null`**, [bool](language.types.boolean.md) `$isPrefix` = **`false`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [count](simplexmlelement.count.md)(): [int](language.types.integer.md)

public function [current](simplexmlelement.current.md)(): [SimpleXMLElement](class.simplexmlelement.md)

public function [getDocNamespaces](simplexmlelement.getdocnamespaces.md)([bool](language.types.boolean.md) `$recursive` = **`false`**, [bool](language.types.boolean.md) `$fromRoot` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getName](simplexmlelement.getname.md)(): [string](language.types.string.md)

public function [getNamespaces](simplexmlelement.getnamespaces.md)([bool](language.types.boolean.md) `$recursive` = **`false`**): [array](language.types.array.md)

public function [getChildren](simplexmlelement.getchildren.md)(): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

public function [hasChildren](simplexmlelement.haschildren.md)(): [bool](language.types.boolean.md)

public function [key](simplexmlelement.key.md)(): [string](language.types.string.md)

public function [next](simplexmlelement.next.md)(): [void](language.types.void.md)

public function [registerXPathNamespace](simplexmlelement.registerxpathnamespace.md)([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [rewind](simplexmlelement.rewind.md)(): [void](language.types.void.md)

public function [\_\_toString](simplexmlelement.tostring.md)(): [string](language.types.string.md)

public function [valid](simplexmlelement.valid.md)(): [bool](language.types.boolean.md)

public function [xpath](simplexmlelement.xpath.md)([string](language.types.string.md) `$expression`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Métodos de obtenção (como [SimpleXMLElement::asXML()](simplexmlelement.asxml.md) ou [SimpleXMLElement::getName()](simplexmlelement.getname.md)) e a conversão de um **SimpleXMLElement** para [string](language.types.string.md) não reiniciam mais implicitamente o iterador. O iterador agora deve ser reiniciado explicitamente, usando [SimpleXMLElement::rewind()](simplexmlelement.rewind.md), quando necessário. |
| 8.0.0 | **SimpleXMLElement** implementa [Stringable](class.stringable.md), [Countable](class.countable.md), e [RecursiveIterator](class.recursiveiterator.md) agora. |

## Índice

- [SimpleXMLElement::addAttribute](simplexmlelement.addattribute.md) — Adiciona um atributo a elemento SimpleXML
- [SimpleXMLElement::addChild](simplexmlelement.addchild.md) — Adiciona um elemento filho à um nó XML
- [SimpleXMLElement::asXML](simplexmlelement.asxml.md) — Retorna uma string XML bem formada (well-formed) baseada em um elemento SimpleXML
- [SimpleXMLElement::attributes](simplexmlelement.attributes.md) — Identifica um atributo de um elemento
- [SimpleXMLElement::children](simplexmlelement.children.md) — Encontra os nós filhos de um dado nó
- [SimpleXMLElement::\_\_construct](simplexmlelement.construct.md) — Cria um novo objeto SimpleXMLElement
- [SimpleXMLElement::count](simplexmlelement.count.md) — Conta os filhos de um elemento
- [SimpleXMLElement::current](simplexmlelement.current.md) — Retorna o elemento atual
- [SimpleXMLElement::getDocNamespaces](simplexmlelement.getdocnamespaces.md) — Retorna um namespace declarado no documento
- [SimpleXMLElement::getName](simplexmlelement.getname.md) — Obtém o nome de um elemento XML
- [SimpleXMLElement::getNamespaces](simplexmlelement.getnamespaces.md) — Retorna os namespaces utilizados no documento
- [SimpleXMLElement::getChildren](simplexmlelement.getchildren.md) — Retorna os sub-elementos do elemento atual
- [SimpleXMLElement::hasChildren](simplexmlelement.haschildren.md) — Verifica se o elemento atual tem sub-elementos
- [SimpleXMLElement::key](simplexmlelement.key.md) — Retorna a chave atual
- [SimpleXMLElement::next](simplexmlelement.next.md) — Passa para o próximo elemento
- [SimpleXMLElement::registerXPathNamespace](simplexmlelement.registerxpathnamespace.md) — Cria um prefixo/namespace de contexto para a próxima consulta XPath
- [SimpleXMLElement::rewind](simplexmlelement.rewind.md) — Retrocede ao primeiro elemento
- [SimpleXMLElement::saveXML](simplexmlelement.savexml.md) — Sinônimo de SimpleXMLElement::asXML
- [SimpleXMLElement::\_\_toString](simplexmlelement.tostring.md) — Retorna o conteúdo como uma string
- [SimpleXMLElement::valid](simplexmlelement.valid.md) — Verifica se o elemento atual é válido
- [SimpleXMLElement::xpath](simplexmlelement.xpath.md) — Executa uma consulta XPath em dados XML

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
