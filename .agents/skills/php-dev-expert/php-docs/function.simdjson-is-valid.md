# Verifica se uma string JSON é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simdjson-is-valid.php

---

# simdjson\_is\_valid

(PECL simdjson >= 2.0.0)

simdjson\_is\_valid — Verifica se uma string JSON é válida

### Descrição

function **simdjson\_is\_valid**([string](language.types.string.md) `$json`, [int](language.types.integer.md) `$depth` = 512): [bool](language.types.boolean.md)

Recebe uma string codificada em JSON e retorna true se for válida.

### Parâmetros

`json`
:   A [string](language.types.string.md) `json` sendo validada.

    Esta função só funciona com strings codificadas em UTF-8.

    Esta função valida entradas que
    [json\_decode()](function.json-decode.md) pode decodificar,
    desde que tenham menos de 4 GiB de comprimento.

`depth`
:   Profundidade máxima de aninhamento da estrutura que está sendo validada.
    O valor deve ser maior que `0`,
    e menor ou igual a `2147483647`.
    Os chamadores devem usar valores razoavelmente pequenos,
    porque profundidades maiores exigem mais espaço de buffer e
    aumentarão a profundidade de recursão, ao contrário da implementação atual de [json\_decode()](function.json-decode.md).

### Valor Retornado

Retorna **`true`** se `json` for uma string JSON válida,
**`false`** caso contrário.

### Erros/Exceções

Se `json` for maior que 4 GiB, uma [SimdJsonException](class.simdjsonexception.md) será lançada a partir do PECL simdjson 2.1.0,
enquanto anteriormente, uma [RuntimeException](class.runtimeexception.md) era lançada.

Se `depth` estiver fora do intervalo permitido,
um [SimdJsonValueError](class.simdjsonvalueerror.md) será gerado a partir do PECL simdjson 3.0.0,
enquanto anteriormente, um erro de nível **`E_WARNING`** era gerado.

### Examples

**Exemplo #1 Exemplos de [simdjson\_decode()](function.simdjson-decode.md)**

```
<?php
$json = '{"a":1,"b":2,"c":3}';
$invalidJson = '{"a":1,"b":2,"c":';

var_dump(simdjson_is_valid($json));
var_dump(simdjson_is_valid($invalidJson));

?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

**Exemplo #2 Erros de `depth`**

```
<?php
// Codificando alguns dados com uma profundidade máxima de 4
// (array -> array -> array -> string)
$json = json_encode(
    [
        1 => [
            'English' => [
                'One',
                'January'
            ],
            'French' => [
                'Une',
                'Janvier'
            ]
        ]
    ]
);

// Mostra os erros para diferentes profundidades.
var_dump(simdjson_is_valid($json, 4));
var_dump(simdjson_is_valid($json, 3));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Notas

> **Nota**:
>
> A especificação JSON não é JavaScript, mas um subconjunto de JavaScript.

> **Nota**:
>
> Em caso de falha na decodificação,
> uma [SimdJsonException](class.simdjsonexception.md) é lançada
> e **SimdJsonException::getCode()** e
> **SimdJsonException::getMessage()** podem ser usados
> para determinar a natureza exata do erro.

### Veja também

- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON

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
