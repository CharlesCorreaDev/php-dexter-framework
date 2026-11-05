# Obtêm opções da linha de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getopt.php

---

# getopt

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

getopt — Obtêm opções da linha de comando

### Descrição

function **getopt**([string](language.types.string.md) `$short_options`, [array](language.types.array.md) `$long_options` = [], [int](language.types.integer.md) `&$rest_index` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Extrai as opções passadas para o script.

### Parâmetros

`short_options`
:   Cada caracter nessa string será usada como uma opção e
    comparada contra as opções passadas para o script prefixadas com um
    único hífen (`-`).

    Por exemplo, a string `"x"` reconhece a
    opção `-x`.

    Somente a-z, A-Z e 0-9 são permitidos.

`long_options`
:   Um array de opções. Cada elemento desse array será usado como uma string de
    opção e comparada contra as opções passadas para o script com dois
    hífens (`--`).

    Por exemplo, um elemento longopts `"opt"` reconhece a
    opção `--opt`.

`rest_index`
:   Se o parâmetro `rest_index` estiver presente, então o
    índice onde a interpretação de argumentos parou será escrita nessa variável.

O parâmetro `short_options` pode conter os elementos
a seguir:

- Letras individuais (não aceita valores)
- Letras seguidas de um dois pontos (parâmetro requer valores)
- Letras seguidas de dois dois pontos(valor opcional)

Valores de opções são o primeiro argumento depois da string. Se o valor é exigido
então não importa se o valor tem um espaço na frente ou não. Veja nota.
> **Nota**:
>
> Valores opcionais não aceitam `" "` (espaço) como separador.

O array `long_options` pode conter:

- String (parâmetro que não aceita valores)
- String seguida por único dois pontos parâmetro requer valor)
- String seguida por dois dois pontos (valor opcional)

> **Nota**:
>
> O formado para `short_options` e
> `long_options` é quase o mesmo, com a única diferença sendo
> que `long_options` é informado como um array de opções (onde cada
> elemento é a opção), enquanto `short_options` é informado como uma
> string (onde cada caracter é um opção).

### Valor Retornado

Esta função retorna um array de pares de opções e argumentos, ou **`false`** em caso de falha.

> **Nota**:
>
> A interpretação de opções irá parar na primeira opção desconhecida, e
> tudo o mais será descartado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Acrescentando o parâmetro `rest_index`. |

### Examples

**Exemplo #1 Exemplo básico de **getopt()****

```
<?php
// Script example.php
$options = getopt("f:hp:");
var_dump($options);
?>
```

```
shell> php example.php -fvalue -h
```

O exemplo acima produzirá:

```
array(2) {
  ["f"]=>
  string(5) "value"
  ["h"]=>
  bool(false)
}
```

**Exemplo #2 Exemplo de **getopt()** com opções longas**

```
<?php
// Script example.php
$shortopts  = "";
$shortopts .= "f:";  // Valor exigido
$shortopts .= "v::"; // Valor opcional
$shortopts .= "abc"; // Essas opções não aceitam valores

$longopts  = array(
    "required:",     // Valor exigido
    "optional::",    // Valor opcional
    "option",        // Sem valor
    "opt",           // Sem valor
);
$options = getopt($shortopts, $longopts);
var_dump($options);
?>
```

```
shell> php example.php -f "value for f" -v -a --required value --optional="optional value" --option
```

O exemplo acima produzirá:

```
array(6) {
  ["f"]=>
  string(11) "value for f"
  ["v"]=>
  bool(false)
  ["a"]=>
  bool(false)
  ["required"]=>
  string(5) "value"
  ["optional"]=>
  string(14) "optional value"
  ["option"]=>
  bool(false)
}
```

**Exemplo #3 Exemplo de **getopt()**: passando múltiplas opções como uma só**

```
<?php
// Script example.php
$options = getopt("abc");
var_dump($options);
?>
```

```
shell> php example.php -aaac
```

O exemplo acima produzirá:

```
array(2) {
  ["a"]=>
  array(3) {
    [0]=>
    bool(false)
    [1]=>
    bool(false)
    [2]=>
    bool(false)
  }
  ["c"]=>
  bool(false)
}
```

**Exemplo #4 Exemplo de **getopt()** com `rest_index`**

```
<?php
// Script example.php
$rest_index = null;
$opts = getopt('a:b:', [], $rest_index);
$pos_args = array_slice($argv, $rest_index);
var_dump($pos_args);
```

```
shell> php example.php -a 1 -b 2 -- test
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(4) "test"
}
```

### Veja também

- [[$argv](reserved.variables.argv.md)](reserved.variables.argv.md)

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
