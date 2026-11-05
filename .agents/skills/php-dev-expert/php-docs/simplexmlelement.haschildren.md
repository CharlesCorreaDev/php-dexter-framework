# Verifica se o elemento atual tem sub-elementos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.haschildren.php

---

# SimpleXMLElement::hasChildren

(PHP 8)

SimpleXMLElement::hasChildren — Verifica se o elemento atual tem sub-elementos

### Descrição

public function **SimpleXMLElement::hasChildren**(): [bool](language.types.boolean.md)

**Aviso**

Antes do PHP 8.0, **SimpleXMLElement::hasChildren()** era declarado
somente na sub-classe [SimpleXMLIterator](class.simplexmliterator.md).

Este método verifica se o elemento [SimpleXMLElement](class.simplexmlelement.md) atual tem sub-elementos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o elemento atual tiver sub-elementos, caso contrário, **`false`**.

### Examples

**Exemplo #1 Verificando se o elemento atual tem sub-elementos**

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
    if ($xmlElement->hasChildren()) {
        var_dump($xmlElement->current());
    }
}
?>
```

O exemplo acima produzirá:

```
object(SimpleXMLElement)#2 (2) {
  ["titulo"]=>
  string(10) "PHP Básico"
  ["autor"]=>
  string(13) "Fulano de Tal"
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
