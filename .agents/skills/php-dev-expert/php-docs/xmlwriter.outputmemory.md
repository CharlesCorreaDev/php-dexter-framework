# Retorna o buffer atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.outputmemory.php

---

# XMLWriter::outputMemory

# xmlwriter\_output\_memory

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::outputMemory -- xmlwriter\_output\_memory — Retorna o buffer atual

### Descrição

Estilo orientado a objetos

public function **XMLWriter::outputMemory**([bool](language.types.boolean.md) `$flush` = **`true`**): [string](language.types.string.md)

Estilo procedural

function **xmlwriter\_output\_memory**([XMLWriter](class.xmlwriter.md) `$writer`, [bool](language.types.boolean.md) `$flush` = **`true`**): [string](language.types.string.md)

Retorna o buffer atual.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`flush`
:   Se o buffer de saída deve ser esvaziado ou não. O padrão é **`true`**.

### Valor Retornado

Retorna o buffer atual como uma string.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::flush()](xmlwriter.flush.md) - Limpa o buffer atual

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
