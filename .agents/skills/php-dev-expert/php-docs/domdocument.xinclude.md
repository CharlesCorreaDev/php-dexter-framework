# Substitui XIncludes em um objeto DOMDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.xinclude.php

---

# DOMDocument::xinclude

(PHP 5, PHP 7, PHP 8)

DOMDocument::xinclude — 
Substitui XIncludes em um objeto DOMDocument

### Descrição

public function **DOMDocument::xinclude**([int](language.types.integer.md) `$options` = 0): [int](language.types.integer.md)|[false](language.types.singleton.md)

Este método substitui [» XIncludes](https://www.w3.org/TR/xinclude/) em um objeto DOMDocument.

> **Nota**:
>
> Devido ao libxml2 resolver automaticamente entidades, este método produzirá
> resultados inesperados se o arquivo XML incluído tiver um DTD anexado.

### Parâmetros

`options`
:   [Bit a bit `OR`](language.operators.bitwise.md)
    das [constantes de opções da libxml](libxml.constants.md).

### Valor Retornado

Retorna o número de XIncludes no documento, -1 se algum processamento falhar,
ou **`false`** se não houver substituições.

### Examples

**Exemplo #1 Exemplo de DOMDocument::xinclude()**

```
<?php

$xml = <<<EOD
<?xml version="1.0" ?>
<chapter xmlns:xi="http://www.w3.org/2001/XInclude">
 <title>Books of the other guy..</title>
 <para>
  <xi:include href="examples/book.xml">
   <xi:fallback>
    <error>xinclude: book.xml not found</error>
   </xi:fallback>
  </xi:include>
 </para>
</chapter>
EOD;

$dom = new DOMDocument;

// vamos ter uma saída bonita
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;

// carrega a string XML definida acima
$dom->loadXML($xml);

// substitui xincludes
$dom->xinclude();

echo $dom->saveXML();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
<?xml version="1.0"?>
<chapter xmlns:xi="http://www.w3.org/2001/XInclude">
  <title>Books of the other guy..</title>
  <para>
    <row xml:base="/home/didou/book.xml">
       <entry>The Grapes of Wrath</entry>
       <entry>John Steinbeck</entry>
       <entry>en</entry>
       <entry>0140186409</entry>
      </row>
    <row xml:base="/home/didou/book.xml">
       <entry>The Pearl</entry>
       <entry>John Steinbeck</entry>
       <entry>en</entry>
       <entry>014017737X</entry>
      </row>
    <row xml:base="/home/didou/book.xml">
       <entry>Samarcande</entry>
       <entry>Amine Maalouf</entry>
       <entry>fr</entry>
       <entry>2253051209</entry>
      </row>
  </para>
</chapter>
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
