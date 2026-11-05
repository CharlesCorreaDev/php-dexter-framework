# Retira espaços em branco (ou outros caracteres) do final de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rtrim.php

---

# rtrim

(PHP 4, PHP 5, PHP 7, PHP 8)

rtrim — Retira espaços em branco (ou outros caracteres) do final de uma string

### Descrição

function **rtrim**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$characters` = " \n\r\t\v\x00"): [string](language.types.string.md)

Esta função retorna uma string com os espaços (ou outros caracteres) retirados do
final de `string`.

Sem o segundo parâmetro,
**rtrim()** irá retirar os seguintes caracteres:

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

Retorna a string modificada.

### Examples

**Exemplo #1 Exemplo de uso da função **rtrim()****

```
<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);

// Retira os caracteres de controle ASCII no final de $binary
// (de 0 a 31 inclusive)
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);

?>
```

O exemplo acima produzirá:

```
string(32) "            These are a few words :) ...  "
string(16) "    Example string
"
string(11) "Hello World"

string(30) "            These are a few words :) ..."
string(26) "            These are a few words :)"
string(9) "Hello Wor"
string(15) "    Example string"
```

### Veja também

- [trim()](function.trim.md) - Retira espaços (ou outros caracteres) do início e do final de uma string
- [ltrim()](function.ltrim.md) - Retira espaços em branco (ou outros caracteres) do início de uma string

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
