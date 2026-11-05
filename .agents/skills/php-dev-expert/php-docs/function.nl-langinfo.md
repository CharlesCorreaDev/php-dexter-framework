# Consulta informação de língua e localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.nl-langinfo.php

---

# nl\_langinfo

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

nl\_langinfo — Consulta informação de língua e localidade

### Descrição

function **nl\_langinfo**([int](language.types.integer.md) `$item`): [string](language.types.string.md)|[false](language.types.singleton.md)

**nl\_langinfo()** é usada para acessar elementos individuais de
categorias de localidade. Diferentemente de [localeconv()](function.localeconv.md), que
retorna todos os elementos, **nl\_langinfo()** permite
selectionar qualquer elemento específico.

### Parâmetros

`item`
:   `item` pode ser um valor inteiro do elemento ou o
    nome da constante do elemento. A lista de nomes de constantes que podem ser usadas
    para o parâmetro `item` e suas descrições está apresentada abaixo.
    Algumas destas constantes podem não estar definidas ou podem não conter valor para certas
    localidades.

    **nl\_langinfo Constants**

    | Constante | Descrição |
    | --- | --- |
    | *Constantes da Categoria **`LC_TIME`*** | |
    | **`ABDAY_(1-7)`** | Nome abreviado no n-ésimo dia da semana. |
    | **`DAY_(1-7)`** | Nome do n-ésimo dia da semana (DAY\_1 = domingo). |
    | **`ABMON_(1-12)`** | Nome abreviado do n-ésimo mês do ano. |
    | **`MON_(1-12)`** | Nome do n-ésimo mês do ano. |
    | **`AM_STR`** | String para horários antes do meio-dia (ante meridiem). |
    | **`PM_STR`** | String para horário após o meio-dia (post meridiem). |
    | **`D_T_FMT`** | String que pode ser usada como formatação para [strftime()](function.strftime.md) para representar horário e data. |
    | **`D_FMT`** | String que pode ser usada como formatação para [strftime()](function.strftime.md) para representar data. |
    | **`T_FMT`** | String que pode ser usada como formatação para [strftime()](function.strftime.md) para representar horário. |
    | **`T_FMT_AMPM`** | String que pode ser usada como formatação para [strftime()](function.strftime.md) para representar horário em formato de 12 horas com ante/post meridiem. |
    | **`ERA`** | Era alternativa. |
    | **`ERA_YEAR`** | Ano no formato da era alternativa. |
    | **`ERA_D_T_FMT`** | Data e horário em formato da era alternativa (string pode ser usada em [strftime()](function.strftime.md)). |
    | **`ERA_D_FMT`** | Data em formato da era alternativa (string pode ser usada em [strftime()](function.strftime.md)). |
    | **`ERA_T_FMT`** | Horário em formato da era alternativa (string pode ser usada em [strftime()](function.strftime.md)). |
    | *Constantes da Categoria **`LC_MONETARY`*** | |
    | **`INT_CURR_SYMBOL`** | Símbolo internacional da moeda. |
    | **`CURRENCY_SYMBOL`** | Símbolo local da moeda. |
    | **`CRNCYSTR`** | O mesmo que **`CURRENCY_SYMBOL`**. |
    | **`MON_DECIMAL_POINT`** | Caractere de seperação de decimais. |
    | **`MON_THOUSANDS_SEP`** | Separador de milhares (grupos de três dígitos). |
    | **`MON_GROUPING`** | O mesmo que o elemento `"grouping"`. |
    | **`POSITIVE_SIGN`** | Sinal para valores positivos. |
    | **`NEGATIVE_SIGN`** | Sinal para valores negativos. |
    | **`INT_FRAC_DIGITS`** | Dígitos fracionários internacionais. |
    | **`FRAC_DIGITS`** | Dígitos fracionários locais. |
    | **`P_CS_PRECEDES`** | Retorna 1 se **`CURRENCY_SYMBOL`** precede um valor positivo. |
    | **`P_SEP_BY_SPACE`** | Retorna 1 se um espaço separa **`CURRENCY_SYMBOL`** de um valor positivo. |
    | **`N_CS_PRECEDES`** | Retorna 1 se **`CURRENCY_SYMBOL`** precede um valor negativo. |
    | **`N_SEP_BY_SPACE`** | Retorna 1 se um espaço separa **`CURRENCY_SYMBOL`** de um valor negativo. |
    | **`P_SIGN_POSN`** | - Retorna 0 se parênteses envolvem a quantidade e o **`CURRENCY_SYMBOL`**. - Retorna 1 se a string de sinal precede a quantidade e o **`CURRENCY_SYMBOL`**. - Retorna 2 se a string de sinal sucede a quantidade e o **`CURRENCY_SYMBOL`**. - Retorna 3 se a string de sinal precede imediatamente o **`CURRENCY_SYMBOL`**. - Retorna 4 se a string de sinal imediatamente sucede o **`CURRENCY_SYMBOL`**. |
    | **`N_SIGN_POSN`** |
    | *Constantes da Categoria **`LC_NUMERIC`*** | |
    | **`DECIMAL_POINT`** | Caractere separador de decimais. |
    | **`RADIXCHAR`** | O mesmo valor de **`DECIMAL_POINT`**. |
    | **`THOUSANDS_SEP`** | Caractere separador de milhares (grupos de três dígitos). |
    | **`THOUSEP`** | O mesmo valor de **`THOUSANDS_SEP`**. |
    | **`GROUPING`** |  |
    | *Constantes da Categoria **`LC_MESSAGES`*** | |
    | **`YESEXPR`** | String de expressão regular para corresponder à entrada `"yes"` (sim). |
    | **`NOEXPR`** | String de expressão regular para corresponder à entrada `"no"` (não). |
    | **`YESSTR`** | String de saída para `"yes"` (sim). |
    | **`NOSTR`** | String de saída para `"no"` (não). |
    | *Constantes da Categoria **`LC_CTYPE`*** | |
    | **`CODESET`** | Retorna uma string com o nome da codificação de caracteres. |

### Valor Retornado

Retorna o elemento como uma string ou **`false`** se `item`
não for válido.

### Examples

**Exemplo #1 Exemplo de **nl\_langinfo()****

```
<?php

var_dump(nl_langinfo(CODESET));
var_dump(nl_langinfo(YESEXPR));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(14) "ANSI_X3.4-1968"
string(5) "^[yY]"
```

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

### Veja também

- [setlocale()](function.setlocale.md) - Define informação de localidade
- [localeconv()](function.localeconv.md) - Obtém informação de formatação numérica

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
