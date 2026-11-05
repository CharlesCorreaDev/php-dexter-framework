# Obtém o identificador de fuso horário usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.gettimezoneid.php

---

# IntlDateFormatter::getTimeZoneId

# datefmt\_get\_timezone\_id

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getTimeZoneId -- datefmt\_get\_timezone\_id — Obtém o identificador de fuso horário usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getTimeZoneId**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_timezone\_id**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o identificador de fuso horário usado para o IntlDateFormatter.

### Parâmetros

`formatter`
:   O recurso do formatador.

### Valor Retornado

String contendo o ID para o fuso horário usado pelo formatador, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_timezone\_id()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'ID de fuso horário do formatador é: ' . datefmt_get_timezone_id($fmt) . "\n";
datefmt_set_timezone($fmt, 'Europe/Madrid');
echo 'Agora, o ID de fuso horário do formatador é: ' . datefmt_get_timezone_id($fmt);

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
    IntlDateFormatter::GREGORIAN
);
echo 'ID de fuso horário do formatador é: ' . $fmt->getTimezoneId() . "\n";
$fmt->setTimezone('Europe/Madrid');
echo 'Agora, o ID de fuso horário do formatador é: ' . $fmt->getTimezoneId();

?>
```

O exemplo acima produzirá:

```
ID de fuso horário do formatador é: America/Los_Angeles
Agora, o ID de fuso horário do formatador é: Europe/Madrid
```

### Veja também

- [datefmt\_set\_timezone()](intldateformatter.settimezone.md) - Define o fuso horário do formatador
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
