# Cria a tag de início de elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startelement.php

---

# XMLWriter::startElement

# xmlwriter\_start\_element

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startElement -- xmlwriter\_start\_element — Cria a tag de início de elemento

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startElement**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_element**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Inicia um elemento.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome do elemento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endElement()](xmlwriter.endelement.md) - Termina o elemento atual
- [XMLWriter::writeElement()](xmlwriter.writeelement.md) - Escreve uma tag de elemento completa

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
