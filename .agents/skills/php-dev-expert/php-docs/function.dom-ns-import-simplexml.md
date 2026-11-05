# Obtém um objeto Dom\Attr ou Dom\Element a partir de um
   objeto SimpleXMLElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dom-ns-import-simplexml.php

---

# Dom\import\_simplexml

(PHP 8 >= 8.4.0)

Dom\import\_simplexml — 
Obtém um objeto [Dom\Attr](class.dom-attr.md) ou [Dom\Element](class.dom-element.md) a partir de um
objeto [SimpleXMLElement](class.simplexmlelement.md)

### Descrição

function **Dom\import\_simplexml**([object](language.types.object.md) `$node`): [Dom\Attr](class.dom-attr.md)|[Dom\Element](class.dom-element.md)

Esta função toma o `node` de um atributo ou elemento (uma
instância de [SimpleXMLElement](class.simplexmlelement.md)) e cria um
nó [Dom\Attr](class.dom-attr.md) ou [Dom\Element](class.dom-element.md), respectivamente.
O novo [Dom\Node](class.dom-node.md) se refere ao mesmo nó XML subjacente
do [SimpleXMLElement](class.simplexmlelement.md).

### Parâmetros

`node`
:   O nó de atributo ou de elemento a importar (uma instância de [SimpleXMLElement](class.simplexmlelement.md)).

### Valor Retornado

O objeto [Dom\Attr](class.dom-attr.md) ou [Dom\Element](class.dom-element.md).

### Examples

**Exemplo #1 Importando SimpleXML no DOM e modificando o SimpleXML através do DOM**

A manipulação de erro foi omitida para manter o código curto.

```
<?php

$sxe = simplexml_load_string('<books><book><title>blah</title></book></books>');
$elt = Dom\import_simplexml($sxe);
$elt->setAttribute("foo", "bar");
echo $sxe->asXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<books foo="bar"><book><title>blah</title></book></books>
```

### Veja também

- [simplexml\_import\_dom()](function.simplexml-import-dom.md) - Obtém um objeto SimpleXMLElement a partir de um nó XML ou HTML

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
