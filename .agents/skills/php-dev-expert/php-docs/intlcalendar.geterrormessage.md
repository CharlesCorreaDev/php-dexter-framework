# Obtém a última mensagem de erro no objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.geterrormessage.php

---

# IntlCalendar::getErrorMessage

# intlcal\_get\_error\_message

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getErrorMessage -- intlcal\_get\_error\_message — Obtém a última mensagem de erro no objeto

### Descrição

Estilo orientado a objetos (method):

public function **IntlCalendar::getErrorMessage**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intlcal\_get\_error\_message**([IntlCalendar](class.intlcalendar.md) `$calendar`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a mensagem de erro (se houver) associada com o erro reportado por
[IntlCalendar::getErrorCode()](intlcalendar.geterrorcode.md) ou
[intlcal\_get\_error\_code()](intlcalendar.geterrorcode.md). Se não houver mensagem
de erro associada, apenas a representação em string do nome da constante
de erro será retornada. Caso contrário, o texto também incluirá uma mensagem
definida no lado da ligação com o PHP.

### Parâmetros

`calendar`
:   O objeto calendário, na interface de estilo procedural.

### Valor Retornado

A mensagem de erro associada com o último erro ocorrido em uma chamada de função
neste objeto, ou uma string indicando a não existência de erro.
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getErrorMessage()****

```
<?php
$cal = IntlCalendar::createInstance('UTC', 'en_US');
var_dump($cal->getErrorMessage());

$cal->getWeekendTransition(IntlCalendar::DOW_WEDNESDAY);
var_dump($cal->getErrorMessage());
```

O exemplo acima produzirá:

```
string(12) "U_ZERO_ERROR"
string(82) "intlcal_get_weekend_transition: Error calling ICU method: U_ILLEGAL_ARGUMENT_ERROR"
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
