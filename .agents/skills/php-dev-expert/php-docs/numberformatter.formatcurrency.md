# Formata um valor de moeda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.formatcurrency.php

---

# NumberFormatter::formatCurrency

# numfmt\_format\_currency

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::formatCurrency -- numfmt\_format\_currency — Formata um valor de moeda

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::formatCurrency**([float](language.types.float.md) `$amount`, [string](language.types.string.md) `$currency`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_format\_currency**([NumberFormatter](class.numberformatter.md) `$formatter`, [float](language.types.float.md) `$amount`, [string](language.types.string.md) `$currency`): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata o valor de moeda de acordo com as regras de formatação.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`amount`
:   O valor numérico monetário.

`currency`
:   O código de moeda de 3 letras ISO 4217 indicando a moeda a ser usada.

### Valor Retornado

String representando o valor monetário formatado, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_format\_currency()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
echo numfmt_format_currency($fmt, 1234567.891234567890000, "EUR")."\n";
echo numfmt_format_currency($fmt, 1234567.891234567890000, "RUR")."\n";
$fmt = numfmt_create( 'ru_RU', NumberFormatter::CURRENCY );
echo numfmt_format_currency($fmt, 1234567.891234567890000, "EUR")."\n";
echo numfmt_format_currency($fmt, 1234567.891234567890000, "RUR")."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
echo $fmt->formatCurrency(1234567.891234567890000, "EUR")."\n";
echo $fmt->formatCurrency(1234567.891234567890000, "RUR")."\n";
$fmt = new NumberFormatter( 'ru_RU', NumberFormatter::CURRENCY );
echo $fmt->formatCurrency(1234567.891234567890000, "EUR")."\n";
echo $fmt->formatCurrency(1234567.891234567890000, "RUR")."\n";
?>
```

O exemplo acima produzirá:

```
1.234.567,89 €
1.234.567,89 RUR
1 234 567,89€
1 234 567,89р.
```

### Notas

> **Nota**:
>
> Formatos possíveis por este método não usam todas as possibilidades da biblioteca ICU subjacente,
> como por exemplo usar o símbolo da moeda em sua forma curta ou abreviada.
>
> Para usar todas as possibilidades, use a função [msgfmt\_format\_message()](messageformatter.formatmessage.md).

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_format()](numberformatter.format.md) - Formata um número
- [numfmt\_parse\_currency()](numberformatter.parsecurrency.md) - Interpreta um valor monetário
- [msgfmt\_format\_message()](messageformatter.formatmessage.md) - Formata uma mensagem rapidamente

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
