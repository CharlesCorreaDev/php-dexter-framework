# Define o padrão do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/numberformatter.setpattern.php

---

# NumberFormatter::setPattern

# numfmt\_set\_pattern

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

NumberFormatter::setPattern -- numfmt\_set\_pattern — Define o padrão do formatador

### Descrição

Estilo orientado a objetos

public function **NumberFormatter::setPattern**([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Estilo procedural

function **numfmt\_set\_pattern**([NumberFormatter](class.numberformatter.md) `$formatter`, [string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Define o padrão a ser usado pelo formatador. Não pode ser usado em um formatador
baseado em regras.

### Parâmetros

`formatter`
:   Objeto [NumberFormatter](class.numberformatter.md).

`pattern`
:   O padrão na sintaxe descrita na
    [» Documentação DecimalFormat
    da ICU](https://unicode-org.github.io/icu-docs/apidoc/released/icu4c/classDecimalFormat.html).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **numfmt\_set\_pattern()****

```
<?php
$fmt = numfmt_create( 'de_DE', NumberFormatter::DECIMAL );
echo "Padrão: ".numfmt_get_pattern($fmt)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
numfmt_set_pattern($fmt, "#0.# kg");
echo "Padrão: ".numfmt_get_pattern($fmt)."\n";
echo numfmt_format($fmt, 1234567.891234567890000)."\n";
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::DECIMAL );
echo "Padrão: ".$fmt->getPattern()."\n";
echo $fmt->format(1234567.891234567890000)."\n";
$fmt->setPattern("#0.# kg");
echo "Padrão: ".$fmt->getPattern()."\n";
echo $fmt->format(1234567.891234567890000)."\n";
?>
```

O exemplo acima produzirá:

```
Padrão: #,##0.###
1.234.567,891
Padrão: #0.# kg
1234567,9 kg
```

### Veja também

- [numfmt\_get\_error\_code()](numberformatter.geterrorcode.md) - Obtém o último código de erro do formatador
- [numfmt\_create()](numberformatter.create.md) - Cria um formatador de número
- [numfmt\_get\_pattern()](numberformatter.getpattern.md) - Obtém padrão do formatador

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
