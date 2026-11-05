# Obtém o tipo de calendário usado para o IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.getcalendar.php

---

# IntlDateFormatter::getCalendar

# datefmt\_get\_calendar

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::getCalendar -- datefmt\_get\_calendar — Obtém o tipo de calendário usado para o IntlDateFormatter

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getCalendar**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_get\_calendar**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [int](language.types.integer.md)|[false](language.types.singleton.md)

### Parâmetros

`formatter`
:   O recurso do formatador

### Valor Retornado

O [tipo de
calendário](class.intldateformatter.md#intl.intldateformatter-constants.calendartypes) sendo usado pelo formatador. Pode ser
**`IntlDateFormatter::TRADITIONAL`** ou
**`IntlDateFormatter::GREGORIAN`**.
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_get\_calendar()****

```
<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'O calendário do formatador é : ' . datefmt_get_calendar($fmt);
datefmt_set_calendar($fmt, IntlDateFormatter::TRADITIONAL);
echo 'Agora o calendário do formatador é : ' . datefmt_get_calendar($fmt);
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
echo 'O calendário do formatador é : ' . $fmt->getCalendar();
$fmt->setCalendar(IntlDateFormatter::TRADITIONAL);
echo 'Agora o calendário do formatador é : ' . $fmt->getCalendar();

?>
```

**Exemplo #3 Exemplo de manipulação de localidade inválida**

```
<?php
try {
    $fmt = new IntlDateFormatter(
        'invalid_locale',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'dunno',
        IntlDateFormatter::GREGORIAN,
    );
    $cal = $fmt->getCalendar();
} catch (\Error $e) {
    // ...
}
?>
```

O exemplo acima produzirá:

```
O calendário do formatador é : 1
Agora o calendário do formatador é : 0
```

### Veja também

- [datefmt\_get\_calendar\_object()](intldateformatter.getcalendarobject.md) - Obtém uma cópia do objeto de calendário do formatador
- [datefmt\_set\_calendar()](intldateformatter.setcalendar.md) - Define o tipo de calendário usado pelo formatador
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
