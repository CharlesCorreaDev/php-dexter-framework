# Cria um novo objeto XSLTProcessor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.construct.php

---

# XSLTProcessor::\_\_construct

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::\_\_construct — Cria um novo objeto XSLTProcessor

### Descrição

function **XSLTProcessor::\_\_construct**()

Cria um novo objeto [XSLTProcessor](class.xsltprocessor.md).

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Criando um [XSLTProcessor](class.xsltprocessor.md)**

```
<?php

$xsldoc = new DOMDocument();
$xsldoc->load($xsl_filename);

$xmldoc = new DOMDocument();
$xmldoc->load($xml_filename);

$xsl = new XSLTProcessor();
$xsl->importStyleSheet($xsldoc);
echo $xsl->transformToXML($xmldoc);

?>
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
