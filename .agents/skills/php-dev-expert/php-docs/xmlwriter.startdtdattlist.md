# Inicia uma lista de atributos DTD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startdtdattlist.php

---

# XMLWriter::startDtdAttlist

# xmlwriter\_start\_dtd\_attlist

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startDtdAttlist -- xmlwriter\_start\_dtd\_attlist — Inicia uma lista de atributos DTD

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startDtdAttlist**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_dtd\_attlist**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Inicia uma lista de atributos DTD.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome da lista de atributos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endDtdAttlist()](xmlwriter.enddtdattlist.md) - Termina a a lista de atributos do DTD atual
- [XMLWriter::writeDtdAttlist()](xmlwriter.writedtdattlist.md) - Escreve a tag de lista de atributos DTD completa

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
