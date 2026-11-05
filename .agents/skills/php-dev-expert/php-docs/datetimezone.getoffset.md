# Retorna o deslocamento do fuso horário em relação ao GMT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.getoffset.php

---

# DateTimeZone::getOffset

# timezone\_offset\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::getOffset -- timezone\_offset\_get — Retorna o deslocamento do fuso horário em relação ao GMT

### Descrição

Estilo orientado a objetos

public function **DateTimeZone::getOffset**([DateTimeInterface](class.datetimeinterface.md) `$datetime`): [int](language.types.integer.md)

Estilo procedural

function [timezone\_offset\_get](function.timezone-offset-get.md)([DateTimeZone](class.datetimezone.md) `$object`, [DateTimeInterface](class.datetimeinterface.md) `$datetime`): [int](language.types.integer.md)

Esta função retorna o deslocamento em relação ao GMT para a data/horário especificada
no parâmetro `datetime`. O deslocamento GMT é calculado
com informação do fuso horário contido no objeto DateTimeZone utilizado.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTimeZone](class.datetimezone.md)
    retornado por [timezone\_open()](function.timezone-open.md)

`datetime`
:   DateTime que contém a data/horário a partir da qual será computado o deslocamento.

### Valor Retornado

Retorna o deslocamento do fuso horário em segundos.

### Examples

**Exemplo #1 Exemplos do método **DateTimeZone::getOffset()****

```
<?php
// Cria dois objetos de fuso horário, um para Taipei (Taiwan) e um para
// Tokyo (Japão)
$dateTimeZoneTaipei = new DateTimeZone("Asia/Taipei");
$dateTimeZoneJapan = new DateTimeZone("Asia/Tokyo");

// Cria dois objetos DateTime que irão conter o mesmo timestamp Unix, mas
// têm fusos horários diferentes anexados a eles.
$dateTimeTaipei = new DateTime("now", $dateTimeZoneTaipei);
$dateTimeJapan = new DateTime("now", $dateTimeZoneJapan);

// Calcula o deslocamento GMT para a data/horário contida no objeto $dateTimeTaipei,
// mas usando as regras de fuso horário como definidas para Tokyo
// ($dateTimeZoneJapan).
$timeOffset = $dateTimeZoneJapan->getOffset($dateTimeTaipei);

// Deve mostrar int(32400) (para datas após Sat Sep 8 01:00:00 1951 JST).
var_dump($timeOffset);
```

O exemplo acima produzirá:

```
int(32400)
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
