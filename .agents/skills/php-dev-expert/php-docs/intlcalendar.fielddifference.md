# Calcula a diferença entre o horário fornecido e o horário deste objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.fielddifference.php

---

# IntlCalendar::fieldDifference

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::fieldDifference — Calcula a diferença entre o horário fornecido e o horário deste objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::fieldDifference**([float](language.types.float.md) `$timestamp`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_field\_difference**([IntlCalendar](class.intlcalendar.md) `$calendar`, [float](language.types.float.md) `$timestamp`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Calcula a diferença entre o horário fornecido e o horário definido para este
objeto, com respeito à quantidade especificada pelo
parâmetro `field`.

Este método foi projetado para ser chamado sucessivamente, primeiro com o campo de interesse
mais significativo até o menos significativo. Para isto,
como efeito colateral, o valor do campo para este calendário é
avançado na quantidade retornada.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`timestamp`
:   O horário com o qual a quantidade representada pelo
    `field` será comparada. Para que o resultado seja positivo, o horário
    informado para este parâmetro deve ser posterior ao do objeto em que este
    método está sendo chamado.

`field`
:   O campos que representa a quantidade sendo comparada.

    Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

### Valor Retornado

Retorna uma diferença (com sinal) de tempo na unidade associada com o
campo especificado ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::fieldDifference()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'fr_FR');

$cal1 = IntlCalendar::fromDateTime('2012-02-29 09:00:11');
$cal2 = IntlCalendar::fromDateTime('2013-03-01 09:19:29');
$time = $cal2->getTime();

echo "Horário antes: ", IntlDateFormatter::formatObject($cal1), "\n";

printf(
    "A diferença de tempo é de %d ano(s), %d mês(es), "
  . "%d dia(s), %d hora(s) e %d minutos(s)\n",
    $cal1->fieldDifference($time, IntlCalendar::FIELD_YEAR),
    $cal1->fieldDifference($time, IntlCalendar::FIELD_MONTH),
    $cal1->fieldDifference($time, IntlCalendar::FIELD_DAY_OF_MONTH),
    $cal1->fieldDifference($time, IntlCalendar::FIELD_HOUR_OF_DAY),
    $cal1->fieldDifference($time, IntlCalendar::FIELD_MINUTE)
);

//agora o objeto avançou para o tempo alvo, exteto pelos segundos,
//para os quais não foram medidas as diferenças
echo "Horário depois: ", IntlDateFormatter::formatObject($cal1), "\n";
```

O exemplo acima produzirá:

```
Horário antes: 29 févr. 2012 09:00:11
A diferença de tempo é de 1 ano(s), 0 mês(es), 1 dia(s), 0 hora(s) e 19 minutos(s)
Horário depois: 1 mars 2013 09:19:11
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
