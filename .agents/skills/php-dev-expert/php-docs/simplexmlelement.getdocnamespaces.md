# Retorna um namespace declarado no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.getdocnamespaces.php

---

# SimpleXMLElement::getDocNamespaces

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SimpleXMLElement::getDocNamespaces — 
Retorna um namespace declarado no documento

### Descrição

public function **SimpleXMLElement::getDocNamespaces**([bool](language.types.boolean.md) `$recursive` = **`false`**, [bool](language.types.boolean.md) `$fromRoot` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um namespace declarado no documento

### Parâmetros

`recursive`
:   Se especificado, retorna todos os namespaces declarados no nó pai e nos nós filhos.
    De outra forma, retornará apenas os namespaces declarados no nó raiz.

`fromRoot`
:   Permite verificar recursivamente os namespaces sob um nó filho em vez
    do nó raiz do documento XML.

### Valor Retornado

O método `getDocNamespaces` retorna uma [array](language.types.array.md)
com os namespaces associados às suas URIs.

### Examples

**Exemplo #1 Pega os namespaces do documento**

```
<?php

$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:p="http://example.org/ns">
    <p:person id="1">John Doe</p:person>
    <p:person id="2">Susie Q. Public</p:person>
</people>
XML;

$sxe = new SimpleXMLElement($xml);

$namespaces = $sxe->getDocNamespaces();
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

**Exemplo #2 Trabalhando com múltiplos namespaces**

```
<?php

$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:person t:id="1">John Doe</p:person>
    <p:person t:id="2" a:addr="123 Street" xmlns:a="http://example.org/addr">
        Susie Q. Public
    </p:person>
</people>
XML;

$sxe = new SimpleXMLElement($xml);

$namespaces = $sxe->getDocNamespaces(TRUE);
var_dump($namespaces);

?>
```

O exemplo acima produzirá:

```
array(3) {
  ["p"]=>
  string(21) "http://example.org/ns"
  ["t"]=>
  string(23) "http://example.org/test"
  ["a"]=>
  string(23) "http://example.org/addr"
}
```

### Veja também

- [SimpleXMLElement::getNamespaces()](simplexmlelement.getnamespaces.md) - Retorna os namespaces utilizados no documento
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
