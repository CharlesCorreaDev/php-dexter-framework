# Cria entidade DTD inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startdtdentity.php

---

# XMLWriter::startDtdEntity

# xmlwriter\_start\_dtd\_entity

(PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startDtdEntity -- xmlwriter\_start\_dtd\_entity — Cria entidade DTD inicial

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startDtdEntity**([string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$isParam`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_dtd\_entity**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$name`, [bool](language.types.boolean.md) `$isParam`): [bool](language.types.boolean.md)

Inicia uma entidade DTD.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`name`
:   O nome da entidade.

`isParam`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endDtdEntity()](xmlwriter.enddtdentity.md) - Encerra a entidade DTD atual
- [XMLWriter::writeDtdEntity()](xmlwriter.writedtdentity.md) - Escreve a tag de entidade DTD completa

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
