# Define o tipo de calendário usado pelo formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.setcalendar.php

---

# IntlDateFormatter::setCalendar

# datefmt\_set\_calendar

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::setCalendar -- datefmt\_set\_calendar — Define o tipo de calendário usado pelo formatador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::setCalendar**([IntlCalendar](class.intlcalendar.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$calendar`): [bool](language.types.boolean.md)

Estilo procedural

function **datefmt\_set\_calendar**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [IntlCalendar](class.intlcalendar.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$calendar`): [bool](language.types.boolean.md)

Define o tipo de calendário usado pelo formatador.

### Parâmetros

`formatter`
:   O recurso do formatador.

`calendar`
:   Pode ser: o [tipo de
    calendário](class.intldateformatter.md#intl.intldateformatter-constants.calendartypes) a ser usado (o padrão é
    **`IntlDateFormatter::GREGORIAN`**, que também é usado se
    **`null`** for especificado) ou um
    objeto [IntlCalendar](class.intlcalendar.md).

    Qualquer objeto [IntlCalendar](class.intlcalendar.md) passado será clonado;
    nenhuma modificação será feita no objeto do argumento.

    O fuso horário do formatador somente será mantido se um
    objeto [IntlCalendar](class.intlcalendar.md) não for passado, caso contrário o
    novo fuso horário será o do objeto passado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL intl 3.0.0 | Tornou-se possível passar um objeto [IntlCalendar](class.intlcalendar.md). |

### Examples

**Exemplo #1 Exemplo de **datefmt\_set\_calendar()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'O calendário do formatador é: ' . datefmt_get_calendar($fmt), "\n";
datefmt_set_calendar($fmt, IntlDateFormatter::TRADITIONAL);
echo 'Agora, o calendário do formatador é: ' . datefmt_get_calendar($fmt);
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
echo 'O calendário do formatador é: ' . $fmt->getCalendar(), "\n";
$fmt->setCalendar(IntlDateFormatter::TRADITIONAL);
echo 'Agora, o calendário do formatador é: ' . $fmt->getCalendar();
?>
```

O exemplo acima produzirá:

```
O calendário do formatador é: 1
Agora, o calendário do formatador é: 0
```

**Exemplo #3 Exemplo com argumento [IntlCalendar](class.intlcalendar.md)**

```
<?php
$time = strtotime("2013-03-03 00:00:00 UTC");
$formatter = IntlDateFormatter::create("en_US", NULL, NULL, "Europe/Amsterdam");

echo "antes: ", $formatter->format($time), "\n";

/* note que a localidade do calendário não é usada! */
$formatter->setCalendar(IntlCalendar::createInstance(
               "America/New_York", "pt_BR@calendar=islamic"));

echo "depois:  ", $formatter->format($time), "\n";
?>
```

O exemplo acima produzirá:

```
antes: Sunday, March 3, 2013 at 1:00:00 AM Central European Standard Time
depois:  Saturday, Rabiʻ II 20, 1434 at 7:00:00 PM Eastern Standard Time
```

### Veja também

- [datefmt\_get\_calendar()](intldateformatter.getcalendar.md) - Obtém o tipo de calendário usado para o IntlDateFormatter
- [datefmt\_get\_calendar\_object()](intldateformatter.getcalendarobject.md) - Obtém uma cópia do objeto de calendário do formatador
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
