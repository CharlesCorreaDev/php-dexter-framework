# Compara a posição de dois nós

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.comparedocumentposition.php

---

# DOMNode::compareDocumentPosition

(PHP 8 >= 8.4.0)

DOMNode::compareDocumentPosition — Compara a posição de dois nós

### Descrição

public function **DOMNode::compareDocumentPosition**([DOMNode](class.domnode.md) `$other`): [int](language.types.integer.md)

Compara a posição do outro nó relativa a este nó.

### Parâmetros

`other`
:   O nó com o qual a posição deve ser comparada, relativa a este nó.

### Valor Retornado

Uma máscara de bits das constantes
**`DOMNode::DOCUMENT_POSITION_*`**.

### Examples

**Exemplo #1 Exemplo de **DOMNode::compareDocumentPosition()****

```
<?php
$xml = <<<XML
<root>
    <child1/>
    <child2/>
</root>
XML;

$dom = new DOMDocument();
$dom->loadXML($xml);

$root = $dom->documentElement;
$child1 = $root->firstElementChild;
$child2 = $child1->nextElementSibling;

var_dump($root->compareDocumentPosition($child1));
var_dump($child2->compareDocumentPosition($child1));
?>
```

O exemplo acima produzirá:

```
int(20) // Isto é DOMNode::DOCUMENT_POSITION_CONTAINED_BY | DOMNode::DOCUMENT_POSITION_FOLLOWING
int(2)  // Isto é DOMNode::DOCUMENT_POSITION_PRECEDING
```

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
