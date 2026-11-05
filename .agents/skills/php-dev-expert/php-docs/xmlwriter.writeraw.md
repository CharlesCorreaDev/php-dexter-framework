# Escreve um texto XML bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writeraw.php

---

# XMLWriter::writeRaw

# xmlwriter\_write\_raw

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4)

XMLWriter::writeRaw -- xmlwriter\_write\_raw — Escreve um texto XML bruto

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writeRaw**([string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_raw**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve um texto XML bruto.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`content`
:   A string do texto a ser escrito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::text()](xmlwriter.text.md) - Escreve texto

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
