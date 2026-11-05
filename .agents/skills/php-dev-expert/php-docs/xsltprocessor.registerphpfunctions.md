# Habilita o uso de funções do PHP como funções XSLT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.registerphpfunctions.php

---

# XSLTProcessor::registerPHPFunctions

(PHP 5 >= 5.0.4, PHP 7, PHP 8)

XSLTProcessor::registerPHPFunctions — Habilita o uso de funções do PHP como funções XSLT

### Descrição

public function **XSLTProcessor::registerPHPFunctions**([array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$functions` = **`null`**): [void](language.types.void.md)

Este método habilita o uso de funções PHP como funções XSLT
nas folhas de estilo XSL.

### Parâmetros

`functions`
:   Use este parâmetro para permitir que apenas certas funções sejam chamadas a partir do
    XSLT.

    Este parâmetro pode ser um dos seguintes:
    uma [string](language.types.string.md) (um nome de função),
    um [array](language.types.array.md) indexado de nomes de funções
    ou um [array](language.types.array.md) associativo com chaves nos nomes de funções
    e valores associados sendo do tipo [callable](language.types.callable.md).

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

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Nomes de retorno de chamada inválidos agora lançam uma exceção [ValueError](class.valueerror.md). Passar uma entrada que não pode ser chamada agora lança uma exceção [TypeError](class.typeerror.md). |
| 8.4.0 | Agora é possível usar [callable](language.types.callable.md)s para funções de retorno ao usar `functions` com entradas de [array](language.types.array.md). |

### Examples

**Exemplo #1 Simples chamada de função do PHP a partir de uma folha de estilos**

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
    xmlns:php="http://php.net/xsl">
<xsl:output method="html" encoding="utf-8" indent="yes"/>
 <xsl:template match="allusers">
  <html><body>
    <h2>Users</h2>
    <table>
    <xsl:for-each select="user">
      <tr><td>
        <xsl:value-of
             select="php:function('ucfirst',string(uid))"/>
      </td></tr>
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
$proc->registerPHPFunctions();
$proc->importStyleSheet($xsldoc);
echo $proc->transformToXML($xmldoc);
?>
```

### Veja também

- [DOMXPath::registerPhpFunctions()](domxpath.registerphpfunctions.md) - Registra funções PHP como funções XPath

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
