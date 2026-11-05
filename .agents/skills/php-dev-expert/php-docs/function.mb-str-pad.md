# Preenche uma string multibyte para um comprimento específico com outra string multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-str-pad.php

---

# mb\_str\_pad

(PHP 8 >= PHP 8.3.0)

mb\_str\_pad — Preenche uma string multibyte para um comprimento específico com outra string multibyte

### Descrição

function **mb\_str\_pad**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$length`,  
    [string](language.types.string.md) `$pad_string` = " ",  
    [int](language.types.integer.md) `$pad_type` = **`STR_PAD_RIGHT`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**  
): [string](language.types.string.md)

Esta função retorna a `string`
preenchida à esquerda, à direita ou em ambos os lados até o comprimento
de preenchimento especificado, onde o comprimento é medido em pontos de código Unicode. Se o argumento opcional
`pad_string` não for fornecido, a
`string` será preenchida com espaços, caso contrário, ela
será preenchida com caracteres de `pad_string`
até o limite.

### Parâmetros

`string`
:   A string de entrada.

`length`
:   Se o valor de `length` for negativo,
    menor ou igual ao comprimento da string de entrada, nenhum preenchimento
    ocorre, e a `string` será retornada.

`pad_string`
:   > **Nota**:
    >
    > O `pad_string` pode ser truncado se o
    > número necessário de caracteres de preenchimento não puder ser dividido uniformemente pelo
    > comprimento de `pad_string`.

`pad_type`
:   O argumento opcional `pad_type` pode ser
    **`STR_PAD_RIGHT`**, **`STR_PAD_LEFT`**,
    ou **`STR_PAD_BOTH`**.
    Por padrão, **`STR_PAD_RIGHT`**.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Retorna a string preenchida.

### Examples

**Exemplo #1 Exemplo de **mb\_str\_pad()****

```
<?php
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_RIGHT)); // string(18) "▶▶❤❓❇❤"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_LEFT));  // string(18) "❤❓❇❤▶▶"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_BOTH));  // string(18) "❤❓▶▶❤❓"

var_dump(mb_str_pad("🎉", 3, "祝", STR_PAD_LEFT));   // string(10) "祝祝🎉"
?>
```

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
