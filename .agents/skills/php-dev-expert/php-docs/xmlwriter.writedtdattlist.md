# Escreve a tag de lista de atributos DTD completa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writedtdattlist.php

---

# XMLWriter::writeDtdAttlist

# xmlwriter\_write\_dtd\_attlist

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writeDtdAttlist -- xmlwriter\_write\_dtd\_attlist — Escreve a tag de lista de atributos DTD completa

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeDtdAttlist**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_dtd\_attlist**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve uma lista de atributos DTD.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome da lista de atributos DTD.

`content`
:   O conteúdo da lista de atributos DTD.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startDtdAttlist()](xmlwriter.startdtdattlist.md) - Inicia uma lista de atributos DTD
- [XMLWriter::endDtdAttlist()](xmlwriter.enddtdattlist.md) - Termina a a lista de atributos do DTD atual

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
