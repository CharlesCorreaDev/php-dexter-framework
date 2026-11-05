# Retira espaços (ou outros caracteres) do início e do final de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trim.php

---

# trim

(PHP 4, PHP 5, PHP 7, PHP 8)

trim — Retira espaços (ou outros caracteres) do início e do final de uma string

### Descrição

function **trim**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$characters` = " \n\r\t\v\x00"): [string](language.types.string.md)

Esta função retorna uma string com os espaços retirados do
ínicio e do final de `string`.
Sem o segundo parâmetro,
**trim()** irá retirar estes caracteres

- `" "`: caractere ASCII SP
  `0x20`, um espaço normal.
- `"\t"`: caractere ASCII HT
  `0x09`, uma tabulação.
- `"\n"`: caractere ASCII LF
  `0x0A`, uma nova linha (alimentação de linha).
- `"\r"`: caractere ASCII CR
  `0x0D`, um retorno de carro.
- `"\0"`: caractere ASCII NUL
  `0x00`, o byte nulo.
- `"\v"`: caractere ASCII VT
  `0x0B`, uma tabulação vertical.

### Parâmetros

`string`
:   A [string](language.types.string.md) que será modificada.

`characters`
:   Opcionalmente, os caracteres removidos também podem ser especificados usando
    o parâmetro `characters`.
    Simplesmente liste todos os caracteres que precisam ser removidos.
    Com `..` é possível especificar um intervalo incremental de caracteres.

### Valor Retornado

A string com caracteres removidos.

### Examples

**Exemplo #1 Exemplo de uso de **trim()****

```
<?php

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// retira os caracteres ASCII de controle no início e fim de $binary
// (de 0 a 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>
```

O exemplo acima produzirá:

```
string(32) "            These are a few words :) ...  "
string(16) "    Example string
"
string(11) "Hello World"

string(28) "These are a few words :) ..."
string(24) "These are a few words :)"
string(5) "o Wor"
string(9) "ello Worl"
string(14) "Example string"
```

**Exemplo #2 Usando **trim()** em valores de array**

```
<?php
function trim_value(&$value)
{
    $value = trim($value);
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);

array_walk($fruit, 'trim_value');
var_dump($fruit);

?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(7) "banana "
  [2]=>
  string(11) " cranberry "
}
array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "banana"
  [2]=>
  string(9) "cranberry"
}
```

### Notas

> **Nota**:
> **Possível armadilha: removendo caracteres no meio da string**  
>
> Como **trim()** retira caracteres do início e do fim de
> uma [string](language.types.string.md), pode ser confuso quando caracteres são (ou não) removidos do
> meio. `trim('abc', 'bad')` remove tanto 'a' quanto 'b' porque ele retira
> 'a', portanto move 'b' para o início e também será retirado. Portanto, este é o motivo pelo qual isso "funciona"
> enquanto que `trim('abc', 'b')` aparentemente não funciona.

### Veja também

- [ltrim()](function.ltrim.md) - Retira espaços em branco (ou outros caracteres) do início de uma string
- [rtrim()](function.rtrim.md) - Retira espaços em branco (ou outros caracteres) do final de uma string
- [str\_replace()](function.str-replace.md) - Substitui todas as ocorrências da string de pesquisa com a string de substituição

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
