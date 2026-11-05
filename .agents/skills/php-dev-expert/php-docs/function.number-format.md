# Formata um número com milhares agrupados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.number-format.php

---

# number\_format

(PHP 4, PHP 5, PHP 7, PHP 8)

number\_format — Formata um número com milhares agrupados

### Descrição

function **number\_format**(  
    [float](language.types.float.md) `$num`,  
    [int](language.types.integer.md) `$decimals` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$decimal_separator` = ".",  
    [?](language.types.null.md)[string](language.types.string.md) `$thousands_separator` = ","  
): [string](language.types.string.md)

Formata um número com milhares agrupados e opcionalmente dígitos decimais usando a regra de arredondamento de meia unidade para cima.

### Parâmetros

`num`
:   O número a ser formatado.

`decimals`
:   Define o número de dígitos decimais.
    Se for igual a `0`, o separador de decimais definido por `decimal_separator` é
    omitido do valor de retorno.
    A partir do PHP 8.3.0, quando o valor é negativo, `num`
    é arredondado para o número de dígitos significativos informado em `decimals` antes
    do separador de decimais.
    Antes do PHP 8.3.0, valores negativos eram ignorados e manipulados como
    se fossem `0`.

`decimal_separator`
:   Define a string separadora de decimais.

`thousands_separator`
:   Define a string separadora de milhares.

### Valor Retornado

Uma versão formatada de `num`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Adicionada a manipulação de valores negativos para `decimals`. |
| 8.0.0 | Antes desta versão, **number\_format()** aceitava um, dois ou quatro parâmetros (mas não três). |
| 7.2.0 | **number\_format()** foi modificado para não ser capaz de retornar `-0`, anteriormente `-0` poderia ser retornado para casos onde `num` fosse `-0.01`. |

### Examples

**Exemplo #1 Exemplo de **number\_format()****

Por exemplo, a notação francesa normalmente usa duas casas decimais,
vírgula (',') como separador de decimais e espaço (' ') como
separador de milhares. O exemplo a seguir demonstra várias formas de formatar um número:

```
<?php

$number = 1234.56;

// notação inglesa (padrão)
echo number_format($number), PHP_EOL;
// 1,235

// notação francesa
echo number_format($number, 2, ',', ' '), PHP_EOL;
// 1 234,56

$number = 1234.5678;

// notação inglesa sem separador de milhares
echo number_format($number, 2, '.', ''), PHP_EOL;
// 1234.57

?>
```

**Exemplo #2 Um valor negativo para `decimals`**

A partir do PHP 8.3.0, um valor negativo para `decimals`
é usado para arredondar o número de dígitos significativos antes do separador
de decimais.

```
<?php
$number = "1234.5678";
var_dump(number_format($number, -1));
var_dump(number_format($number, -2));
var_dump(number_format($number, -3));
?>
```

O exemplo acima produzirá:

```
string(5) "1,230"
string(5) "1,200"
string(5) "1,000"
```

### Veja também

- [money\_format()](function.money-format.md) - Formata um número como uma string de moeda
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato

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
