# A classe DateTimeZone

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.datetimezone.php

---

# A classe DateTimeZone

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

## Introdução

Representação de um fuso horário.

## Resumo da classe

class ****DateTimeZone****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[AFRICA](class.datetimezone.md#datetimezone.constants.africa);

public
const
[int](language.types.integer.md)
[AMERICA](class.datetimezone.md#datetimezone.constants.america);

public
const
[int](language.types.integer.md)
[ANTARCTICA](class.datetimezone.md#datetimezone.constants.antarctica);

public
const
[int](language.types.integer.md)
[ARCTIC](class.datetimezone.md#datetimezone.constants.arctic);

public
const
[int](language.types.integer.md)
[ASIA](class.datetimezone.md#datetimezone.constants.asia);

public
const
[int](language.types.integer.md)
[ATLANTIC](class.datetimezone.md#datetimezone.constants.atlantic);

public
const
[int](language.types.integer.md)
[AUSTRALIA](class.datetimezone.md#datetimezone.constants.australia);

public
const
[int](language.types.integer.md)
[EUROPE](class.datetimezone.md#datetimezone.constants.europe);

public
const
[int](language.types.integer.md)
[INDIAN](class.datetimezone.md#datetimezone.constants.indian);

public
const
[int](language.types.integer.md)
[PACIFIC](class.datetimezone.md#datetimezone.constants.pacific);

public
const
[int](language.types.integer.md)
[UTC](class.datetimezone.md#datetimezone.constants.utc);

public
const
[int](language.types.integer.md)
[ALL](class.datetimezone.md#datetimezone.constants.all);

public
const
[int](language.types.integer.md)
[ALL\_WITH\_BC](class.datetimezone.md#datetimezone.constants.all-with-bc);

public
const
[int](language.types.integer.md)
[PER\_COUNTRY](class.datetimezone.md#datetimezone.constants.per-country);

/\* Métodos \*/

public function [\_\_construct](datetimezone.construct.md)([string](language.types.string.md) `$timezone`)

public function [getLocation](datetimezone.getlocation.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getName](datetimezone.getname.md)(): [string](language.types.string.md)

public function [getOffset](datetimezone.getoffset.md)([DateTimeInterface](class.datetimeinterface.md) `$datetime`): [int](language.types.integer.md)

public function [getTransitions](datetimezone.gettransitions.md)([int](language.types.integer.md) `$timestampBegin` = **`PHP_INT_MIN`**, [int](language.types.integer.md) `$timestampEnd` = 2147483647): [array](language.types.array.md)|[false](language.types.singleton.md)

public static function [listAbbreviations](datetimezone.listabbreviations.md)(): [array](language.types.array.md)

public static function [listIdentifiers](datetimezone.listidentifiers.md)([int](language.types.integer.md) `$timezoneGroup` = **`DateTimeZone::ALL`**, [?](language.types.null.md)[string](language.types.string.md) `$countryCode` = **`null`**): [array](language.types.array.md)

}

## Constantes predefinidas

**`DateTimeZone::AFRICA`** [int](language.types.integer.md)
:   Fusos horários da África.

**`DateTimeZone::AMERICA`** [int](language.types.integer.md)
:   Fusos horários da América.

**`DateTimeZone::ANTARCTICA`** [int](language.types.integer.md)
:   Fusos horários da Antártida.

**`DateTimeZone::ARCTIC`** [int](language.types.integer.md)
:   Fusos horários do Ártico.

**`DateTimeZone::ASIA`** [int](language.types.integer.md)
:   Fusos horários da Ásia.

**`DateTimeZone::ATLANTIC`** [int](language.types.integer.md)
:   Fusos horários do Atlântico.

**`DateTimeZone::AUSTRALIA`** [int](language.types.integer.md)
:   Fusos horários da Austrália.

**`DateTimeZone::EUROPE`** [int](language.types.integer.md)
:   Fusos horários da Europa.

**`DateTimeZone::INDIAN`** [int](language.types.integer.md)
:   Fusos horários da Índia.

**`DateTimeZone::PACIFIC`** [int](language.types.integer.md)
:   Fusos horários do Pacífico.

**`DateTimeZone::UTC`** [int](language.types.integer.md)
:   Fusos horários UTC.

**`DateTimeZone::ALL`** [int](language.types.integer.md)
:   Todos os fusos horários.

**`DateTimeZone::ALL_WITH_BC`** [int](language.types.integer.md)
:   Todos os fusos horários, incluindo retrocompatíveis.

**`DateTimeZone::PER_COUNTRY`** [int](language.types.integer.md)
:   Fusos horários por país.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [DateTimeZone::\_\_construct](datetimezone.construct.md) — Cria um novo objeto DateTimeZone
- [DateTimeZone::getLocation](datetimezone.getlocation.md) — Retorna informações da localização de um fuso horário
- [DateTimeZone::getName](datetimezone.getname.md) — Retorna o nome do fuso horário
- [DateTimeZone::getOffset](datetimezone.getoffset.md) — Retorna o deslocamento do fuso horário em relação ao GMT
- [DateTimeZone::getTransitions](datetimezone.gettransitions.md) — Retorna todas as transições para o fuso horário
- [DateTimeZone::listAbbreviations](datetimezone.listabbreviations.md) — Retorna um array associativo contendo indicativo de horário de verão, deslocamento e nome do fuso horário
- [DateTimeZone::listIdentifiers](datetimezone.listidentifiers.md) — Retorna um array numericamente indexado contendo todos os indenticadores de fuso horário

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
