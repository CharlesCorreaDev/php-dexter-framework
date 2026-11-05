# Retorna o deslocamento do fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.getoffset.php

---

# DateTimeInterface::getOffset

# DateTimeImmutable::getOffset

# DateTime::getOffset

# date\_offset\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeInterface::getOffset -- DateTimeImmutable::getOffset -- DateTime::getOffset -- date\_offset\_get — Retorna o deslocamento do fuso horário

### Descrição

Estilo orientado a objetos

public function **DateTimeInterface::getOffset**(): [int](language.types.integer.md)

public function **DateTimeImmutable::getOffset**(): [int](language.types.integer.md)

public function **DateTime::getOffset**(): [int](language.types.integer.md)

Estilo procedural

function [date\_offset\_get](function.date-offset-get.md)([DateTimeInterface](class.datetimeinterface.md) `$object`): [int](language.types.integer.md)

Retorna o deslocamento do fuso horário.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md)

### Valor Retornado

Retorna o deslocamento do fuso horário, em segundos, para UTC em caso de sucesso.

### Examples

**Exemplo #1 Exemplo do método **DateTime::getOffset()****

Estilo orientado a objetos

```
<?php
$winter = new DateTimeImmutable('2010-12-21', new DateTimeZone('America/New_York'));
$summer = new DateTimeImmutable('2008-06-21', new DateTimeZone('America/New_York'));

echo $winter->getOffset() . "\n";
echo $summer->getOffset() . "\n";
```

O exemplo acima produzirá:

```
-18000
-14400
```

Estilo procedural

```
<?php
$winter = date_create('2010-12-21', timezone_open('America/New_York'));
$summer = date_create('2008-06-21', timezone_open('America/New_York'));

echo date_offset_get($winter) . "\n";
echo date_offset_get($summer) . "\n";
```

O exemplo acima produzirá:

```
-18000
-14400
```

Nota: -18000 = -5 horas, -14400 = -4 horas.

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
