# Retorna os namespaces utilizados no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.getnamespaces.php

---

# SimpleXMLElement::getNamespaces

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SimpleXMLElement::getNamespaces — 
Retorna os namespaces utilizados no documento

### Descrição

public function **SimpleXMLElement::getNamespaces**([bool](language.types.boolean.md) `$recursive` = **`false`**): [array](language.types.array.md)

Retorna os namespaces utilizados no documento

### Parâmetros

`recursive`
:   Se especificado, retorna todos os namespaces utilizados no nó pai e nos nós filhos.
    Caso contrário, retorna apenas os namespaces utilizados no nó raíz (root node).

### Valor Retornado

O método `getNamespaces` retorna uma [array](language.types.array.md) de
namespace com suas respectivas URIs.

### Examples

**Exemplo #1 Get document namespaces in use**

```
<?php

$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:person id="1">John Doe</p:person>
    <p:person id="2">Susie Q. Public</p:person>
</people>
XML;

$sxe = new SimpleXMLElement($xml);

$namespaces = $sxe->getNamespaces(true);
var_dump($namespaces);

?>
```

O exemplo acima produzirá:

```
array(1) {
  ["p"]=>
  string(21) "http://example.org/ns"
}
```

### Veja também

- [SimpleXMLElement::getDocNamespaces()](simplexmlelement.getdocnamespaces.md) - Retorna um namespace declarado no documento
- [SimpleXMLElement::registerXPathNamespace()](simplexmlelement.registerxpathnamespace.md) - Cria um prefixo/namespace de contexto para a próxima consulta XPath

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
