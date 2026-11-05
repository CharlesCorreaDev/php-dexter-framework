# Escreve atributo completo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writeattribute.php

---

# XMLWriter::writeAttribute

# xmlwriter\_write\_attribute

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeAttribute -- xmlwriter\_write\_attribute — Escreve atributo completo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeAttribute**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_attribute**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Escreve um atributo completo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome do atributo.

`value`
:   O valor do atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Misturando subelementos e atributos**

Se a escrita de subelementos e atributos for intercalada, qualquer tentativa de escrever
atributos após o primeiro subelemento falhará e retornará falso.

```
<?php
$xml = new XMLWriter();
$xml->openMemory();

$xml->startElement('element');
$xml->writeAttribute('attr1', '0');
$xml->writeElement('subelem', '0');
var_dump($xml->writeAttribute('attr2', '0'));
$xml->endElement();

echo $xml->flush();
?>
```

O exemplo acima produzirá:

```
bool(false)
<element attr1="0"><subelem>0</subelem></element>
```

### Veja também

- [XMLWriter::writeAttributeNs()](xmlwriter.writeattributens.md) - Escreve atributo com namespace completo
- [XMLWriter::startAttribute()](xmlwriter.startattribute.md) - Inicia um atributo
- [XMLWriter::startAttributeNs()](xmlwriter.startattributens.md) - Inicia um atributo com namespace
- [XMLWriter::endAttribute()](xmlwriter.endattribute.md) - Termina o atributo

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
