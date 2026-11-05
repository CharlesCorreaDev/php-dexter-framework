# Obtém nomes de atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.getattributenames.php

---

# DOMElement::getAttributeNames

(PHP 8 >= 8.3.0)

DOMElement::getAttributeNames — Obtém nomes de atributos

### Descrição

public function **DOMElement::getAttributeNames**(): [array](language.types.array.md)

Obtém nomes de atributos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os nomes dos atributos.

### Examples

**Exemplo #1 Exemplo de **DOMElement::getAttributeNames()****

```
<?php

$dom = new DOMDocument();
$dom->loadXML('<html xmlns:some="some:ns" some:test="a" test2="b"/>');
var_dump($dom->documentElement->getAttributeNames());
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  string(10) "xmlns:some"
  [1]=>
  string(9) "some:test"
  [2]=>
  string(5) "test2"
}
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
