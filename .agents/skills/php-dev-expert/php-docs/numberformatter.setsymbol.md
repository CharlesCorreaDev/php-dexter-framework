# Define um valor de símbolo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.setsymbol.php

---

# NumberFormatter::setSymbol

# numfmt\_set\_symbol

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::setSymbol -- numfmt\_set\_symbol — Define um valor de símbolo

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::setSymbol**([int](language.types.integer.md) `$symbol`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **numfmt\_set\_symbol**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md) `$symbol`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define um símbolo associado ao formatador. O formatador usa símbolos para
representar os caracteres especiais dependentes de localidade em um número, por exemplo
o sinal de percentagem. Esta API não é suportada para formatadores baseados em regras.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`symbol`
:   Especificador de símbolo, uma das constantes de
    [símbolo de formatação](class.numberformatter.md#intl.numberformatter-constants.unumberformatsymbol).

`value`
:   Texto para o símbolo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_set\_symbol()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo "Sep: ".numfmt_get_symbol($fmt, NumberFormatter::GROUPING_SEPARATOR_SYMBOL)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
numfmt_set_symbol($fmt, NumberFormatter::GROUPING_SEPARATOR_SYMBOL, "*");
echo "Sep: ".numfmt_get_symbol($fmt, NumberFormatter::GROUPING_SEPARATOR_SYMBOL)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
echo "Sep: ".$fmt->getSymbol(NumberFormatter::GROUPING_SEPARATOR_SYMBOL)."\n";
echo $fmt->format(1234567.891234567890000)."\n";
$fmt->setSymbol(NumberFormatter::GROUPING_SEPARATOR_SYMBOL, "*");
echo "Sep: ".$fmt->getSymbol(NumberFormatter::GROUPING_SEPARATOR_SYMBOL)."\n";
echo $fmt->format(1234567.891234567890000)."\n";
?>
```

O exemplo acima produzirá:

```
Sep: .
1.234.567,891
Sep: *
1*234*567,891
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_get\_symbol()](numberformatter.getsymbol.md) - Obtém um valor de símbolo

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
