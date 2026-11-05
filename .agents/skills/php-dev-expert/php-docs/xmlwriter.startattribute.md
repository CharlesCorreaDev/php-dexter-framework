# Inicia um atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startattribute.php

---

# XMLWriter::startAttribute

# xmlwriter\_start\_attribute

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startAttribute -- xmlwriter\_start\_attribute — Inicia um atributo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startAttribute**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_attribute**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Inicia um atributo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Uso básico de **XMLWriter::startAttribute()****

```
<?php
$writer = new XMLWriter;
$writer->openURI('php://output');
$writer->startDocument('1.0', 'UTF-8');
$writer->startElement('element');
$writer->startAttribute('attribute');
$writer->text('value');
$writer->endAttribute();
$writer->endElement();
$writer->endDocument();
```

O exemplo acima produzirá
algo semelhante a:

```
<?xml version="1.0" encoding="UTF-8"?>
<element attribute="value"/>
```

### Veja também

- [XMLWriter::startAttributeNs()](xmlwriter.startattributens.md) - Inicia um atributo com namespace
- [XMLWriter::endAttribute()](xmlwriter.endattribute.md) - Termina o atributo
- [XMLWriter::writeAttribute()](xmlwriter.writeattribute.md) - Escreve atributo completo
- [XMLWriter::writeAttributeNs()](xmlwriter.writeattributens.md) - Escreve atributo com namespace completo

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
