# Verifica se o JSON contém o valor referenciado por um ponteiro JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simdjson-key-exists.php

---

# simdjson\_key\_exists

(PECL simdjson >= 2.0.0)

simdjson\_key\_exists — Verifica se o JSON contém o valor referenciado por um ponteiro JSON

### Descrição

function **simdjson\_key\_exists**([string](language.types.string.md) `$json`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$depth` = ?): [bool](language.types.boolean.md)

Conta o número de elementos do objeto/array encontrados no ponteiro JSON solicitado.

### Parâmetros

`json`
:   A [string](language.types.string.md) `json` sendo consultada.

`key`
:   A [string](language.types.string.md) de ponteiro JSON.

`depth`
:   Profundidade máxima de aninhamento da estrutura que está sendo validada.
    O valor deve ser maior que `0`,
    e menor ou igual a `2147483647`.
    Os chamadores devem usar valores razoavelmente pequenos,
    porque profundidades maiores exigem mais espaço de buffer e
    aumentarão a profundidade de recursão, ao contrário da implementação atual de [json\_decode()](function.json-decode.md).

`throw_if_uncountable`
:   Quando verdadeiro, uma [SimdJsonException](class.simdjsonexception.md) será lançada
    em vez de retornar 0 quando o valor para o qual o ponteiro JSON aponta
    não for um objeto nem um array.

### Valor Retornado

Retorna **`true`** se o ponteiro JSON for válido e se referir a um valor encontrado em uma string JSON válida.
Retorna **`false`** se o JSON for válido, mas não contiver o ponteiro JSON.

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
