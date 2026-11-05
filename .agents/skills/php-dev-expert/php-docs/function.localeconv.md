# Obtém informação de formatação numérica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.localeconv.php

---

# localeconv

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

localeconv — Obtém informação de formatação numérica

### Descrição

function **localeconv**(): [array](language.types.array.md)

Retorna um array associativo contendo informação de formatação
numérica e monetária de acordo com a localidade.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**localeconv()** retorna dados com base na localidade atual
definida por [setlocale()](function.setlocale.md). O array associativo retornado
contém os seguintes campos:

| Elemento do array | Descrição |
| --- | --- |
| decimal\_point | Caractere de separação decimal |
| thousands\_sep | Caractere de separação de milhares |
| grouping | Array contendo agrupamentos numéricos |
| int\_curr\_symbol | Símbolo internacional da moeda (ex.: BRL) |
| currency\_symbol | Símbolo local da moeda (ex.: R$) |
| mon\_decimal\_point | Caractere de separação de decimais da moeda |
| mon\_thousands\_sep | Caractere de separação de milhares da moeda |
| mon\_grouping | Array contendo agrupamentos monetários |
| positive\_sign | Sinal para valores positivos |
| negative\_sign | Sinal para valores negativos |
| int\_frac\_digits | Dígitos fracionários internacionais |
| frac\_digits | Dígitos fracionários locais |
| p\_cs\_precedes | 1 se currency\_symbol precede um valor positivo, 0 se ele o sucede |
| p\_sep\_by\_space | 1 se um espaço separa currency\_symbol de um valor positivo, 0 caso contrário |
| n\_cs\_precedes | 1 se currency\_symbol precede um valor negativo, 0 se ele o sucede |
| n\_sep\_by\_space | 1 se um espaço separa currency\_symbol de um valor negativo, 0 caso contrário |
| p\_sign\_posn | - 0 - Parênteses envolvem a quantidade e o currency\_symbol - 1 - A string de sinal precede a quantidade e o currency\_symbol - 2 - A string de sinal sucede a quantidade e o currency\_symbol - 3 - A string de sinal precede imediatamente o currency\_symbol - 4 - A string de sinal sucede imediatamente o currency\_symbol |
| n\_sign\_posn | - 0 - Parênteses envolvem a quantidade e o currency\_symbol - 1 - A string de sinal precede a quantidade e o currency\_symbol - 2 - A string de sinal sucede a quantidade e o currency\_symbol - 3 - A string de sinal precede imediatamente o currency\_symbol - 4 - A string de sinal sucede imediatamente o currency\_symbol |

O `p_sign_posn` e o `n_sign_posn` contêm uma string
de opções de formatação. Cada número representa uma das condições listadas acima.

Os campos de agrupamento contêm arrays que definem a maneira em que os números devem
ser agrupados. Por exemplo, o campo de agrupamento monetário para a localidade nl\_NL (em
modo UTF-8 com o sinal do Euro), contêm um array de 2 itens com os
valores 3 e 3. Quanto maior o índice no array, mais a esquerda fica
o agrupamento. Se um elemento do array for igual a **`CHAR_MAX`**,
não são feitos mais agrupamentos. Se um elemento do array for igual a 0, o elemento
anterior deve ser usado.

### Examples

**Exemplo #1 Exemplo de **localeconv()****

```
<?php
if (false !== setlocale(LC_ALL, 'nl_NL.UTF-8@euro')) {
    $locale_info = localeconv();
    print_r($locale_info);
}
?>
```

O exemplo acima produzirá:

```
Array
(
    [decimal_point] => .
    [thousands_sep] =>
    [int_curr_symbol] => EUR
    [currency_symbol] => €
    [mon_decimal_point] => ,
    [mon_thousands_sep] =>
    [positive_sign] =>
    [negative_sign] => -
    [int_frac_digits] => 2
    [frac_digits] => 2
    [p_cs_precedes] => 1
    [p_sep_by_space] => 1
    [n_cs_precedes] => 1
    [n_sep_by_space] => 1
    [p_sign_posn] => 1
    [n_sign_posn] => 2
    [grouping] => Array
        (
        )

    [mon_grouping] => Array
        (
            [0] => 3
            [1] => 3
        )

)
```

### Veja também

- [setlocale()](function.setlocale.md) - Define informação de localidade

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
