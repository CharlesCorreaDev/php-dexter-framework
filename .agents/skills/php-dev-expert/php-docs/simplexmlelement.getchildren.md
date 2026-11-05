# Retorna os sub-elementos do elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.getchildren.php

---

# SimpleXMLElement::getChildren

(PHP 8)

SimpleXMLElement::getChildren — Retorna os sub-elementos do elemento atual

### Descrição

public function **SimpleXMLElement::getChildren**(): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::getChildren()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método retorna um objeto [SimpleXMLElement](class.simplexmlelement.md)
contendo sub-elementos do elemento [SimpleXMLElement](class.simplexmlelement.md)
atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [SimpleXMLElement](class.simplexmlelement.md) contendo
os sub-elementos do elemento atual.

### Examples

**Exemplo #1 Retornando os sub-elementos do elemento atual**

```
<?php
$xml = <<<XML
<livros>
    <livro>
        <titulo>PHP Básico</titulo>
        <autor>Fulano de Tal</autor>
    </livro>
    <livro>XML Básico</livro>
</livros>
XML;

$xmlElement = new SimpleXMLElement($xml);
for ($xmlElement->rewind(); $xmlElement->valid(); $xmlElement->next()) {
    foreach($xmlElement->getChildren() as $name => $data) {
    echo "O $name é '$data' da classe " . get_class($data) . "\n";
    }
}
?>
```

O exemplo acima produzirá:

```
O titulo é 'PHP Básico' da classe SimpleXMLElement
O autor é 'Fulano de Tal' da classe SimpleXMLElement
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
