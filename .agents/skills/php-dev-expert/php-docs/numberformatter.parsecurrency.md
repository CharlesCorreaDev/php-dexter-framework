# Interpreta um valor monetário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.parsecurrency.php

---

# NumberFormatter::parseCurrency

# numfmt\_parse\_currency

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::parseCurrency -- numfmt\_parse\_currency — Interpreta um valor monetário

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::parseCurrency**([string](language.types.string.md) `$string`, [string](language.types.string.md) `&$currency`, [int](language.types.integer.md) `&$offset` = **`null`**): [float](language.types.float.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_parse\_currency**(  
    [NumberFormatter](class.numberformatter.md) `$formatter`,  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `&$currency`,  
    [int](language.types.integer.md) `&$offset` = **`null`**  
): [float](language.types.float.md)|[false](language.types.singleton.md)

Interpreta uma string em um valor decimal e uma moeda usando o formatador atual.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`currency`
:   Parâmetro que irá receber o nome da moeda (código de moeda de 3 letras
    ISO 4217).

`offset`
:   Deslocamento na string a partir do qual a interpretação será iniciada. Ao retornar, este valor
    conterá o deslocamento no qual a interpretação terminou.

### Valor Retornado

O valor numérico interpretado ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **numfmt\_parse\_currency()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
$num = "1.234.567,89\xc2\xa0$";
echo "Temos ".numfmt_parse_currency($fmt, $num, $curr)." em $curr\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
$num = "1.234.567,89\xc2\xa0$";
echo "Temos ".$fmt->parseCurrency($num, $curr)." em $curr\n";
?>
```

O exemplo acima produzirá:

```
Temos 1234567.89 em USD
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_parse()](numberformatter.parse.md) - Interpreta um número
- [numfmt\_format\_currency()](numberformatter.formatcurrency.md) - Formata um valor de moeda

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
