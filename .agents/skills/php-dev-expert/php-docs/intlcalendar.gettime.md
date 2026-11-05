# Obtém o horário atualmente representado pelo objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.gettime.php

---

# IntlCalendar::getTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getTime — Obtém o horário atualmente representado pelo objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getTime**(): [float](language.types.float.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_time**([IntlCalendar](class.intlcalendar.md) `$calendar`): [float](language.types.float.md)|[false](language.types.singleton.md)

Retorna o horário associado a este objeto, expresso como o número de
milissegundos desde a época de referência.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Um [float](language.types.float.md) representando o número de milissegundos decorridos desde o
horário de referência (1 Jan 1970 00:00:00 UTC), ou **`false`** em caso de falha

### Examples

**Exemplo #1 **IntlCalendar::getTime()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_BR');

$cal = new IntlGregorianCalendar(2013, 4 /* maio */, 1, 0, 0, 0);
$time = $cal->getTime();
var_dump($time, $time / 1000 == strtotime('2013-05-01 00:00:00')); //true
```

O exemplo acima produzirá:

```
float(1367362800000)
bool(true)
```

### Veja também

- [IntlCalendar::getNow()](intlcalendar.getnow.md) - Obtém um número representando o horário atual

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
