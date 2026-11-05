# A interface DateTimeInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.datetimeinterface.php

---

# A interface DateTimeInterface

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

**DateTimeInterface** foi criada
para que os parâmetros, variáveis de retorno ou declarações de tipo de propriedades aceitem tanto
[DateTimeImmutable](class.datetimeimmutable.md) ou [DateTime](class.datetime.md)
como um valor. Não é possível
implementar esta interface em classes no espaço de usuário.

Constantes comuns que permitem formatar objetos
[DateTimeImmutable](class.datetimeimmutable.md) ou
[DateTime](class.datetime.md) através de
[DateTimeImmutable::format()](datetime.format.md) e
[DateTime::format()](datetime.format.md) também são definidas nesta
interface.

## Resumo da Interface

interface ****DateTimeInterface**** {

/\* Constantes \*/

public
const
[string](language.types.string.md)
[ATOM](class.datetimeinterface.md#datetimeinterface.constants.atom) = "Y-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[COOKIE](class.datetimeinterface.md#datetimeinterface.constants.cookie) = "l, d-M-Y H:i:s T";

public
const
[string](language.types.string.md)
[ISO8601](class.datetimeinterface.md#datetimeinterface.constants.iso8601) = "Y-m-d\\TH:i:sO";

public
const
[string](language.types.string.md)
[ISO8601\_EXPANDED](class.datetimeinterface.md#datetimeinterface.constants.iso8601-expanded) = "X-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[RFC822](class.datetimeinterface.md#datetimeinterface.constants.rfc822) = "D, d M y H:i:s O";

public
const
[string](language.types.string.md)
[RFC850](class.datetimeinterface.md#datetimeinterface.constants.rfc850) = "l, d-M-y H:i:s T";

public
const
[string](language.types.string.md)
[RFC1036](class.datetimeinterface.md#datetimeinterface.constants.rfc1036) = "D, d M y H:i:s O";

public
const
[string](language.types.string.md)
[RFC1123](class.datetimeinterface.md#datetimeinterface.constants.rfc1123) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[RFC7231](class.datetimeinterface.md#datetimeinterface.constants.rfc7231) = "D, d M Y H:i:s \\G\\M\\T";

public
const
[string](language.types.string.md)
[RFC2822](class.datetimeinterface.md#datetimeinterface.constants.rfc2822) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[RFC3339](class.datetimeinterface.md#datetimeinterface.constants.rfc3339) = "Y-m-d\\TH:i:sP";

public
const
[string](language.types.string.md)
[RFC3339\_EXTENDED](class.datetimeinterface.md#datetimeinterface.constants.rfc3339-extended) = "Y-m-d\\TH:i:s.vP";

public
const
[string](language.types.string.md)
[RSS](class.datetimeinterface.md#datetimeinterface.constants.rss) = "D, d M Y H:i:s O";

public
const
[string](language.types.string.md)
[W3C](class.datetimeinterface.md#datetimeinterface.constants.w3c) = "Y-m-d\\TH:i:sP";

/\* Métodos \*/

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

## Constantes predefinidas

[DateTimeInterface::ATOM](class.datetimeinterface.md#datetimeinterface.constants.atom) [string](language.types.string.md)

[DATE\_ATOM](datetime.constants.md#constant.date-atom)
:   Atômico (exemplo: 2005-08-15T15:52:01+00:00); compatível com ISO-8601, RFC 3339 e esquema XML

[DateTimeInterface::COOKIE](class.datetimeinterface.md#datetimeinterface.constants.cookie) [string](language.types.string.md)

[DATE\_COOKIE](datetime.constants.md#constant.date-cookie)
:   Cookies HTTP (exemplo: Monday, 15-Aug-2005 15:52:01 UTC)

[DateTimeInterface::ISO8601](class.datetimeinterface.md#datetimeinterface.constants.iso8601) [string](language.types.string.md)

[DATE\_ISO8601](datetime.constants.md#constant.date-iso8601)
:   Tipo ISO-8601 (exemplo: 2005-08-15T15:52:01+0000)

    > **Nota**:
    >
    > Este formato não é compatível com a ISO-8601, mas foi deixado assim por
    > motivo de compatibilidade com versões anteriores. Use
    > [DateTimeInterface::ISO8601\_EXPANDED](class.datetimeinterface.md#datetimeinterface.constants.iso8601-expanded),
    > [DateTimeInterface::ATOM](class.datetimeinterface.md#datetimeinterface.constants.atom) para compatibilidade com a ISO-8601,
    > alternativamente. (ref ISO8601:2004 seção 4.3.3 cláusula d)

[DateTimeInterface::ISO8601\_EXPANDED](class.datetimeinterface.md#datetimeinterface.constants.iso8601-expanded) [string](language.types.string.md)

[DATE\_ISO8601\_EXPANDED](datetime.constants.md#constant.date-iso8601-expanded)
:   ISO-8601 Expandida (exemplo: +10191-07-26T08:59:52+01:00)

    > **Nota**:
    >
    > Este formato permite valores de ano fora do intervalo normal da ISO-8601
    > de `0000`-`9999` porque sempre
    > inclui um caractere de sinal. Ele também garante que a parte do fuso horário
    > (`+01:00`) seja compatível com a ISO-8601.

[DateTimeInterface::RFC822](class.datetimeinterface.md#datetimeinterface.constants.rfc822) [string](language.types.string.md)

[DATE\_RFC822](datetime.constants.md#constant.date-rfc822)
:   RFC 822 (exemplo: Mon, 15 Aug 05 15:52:01 +0000)

[DateTimeInterface::RFC850](class.datetimeinterface.md#datetimeinterface.constants.rfc850) [string](language.types.string.md)

[DATE\_RFC850](datetime.constants.md#constant.date-rfc850)
:   RFC 850 (exemplo: Monday, 15-Aug-05 15:52:01 UTC)

[DateTimeInterface::RFC1036](class.datetimeinterface.md#datetimeinterface.constants.rfc1036) [string](language.types.string.md)

[DATE\_RFC1036](datetime.constants.md#constant.date-rfc1036)
:   RFC 1036 (exemplo: Mon, 15 Aug 05 15:52:01 +0000)

[DateTimeInterface::RFC1123](class.datetimeinterface.md#datetimeinterface.constants.rfc1123) [string](language.types.string.md)

[DATE\_RFC1123](datetime.constants.md#constant.date-rfc1123)
:   RFC 1123 (exemplo: Mon, 15 Aug 2005 15:52:01 +0000)

[DateTimeInterface::RFC7231](class.datetimeinterface.md#datetimeinterface.constants.rfc7231) [string](language.types.string.md)

[DATE\_RFC7231](datetime.constants.md#constant.date-rfc7231)
:   RFC 7231 (desde o PHP 7.0.19 e 7.1.5) (exemplo: Sat, 30 Apr 2016 17:52:13 GMT)

[DateTimeInterface::RFC2822](class.datetimeinterface.md#datetimeinterface.constants.rfc2822) [string](language.types.string.md)

[DATE\_RFC2822](datetime.constants.md#constant.date-rfc2822)
:   RFC 2822 (exemplo: Mon, 15 Aug 2005 15:52:01 +0000)

[DateTimeInterface::RFC3339](class.datetimeinterface.md#datetimeinterface.constants.rfc3339) [string](language.types.string.md)

[DATE\_RFC3339](datetime.constants.md#constant.date-rfc3339)
:   O mesmo que [DATE\_ATOM](datetime.constants.md#constant.date-atom)

[DateTimeInterface::RFC3339\_EXTENDED](class.datetimeinterface.md#datetimeinterface.constants.rfc3339-extended) [string](language.types.string.md)

[DATE\_RFC3339\_EXTENDED](datetime.constants.md#constant.date-rfc3339-extended)
:   RFC 3339 formato ESTENDIDO (exemplo: 2005-08-15T15:52:01.000+00:00)

[DateTimeInterface::RSS](class.datetimeinterface.md#datetimeinterface.constants.rss) [string](language.types.string.md)

[DATE\_RSS](datetime.constants.md#constant.date-rss)
:   RSS (exemplo: Mon, 15 Aug 2005 15:52:01 +0000)

[DateTimeInterface::W3C](class.datetimeinterface.md#datetimeinterface.constants.w3c) [string](language.types.string.md)

[DATE\_W3C](datetime.constants.md#constant.date-w3c)
:   World Wide Web Consortium (exemplo: 2005-08-15T15:52:01+00:00)

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | As constantes **`DATE_RFC7231`** e **`DateTimeInterface::RFC7231`** foram descontinuadas. |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.2.0 | A constante **`DateTimeInterface::ISO8601_EXPANDED`** foi adicionada. |
| 7.2.0 | As constantes da classe [DateTime](class.datetime.md) agora são definidas na classe **DateTimeInterface**. |

## Índice

- [DateTimeInterface::diff](datetime.diff.md) — Retorna a diferença entre dois objetos DateTime
- [DateTimeInterface::format](datetime.format.md) — Retorna a data formatada de acordo com um formato informado
- [DateTimeInterface::getMicrosecond](datetimeinterface.getmicrosecond.md) — Obtém a parte de microssegundos do timestamp Unix
- [DateTimeInterface::getOffset](datetime.getoffset.md) — Retorna o deslocamento do fuso horário
- [DateTimeInterface::getTimestamp](datetime.gettimestamp.md) — Obtém o timestamp Unix
- [DateTimeInterface::getTimezone](datetime.gettimezone.md) — Retorna o fuso horário correspondente a um DateTime informado
- [DateTime::\_\_serialize](datetime.serialize.md) — Serializa um DateTime
- [DateTime::\_\_unserialize](datetime.unserialize.md) — Desserializa um Datetime
- [DateTime::\_\_wakeup](datetime.wakeup.md) — O manipulador \_\_wakeup

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
