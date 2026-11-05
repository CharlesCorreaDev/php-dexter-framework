# Formata um número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.format.php

---

# NumberFormatter::format

# numfmt\_format

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::format -- numfmt\_format — Formata um número

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::format**([int](language.types.integer.md)|[float](language.types.float.md) `$num`, [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DEFAULT`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **numfmt\_format**([NumberFormatter](class.numberformatter.md) `$formatter`, [int](language.types.integer.md)|[float](language.types.float.md) `$num`, [int](language.types.integer.md) `$type` = **`NumberFormatter::TYPE_DEFAULT`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata um valor numérico de acordo com as regras de formatação.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`num`
:   O valor a formatar. Pode ser [int](language.types.integer.md) ou [float](language.types.float.md),
    outros tipos serão convertidos para valores numéricos.

`type`
:   O
    [tipo de formatação](class.numberformatter.md#intl.numberformatter-constants.types) a ser usado.
    Observe que **`NumberFormatter::TYPE_CURRENCY`** não é suportado;
    use [NumberFormatter::formatCurrency()](numberformatter.formatcurrency.md) em seu lugar.

### Valor Retornado

Retorna a string contendo o valor formatado, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **numfmt\_format()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
$data = numfmt_format($fmt, 1234567.891234567890000);
var_dump($data);
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
$data = $fmt->format(1234567.891234567890000);
var_dump($data);
?>
```

O exemplo acima produzirá:

```
string(13) "1.234.567,891"
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
- [numfmt\_format\_currency()](numberformatter.formatcurrency.md) - Formata um valor de moeda
- [numfmt\_parse()](numberformatter.parse.md) - Interpreta um número
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
