# Procura por um elemento com um determinado ID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.getelementbyid.php

---

# DOMDocument::getElementById

(PHP 5, PHP 7, PHP 8)

DOMDocument::getElementById — Procura por um elemento com um determinado ID

### Descrição

public function **DOMDocument::getElementById**([string](language.types.string.md) `$elementId`): [?](language.types.null.md)[DOMElement](class.domelement.md)

Esta função é semelhante a
[DOMDocument::getElementsByTagName](domdocument.getelementsbytagname.md) mas
procura por um elemento com um determinado ID.

Para que esta função funcione, será necessário definir alguns atributos de ID
com [DOMElement::setIdAttribute](domelement.setidattribute.md)
ou um DTD que define um atributo como tipo ID.
Neste último caso, será necessário validar o documento com
[DOMDocument::validate](domdocument.validate.md)
ou [DOMDocument::$validateOnParse](class.domdocument.md#domdocument.props.validateonparse) antes de usar esta função.

### Parâmetros

`elementId`
:   O valor de ID único para um elemento.

### Valor Retornado

Retorna o [DOMElement](class.domelement.md) ou **`null`** se o elemento não
for encontrado.

### Examples

**Exemplo #1 Exemplo de DOMDocument::getElementById()**

Os exemplos a seguir usam um arquivo book.xml que contém o seguinte:

```
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE books [
  <!ELEMENT books   (book+)>
  <!ELEMENT book    (title, author+, xhtml:blurb?)>
  <!ELEMENT title   (#PCDATA)>
  <!ELEMENT blurb   (#PCDATA)>
  <!ELEMENT author  (#PCDATA)>
  <!ATTLIST books   xmlns        CDATA  #IMPLIED>
  <!ATTLIST books   xmlns:xhtml  CDATA  #IMPLIED>
  <!ATTLIST book    id           ID     #IMPLIED>
  <!ATTLIST author  email        CDATA  #IMPLIED>
]>
<?xml-stylesheet type="text/xsl" href="style.xsl"?>
<books xmlns="http://books.php/" xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <book id="php-basics">
    <title>Princípios do PHP</title>
    <author email="jim.smith@basics.php">Jim Smith</author>
    <author email="jane.smith@basics.php">Jane Smith</author>
    <xhtml:blurb><![CDATA[
<p><em>Princípios do PHP</em> fornece uma introdução ao PHP.</p>
]]></xhtml:blurb>
  </book>
  <book id="php-advanced">
    <title>Programação PHP Avançada</title>
    <author email="jon.doe@advanced.php">Jon Doe</author>
  </book>
</books>
```

```
<?php

$doc = new DomDocument;

// Precisamos validar nosso documento antes de referenciar o ID
$doc->validateOnParse = true;
$doc->load('examples/book.xml');

echo "O elemento cujo ID é 'php-basics' é: " . $doc->getElementById('php-basics')->tagName . "\n";

?>
```

O exemplo acima produzirá:

```
O elemento cujo ID é 'php-basics' é: book
```

### Veja também

- [DOMDocument::getElementsByTagName()](domdocument.getelementsbytagname.md) - Procura por todos os elementos com uma determinada tag name local

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
