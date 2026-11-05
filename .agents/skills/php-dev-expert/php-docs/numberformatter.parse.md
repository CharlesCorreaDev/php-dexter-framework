# Interpreta um número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.parse.php

---

# NumberFormatter::parse

# numfmt\_parse

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::parse -- numfmt\_parse — Interpreta um número

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::parse**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DOUBLE`**, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_parse**(  
    [NumberFormatter](class.numberformatter.md) `$formatter`,  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DOUBLE`**,  
    [int](language.types.integer.md) `&$offset` = **`null`**  
): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Converte uma string em um número usando as regras atuais do formatador.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`string`
:   A string a ser convertida para um número.

`type`
:   O
    [tipo de formatação](class.numberformatter.md#intl.numberformatter-constants.types) a ser usado. Por padrão,
    **`NumberFormatter::TYPE_DOUBLE`** é usado.
    Observe que **`NumberFormatter::TYPE_CURRENCY`** não é suportado;
    use [NumberFormatter::parseCurrency()](numberformatter.parsecurrency.md) em seu lugar.

`offset`
:   Deslocamento na string a partir do qual a interpretação será iniciada. Ao retornar, este valor
    conterá o deslocamento no qual a interpretação terminou.

### Valor Retornado

O valor numérico convertido ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **numfmt\_parse()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
$num = "1.234.567,891";
echo numfmt_parse($fmt, $num)."\n";
echo numfmt_parse($fmt, $num, NumberFormatter::TYPE_INT32)."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
$num = "1.234.567,891";
echo $fmt->parse($num)."\n";
echo $fmt->parse($num, NumberFormatter::TYPE_INT32)."\n";
?>
```

O exemplo acima produzirá:

```
1234567.891
1234567
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_format()](numberformatter.format.md) - Formata um número
- [numfmt\_parse\_currency()](numberformatter.parsecurrency.md) - Interpreta um valor monetário

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
