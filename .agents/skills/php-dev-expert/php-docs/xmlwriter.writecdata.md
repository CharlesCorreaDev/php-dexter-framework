# Escreve tag CDATA completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writecdata.php

---

# XMLWriter::writeCdata

# xmlwriter\_write\_cdata

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeCdata -- xmlwriter\_write\_cdata — Escreve tag CDATA completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeCdata**([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_cdata**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve uma tag CDATA completa.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`content`
:   O conteúdo do CDATA.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Uso básico de **xmlwriter\_write\_cdata()****

```
<?php
// configura o documento
$xml = new XmlWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('mydoc');
$xml->startElement('myele');

// saída CData
$xml->startElement('mycdataelement');
$xml->writeCData("texto para inclusão como CData");
$xml->endElement();

// finaliza o documento e exibe
$xml->endElement();
$xml->endElement();
echo $xml->outputMemory(true);
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<mydoc>
 <myele>
  <mycdataelement><![CDATA[text for inclusion as CData]]></mycdataelement>
 </myele>
</mydoc>
```

### Veja também

- [XMLWriter::startCdata()](xmlwriter.startcdata.md) - Cria tag de início de CDATA
- [XMLWriter::endCdata()](xmlwriter.endcdata.md) - Termina o CDATA atual

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
