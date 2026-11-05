# Limpa o buffer atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.flush.php

---

# XMLWriter::flush

# xmlwriter\_flush

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0)

XMLWriter::flush -- xmlwriter\_flush — Limpa o buffer atual

### Descrição

Estilo orientado a objetos

public function **XMLWriter::flush**([bool](language.types.boolean.md) `$empty` = **`true`**): [string](language.types.string.md)|[int](language.types.integer.md)

Estilo procedural

function **xmlwriter\_flush**([XMLWriter](class.xmlwriter.md) `$writer`, [bool](language.types.boolean.md) `$empty` = **`true`**): [string](language.types.string.md)|[int](language.types.integer.md)

Limpa o buffer atual.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`empty`
:   Se o buffer deve ser esvaziado ou não. O padrão é **`true`**.

### Valor Retornado

Se o escritor foi aberto na memória, esta função retornará o buffer XML gerado.
Caso contrário, se estiver usando URI, esta função escreverá o buffer e retornará o número de
bytes escritos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | Esta função não pode mais retornar **`false`**. |

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
