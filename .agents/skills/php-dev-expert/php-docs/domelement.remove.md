# Remove o elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domelement.remove.php

---

# DOMElement::remove

(PHP 8)

DOMElement::remove — Remove o elemento

### Descrição

public function **DOMElement::remove**(): [void](language.types.void.md)

Remove o elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DOMElement::remove()****

Remove o elemento.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><hello/><world/></container>");
$hello = $doc->documentElement->firstChild;

$hello->remove();

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container><world/></container>
```

### Veja também

- [DOMElement::after()](domelement.after.md) - Adiciona nós após o elemento
- [DOMElement::before()](domelement.before.md) - Adiciona nós antes do elemento
- [DOMElement::replaceWith()](domelement.replacewith.md) - Substitui o elemento por novos nodes
- [DOMNode::removeChild()](domnode.removechild.md) - Remove um filho da lista de filhos

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
