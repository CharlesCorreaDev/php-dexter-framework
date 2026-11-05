# Define o modelo usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.setpattern.php

---

# IntlDateFormatter::setPattern

# datefmt\_set\_pattern

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::setPattern -- datefmt\_set\_pattern — Define o modelo usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::setPattern**([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Estilo procedural

function **datefmt\_set\_pattern**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

Define o modelo usado para o IntlDateFormatter.

### Parâmetros

`formatter`
:   O recurso do formatador.

`pattern`
:   Nova string de modelo a ser utilizado.
    Os modelos possíveis estão documentados em [» https://unicode-org.github.io/icu/userguide/format\_parse/datetime/](https://unicode-org.github.io/icu/userguide/format_parse/datetime/).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Strings de formato mal formadas são normalmente as causas de falhas.

### Examples

**Exemplo #1 Exemplo de **datefmt\_set\_pattern()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Modelo do formatador é: ', datefmt_get_pattern($fmt), PHP_EOL;
echo 'Primeira saída formatada é ', datefmt_format($fmt, 0), PHP_EOL;
datefmt_set_pattern($fmt, 'yyyyMMdd hh:mm:ss z');
echo 'Agora o modelo do formatador é: ', datefmt_get_pattern($fmt), PHP_EOL;
echo 'Segunda saída formatada com o modelo é ', datefmt_format($fmt, 0), PHP_EOL;
?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Modelo do formatador é: ', $fmt->getPattern(), PHP_EOL;
echo 'Primeira saída formatada é ', $fmt->format(0), PHP_EOL;
$fmt->setPattern('yyyyMMdd hh:mm:ss z');
echo 'Agora o modelo do formatador é: ', $fmt->getPattern(), PHP_EOL;
echo 'Segunda saída formatada com o modelo é ', $fmt->format(0), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
Modelo do formatador é: MM/dd/yyyy
Primeira saída formatada é 12/31/1969
Agora o modelo do formatador é: yyyyMMdd hh:mm:ss z
Segunda saída formatada com o modelo é 19691231 04:00:00 PST
```

### Veja também

- [datefmt\_get\_pattern()](intldateformatter.getpattern.md) - Obtém o modelo usado para o IntlDateFormatter
- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data

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
