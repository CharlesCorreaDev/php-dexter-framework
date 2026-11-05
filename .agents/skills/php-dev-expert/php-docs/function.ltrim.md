# Retira espaços em branco (ou outros caracteres) do início de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ltrim.php

---

# ltrim

(PHP 4, PHP 5, PHP 7, PHP 8)

ltrim — Retira espaços em branco (ou outros caracteres) do início de uma string

### Descrição

function **ltrim**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$characters` = " \n\r\t\v\x00"): [string](language.types.string.md)

Retira espaços em branco (ou outros caracteres) do início de uma string.

Sem o segundo parâmetro,
**ltrim()** removerá os seguintes caracteres:

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
:   A string de entrada.

`characters`
:   Opcionalmente, os caracteres removidos também podem ser especificados usando
    o parâmetro `characters`.
    Simplesmente liste todos os caracteres que precisam ser removidos.
    Com `..` é possível especificar um intervalo incremental de caracteres.

### Valor Retornado

Esta função retorna uma string com os espaços em branco removidos do
ínicio da `string`.

### Examples

**Exemplo #1 Exemplo de uso de **ltrim()****

```
<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// tira os caracteres de controle ASCII do início de $binary
// (de 0 a 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);

?>
```

O exemplo acima produzirá:

```
string(32) "            These are a few words :) ...  "
string(16) "    Example string
"
string(11) "Hello World"

string(30) "These are a few words :) ...  "
string(30) "These are a few words :) ...  "
string(7) "o World"
string(15) "Example string
"
```

### Veja também

- [trim()](function.trim.md) - Retira espaços (ou outros caracteres) do início e do final de uma string
- [rtrim()](function.rtrim.md) - Retira espaços em branco (ou outros caracteres) do final de uma string

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
