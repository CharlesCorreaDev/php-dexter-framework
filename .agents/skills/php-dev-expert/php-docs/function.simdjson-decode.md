# Decodifica uma string JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.simdjson-decode.php

---

# simdjson\_decode

(PECL simdjson >= 2.0.0)

simdjson\_decode — Decodifica uma string JSON

### Descrição

function **simdjson\_decode**([string](language.types.string.md) `$json`, [bool](language.types.boolean.md) `$associative` = **`false`**, [int](language.types.integer.md) `$depth` = 512): [mixed](language.types.mixed.md)

Recebe uma string codificada em JSON e a converte em um valor PHP.
Isso usa uma implementação mais rápida de Instrução Simultânea, Múltiplos Dados
do que [json\_decode()](function.json-decode.md) quando suportado pela arquitetura do computador.

### Parâmetros

`json`
:   A [string](language.types.string.md) `json` sendo decodificada.

    Esta função só funciona com strings codificadas em UTF-8.

    Esta função analisa entradas válidas que
    [json\_decode()](function.json-decode.md) pode decodificar,
    desde que tenham menos de 4 GiB de comprimento.

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

Retorna o valor codificado em `json` no tipo PHP apropriado.
Os valores `true`, `false` e
`null` são retornados como **`true`**, **`false`** e **`null`**
respectivamente.

### Erros/Exceções

Se `json` for inválido, uma [SimdJsonException](class.simdjsonexception.md) será lançada a partir do PECL simdjson 2.1.0,
enquanto anteriormente, uma [RuntimeException](class.runtimeexception.md) era lançada.

Se `depth` estiver fora do intervalo permitido,
um [SimdJsonValueError](class.simdjsonvalueerror.md) será gerado a partir do PECL simdjson 3.0.0,
enquanto anteriormente, um erro de nível **`E_WARNING`** era gerado.

### Examples

**Exemplo #1 Exemplos de **simdjson\_decode()****

```
<?php
$json = '{"a":1,"b":2,"c":3}';

var_dump(simdjson_decode($json));
var_dump(simdjson_decode($json, true));

?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (3) {
  ["a"]=>
  int(1)
  ["b"]=>
  int(2)
  ["c"]=>
  int(3)
}
array(3) {
  ["a"]=>
  int(1)
  ["b"]=>
  int(2)
  ["c"]=>
  int(3)
}
```

**Exemplo #2 Acessando propriedades de objetos inválidas**

O acesso a elementos dentro de um objeto que contêm caracteres não
permitidos pela convenção de nomenclatura do PHP (por exemplo, o hífen) pode ser
feito encapsulando o nome do elemento entre chaves e o apóstrofo.

```
<?php

$json = '{"foo-bar": 12345}';

$obj = simdjson_decode($json);
print $obj->{'foo-bar'}; // 12345

?>
```

**Exemplo #3 Erros comuns usando **simdjson\_decode()****

```
<?php

// as seguintes strings são JavaScripts válidos, mas não JSONs válidos

// o nome e o valor devem estar entre aspas duplas
// aspas simples não são válidas
$bad_json = "{ 'bar': 'baz' }";
simdjson_decode($bad_json); // Lança SimdJsonException

// o nome deve estar entre aspas duplas
$bad_json = '{ bar: "baz" }';
simdjson_decode($bad_json); // Lança SimdJsonException

// vírgulas finais não são permitidas
$bad_json = '{ bar: "baz", }';
simdjson_decode($bad_json); // Lança SimdJsonException

?>
```

**Exemplo #4 Erros de `depth`**

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
var_dump(simdjson_decode($json, true, 4));
try {
    var_dump(simdjson_decode($json, true, 3));
} catch (SimdJsonException $e) {
     echo "Capturado: ", $e->getMessage(), "\n";
}
?>
```

O exemplo acima produzirá:

```
array(1) {
  [1]=>
  array(2) {
    ["English"]=>
    array(2) {
      [0]=>
      string(3) "One"
      [1]=>
      string(7) "January"
    }
    ["French"]=>
    array(2) {
      [0]=>
      string(3) "Une"
      [1]=>
      string(7) "Janvier"
    }
  }
}
Capturado: The JSON document was too deep (too many nested objects and arrays)
```

**Exemplo #5 **simdjson\_decode()** de números inteiros grandes**

```
<?php
$json = '{"número": 12345678901234567890}';

var_dump(simdjson_decode($json));

?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["número"]=>
  float(1.2345678901235E+19)
}
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
