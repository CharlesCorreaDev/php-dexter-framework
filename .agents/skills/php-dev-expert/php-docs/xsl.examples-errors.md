# Tratamento de erros com funções de tratamento de erros libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.examples-errors.php

---

## Tratamento de erros com funções de tratamento de erros libxml

libxml oferece uma série de funções para tratamento de erros, que podem ser
empregadas para capturar e lidar com erros no processamento XSLT.

**Exemplo #1 fruits.xml**

Um arquivo XML válido

```
<fruits>
 <fruit>Apple</fruit>
 <fruit>Banana</fruit>
 <fruit>Cherry</fruit>
</fruits>
```

**Exemplo #2 fruits.xsl**

Contém uma expressão de seleção inválida

```
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:output method="html" encoding="utf-8" indent="no"/>
 <xsl:template match="fruits">
  <ul>
   <xsl:apply-templates/>
  </ul>
 </xsl:template>
 <xsl:template match="fruit">
  <li><xsl:value-of select="THIS IS A DELIBERATE ERROR!"/></li>
 </xsl:template>
</xsl:stylesheet>
```

**Exemplo #3 Erros de agrupamento e impressão**

O exemplo abaixo captura e exibe erros de libxml gerados ao chamar
[XSLTProcessor::importStyleSheet()](xsltprocessor.importstylesheet.md) com uma
folha de estilo contendo um erro.

```
<?php

$xmldoc = new DOMDocument();
$xsldoc = new DOMDocument();
$xsl = new XSLTProcessor();

$xmldoc->loadXML('fruits.xml');
$xsldoc->loadXML('fruits.xsl');

libxml_use_internal_errors(true);
$result = $xsl->importStyleSheet($xsldoc);
if (!$result) {
    foreach (libxml_get_errors() as $error) {
        echo "Libxml error: {$error->message}\n";
    }
}
libxml_use_internal_errors(false);

if ($result) {
    echo $xsl->transformToXML($xmldoc);
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Libxml error: Invalid expression

Libxml error: compilation error: file fruits.xsl line 9 element value-of
Libxml error: xsl:value-of : could not compile select expression 'THIS IS A DELIBERATE ERROR!'
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
