# Cria um formatador de número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.create.php

---

# NumberFormatter::create

# numfmt\_create

# NumberFormatter::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::create -- numfmt\_create -- NumberFormatter::\_\_construct — Cria um formatador de número

### Descrição

Estilo orientado a objetos (método)

public static function **NumberFormatter::create**([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$style`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**): [?](language.types.null.md)[NumberFormatter](class.numberformatter.md)

Estilo procedural

function **numfmt\_create**([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$style`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**): [?](language.types.null.md)[NumberFormatter](class.numberformatter.md)

Estilo orientado a objetos (construtor):

public function **NumberFormatter::\_\_construct**([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$style`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**)

Cria um formatador de número.

### Parâmetros

`locale`
:   Localidade na qual o número deve ser formatado (nome da localidade, ex.: pt\_BR).

`style`
:   Estilo da formatação, uma das constantes de
    [estilo de formatação](class.numberformatter.md#intl.numberformatter-constants.unumberformatstyle). Se
    **`NumberFormatter::PATTERN_DECIMAL`**
    ou **`NumberFormatter::PATTERN_RULEBASED`**
    forem passadas, o formato do número será aberto usando o modelo fornecido,
    que deve estar conforme a sintaxe descrita na
    [» documentação de formato decimal
    da ICU](https://unicode-org.github.io/icu-docs/apidoc/released/icu4c/classDecimalFormat.html) ou na
    [» documentação de formato de número com base em regras
    da ICU](https://unicode-org.github.io/icu/userguide/format_parse/numbers/rbnf.html), respectively.

`pattern`
:   String de modelo se o estilo escolhido requerer um modelo.

### Valor Retornado

Retorna um objeto [NumberFormatter](class.numberformatter.md) ou **`null`** em caso de erro.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se
`locale` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Uma exceção [ValueError](class.valueerror.md) agora é lançada se `locale` for inválido. |
| 8.0.0 | `pattern` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **numfmt\_create()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
$fmt = numfmt_create( 'it', NumberFormatter::SPELLOUT );
echo numfmt_format($fmt, 1142)."\n";
?>
```

**Exemplo #2 Exemplo de **NumberFormatter::create()****

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
echo $fmt->format(1234567.891234567890000)."\n";
$fmt = new NumberFormatter( 'it', NumberFormatter::SPELLOUT );
echo $fmt->format(1142)."\n";
?>
```

O exemplo acima produzirá:

```
1.234.567,891
millicentoquarantadue
```

### Veja também

- [numfmt\_format()](numberformatter.format.md) - Formata um número
- [numfmt\_parse()](numberformatter.parse.md) - Interpreta um número

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
