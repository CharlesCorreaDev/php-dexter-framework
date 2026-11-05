# Formatos de Data e Horário Suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.formats.php

---

# Formatos de Data e Horário Suportados

Esta seção descreve todos os diferentes formatos em uma sintaxe BNF, que os
analisadores de [DateTimeImmutable](class.datetimeimmutable.md), [DateTime](class.datetime.md),
[date\_create\_immutable()](function.date-create-immutable.md),
[date\_create()](function.date-create.md), [date\_parse()](function.date-parse.md) e
[strtotime()](function.strtotime.md) entendem. Os formatos estão agrupados
por seção. Na maioria dos casos, formatos de diferentes seções, separados por
espaços, vírgula ou ponto, podem ser utilizados com a mesma string data/horário. Para cada um
dos formatos suportados, um ou mais exemplos estão disponíveis, assim
como a descrição do formato. Nos formatos, caracteres entre aspas simples
são insensíveis a maiúsculas/minúsculas (`'t'` pode
ser `t` ou `T`), caracteres entre
aspas duplas são sensíveis a maiúsculas/minúsculas (`"T"` só pode ser
`T`).

Para formatar objetos [DateTimeImmutable](class.datetimeimmutable.md) e
[DateTime](class.datetime.md), favor se referir à documentação
do método [DateTimeInterface::format()](datetime.format.md).

Um conjunto geral de regras deve ser considerado.

1. O analisador permite para cada unidade (ano, mês, dia, hora, minuto, segundo)
   o intervalo completo de valores. Para um ano são apenas 4 dígitos, para um mês
   o intervalo é 0-12, dia é 0-31, hora é 0-24, e minuto é 0-59.
2. 60 é permitido para segundos, e algumas vezes strings com este
   segundo adicional aparecem. Porém, o PHP implementa o horário Unix onde "60" não é
   um segundo válido e por isso ocorre sobrecarga.
3. [strtotime()](function.strtotime.md) retorna **`false`** se quaisquer números estiverem fora dos
   intervalos, e [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) dispara
   uma exceção.
4. Se um string contém somente uma data, todos os elementos de horário são inicializados em 0.
5. Todos os elementos menos significativos são inicializados em 0 se alguma parte do horário estiver
   presente no string.
6. O analisador é muito simples, e não faz verificações adicionais, o que o torna mais rápido (e
   mais genérico).
