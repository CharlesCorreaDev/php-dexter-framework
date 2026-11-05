# Retorna uma string XML bem formada (well-formed) baseada em um elemento SimpleXML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.asxml.php

---

# SimpleXMLElement::asXML

(PHP 5, PHP 7, PHP 8)

SimpleXMLElement::asXML — 
Retorna uma string XML bem formada (well-formed) baseada em um elemento SimpleXML

### Descrição

public function **SimpleXMLElement::asXML**([?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

O método `asXML` formata os dados dos objetos pais
em XML de versão 1.0.

### Parâmetros

`filename`
:   Se um [string](language.types.string.md) for fornecido, a função grava os dados no arquivo em vez de
    retorná-lo.

### Valor Retornado

Se o `filename` não for especificado, esta função
retornará uma [string](language.types.string.md) no caso de sucesso, e **`false`** no caso de erro. Se
o parâmetro for especificado, retornará **`true`** se o arquivo for escrito com sucesso,
e **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `filename` é anulável agora. |

### Examples

**Exemplo #1 Recuperando o XML**

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

echo $xml->asXML(); // <?xml ... <a><b><c>text</c><c>stuff</c> ...

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<a>
 <b>
  <c>text</c>
  <c>stuff</c>
 </b>
 <d>
  <c>code</c>
 </d>
</a>
```

O método `asXML` também funcionará em resultados Xpath:

**Exemplo #2 Utilizando asXML() em resultados [SimpleXMLElement::xpath()](simplexmlelement.xpath.md)**

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
    echo $node->asXML(); // <c>text</c> e <c>stuff</c>
}
?>
```

O exemplo acima produzirá:

```
<c>text</c><c>stuff</c>
```

### Veja também

- [SimpleXMLElement::\_\_toString()](simplexmlelement.tostring.md) - Retorna o conteúdo como uma string
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
