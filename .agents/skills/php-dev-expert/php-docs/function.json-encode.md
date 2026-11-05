# Retorna a representação JSON de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.json-encode.php

---

# json\_encode

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL json >= 1.2.0)

json\_encode — Retorna a representação JSON de um valor

### Descrição

function **json\_encode**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$flags` = 0, [int](language.types.integer.md) `$depth` = 512): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string contendo a representação JSON de `value`
fornecido. Se o parâmetro for um [array](language.types.array.md) ou [object](language.types.object.md),
ele será serializado recursivamente.

Se um valor a ser serializado for um objeto, então, por padrão, apenas propriedades visíveis
publicamente serão incluídas. Alternativamente, uma classe pode implementar [JsonSerializable](class.jsonserializable.md)
para controlar como seus valores são serializados para JSON.

A codificação é afetada pelas `flags` fornecidas
e além disso a codificação de valores com ponto flutuante depende do valor de
[serialize\_precision](ini.core.md#ini.serialize-precision).

### Parâmetros

`value`
:   O `value` a ser codificado. Pode ser qualquer tipo, exceto
    um [resource](language.types.resource.md).

    Toda a string deve ser codificada como UTF-8.

    > **Nota**:
    >
    > O PHP implementa um superconjunto de JSON conforme especificado na
    > [» RFC 7159](https://datatracker.ietf.org/doc/html/rfc7159) original.

`flags`
:   Máscara de bits consistindo de
    **`JSON_FORCE_OBJECT`**,
    **`JSON_HEX_QUOT`**,
    **`JSON_HEX_TAG`**,
    **`JSON_HEX_AMP`**,
    **`JSON_HEX_APOS`**,
    **`JSON_INVALID_UTF8_IGNORE`**,
    **`JSON_INVALID_UTF8_SUBSTITUTE`**,
    **`JSON_NUMERIC_CHECK`**,
    **`JSON_PARTIAL_OUTPUT_ON_ERROR`**,
    **`JSON_PRESERVE_ZERO_FRACTION`**,
    **`JSON_PRETTY_PRINT`**,
    **`JSON_UNESCAPED_LINE_TERMINATORS`**,
    **`JSON_UNESCAPED_SLASHES`**,
    **`JSON_UNESCAPED_UNICODE`**,
    **`JSON_THROW_ON_ERROR`**.
    O comportamento destas constantes é descrito na página de
    [constantes JSON](json.constants.md).

`depth`
:   Define a profundidade máxima. Deve ser maior do que zero.

### Valor Retornado

Retorna um JSON codificado como [string](language.types.string.md) em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Adicionado **`JSON_THROW_ON_ERROR`** em `flags`. |
| 7.2.0 | Adicionado **`JSON_INVALID_UTF8_IGNORE`** e **`JSON_INVALID_UTF8_SUBSTITUTE`** em `flags`. |
| 7.1.0 | Adicionado **`JSON_UNESCAPED_LINE_TERMINATORS`** em `flags`. |
| 7.1.0 | É usado [serialize\_precision](ini.core.md#ini.serialize-precision) em vez de [precision](ini.core.md#ini.precision) quando codificado valores [float](language.types.float.md). |

### Examples

**Exemplo #1 Um exemplo da **json\_encode()****

```
<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
?>
```

O exemplo acima produzirá:

```
{"a":1,"b":2,"c":3,"d":4,"e":5}
```

**Exemplo #2
Um exemplo de **json\_encode()** mostrando algumas opções em uso**

```
<?php
$a = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");

echo "Normal: ",  json_encode($a), "\n";
echo "Tags: ",    json_encode($a, JSON_HEX_TAG), "\n";
echo "Apos: ",    json_encode($a, JSON_HEX_APOS), "\n";
echo "Quot: ",    json_encode($a, JSON_HEX_QUOT), "\n";
echo "Amp: ",     json_encode($a, JSON_HEX_AMP), "\n";
echo "Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "\n";
echo "All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";

$b = array();

echo "Saída de um array vazio como array: ", json_encode($b), "\n";
echo "Saída de um array vazio como objeto: ", json_encode($b, JSON_FORCE_OBJECT), "\n\n";

$c = array(array(1,2,3));

echo "Saída de um array não-associativo como array: ", json_encode($c), "\n";
echo "Saída de um array não-associativo como objeto: ", json_encode($c, JSON_FORCE_OBJECT), "\n\n";

$d = array('foo' => 'bar', 'baz' => 'long');

echo "Array associativo sempre tem saída como objeto: ", json_encode($d), "\n";
echo "Array associativo sempre tem saída como objeto: ", json_encode($d, JSON_FORCE_OBJECT), "\n\n";
?>
```

O exemplo acima produzirá:

```
Normal: ["<foo>","'bar'","\"baz\"","&blong&","\u00e9"]
Tags: ["\u003Cfoo\u003E","'bar'","\"baz\"","&blong&","\u00e9"]
Apos: ["<foo>","\u0027bar\u0027","\"baz\"","&blong&","\u00e9"]
Quot: ["<foo>","'bar'","\u0022baz\u0022","&blong&","\u00e9"]
Amp: ["<foo>","'bar'","\"baz\"","\u0026blong\u0026","\u00e9"]
Unicode: ["<foo>","'bar'","\"baz\"","&blong&","é"]
All: ["\u003Cfoo\u003E","\u0027bar\u0027","\u0022baz\u0022","\u0026blong\u0026","é"]

