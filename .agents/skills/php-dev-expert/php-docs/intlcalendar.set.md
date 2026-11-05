# Define um campo de horário ou vários campos comuns de uma vez

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.set.php

---

# IntlCalendar::set

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::set — Define um campo de horário ou vários campos comuns de uma vez

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::set**([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [true](language.types.singleton.md)

public function **IntlCalendar::set**(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth` = NULL,  
    [int](language.types.integer.md) `$hour` = NULL,  
    [int](language.types.integer.md) `$minute` = NULL,  
    [int](language.types.integer.md) `$second` = NULL  
): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set**([IntlCalendar](class.intlcalendar.md) `$cal`, [int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [true](language.types.singleton.md)

function **intlcal\_set**(  
    [IntlCalendar](class.intlcalendar.md) `$cal`,  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth` = NULL,  
    [int](language.types.integer.md) `$hour` = NULL,  
    [int](language.types.integer.md) `$minute` = NULL,  
    [int](language.types.integer.md) `$second` = NULL  
): [bool](language.types.boolean.md)

Define um campo específico para o valor fornecido, ou define de uma só vez vários
campos comuns. O intervalo de valores aceitos depende se o
calendário está usado o [modo
leniente](intlcalendar.setlenient.md).

Para campos que conflitarem entre si, os campos que forem definidos mais tarde têm prioridade.

Este método não pode ser chamado com exatamente quatro argumentos.

### Parâmetros

`cal`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`field`
:   Uma das [constantes de campo](class.intlcalendar.md#intlcalendar.constants)
    de data/horário da classe [IntlCalendar](class.intlcalendar.md). São valores inteiros
    entre `0` e
    **`IntlCalendar::FIELD_COUNT`**.

`value`
:   O novo valor para o campo informado.

`year`
:   O novo valor para **`IntlCalendar::FIELD_YEAR`**.

`month`
:   O novo valor para **`IntlCalendar::FIELD_MONTH`**.
    A sequência de meses é baseada em zero, isto é, janeiro é representado por 0,
    fevereiro por 1, …, dezembro é 11 e undecember (se o calendário
    tiver) é 12.

`dayOfMonth`
:   O novo valor para **`IntlCalendar::FIELD_DAY_OF_MONTH`**.

`hour`
:   O novo valor para **`IntlCalendar::FIELD_HOUR_OF_DAY`**.

`minute`
:   O novo valor para **`IntlCalendar::FIELD_MINUTE`**.

`second`
:   O novo valor para **`IntlCalendar::FIELD_SECOND`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |
| 8.4.0 | Este método foi descontinuado em favor dos métodos [IntlCalendar::setDate()](intlcalendar.setdate.md) e [IntlCalendar::setDateTime()](intlcalendar.setdatetime.md). |

### Examples

**Exemplo #1 **IntlCalendar::set()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_PT');

// Chamadas feitas mais tarde têm prioridade
$cal = new IntlGregorianCalendar(2013, 6 /* julho */, 1);
$cal->set(IntlCalendar::FIELD_YEAR, 2012);
$cal->set(IntlCalendar::FIELD_EXTENDED_YEAR, 2011);
var_dump(IntlDateFormatter::formatObject($cal));

$cal = new IntlGregorianCalendar(2013, 6 /* julho */, 1);
$cal->set(IntlCalendar::FIELD_YEAR, 2012);
$cal->set(IntlCalendar::FIELD_EXTENDED_YEAR, 2011);
// O horário não foi recalculado ainda. Se o ano estendido for limpo,
// o ano definido anteriormente será usado
$cal->clear(IntlCalendar::FIELD_EXTENDED_YEAR);
var_dump(IntlDateFormatter::formatObject($cal));
```

O exemplo acima produzirá:

```
string(20) "01/07/2011, 00:00:00"
string(20) "01/07/2012, 00:00:00"
```

### Veja também

- [IntlCalendar::get()](intlcalendar.get.md) - Obtém o valor de um campo
- [IntlCalendar::add()](intlcalendar.add.md) - Adiciona uma quantidade de tempo (com sinal) a um campo
- [IntlCalendar::roll()](intlcalendar.roll.md) - Adiciona valor ao campo sem transferir para campos mais significativos

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
