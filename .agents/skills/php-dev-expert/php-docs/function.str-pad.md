# Preenche uma string até um determinado comprimento com outra string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-pad.php

---

# str\_pad

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

str\_pad — Preenche uma string até um determinado comprimento com outra string

### Descrição

function **str\_pad**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$length`,  
    [string](language.types.string.md) `$pad_string` = " ",  
    [int](language.types.integer.md) `$pad_type` = **`STR_PAD_RIGHT`**  
): [string](language.types.string.md)

Esta função retorna a string `string`
preenchida à esquerda, à direita ou em ambos os lados até o comprimento
de preenchimento especificado. Se o argumento opcional
`pad_string` não for fornecido, a
`string` será preenchida com espaços,
caso contrário será preenchida com caracteres de `pad_string`
até o limite.

### Parâmetros

`string`
:   A string de entrada.

`length`
:   O comprimento desejado da sequência preenchida final.
    Se o valor de `length` for negativo,
    menor ou igual ao comprimento da string de entrada, nenhum preenchimento
    ocorrerá a `string` original será retornada.

`pad_string`
:   > **Nota**:
    >
    > O `pad_string` pode ser truncado se o
    > número necessário de caracteres de preenchimento não puder ser dividido igualmente pelo
    > comprimento do `pad_string`.

`pad_type`
:   O argumento opcional `pad_type` pode ser
    **`STR_PAD_RIGHT`**, **`STR_PAD_LEFT`**
    ou **`STR_PAD_BOTH`**. Se
    `pad_type` não for especificado, será assumido como
    **`STR_PAD_RIGHT`**.

### Valor Retornado

Retorna a string preenchida.

### Examples

**Exemplo #1 Exemplo de **str\_pad()****

```
<?php
$input = "Alien";
echo str_pad($input, 10), PHP_EOL;                      // produz "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT), PHP_EOL;  // produz "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH), PHP_EOL;   // produz "__Alien___"
echo str_pad($input,  6, "___"), PHP_EOL;               // produz "Alien_"
echo str_pad($input,  3, "*"), PHP_EOL;                 // produz "Alien"
?>
```

### Veja também

- [mb\_str\_pad()](function.mb-str-pad.md) - Preenche uma string multibyte para um comprimento específico com outra string multibyte

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
