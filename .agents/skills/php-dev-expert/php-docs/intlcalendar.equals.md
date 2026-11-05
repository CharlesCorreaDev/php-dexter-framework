# Compara horários de dois objetos IntlCalendar para igualidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.equals.php

---

# IntlCalendar::equals

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::equals — Compara horários de dois objetos IntlCalendar para igualidade

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::equals**([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_equals**([IntlCalendar](class.intlcalendar.md) `$calendar`, [IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Retorna verdadeiro se este calendário e o calendário informado tiverem o mesmo horário.
As configurações, tipos de calendário e estados de campos não precisam ser os mesmos.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`other`
:   O calendário a ser comparado com o objeto primário.

### Valor Retornado

Retorna **`true`** se os horário de ambos os objetos
[IntlCalendar](class.intlcalendar.md) forem o mesmo, ou **`false`**
caso contrário.

Em caso de falha, **`false`** também é retornado. Para detectar condições de erro, use [intl\_get\_error\_code()](function.intl-get-error-code.md) ou configure Intl para lançar [exceções](intl.configuration.md#ini.intl.use-exceptions).

### Examples

**Exemplo #1 **IntlCalendar::equals()****

```
<?php
ini_set('date.timezone', 'UTC');

$cal1 = IntlCalendar::createInstance(NULL, 'es_ES');
$cal2 = clone $cal1;

var_dump($cal1->equals($cal2)); //TRUE

//A localidade não é incluída na comparação
$cal2 = IntlCalendar::createInstance(NULL, 'pt_PT');
$cal2->setTime($cal1->getTime());
var_dump($cal1->equals($cal2)); //TRUE

//E os estados definidos para os campos também não são incluídos
$cal2->clear(IntlCalendar::FIELD_YEAR);
var_dump($cal1->isSet(IntlCalendar::FIELD_YEAR) ==
        $cal2->isSet(IntlCalendar::FIELD_YEAR)); //FALSE
var_dump($cal1->equals($cal2)); //TRUE

//E nem o tipo do calendário
$cal2 = IntlCalendar::createInstance(NULL, 'es_ES@calendar=islamic');
$cal2->setTime($cal1->getTime());
var_dump($cal1->equals($cal2)); //TRUE

//Apenas o instante de tempo é incluído
$cal2 = clone $cal1;
$cal2->setTime($cal1->getTime() + 1.);
var_dump($cal1->equals($cal2)); //FALSE
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