7. Além das regras para os elementos de horário individuais, o analisador também entende
   [formatos compostos](datetime.formats.md#datetime.formats.compound) mais específicos,
   como análise de timestamps Unix
   (`@1690388256`) e números de semana ISO
   (`2008-W28-3`).
8. Há uma verificação adicional se uma data inválida é fornecida:

   ```
   <?php
   $res = date_parse("2015-09-31");
   var_dump($res["warnings"]);
   ```

   O exemplo acima produzirá:

   ```
   array(1) {
     [11]=>
     string(27) "The parsed date was invalid"
   }
   ```
9. Já é possível lidar com casos extremos, mas neste caso
   a função [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) deve ser usada
   e o formato correto fornecido.

   ```
   <?php
   $res = DateTimeImmutable::createFromFormat("Y-m-d", "2015-09-34");
   var_dump($res);
   ```

   O exemplo acima produzirá:

   ```
   object(DateTimeImmutable)#1 (3) {
     ["date"]=>
     string(26) "2015-10-04 17:24:43.000000"
     ["timezone_type"]=>
     int(3)
     ["timezone"]=>
     string(13) "Europe/London"
   }
   ```

## Formatos de Horário

Esta página descreve os diferentes formatos de data/horário em uma sintaxe BNF,
que os analisadores de [DateTimeImmutable](class.datetimeimmutable.md),
[DateTime](class.datetime.md), [date\_create()](function.date-create.md),
[date\_create\_immutable()](function.date-create-immutable.md) e
[strtotime()](function.strtotime.md) entendem.

Para formatar objetos [DateTimeImmutable](class.datetimeimmutable.md) e
[DateTime](class.datetime.md), favor se referir à documentação
do método [DateTimeInterface::format()](datetime.format.md).

**Símbolos utilizados**

| Descrição | Formatos | Exemplos |
| --- | --- | --- |
| `frac` | . [0-9]+ | ".21342", ".85" |
| `hh` | "0"?[1-9] | "1"[0-2] | "04", "7", "12" |
| `HH` | [01][0-9] | "2"[0-4] | "04", "07", "19" |
| `meridian` | [AaPp] .? [Mm] .? [\0\t ] | "A.m.", "pM", "am." |
| `MM` | [0-5][0-9] | "00", "12", "59" |
| `II` | [0-5][0-9] | "00", "12", "59" |
| `space` | [ \t] |  |
| `tz` | "("? [A-Za-z]{1,6} ")"? | [A-Z][a-z]+([\_/][A-Z][a-z]+)+ | "CEST", "Europe/Amsterdam", "America/Indiana/Knox" |
| `tzcorrection` | "GMT"? [+-] `hh` ":"? `MM`? | "+0400", "GMT-07:00", "-07:00" |

**Notação de 12 Horas**

| Descrição | Formatos | Exemplos |
| --- | --- | --- |
| Somente as horas, com o meridiano | `hh` `space`? `meridian` | "4 am", "5PM" |
| Horas e minutos, com o meridiano | `hh` [.:] `MM` `space`? `meridian` | "4:08 am", "7:19P.M." |
| Horas, minutos e segundos, com o meridiano | `hh` [.:] `MM` [.:] `II` `space`? `meridian` | "4:08:37 am", "7:19:19P.M." |
| MS SQL (Horas, minutos, segundos e a fração com o meridiano) | `hh` ":" `MM` ":" `II` [.:] [0-9]+ `meridian` | "4:08:39:12313am" |

**Notação de 24 Horas**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| Horas e minutos | 't'? `HH` [.:] `MM` | "04:08", "19.19", "T23:43" |
| Horas e minutos, sem dois-pontos | 't'? `HH` `MM` | "0408", "t1919", "T2343" |
| Horas, minutos e segundos | 't'? `HH` [.:] `MM` [.:] `II` | "04.08.37", "t19:19:19" |
| Horas, minutos e segundos, sem dois-pontos | 't'? `HH` `MM` `II` | "040837", "T191919" |
| Horas, minutos, segundos e fuso horário | 't'? `HH` [.:] `MM` [.:] `II` `space`? ( `tzcorrection` | `tz` ) | "040837CEST", "T191919-0700" |
| Horas, minutos, segundos e fração | 't'? `HH` [.:] `MM` [.:] `II` `frac` | "04.08.37.81412", "19:19:19.532453" |
| Informações do fuso horário | `tz` | `tzcorrection` | "CEST", "Europe/Amsterdam", "+0430", "GMT-06:00" |

## Formatos de Data

Esta página descreve os diferentes formatos de data em uma sintaxe BNF, que
os analisadores de [DateTimeImmutable](class.datetimeimmutable.md),
[DateTime](class.datetime.md), [date\_create()](function.date-create.md),
[date\_create\_immutable()](function.date-create-immutable.md) e
[strtotime()](function.strtotime.md) entendem.

Para formatar objetos [DateTimeImmutable](class.datetimeimmutable.md) e
[DateTime](class.datetime.md), favor se referir à documentação
do método [DateTimeInterface::format()](datetime.format.md).

**Simbolos Utilizados**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| `daysuf` | "st" | "nd" | "rd" | "th" |  |
| `dd` | ([0-2]?[0-9] | "3"[01]) `daysuf`? | "7th", "22nd", "31" |
| `DD` | "0" [0-9] | [1-2][0-9] | "3" [01] | "07", "31" |
| `m` | 'january' | 'february' | 'march' | 'april' | 'may' | 'june' | 'july' | 'august' | 'september' | 'october' | 'november' | 'december' | 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' | "I" | "II" | "III" | "IV" | "V" | "VI" | "VII" | "VIII" | "IX" | "X" | "XI" | "XII" |  |
| `M` | 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' |  |
| `mm` | "0"? [0-9] | "1"[0-2] | "0", "04", "7", "12" |
| `MM` | "0" [0-9] | "1"[0-2] | "00", "04", "07", "12" |
| `y` | [0-9]{1,4} | "00", "78", "08", "8", "2008" |
| `yy` | [0-9]{2} | "00", "08", "78" |
| `YY` | [0-9]{4} | "2000", "2008", "1978" |
| `YYY` | [0-9]{5,19} | "81412", "20192" |

**Notações Localizadas**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| Dia e mês americano | `mm` "/" `dd` | "5/12", "10/27" |
| Dia, mês e ano americano | `mm` "/" `dd` "/" `y` | "12/22/78", "1/17/2006", "1/17/6" |
| Ano com quatro dígitos, mês e dia com barras | `YY` "/" `mm` "/" `dd` | "2008/6/30", "1978/12/22" |
| Ano com quatro dígitos e mês (GNU) | `YY` "-" `mm` | "2008-6", "2008-06", "1978-12" |
| Ano, mês e dia com traços | `y` "-" `mm` "-" `dd` | "2008-6-30", "78-12-22", "8-6-21" |
| Dia, mês e ano, com quatro dígitos, com pontos, tabulações ou traços | `dd` [.\t-] `mm` [.-] `YY` | "30-6-2008", "22.12.1978" |
| Dia, mês e ano, com dois dígitos, com pontos ou tabulações | `dd` [.\t] `mm` "." `yy` | "30.6.08", "22\t12.78" |
| Dia, mês textual e ano | `dd` ([ \t.-])\* `m` ([ \t.-])\* `y` | "30-June 2008", "22DEC78", "14 III 1879" |
| Mês textual e ano com quatro dígitos (O dia é redefinido para 1) | `m` ([ \t.-])\* `YY` | "June 2008", "DEC1978", "March 1879" |
| Ano com quatro dígitos e mês textual (O dia é redefinido para 1) | `YY` ([ \t.-])\* `m` | "2008 June", "1978-XII", "1879.MArCH" |
| Mês textual, dia e ano | `m` ([ .\t-])\* `dd` [,.stndrh\t ]+ `y` | "July 1st, 2008", "April 17, 1790", "May.9,78" |
| Mês textual e dia | `m` ([ .\t-])\* `dd` [,.stndrh\t ]\* | "July 1st,", "Apr 17", "May.9" |
| Dia e mês textual | `dd` ([ .\t-])\* `m` | "1 July", "17 Apr", "9.May" |
| Mês abreviado, dia e ano | `M` "-" `DD` "-" `y` | "May-09-78", "Apr-17-1790" |
| Ano, mês abreviado e dia | `y` "-" `M` "-" `DD` | "78-Dec-22", "1814-MAY-17" |
| Ano (somente o ano) | `YY` | "1978", "2008" |
| Year (expandido, 5-19 dígitos com sinal) | [+-] `YYY` | "-81120", "+20192" |
| Mês textual (somente o mês) | `m` | "March", "jun", "DEC" |

**Notação ISO8601**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| Ano com oito dígitos, mês e dia | `YY` `MM` `DD` | "15810726", "19780417", "18140517" |
| Ano com quatro dígitos, mês e dia com barras | `YY` "/" `MM` "/" `DD` | "2008/06/30", "1978/12/22" |
| Ano com dois dígitos, mês e dia com traços | `yy` "-" `MM` "-" `DD` | "08-06-30", "78-12-22" |
| Ano com quatro dígitos, com sinal opcional, mês e dia | [+-]? `YY` "-" `MM` "-" `DD` | "-0002-07-26", "+1978-04-17", "1814-05-17" |
| Ano com 5+ dígitos com sinal, mês e dia | [+-] `YYY` "-" `MM` "-" `DD` | "-81120-02-26", "+20192-04-17" |

> **Nota**:
>
> Para os formatos `y` e `yy`,
> anos abaixo de 100 são manipulados de maneira especial quando os
> símbolos `y` ou `yy` são utilizados.
> Se o ano cair no período de 0 (incluso) a 69 (incluso),
> 2000 anos são adicionados. Se o ano cair no período de 70 (incluso) a
> 99 (incluso), então 1900 são adicionados. Isso significa que "00-01-01"
> será interpretado como "2000-01-01".

> **Nota**:
>
> O formato "Dia, mês e ano com dois dígitos, com pontos ou tabulações"
> (`dd` [.\t] `mm` "."
> `yy`) somente funciona para valores de ano que variam 61 (incluso)
> até 99 (incluso) - fora destes anos, o *formato
> de tempo* "`HH` [.:] `MM`
> [.:] `SS`" possui precedência.

> **Nota**:
>
> O formato "Ano (e somente o ano)", só funcionará de maneira confiável se uma string de horário
> já tiver sido encontrada. Caso contrário, se o ano de quatro dígitos corresponder a
> `HH` `MM`, estes dois elementos serão
> definidos no lugar.
>
> Para interpretear consistentemente só um valor de ano, use
> [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) com o especificador
> `Y`.

**Cuidado**

É possível exceder positivamente e negativamente os formatos `dd` e
`DD`. Dia 0 corresponde a último dia do mês
anterior, assim como excedências positivas contam no próximo mês. Isso faz com que
"2008-08-00" seja equivalente a "2008-07-31" e "2008-07-31" seja equivalente
a "2008-07-01" (junho possui somente 30 dias).

Note que o intervalo de dia é restrito a 0-31 como indicado
pela expressão regular acima. Por isso, "2008-06-32" não é um string de data válida,
por exemplo.

É possível exceder negativamente os formatos `mm` e
`MM` com o valor 0. O valor de mês
0 corresponde a dezembro do mês anterior. Como exemplo, "2008-00-22" é
equivalente a "2007-12-22".

Se os dois fatos forem combinados e o dia e o mês forem excedidos
negativamente, o que segue acontece: "2008-00-00" primeiro será convertido
para "2007-12-00" que então será convertido para "2007-11-30". Isso também
acontece com a string "0000-00-00", que é transformada em
"-0001-11-30" (o ano -1 ano calendário ISO 8601, que é 2 anos DC no calendário
que antecede o calendário gregoriano).

## Formatos Compostos

Esta página descreve os diferentes formatos compostos de data/horário em uma sintaxe
BNF, que os analisadores de [DateTimeImmutable](class.datetimeimmutable.md),
[DateTime](class.datetime.md), [date\_create()](function.date-create.md),
[date\_create\_immutable()](function.date-create-immutable.md) e
[strtotime()](function.strtotime.md) entendem.

Para formatar objetos [DateTimeImmutable](class.datetimeimmutable.md) e
[DateTime](class.datetime.md), favor se referir à documentação
do método [DateTimeInterface::format()](datetime.format.md).

**Símbolos Utilizados**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| `DD` | "0" [0-9] | [1-2][0-9] | "3" [01] | "02", "12", "31" |
| `doy` | "00"[1-9] | "0"[1-9][0-9] | [1-2][0-9][0-9] | "3"[0-5][0-9] | "36"[0-6] | "001", "012", "180", "350", "366" |
| `frac` | . [0-9]+ | ".21342", ".85" |
| `hh` | "0"?[1-9] | "1"[0-2] | "04", "7", "12" |
| `HH` | [01][0-9] | "2"[0-4] | "04", "07", "19" |
| `meridian` | [AaPp] .? [Mm] .? [\0\t ] | "A.m.", "pM", "am." |
| `ii` | [0-5]?[0-9] | "04", "8", "59" |
| `II` | [0-5][0-9] | "04", "08", "59" |
| `M` | 'jan' | 'feb' | 'mar' | 'apr' | 'may' | 'jun' | 'jul' | 'aug' | 'sep' | 'sept' | 'oct' | 'nov' | 'dec' |  |
| `MM` | [0-1][0-9] | "00", "12" |
| `space` | [ \t] |  |
| `ss` | [0-5]?[0-9]|60 | "04", "8", "59" |
| `SS` | [0-5][0-9] | "04", "08", "59", "60" (segundo intercalar) |
| `W` | "0"[1-9] | [1-4][0-9] | "5"[0-3] | "05", "17", "53" |
| `tzcorrection` | "GMT"? [+-] `hh` ":"? `II`? | "+0400", "GMT-07:00", "-07:00" |
| `YY` | [0-9]{4} | "2000", "2008", "1978" |

**Formatos padrões**

| Descrição | Exemplos |
| --- | --- |
| ATOM | "2022-06-02T16:58:35+00:00" |
| COOKIE | "Thursday, 02-Jun-2022 16:58:35 UTC" |
| ISO8601 | "2022-06-02T16:58:35+0000" |
| [» RFC 822](https://datatracker.ietf.org/doc/html/rfc822) | "Thu, 02 Jun 22 16:58:35 +0000" |
| [» RFC 850](https://datatracker.ietf.org/doc/html/rfc850) | "Thursday, 02-Jun-22 16:58:35 UTC" |
| [» RFC 1036](https://datatracker.ietf.org/doc/html/rfc1036) | "Thu, 02 Jun 22 16:58:35 +0000" |
| [» RFC 1123](https://datatracker.ietf.org/doc/html/rfc1123) | "Thu, 02 Jun 2022 16:58:35 +0000" |
| [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822) | "Thu, 02 Jun 2022 16:58:35 +0000" |
| [» RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339) | "2022-06-02T16:58:35+00:00" |
| [» RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339) estendida | "2022-06-02T16:58:35.698+00:00" |
| [» RFC 7231](https://datatracker.ietf.org/doc/html/rfc7231) | "Thu, 02 Jun 2022 16:58:35 GMT" |
| RSS | "Thu, 02 Jun 2022 16:58:35 +0000" |
| W3C | "2022-06-02T16:58:35+00:00" |

**Notações Localizadas**

| Descrição | Formato | Exemplos |
| --- | --- | --- |
| Formato de Log Popular | `dd` "/" `M` "/" `YY` : `HH` ":" `II` ":" `SS` `space` `tzcorrection` | "10/Oct/2000:13:55:36 -0700" |
| EXIF | `YY` ":" `MM` ":" `DD` " " `HH` ":" `II` ":" `SS` | "2008:08:07 18:11:31" |
| Ano ISO com Semana ISO | `YY` "-"? "W" `W` | "2008W27", "2008-W28" |
| Ano ISO com Semana ISO e dia | `YY` "-"? "W" `W` "-"? [0-7] | "2008W273", "2008-W28-3" |
| MySQL | `YY` "-" `MM` "-" `DD` " " `HH` ":" `II` ":" `SS` | "2008-08-07 18:11:31" |
| PostgreSQL: Ano com dia do ano | `YY` "."? `doy` | "2008.197", "2008197" |
| SOAP | `YY` "-" `MM` "-" `DD` "T" `HH` ":" `II` ":" `SS` `frac` `tzcorrection`? | "2008-07-01T22:35:17.02", "2008-07-01T22:35:17.03+08:00" |
| Timestamp Unix | "@" "-"? [0-9]+ | "@1215282385" |
| Timestamp Unix com microssegundos | "@" "-"? [0-9]+ "." [0-9]{0,6} | "@1607974647.503686" |
| XMLRPC | `YY` `MM` `DD` "T" `hh` ":" `II` ":" `SS` | "20080701T22:38:07", "20080701T9:38:07" |
| XMLRPC (Compacto) | `YY` `MM` `DD` 't' `hh` `II` `SS` | "20080701t223807", "20080701T093807" |
| WDDX | `YY` "-" `mm` "-" `dd` "T" `hh` ":" `ii` ":" `ss` | "2008-7-1T9:3:37" |

> **Nota**:
>
> O "W" nos formatos "Ano ISO com semana ISO" e "Ano ISO com semana ISO
> e dia" são sensíveis a maiúsculas/minúsculas, só pode ser usado o "W"
> maiúsculo.
>
> O "T", nos formatos SOAP, XMLRPC e WDDX é sensível a maiúsculas/minúsculas, só
> pode ser usado o "T" maiúsculo.
>
> O formato "Timestamp Unix" define o fuso horário para UTC.

## Formatos relativos

Esta página descreve os diferentes formatos de data/horário relativos em uma sintaxe BNF,
que os analisadores de [DateTimeImmutable](class.datetimeimmutable.md),
[DateTime](class.datetime.md), [date\_create()](function.date-create.md),
[date\_create\_immutable()](function.date-create-immutable.md) e
[strtotime()](function.strtotime.md) entendem.

Para formatar objetos [DateTimeImmutable](class.datetimeimmutable.md) e
[DateTime](class.datetime.md), favor se referir à documentação
do método [DateTimeInterface::format()](datetime.format.md).

**Símbolos Utilizados**

| Descrição | Formato |
| --- | --- |
| `dayname` | 'sunday' | 'monday' | 'tuesday' | 'wednesday' | 'thursday' | 'friday' | 'saturday' | 'sun' | 'mon' | 'tue' | 'wed' | 'thu' | 'fri' | 'sat' |
| `daytext` | 'weekday' | 'weekdays' |
| `number` | [+-]?[0-9]+ |
| `ordinal` | 'first' | 'second' | 'third' | 'fourth' | 'fifth' | 'sixth' | 'seventh' | 'eighth' | 'ninth' | 'tenth' | 'eleventh' | 'twelfth' | 'next' | 'last' | 'previous' | 'this' |
| `reltext` | 'next' | 'last' | 'previous' | 'this' |
| `space` | [ \t]+ |
| `unit` | 'ms' | 'µs' | (( 'msec' | 'millisecond' | 'µsec' | 'microsecond' | 'usec' | 'sec' | 'second' | 'min' | 'minute' | 'hour' | 'day' | 'fortnight' | 'forthnight' | 'month' | 'year') 's'?) | 'weeks' | `daytext` |

**Notação baseada no dia**

| Formato | Descrição | Exemplos |
| --- | --- | --- |
| 'yesterday' | Meia-noite de ontem | "yesterday 14:00" |
| 'midnight' | O horário é definido para 00:00:00 |  |
| 'today' | O horário é definido para 00:00:00 |  |
| 'now' | Agora - isto é simplesmente ignorado |  |
| 'noon' | O horário é definido para 12:00:00 | "yesterday noon" |
| 'tomorrow' | Meia-noite de amanhã |  |
| 'back of' `hour` | 15 minutos após o horário informado | "back of 7pm", "back of 15" |
| 'front of' `hour` | 15 minutos antes do horário informado | "front of 5am", "front of 23" |
| 'first day of' | Define o dia para o primeiro dia do mês atual. Essa frase é normalmente usada da melhor forma em conjunto com um nome de mês, já que ela somente afeta o mês atual. | "first day of January 2008" |
| 'last day of' | Define o dia para o último do mês corrente. Essa frase é normalmente usada da melhor forma em conjunto com um nome de mês, já que ela somente afeta o mês atual. | "last day of next month" |
| `ordinal` `space` `dayname` `space` 'of' | Calcula o número ordinal `x`-th da semana do mês corrente. | "first sat of July 2008" |
| 'last' `space` `dayname` `space` 'of' | Calcular o *último* dia da semana do mês corrente. | "last sat of July 2008" |
| `number` `space`? (`unit` | 'week') | Manipula porções de tempo relativas onde o valor seja um número. | "+5 weeks", "12 day", "-7 weekdays" |
| (`ordinal` | `reltext`) `space` `unit` | Manipula porções de tempo relativas onde o valor seja um texto. `last` e `previous` são equivalentes a `-1`, `this` equivalente a nada, e `next` equivamente a `+1`. | "fifth day", "second month", "last day", "previous year" |
| 'ago' | Nega todos os valores das porções de tempo relativas anteriores. | "2 days ago", "8 days ago 14:00", "2 months 5 days ago", "2 months ago 5 days", "2 days ago" |
| `dayname` | Move para o próximo dia deste nome.(See [note](datetime.formats.md#datetime.formats.relative.dayname-note)) | "Monday" |
| `reltext` `space` 'week' | Manipula o formato especial "weekday + last/this/next week". | "Monday next week" |

> **Nota**:
>
> Declarações relativas são sempre processadas *depois*
> de declarações não relativas. Isso faz com que "+1 week july 2008" e "july
> 2008 +1 week" sejam equivalentes.
>
> As exceções desta regra são "yesterday", "midnight", "today", "noon"
> e "tomorrow". Observe que "tomorrow 11:00" e "11:00 tomorrow"
> são diferentes. Considerando que a data hoje como "July 23rd, 2008", o
> primeiro produzirá "2008-07-24 11:00" assim como o segundo produzirá
> "2008-07-24 00:00". Isso acontece por que as cinco declarações
> influenciam diretamente o tempo corrente.
>
> Palavras-chave como "first day of" dependem do contexto no qual o
> string de formato relativo é usado. Se usado com um método ou funcão estáticos,
> a referência é o timestamp atual do sistema. Entretanto, se usado em
> [DateTime::modify()](datetime.modify.md) ou
> [DateTimeImmutable::modify()](datetimeimmutable.modify.md), a referência é o objeto
> no qual o método `modify()` é chamado.

> **Nota**:
>
> Observe as seguintes considerações quando o dia da semana corrente é o
> mesmo que o dia da semana utilizada na string date/horário. O dia da semana
> corrente pode ser (re-)calculado para porções não relativas de strings
> de data/horário.
>
> 1. "`dayname`" *não* avança para
>    outro dia. (Exemplo: "Wed July 23rd, 2008" referencia "2008-07-23").
> 2. "`number` `dayname`"
>    *não* avança para outro dia. (Exemplo: "1
>    wednesday july 23rd, 2008" referencia "2008-07-23").
> 3. "`number` week `dayname`"
>    adicionará primeiro o dia da semana, mas *not*
>    avançará para outro dia. Neste caso, "`number`
>    week" e "`dayname`" são dois blocos distintos.
>    (Exemplo: "+1 week wednesday july 23rd, 2008" referencia "2008-07-30").
> 4. "`ordinal` `dayname`"
>    *avançará*para outro dia. (Exemplo "first
>    wednesday july 23rd, 2008" referencia "2008-07-30").
> 5. "`number` week `ordinal`
>    `dayname`" adicionará primeiro o número de
>    semanas, e então *avançará* para outro
>    dia. Neste caso "`number` week" e
>    "`ordinal` `dayname` são dois
>    blocos distintos. (Exemplo: "+1 week first wednesday july 23rd,
>    2008" referencia "2008-08-06").
> 6. "`ordinal` `dayname` 'of' "
>    *não* avança para outro dia. (Exemplo:
>    "first wednesday of july 23rd, 2008" referencia "2008-07-02" porque
>    a frase específica com 'of' redefine o dia do mês para '1' e
>    o '23rd' é ignorado).
>
> Também observe que o "of" em "`ordinal`
> `space` `dayname`
> `space` 'of' " e "'last' `space`
> `dayname` `space` 'of' " fazem
> coisas especiais.
>
> 1. Ele definirá o dia do mês para 1.
> 2. "`ordinal` `dayname` 'of' "
>    *não* avançará para outro dia. (Exemplo: "first
>    tuesday of july 2008" referencia "2008-07-01").
> 3. "`ordinal` `dayname` "
>    *avançará* para outro dia. (Exemplo: "first
>    tuesday july 2008" referencia "2008-07-08", veja também o item 4 na
>    lista acima).
> 4. "'last' `dayname` 'of' " captura o último
>    `dayname` do mês corrente. (Exemplo: "last
>    wed of july 2008" referencia "2008-07-30")
> 5. "'last' `dayname`" captura o último
>    `dayname` do mês corrente. (Exemplo: "last
>    wed july 2008" referencia "2008-06-25"; "july 2008" primeiro definirá a
>    data corrente para "2008-07-01" e então "last wed" moverá para a
>    última Quarta-feira que será "2008-06-25").

> **Nota**:
>
> Meses com valores relativos são calculados baseados no tamanho do mês
> passado. Um exemplo seria "+2 month 2011-11-30",que produziria
> "2012-01-30". Isso é devido a Novembro tendo 30 dias como tamanho, e
> Dezembro tendo 31, produzindo um total de 61 dias.

> **Nota**:
>
> `number` é um número *inteiro*; se um
> número decimal é informado, o ponto (ou vírgula) provavelmente será interpretado como delimitador.
> Por exemplo, `'+1.5 hours'` é analisado como
> `'+1 5 hours'`, não como `'+1 hour +30 minutes'`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `number` agora aceita novamente um sinal positivo seguido por um sinal negativo, por exemplo, `+-2` e outras combinações de múltiplos sinais. |
| 8.2.0 | `number` não aceita mais um sinal positivo seguido por um sinal negativo, por exemplo, `+-2`. |
| 7.0.8 | Semanas sempre começam na segunda-feira. Antes, considerava-se que o domingo também poderia começar uma semana. |

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
