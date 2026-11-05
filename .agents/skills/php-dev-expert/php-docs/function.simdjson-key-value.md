# Decodifica o valor de uma string JSON localizada no ponteiro JSON solicitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simdjson-key-value.php

---

# simdjson\_key\_value

(PECL simdjson >= 2.0.0)

simdjson\_key\_value — Decodifica o valor de uma string JSON localizada no ponteiro JSON solicitado

### Descrição

function **simdjson\_key\_value**(  
    [string](language.types.string.md) `$json`,  
    [string](language.types.string.md) `$key`,  
    [bool](language.types.boolean.md) `$associative` = **`false`**,  
    [int](language.types.integer.md) `$depth` = 512  
): [mixed](language.types.mixed.md)

Decodifica e retorna o valor encontrado no ponteiro JSON solicitado.

### Parâmetros

`json`
:   A [string](language.types.string.md) `json` sendo consultada e decodificada.

    Esta função só funciona com strings codificadas em UTF-8.

    Esta função analisa entradas válidas que
    [json\_decode()](function.json-decode.md) pode decodificar,
    desde que tenham menos de 4 GiB de comprimento.

`key`
:   A [string](language.types.string.md) de ponteiro JSON.

`associative`
:   Quando **`true`**, os objetos JSON serão retornados como
    [array](language.types.array.md)s associativos; quando **`false`**, os objetos JSON serão retornados como [object](language.types.object.md)s.

`depth`
:   Profundidade máxima de aninhamento da estrutura que está sendo decodificada.
    O valor deve ser maior que `0`,
    e menor ou igual a `2147483647`.
    Os chamadores devem usar valores razoavelmente pequenos,
    porque profundidades maiores exigem mais espaço de buffer e
    aumentarão a profundidade de recursão, ao contrário da implementação atual de [json\_decode()](function.json-decode.md).

### Valor Retornado

Retorna a parte do valor codificado em `json`
à qual `key` se refere no tipo PHP apropriado.
Os valores `true`, `false` e
`null` são retornados como **`true`**, **`false`** e **`null`**
respectivamente.

### Erros/Exceções

Se `json` ou `key` for inválido,
ou `key` não puder ser encontrado em `json`,
uma [SimdJsonException](class.simdjsonexception.md) será lançada a partir do PECL simdjson 2.1.0,
enquanto anteriormente, uma [RuntimeException](class.runtimeexception.md) era lançada.

Se `depth` estiver fora do intervalo permitido,
um [SimdJsonValueError](class.simdjsonvalueerror.md) será gerado a partir do PECL simdjson 3.0.0,
enquanto anteriormente, um erro de nível **`E_WARNING`** era gerado.

### Veja também

- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [simdjson\_decode()](function.simdjson-decode.md) - Decodifica uma string JSON

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
