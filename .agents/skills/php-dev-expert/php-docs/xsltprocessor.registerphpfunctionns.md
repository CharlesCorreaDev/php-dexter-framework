# Registra uma função PHP como uma função XSLT com namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.registerphpfunctionns.php

---

# XSLTProcessor::registerPHPFunctionNS

(PHP >= 8.4.0)

XSLTProcessor::registerPHPFunctionNS — Registra uma função PHP como uma função XSLT com namespace

### Descrição

public function **XSLTProcessor::registerPHPFunctionNS**([string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callable`): [void](language.types.void.md)

Este método permite usar uma função PHP como uma função XSLT com namespace dentro de folhas de estilo XSL.

### Parâmetros

`namespaceURI`
:   O URI do namespace.

`name`
:   O nome da função local dentro do namespace.

`callable`
:   A função PHP a ser chamada quando a função XSL for chamada dentro da folha de estilo.
    Quando uma lista de nós é passada como parâmetro para a função de retorno,
    o argumento se torna um array contendo os nós DOM correspondentes.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um nome de chamada de retorno não for válido.
- Lança uma exceção [ValueError](class.valueerror.md) se
  `options` contiver uma opção inválida.
- Lança uma exceção [ValueError](class.valueerror.md) s
  `overrideEncoding` for uma codificação desconhecida.
- Lança uma exceção [TypeError](class.typeerror.md) se
  uma função de retorno informada não for chamável.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Chamada de função PHP simples a partir de uma folha de estilo**

```
<?php
$xml = <<<EOB
<allusers>
<user>
 <uid>bob</uid>
</user>
<user>
 <uid>joe</uid>
</user>
</allusers>
EOB;
$xsl = <<<EOB
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:my="urn:my.ns">
<xsl:output method="html" encoding="utf-8" indent="yes"/>
<xsl:template match="allusers">
 <html><body>
   <h2><xsl:value-of select="my:count(user/uid)" /> users</h2>
   <table>
   <xsl:for-each select="user">
     <tr>
      <td>
       <xsl:value-of select="my:uppercase(string(uid))"/>
      </td>
     </tr>
   </xsl:for-each>
   </table>
 </body></html>
</xsl:template>
</xsl:stylesheet>
EOB;
$xmldoc = new DOMDocument();
$xmldoc->loadXML($xml);
$xsldoc = new DOMDocument();
$xsldoc->loadXML($xsl);

$proc = new XSLTProcessor();
$proc->registerPHPFunctionNS('urn:my.ns', 'uppercase', strtoupper(...));
$proc->registerPHPFunctionNS('urn:my.ns', 'count', fn (array $arg1) => count($arg1));
$proc->importStyleSheet($xsldoc);
echo $proc->transformToXML($xmldoc);
?>
```

### Veja também

- [DOMXPath::registerPhpFunctionNS()](domxpath.registerphpfunctionns.md) - Registra uma função PHP como função XPath com namespace
- [DOMXPath::registerPhpFunctions()](domxpath.registerphpfunctions.md) - Registra funções PHP como funções XPath
- [XSLTProcessor::registerPhpFunctions()](xsltprocessor.registerphpfunctions.md) - Habilita o uso de funções do PHP como funções XSLT

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
