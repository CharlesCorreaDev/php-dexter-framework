# Obtém um XPath para um nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.getnodepath.php

---

# DOMNode::getNodePath

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DOMNode::getNodePath — Obtém um XPath para um nó

### Descrição

public function **DOMNode::getNodePath**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém um caminho de localização XPath para o nó.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) contendo o XPath, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **DOMNode::getNodePath()****

```
<?php
// Crie uma nova instância de DOMDocument
$dom = new DOMDocument;

// Carregue o XML
$dom->loadXML('
<fruits>
 <apples>
  <apple>braeburn</apple>
  <apple>granny smith</apple>
 </apples>
 <pears>
  <pear>conference</pear>
 </pears>
</fruits>
');

// Imprima o XPath para cada elemento
foreach ($dom->getElementsByTagName('*') as $node) {
    echo $node->getNodePath() . "\n";
}
?>
```

O exemplo acima produzirá:

```
/fruits
/fruits/apples
/fruits/apples/apple[1]
/fruits/apples/apple[2]
/fruits/pears
/fruits/pears/pear
```

### Veja também

- [DOMXPath](class.domxpath.md)

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
