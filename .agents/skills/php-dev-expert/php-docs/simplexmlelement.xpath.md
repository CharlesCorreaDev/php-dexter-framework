# Executa uma consulta XPath em dados XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.xpath.php

---

# SimpleXMLElement::xpath

(PHP 5, PHP 7, PHP 8)

SimpleXMLElement::xpath — Executa uma consulta XPath em dados XML

### Descrição

public function **SimpleXMLElement::xpath**([string](language.types.string.md) `$expression`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

O método `xpath` vasculha o nó SimpleXML em busca de
nós filhos correspondentes ao XPath `expression`.

### Parâmetros

`expression`
:   Um caminho XPath

### Valor Retornado

Retorna uma [array](language.types.array.md) de um objeto SimpleXMLElement em caso de sucesso; ou **`null`** ou **`false`** em
caso de erro.

### Examples

**Exemplo #1 Xpath**

```
<?php
$string = <<<XML
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

/* Pesquisa por <a><b><c> */
$result = $xml->xpath('/a/b/c');

foreach ($result as $node) {
    echo '/a/b/c: ',$node,"\n";
}

/* Caminhos relativos também funcionam... */
$result = $xml->xpath('b/c');

foreach ($result as $node) {
    echo 'b/c: ',$node,"\n";
}
?>
```

O exemplo acima produzirá:

```
/a/b/c: text
/a/b/c: stuff
b/c: text
b/c: stuff
```

Note que os dois resultados são iguais.

### Veja também

- [SimpleXMLElement::registerXPathNamespace()](simplexmlelement.registerxpathnamespace.md) - Cria um prefixo/namespace de contexto para a próxima consulta XPath
- [SimpleXMLElement::getDocNamespaces()](simplexmlelement.getdocnamespaces.md) - Retorna um namespace declarado no documento
- [SimpleXMLElement::getNamespaces()](simplexmlelement.getnamespaces.md) - Retorna os namespaces utilizados no documento
- [Uso Básico de SimpleXML](simplexml.examples-basic.md)

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
