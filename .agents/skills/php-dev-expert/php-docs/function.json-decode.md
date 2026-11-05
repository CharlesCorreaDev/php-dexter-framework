# Decodifica uma string JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.json-decode.php

---

# json\_decode

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL json >= 1.2.0)

json\_decode — Decodifica uma string JSON

### Descrição

function **json\_decode**(  
    [string](language.types.string.md) `$json`,  
    [?](language.types.null.md)[bool](language.types.boolean.md) `$associative` = **`null`**,  
    [int](language.types.integer.md) `$depth` = 512,  
    [int](language.types.integer.md) `$flags` = 0  
): [mixed](language.types.mixed.md)

Recebe uma string codificada em JSON e converte em um valor do PHP.

### Parâmetros

`json`
:   A [string](language.types.string.md) `json` a ser decodificada.

    Esta função funciona apenas com strings codificadas em UTF-8.

    > **Nota**:
    >
    > O PHP implementa um superconjunto de JSON conforme especificado na
    > [» RFC 7159](https://datatracker.ietf.org/doc/html/rfc7159) original.

`associative`
:   Quando **`true`**, objetos JSON serão retornados como
    [array](language.types.array.md)s associativo; quando **`false`**, objetos JSON serão retornados como [object](language.types.object.md)s.
    Quando **`null`**, objetos JSON serão retornados como [array](language.types.array.md)s ou
    [object](language.types.object.md)s dependendo se `flags`
    **`JSON_OBJECT_AS_ARRAY`** estiver definida.

`depth`
:   Profundidade máxima da estrutura que será decodificada.
    O valor deve ser maior que `0`,
    e menor ou igual a `2147483647`.

`flags`
:   Máscara de bits de
    **`JSON_BIGINT_AS_STRING`**,
    **`JSON_INVALID_UTF8_IGNORE`**,
    **`JSON_INVALID_UTF8_SUBSTITUTE`**,
    **`JSON_OBJECT_AS_ARRAY`**,
    **`JSON_THROW_ON_ERROR`**.
    O comportamento dessas constantes é descrito na página de
    [constantes JSON](json.constants.md).

### Valor Retornado

Retorna o valor codificado em `json` como um tipo apropriado
do PHP. Valores sem aspas `true`, `false`
e `null` são retornados como **`true`**,
**`false`** e **`null`** respectivamente. **`null`** é retornado se o
`json` não puder ser decodificado ou se os dados codificados tiverem
profundidade maior que o limite de aninhamento.

### Erros/Exceções

Se a `depth` estiver fora do intervalo permitido,
um [ValueError](class.valueerror.md) é lançado a partir do PHP 8.0.0,
enquanto anteriormente, era gerado um erro do nível **`E_WARNING`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Foi adicionado **`JSON_THROW_ON_ERROR`** em `flags` |
| 7.2.0 | `associative` agora é nullable. |
| 7.2.0 | Foi adicionado **`JSON_INVALID_UTF8_IGNORE`**, e **`JSON_INVALID_UTF8_SUBSTITUTE`** em `flags`. |
| 7.1.0 | Uma chave JSON vazia ("") pode ser codificada para a propriedade vazia de objeto, em vez de usar uma chave com o valor `_empty_`. |

### Examples

**Exemplo #1 **json\_decode()** exemplos**

```
<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (5) {
    ["a"] => int(1)
    ["b"] => int(2)
    ["c"] => int(3)
    ["d"] => int(4)
    ["e"] => int(5)
}

array(5) {
    ["a"] => int(1)
    ["b"] => int(2)
    ["c"] => int(3)
    ["d"] => int(4)
    ["e"] => int(5)
}
```

**Exemplo #2 Acessando propriedades inválidas do objeto**

Acessar elementos dentro de um objeto que contém caracteres não
permitidos pela convenção de nomenclatura do PHP (por exemplo, o hífen) pode ser
realizado encapsulando o nome do elemento entre chaves e apóstrofo.

```
<?php

$json = '{"foo-bar": 12345}';

$obj = json_decode($json);
print $obj->{'foo-bar'}; // 12345

?>
```

**Exemplo #3 erros comuns usando **json\_decode()****

```
<?php

// as seguintes strings são JavaScript válidas, mas não JSON válidos

// o nome e o valor devem ser colocados entre aspas duplas
// aspas simples não são válidas
$bad_json = "{ 'bar': 'baz' }";
json_decode($bad_json); // null

// o nome deve ser colocado entre aspas duplas
$bad_json = '{ bar: "baz" }';
json_decode($bad_json); // null

// vírgulas à direita não são permitidas
$bad_json = '{ bar: "baz", }';
json_decode($bad_json); // null

?>
```

**Exemplo #4 erros de `depth`**

```
<?php
// Codifica alguns dados com uma profundidade máxima de 4 (array -> array -> array -> string)
$json = json_encode(
    array(
        1 => array(
            'English' => array(
                'One',
                'January'
            ),
            'French' => array(
                'Une',
                'Janvier'
            )
        )
    )
);

// Mostrar os erros para diferentes profundidades.
var_dump(json_decode($json, true, 4));
echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;

var_dump(json_decode($json, true, 3));
echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;
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
Last error: No error

NULL
Last error: Maximum stack depth exceeded
```

**Exemplo #5 **json\_decode()** de inteiros grandes**

```
<?php
$json = '{"number": 12345678901234567890}';

var_dump(json_decode($json));
var_dump(json_decode($json, false, 512, JSON_BIGINT_AS_STRING));

?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["number"]=>
  float(1.2345678901235E+19)
}
object(stdClass)#1 (1) {
  ["number"]=>
  string(20) "12345678901234567890"
}
```

### Notas

> **Nota**:
>
> A especificação JSON não é JavaScript, mas um subconjunto de JavaScript.

> **Nota**:
>
> No caso de falha na decodificação, [json\_last\_error()](function.json-last-error.md)
> pode ser usado para determinar a exata natureza do erro.

### Veja também

- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [json\_last\_error()](function.json-last-error.md) - Retorna o último erro ocorrido
- [json\_last\_error\_msg()](function.json-last-error-msg.md) - Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()

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
