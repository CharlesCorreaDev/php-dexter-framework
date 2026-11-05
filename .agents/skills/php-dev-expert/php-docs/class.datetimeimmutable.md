# A classe DateTimeImmutable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.datetimeimmutable.php

---

# A classe DateTimeImmutable

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

Representação de data e hora.

Esta classe se comporta como a classe [DateTime](class.datetime.md)
exceto pelo fato de que novos objetos são retornados quando métodos de modificação como
[DateTime::modify()](datetime.modify.md) são chamados.

## Resumo da classe

class ****DateTimeImmutable****
implements
[DateTimeInterface](class.datetimeinterface.md) {

/\* Constantes herdadas \*/

public
const
[string](language.types.string.md)
[DateTimeInterface::ATOM](class.datetimeinterface.md#datetimeinterface.constants.atom) = "Y-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[DateTimeInterface::COOKIE](class.datetimeinterface.md#datetimeinterface.constants.cookie) = "l, d-M-Y H:i:s T";

public
const
[string](language.types.string.md)
[DateTimeInterface::ISO8601](class.datetimeinterface.md#datetimeinterface.constants.iso8601) = "Y-m-d\\TH:i:sO";

public
const
[string](language.types.string.md)
[DateTimeInterface::ISO8601\_EXPANDED](class.datetimeinterface.md#datetimeinterface.constants.iso8601-expanded) = "X-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC822](class.datetimeinterface.md#datetimeinterface.constants.rfc822) = "D, d M y H:i:s O";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC850](class.datetimeinterface.md#datetimeinterface.constants.rfc850) = "l, d-M-y H:i:s T";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC1036](class.datetimeinterface.md#datetimeinterface.constants.rfc1036) = "D, d M y H:i:s O";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC1123](class.datetimeinterface.md#datetimeinterface.constants.rfc1123) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC7231](class.datetimeinterface.md#datetimeinterface.constants.rfc7231) = "D, d M Y H:i:s \\G\\M\\T";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC2822](class.datetimeinterface.md#datetimeinterface.constants.rfc2822) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC3339](class.datetimeinterface.md#datetimeinterface.constants.rfc3339) = "Y-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[DateTimeInterface::RFC3339\_EXTENDED](class.datetimeinterface.md#datetimeinterface.constants.rfc3339-extended) = "Y-m-d\\TH:i:s.vP";

public
const
[string](language.types.string.md)
[DateTimeInterface::RSS](class.datetimeinterface.md#datetimeinterface.constants.rss) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[DateTimeInterface::W3C](class.datetimeinterface.md#datetimeinterface.constants.w3c) = "Y-m-d\\TH:i:sP";

/\* Métodos \*/

public function [\_\_construct](datetimeimmutable.construct.md)([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::add() does not modify the object itself")]  
public function [add](datetimeimmutable.add.md)([DateInterval](class.dateinterval.md) `$interval`): [DateTimeImmutable](class.datetimeimmutable.md)

public static function [createFromFormat](datetimeimmutable.createfromformat.md)([string](language.types.string.md) `$format`, [string](language.types.string.md) `$datetime`, [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = [null](reserved.constants.md#constant.null)): [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md)

public static function [createFromInterface](datetimeimmutable.createfrominterface.md)([DateTimeInterface](class.datetimeinterface.md) `$object`): [DateTimeImmutable](class.datetimeimmutable.md)

public static function [createFromMutable](datetimeimmutable.createfrommutable.md)([DateTime](class.datetime.md) `$object`): static

public static function [createFromTimestamp](datetimeimmutable.createfromtimestamp.md)([int](language.types.integer.md)|[float](language.types.float.md) `$timestamp`): static

public static function [getLastErrors](datetimeimmutable.getlasterrors.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::modify() does not modify the object itself")]  
public function [modify](datetimeimmutable.modify.md)([string](language.types.string.md) `$modifier`): [DateTimeImmutable](class.datetimeimmutable.md)

public static function [\_\_set\_state](datetimeimmutable.set-state.md)([array](language.types.array.md) `$array`): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setDate() does not modify the object itself")]  
public function [setDate](datetimeimmutable.setdate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setISODate() does not modify the object itself")]  
public function [setISODate](datetimeimmutable.setisodate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$week`, [int](language.types.integer.md) `$dayOfWeek` = 1): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setMicrosecond() does not modify the object itself")]  
public function [setMicrosecond](datetimeimmutable.setmicrosecond.md)([int](language.types.integer.md) `$microsecond`): static

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTime() does not modify the object itself")]  
public function [setTime](datetimeimmutable.settime.md)(  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = 0,  
    [int](language.types.integer.md) `$microsecond` = 0  
): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTimestamp() does not modify the object itself")]  
public function [setTimestamp](datetimeimmutable.settimestamp.md)([int](language.types.integer.md) `$timestamp`): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTimezone() does not modify the object itself")]  
public function [setTimezone](datetimeimmutable.settimezone.md)([DateTimeZone](class.datetimezone.md) `$timezone`): [DateTimeImmutable](class.datetimeimmutable.md)

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::sub() does not modify the object itself")]  
public function [sub](datetimeimmutable.sub.md)([DateInterval](class.dateinterval.md) `$interval`): [DateTimeImmutable](class.datetimeimmutable.md)

public function [diff](datetime.diff.md)([DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = [false](reserved.constants.md#constant.false)): [DateInterval](class.dateinterval.md)

public function [format](datetime.format.md)([string](language.types.string.md) `$format`): [string](language.types.string.md)

public function [getMicrosecond](datetimeinterface.getmicrosecond.md)(): [int](language.types.integer.md)

public function [getOffset](datetime.getoffset.md)(): [int](language.types.integer.md)

public function [getTimestamp](datetime.gettimestamp.md)(): [int](language.types.integer.md)

public function [getTimezone](datetime.gettimezone.md)(): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

public function [\_\_serialize](datetime.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](datetime.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

#[[\Deprecated](class.deprecated.md)]  
public function [\_\_wakeup](datetime.wakeup.md)(): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 7.1.0 | O construtor da classe **DateTimeImmutable** agora inclui os microssegundos atuais no valor construído. Antes disso, ele iria sempre inicializar os microssegundos em `0`. |

## Índice

- [DateTimeImmutable::add](datetimeimmutable.add.md) — Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos
- [DateTimeImmutable::\_\_construct](datetimeimmutable.construct.md) — Retorna um novo objeto DateTimeImmutable
- [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) — Interpreta um string de data/horário de acordo com o formato especificado
- [DateTimeImmutable::createFromInterface](datetimeimmutable.createfrominterface.md) — Retorna um novo objeto DateTimeImmutable encapsulando o objeto DateTimeInterface informado
- [DateTimeImmutable::createFromMutable](datetimeimmutable.createfrommutable.md) — Retorna uma nova instância DateTimeImmutable que encapsula um objeto DateTime informado
- [DateTimeImmutable::createFromTimestamp](datetimeimmutable.createfromtimestamp.md) — Cria uma instância a partir de um timestamp Unix
- [DateTimeImmutable::getLastErrors](datetimeimmutable.getlasterrors.md) — Retorna os avisos e erros
- [DateTimeImmutable::modify](datetimeimmutable.modify.md) — Cria um novo objeto com seu timestamp modificado
- [DateTimeImmutable::\_\_set\_state](datetimeimmutable.set-state.md) — O manipulador \_\_set\_state
- [DateTimeImmutable::setDate](datetimeimmutable.setdate.md) — Define a data
- [DateTimeImmutable::setISODate](datetimeimmutable.setisodate.md) — Define a data ISO
- [DateTimeImmutable::setMicrosecond](datetimeimmutable.setmicrosecond.md) — Define a parte de microssegundos do horário
- [DateTimeImmutable::setTime](datetimeimmutable.settime.md) — Define um horário
- [DateTimeImmutable::setTimestamp](datetimeimmutable.settimestamp.md) — Define a data e o horário com base em um timestamp Unix
- [DateTimeImmutable::setTimezone](datetimeimmutable.settimezone.md) — Define o fuso horário
- [DateTimeImmutable::sub](datetimeimmutable.sub.md) — Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos

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
