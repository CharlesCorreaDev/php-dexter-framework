# Ativa/desativa o recuo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.setindent.php

---

# XMLWriter::setIndent

# xmlwriter\_set\_indent

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::setIndent -- xmlwriter\_set\_indent — Ativa/desativa o recuo

### Descrição

Estilo orientado a objetos

public function **XMLWriter::setIndent**([bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_set\_indent**([XMLWriter](class.xmlwriter.md) `$writer`, [bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

Ativa/desativa o recuo.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`enable`
:   Se o recuo deve ser habilitado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **XMLWriter::setIndent()** e conteúdo misto**

Habilitar o recuo não é adequado para conteúdo misto, porque a string de recuo
também é inserida antes dos elementos alinhados.

```
<?php
$writer = new XMLWriter();
$writer->openMemory();
$writer->setIndent(true);
$writer->startDocument();
$writer->startElement('p');
$writer->text('antes do');
$writer->writeElement('a', 'elemento');
$writer->text('depois');
$writer->endElement();
$writer->endDocument();
echo $writer->outputMemory();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<p>antes do <a>elemento</a>
depois</p>
```

### Notas

> **Nota**:
>
> O recuo é redefinido quando um xmlwriter é aberto.

### Veja também

- [XMLWriter::setIndentString()](xmlwriter.setindentstring.md) - Define a string usada para recuo

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
