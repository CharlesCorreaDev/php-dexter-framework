# A classe DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.datetime.php

---

# A classe DateTime

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

## Introdução

Representação de data e hora.

Esta classe se comporta da mesma maneira que a classe [DateTimeImmutable](class.datetimeimmutable.md),
exceto pelo fato de que os objetos se alteram quando métodos de modificação como
[DateTime::modify()](datetime.modify.md) são chamados.

**Aviso**

Chamar métodos em objetos da classe **DateTime**
irá alterar a informação encapsulada nestes objetos. Se a intenção for
evitar isso, deve ser usado o operador `clone` para
criar um novo objeto. É recomendado usar [DateTimeImmutable](class.datetimeimmutable.md)
no lugar de **DateTime** para obter este
comportamento por padrão.

## Resumo da classe

class ****DateTime****
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

public function [\_\_construct](datetime.construct.md)([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**)

public function [add](datetime.add.md)([DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

public static function [createFromFormat](datetime.createfromformat.md)([string](language.types.string.md) `$format`, [string](language.types.string.md) `$datetime`, [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

public static function [createFromImmutable](datetime.createfromimmutable.md)([DateTimeImmutable](class.datetimeimmutable.md) `$object`): static

public static function [createFromInterface](datetime.createfrominterface.md)([DateTimeInterface](class.datetimeinterface.md) `$object`): [DateTime](class.datetime.md)

public static function [createFromTimestamp](datetime.createfromtimestamp.md)([int](language.types.integer.md)|[float](language.types.float.md) `$timestamp`): static

public function [modify](datetime.modify.md)([string](language.types.string.md) `$modifier`): [DateTime](class.datetime.md)

public static function [\_\_set\_state](datetime.set-state.md)([array](language.types.array.md) `$array`): [DateTime](class.datetime.md)

public function [setDate](datetime.setdate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`): [DateTime](class.datetime.md)

public function [setISODate](datetime.setisodate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$week`, [int](language.types.integer.md) `$dayOfWeek` = 1): [DateTime](class.datetime.md)

public function [setMicrosecond](datetime.setmicrosecond.md)([int](language.types.integer.md) `$microsecond`): static

public function [setTime](datetime.settime.md)(  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = 0,  
    [int](language.types.integer.md) `$microsecond` = 0  
): [DateTime](class.datetime.md)

public function [setTimestamp](datetime.settimestamp.md)([int](language.types.integer.md) `$timestamp`): [DateTime](class.datetime.md)

public function [setTimezone](datetime.settimezone.md)([DateTimeZone](class.datetimezone.md) `$timezone`): [DateTime](class.datetime.md)

public function [sub](datetime.sub.md)([DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

public function [diff](datetime.diff.md)([DateTimeInterface](class.datetimeinterface.md) `$targetObject`, [bool](language.types.boolean.md) `$absolute` = **`false`**): [DateInterval](class.dateinterval.md)

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
| 7.2.0 | As constantes da classe **DateTime** são agora definidas na classe [DateTimeInterface](class.datetimeinterface.md). |
| 7.1.0 | O construtor da classe **DateTime** agora inclui os microssegundos atuais no valor construído. Antes disso, ele sempre inicializava os microssegundos em `0`. |

## Índice

- [DateTime::add](datetime.add.md) — Modifica um objeto DateTime, com adição de dias, meses, anos, horas, minutos e segundos.
- [DateTime::\_\_construct](datetime.construct.md) — Retorna um novo objeto DateTime
- [DateTime::createFromFormat](datetime.createfromformat.md) — Interpreta um string de data/horário de acordo com um formato especificado.
- [DateTime::createFromImmutable](datetime.createfromimmutable.md) — Retorna uma nova instância de DateTime encapsulando o objeto DateTimeImmutable informado
- [DateTime::createFromInterface](datetime.createfrominterface.md) — Retorna um novo objeto DateTime encapsulando o objeto DateTimeInterface informado
- [DateTime::createFromTimestamp](datetime.createfromtimestamp.md) — Cria uma instância a partir de um timestamp Unix
- [DateTime::getLastErrors](datetime.getlasterrors.md) — Sinônimo de DateTimeImmutable::getLastErrors
- [DateTime::modify](datetime.modify.md) — Altera o timestamp
- [DateTime::\_\_set\_state](datetime.set-state.md) — O manipulador \_\_set\_state
- [DateTime::setDate](datetime.setdate.md) — Define a data
- [DateTime::setISODate](datetime.setisodate.md) — Define uma data ISO
- [DateTime::setMicrosecond](datetime.setmicrosecond.md) — Define a parte de microssegundos do horário
- [DateTime::setTime](datetime.settime.md) — Define o horário
- [DateTime::setTimestamp](datetime.settimestamp.md) — Define a data e hora baseada em um timestamp Unix
- [DateTime::setTimezone](datetime.settimezone.md) — Define o fuso horário de um objeto DateTime
- [DateTime::sub](datetime.sub.md) — Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
  um objeto DateTime

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
