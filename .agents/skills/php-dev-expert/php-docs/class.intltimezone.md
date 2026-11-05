# A classe IntlTimeZone

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intltimezone.php

---

# A classe IntlTimeZone

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

## Introdução

## Resumo da classe

class ****IntlTimeZone****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DISPLAY\_SHORT](class.intltimezone.md#intltimezone.constants.display-short);

public
const
[int](language.types.integer.md)
[DISPLAY\_LONG](class.intltimezone.md#intltimezone.constants.display-long);

public
const
[int](language.types.integer.md)
[DISPLAY\_SHORT\_GENERIC](class.intltimezone.md#intltimezone.constants.display-short-generic);

public
const
[int](language.types.integer.md)
[DISPLAY\_LONG\_GENERIC](class.intltimezone.md#intltimezone.constants.display-long-generic);

public
const
[int](language.types.integer.md)
[DISPLAY\_SHORT\_GMT](class.intltimezone.md#intltimezone.constants.display-short-gmt);

public
const
[int](language.types.integer.md)
[DISPLAY\_LONG\_GMT](class.intltimezone.md#intltimezone.constants.display-long-gmt);

public
const
[int](language.types.integer.md)
[DISPLAY\_SHORT\_COMMONLY\_USED](class.intltimezone.md#intltimezone.constants.display-short-commonly-used);

public
const
[int](language.types.integer.md)
[DISPLAY\_GENERIC\_LOCATION](class.intltimezone.md#intltimezone.constants.display-generic-location);

public
const
[int](language.types.integer.md)
[TYPE\_ANY](class.intltimezone.md#intltimezone.constants.type-any);

public
const
[int](language.types.integer.md)
[TYPE\_CANONICAL](class.intltimezone.md#intltimezone.constants.type-canonical);

public
const
[int](language.types.integer.md)
[TYPE\_CANONICAL\_LOCATION](class.intltimezone.md#intltimezone.constants.type-canonical-location);

/\* Métodos \*/

private function [\_\_construct](intltimezone.construct.md)()

public static function [countEquivalentIDs](intltimezone.countequivalentids.md)([string](language.types.string.md) `$timezoneId`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [createDefault](intltimezone.createdefault.md)(): [IntlTimeZone](class.intltimezone.md)

public static function [createEnumeration](intltimezone.createenumeration.md)([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$countryOrRawOffset` = **`null`**): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

public static function [createTimeZone](intltimezone.createtimezone.md)([string](language.types.string.md) `$timezoneId`): [?](language.types.null.md)[IntlTimeZone](class.intltimezone.md)

public static function [createTimeZoneIDEnumeration](intltimezone.createtimezoneidenumeration.md)([int](language.types.integer.md) `$type`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$rawOffset` = **`null`**): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

public static function [fromDateTimeZone](intltimezone.fromdatetimezone.md)([DateTimeZone](class.datetimezone.md) `$timezone`): [?](language.types.null.md)[IntlTimeZone](class.intltimezone.md)

public static function [getCanonicalID](intltimezone.getcanonicalid.md)([string](language.types.string.md) `$timezoneId`, [bool](language.types.boolean.md) `&$isSystemId` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getDisplayName](intltimezone.getdisplayname.md)([bool](language.types.boolean.md) `$dst` = **`false`**, [int](language.types.integer.md) `$style` = **`IntlTimeZone::DISPLAY_LONG`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getDSTSavings](intltimezone.getdstsavings.md)(): [int](language.types.integer.md)

public static function [getEquivalentID](intltimezone.getequivalentid.md)([string](language.types.string.md) `$timezoneId`, [int](language.types.integer.md) `$offset`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getErrorCode](intltimezone.geterrorcode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorMessage](intltimezone.geterrormessage.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getGMT](intltimezone.getgmt.md)(): [IntlTimeZone](class.intltimezone.md)

public static function [getIanaID](intltimezone.getianaid.md)([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getID](intltimezone.getid.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getIDForWindowsID](intltimezone.getidforwindowsid.md)([string](language.types.string.md) `$timezoneId`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getOffset](intltimezone.getoffset.md)(  
    [float](language.types.float.md) `$timestamp`,  
    [bool](language.types.boolean.md) `$local`,  
    [int](language.types.integer.md) `&$rawOffset`,  
    [int](language.types.integer.md) `&$dstOffset`  
): [bool](language.types.boolean.md)

public function [getRawOffset](intltimezone.getrawoffset.md)(): [int](language.types.integer.md)

public static function [getRegion](intltimezone.getregion.md)([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getTZDataVersion](intltimezone.gettzdataversion.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [getUnknown](intltimezone.getunknown.md)(): [IntlTimeZone](class.intltimezone.md)

public static function [getWindowsID](intltimezone.getwindowsid.md)([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [hasSameRules](intltimezone.hassamerules.md)([IntlTimeZone](class.intltimezone.md) `$other`): [bool](language.types.boolean.md)

public function [toDateTimeZone](intltimezone.todatetimezone.md)(): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

public function [useDaylightTime](intltimezone.usedaylighttime.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`IntlTimeZone::DISPLAY_SHORT`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_LONG`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_SHORT_GENERIC`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_LONG_GENERIC`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_SHORT_GMT`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_LONG_GMT`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_SHORT_COMMONLY_USED`** [int](language.types.integer.md)

**`IntlTimeZone::DISPLAY_GENERIC_LOCATION`** [int](language.types.integer.md)

**`IntlTimeZone::TYPE_ANY`** [int](language.types.integer.md)

**`IntlTimeZone::TYPE_CANONICAL`** [int](language.types.integer.md)

**`IntlTimeZone::TYPE_CANONICAL_LOCATION`** [int](language.types.integer.md)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [IntlTimeZone::\_\_construct](intltimezone.construct.md) — Construtor privado para não permitir instanciação direta
- [IntlTimeZone::countEquivalentIDs](intltimezone.countequivalentids.md) — Obtém o número de IDs no grupo de equivalÇencia que inclui o ID informado
- [IntlTimeZone::createDefault](intltimezone.createdefault.md) — Cria uma nova cópia do fuso horário padrão para este host
- [IntlTimeZone::createEnumeration](intltimezone.createenumeration.md) — Obtém uma enumeração a partir de IDs de fuso horário associados com o
  país informado ou com o deslocamento UTC
- [IntlTimeZone::createTimeZone](intltimezone.createtimezone.md) — Cria um objeto IntlTimeZone para o ID informado
- [IntlTimeZone::createTimeZoneIDEnumeration](intltimezone.createtimezoneidenumeration.md) — Obtém uma enumeração a partir de IDs de fuso horário do sistema com as condições de filtro informadas
- [IntlTimeZone::fromDateTimeZone](intltimezone.fromdatetimezone.md) — Cria um objeto IntlTimeZone a partir de um DateTimeZone
- [IntlTimeZone::getCanonicalID](intltimezone.getcanonicalid.md) — Obtém o ID do fuso horário de sistema canônico ou o cutomizado normalizado para o ID de fuso horário informado
- [IntlTimeZone::getDisplayName](intltimezone.getdisplayname.md) — Obtém o nome do fuso horário adequado para apresentação ao usuário
- [IntlTimeZone::getDSTSavings](intltimezone.getdstsavings.md) — Obtém a quantidade de tempo a ser adicionado ao horário local padrão para obter o horário local real de relógio
- [IntlTimeZone::getEquivalentID](intltimezone.getequivalentid.md) — Obtém um ID no grupo de equivalência que inclui o ID informado
- [IntlTimeZone::getErrorCode](intltimezone.geterrorcode.md) — Obtém o último código de erro no objeto
- [IntlTimeZone::getErrorMessage](intltimezone.geterrormessage.md) — Obtém a última mensagem de erro no objeto
- [IntlTimeZone::getGMT](intltimezone.getgmt.md) — Cria um fuso horário GMT (UTC)
- [IntlTimeZone::getIanaID](intltimezone.getianaid.md) — Traduz um identificador de fuso horário para seu equivalente IANA
- [IntlTimeZone::getID](intltimezone.getid.md) — Obtém o ID do fuso horário
- [IntlTimeZone::getIDForWindowsID](intltimezone.getidforwindowsid.md) — Traduz um fuso horário do Windows para um fuso horário de sistema
- [IntlTimeZone::getOffset](intltimezone.getoffset.md) — Obtém o deslocamento UTC padrão e o deslocamento com horário de verão para um determinado timestamp Unix
- [IntlTimeZone::getRawOffset](intltimezone.getrawoffset.md) — Obtém o deslocamento UTC puro (antes de considerar horário de verão)
- [IntlTimeZone::getRegion](intltimezone.getregion.md) — Obtém o código da região associada com o ID de fuso horário de sistema informado
- [IntlTimeZone::getTZDataVersion](intltimezone.gettzdataversion.md) — Obtém a versão de dados de fuso horário atualmente usados pela ICU
- [IntlTimeZone::getUnknown](intltimezone.getunknown.md) — Obtém o fuso horário "desconhecido"
- [IntlTimeZone::getWindowsID](intltimezone.getwindowsid.md) — Traduz um fuso horário de sistema em um fuso horário do Windows
- [IntlTimeZone::hasSameRules](intltimezone.hassamerules.md) — Verifica se um fuso horário tem as mesmas regras e deslocamentos de um outro
- [IntlTimeZone::toDateTimeZone](intltimezone.todatetimezone.md) — Converte em um objeto DateTimeZone
- [IntlTimeZone::useDaylightTime](intltimezone.usedaylighttime.md) — Verifica se o fuso horário usa horário de verão

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