Saída de um array vazio como array: []
Saída de um array vazio como objeto: {}

Saída de um array não-associativo como array: [[1,2,3]]
Saída de um array não-associativo como objeto: {"0":{"0":1,"1":2,"2":3}}

Array associativo sempre tem saída como objeto: {"foo":"bar","baz":"long"}
Array associativo sempre tem saída como objeto: {"foo":"bar","baz":"long"}
```

**Exemplo #3 Exemplo com a opção JSON\_NUMERIC\_CHECK**

```
<?php
echo "Strings representando números automaticamente transformados em números".PHP_EOL;
$numbers = array('+123123', '-123123', '1.2e3', '0.00001');
var_dump(
 $numbers,
 json_encode($numbers, JSON_NUMERIC_CHECK)
);
echo "Strings contendo números formatados incorretamente".PHP_EOL;
$strings = array('+a33123456789', 'a123');
var_dump(
 $strings,
 json_encode($strings, JSON_NUMERIC_CHECK)
);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Strings representando números automaticamente transformados em números
array(4) {
  [0]=>
  string(7) "+123123"
  [1]=>
  string(7) "-123123"
  [2]=>
  string(5) "1.2e3"
  [3]=>
  string(7) "0.00001"
}
string(28) "[123123,-123123,1200,1.0e-5]"
Strings contendo números formatados incorretamente
array(2) {
  [0]=>
  string(13) "+a33123456789"
  [1]=>
  string(4) "a123"
}
string(24) "["+a33123456789","a123"]"
```

**Exemplo #4 Exemplo de array sequencial versus não-sequencial**

```
<?php
echo "Array sequencial".PHP_EOL;
$sequential = array("foo", "bar", "baz", "blong");
var_dump(
 $sequential,
 json_encode($sequential)
);

echo PHP_EOL."Array não-sequencial".PHP_EOL;
$nonsequential = array(1=>"foo", 2=>"bar", 3=>"baz", 4=>"blong");
var_dump(
 $nonsequential,
 json_encode($nonsequential)
);

echo PHP_EOL."Array sequencial com uma chave não definida".PHP_EOL;
unset($sequential[1]);
var_dump(
 $sequential,
 json_encode($sequential)
);
?>
```

O exemplo acima produzirá:

```
Array sequencial
array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(3) "baz"
  [3]=>
  string(5) "blong"
}
string(27) "["foo","bar","baz","blong"]"

Array não-sequencial
array(4) {
  [1]=>
  string(3) "foo"
  [2]=>
  string(3) "bar"
  [3]=>
  string(3) "baz"
  [4]=>
  string(5) "blong"
}
string(43) "{"1":"foo","2":"bar","3":"baz","4":"blong"}"

Array sequencial com uma chave não definida
array(3) {
  [0]=>
  string(3) "foo"
  [2]=>
  string(3) "baz"
  [3]=>
  string(5) "blong"
}
string(33) "{"0":"foo","2":"baz","3":"blong"}"
```

**Exemplo #5 Exemplo com a opção **`JSON_PRESERVE_ZERO_FRACTION`****

```
<?php
var_dump(json_encode(12.0, JSON_PRESERVE_ZERO_FRACTION));
var_dump(json_encode(12.0));
?>
```

O exemplo acima produzirá:

```
string(4) "12.0"
string(2) "12"
```

### Notas

> **Nota**:
>
> Em uma eventual falha ao codificar, [json\_last\_error()](function.json-last-error.md)
> pode ser usado para determinar a natureza exata do erro.

> **Nota**:
>
> Quando codificando um array, se as chaves não são uma sequência numérica
> contínua começando por 0, todas as chaves são codificadas como strings, e
> especificadas explicitamente para cada par chave-valor.

> **Nota**:
>
> Assim como o codificador JSON referenciado, **json\_encode()** irá
> gerar JSON que é um valor simples (isto é, nem um objeto e nem um
> array) se informado um [string](language.types.string.md), [int](language.types.integer.md), [float](language.types.float.md) ou [bool](language.types.boolean.md) como uma
> `value`. Enquanto a maioria dos decodificadores aceitará esses valores
> como JSON válido, alguns podem não aceitar, já que a especificação é ambígua neste
> ponto.
>
> Para resumir, sempre teste se o seu decodificador JSON pode dar conta da saída que você
> gerar a partir de **json\_encode()**.

### Veja também

- [JsonSerializable](class.jsonserializable.md)
- [json\_decode()](function.json-decode.md) - Decodifica uma string JSON
- [json\_last\_error()](function.json-last-error.md) - Retorna o último erro ocorrido
- [json\_last\_error\_msg()](function.json-last-error-msg.md) - Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()
- [serialize()](function.serialize.md) - Gera uma representação armazenável de um valor

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
