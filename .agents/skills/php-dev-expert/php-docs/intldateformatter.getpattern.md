# Obtém o modelo usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.getpattern.php

---

# IntlDateFormatter::getPattern

# datefmt\_get\_pattern

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getPattern -- datefmt\_get\_pattern — Obtém o modelo usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getPattern**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_pattern**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o modelo usado pelo formatador.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

A string do modelo sendo usado para formatar/interpretar, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_pattern()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Modelo do formatador é : ' . datefmt_get_pattern($fmt);
echo 'Primeira saída formatada com o modelo é ' . datefmt_format($fmt, 0);
datefmt_set_pattern($fmt,'yyyymmdd hh:mm:ss z');
echo 'Agora o modelo do formatador é : ' . datefmt_get_pattern($fmt);
echo 'Segunda saída formatada com o modelo é ' . datefmt_format($fmt, 0);

?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN,
    'MM/dd/yyyy'
);
echo 'Modelo do formatador é : ' . $fmt->getPattern();
echo 'Primeira saída formatada com o modelo é ' . $fmt->format(0);
$fmt->setPattern('yyyyMMdd hh:mm:ss z');
echo 'Agora o modelo do formatador é : ' . $fmt->getPattern();
echo 'Segunda saída formatada com o modelo é ' . $fmt->format(0);
?>
```

O exemplo acima produzirá:

```
Modelo do formatador é : MM/dd/yyyy
Primeira saída formatada com o modelo é 12/31/1969
Agora o modelo do formatador é : yyyyMMdd hh:mm:ss z
Segunda saída formatada com o modelo é 19691231 04:00:00 PST
```

### Veja também

- [datefmt\_set\_pattern()](intldateformatter.setpattern.md) - Define o modelo usado para o IntlDateFormatter
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
