# Obtém um número representando o horário atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getnow.php

---

# IntlCalendar::getNow

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getNow — Obtém um número representando o horário atual

### Descrição

Estilo orientado a objetos

public static function **IntlCalendar::getNow**(): [float](language.types.float.md)

Estilo procedural

function **intlcal\_get\_now**(): [float](language.types.float.md)

O número de milissegundos que se passaram desde a data de referência. Este
número é derivado do horário do sistema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [float](language.types.float.md) representando um número de milissegundos desde a época,
sem contar os segundos intercalares.

### Examples

**Exemplo #1 Exemplo de **IntlCalendar::getNow()****

```
<?php
$formatter = IntlDateFormatter::create('es_ES',
        IntlDateFormatter::FULL,
        IntlDateFormatter::FULL,
        'Europe/Madrid');

$val = IntlCalendar::getNow();

var_dump($val);
echo $formatter->format(IntlCalendar::getNow() / 1000.), "\n";
```

O exemplo acima produzirá:

```
float(1371425814666)
lunes, 17 de junio de 2013 01:36:54 Hora de verano de Europa central
```

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
