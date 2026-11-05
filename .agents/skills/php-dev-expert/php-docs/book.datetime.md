# Data e Horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.datetime.php

---

# Data e Horário

# Introdução

A classe [DateTimeImmutable](class.datetimeimmutable.md) e classes relacionadas permitem
representar informações de data/horário. Os objetos podem ser criados passando-se uma
representação de informação de data/horário no formato string, ou a partir do horário
atual do sistema.

Existe também um conjunto rico de métodos para modificar e formatar estas informações,
incluindo manipulação de fusos horários e transições de horários de verão.

As características de data/horário no PHP implementam o calendário ISO 8601, que é um
[» calendário gregoriano
proléptico](https://en.wikipedia.org/wiki/Proleptic_Gregorian_calendar) que implementa as regras atuais de anos bissextos estendidas a períodos anteriores
ao que o calendário gregoriano foi adotado, e também inclui o ano
`0` como o número do ano entre `-1
AEC` e `1 EC`. Segundos intercalares não são suportados.

A informação de data e horário é armazenada internamente como um número de 64 bits, sendo assim,
todas as datas úteis concebíveis (incluindo anos negativos) são suportadas. O intervalo
vai de aproximadamente 292 bilhões de anos no passado até o mesmo valor
no futuro.

> **Nota**:
>
> Os fusos horários referenciados nesta seção podem ser encontrados em
> [Lista de Fusos Horários Suportados](timezones.md).

- [Instalação/Configuração](datetime.setup.md)
  - [Instalação](datetime.installation.md)
  - [Configurações de Execução](datetime.configuration.md)
- [Constantes predefinidas](datetime.constants.md)
- [Examples](datetime.examples.md)
  - [Aritmética de Data e Horário](datetime.examples-arithmetic.md)
- [DateTime](class.datetime.md) — A classe DateTime
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
- [DateTimeImmutable](class.datetimeimmutable.md) — A classe DateTimeImmutable
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
- [DateTimeInterface](class.datetimeinterface.md) — A interface DateTimeInterface
  - [DateTimeInterface::diff](datetime.diff.md) — Retorna a diferença entre dois objetos DateTime
  - [DateTimeInterface::format](datetime.format.md) — Retorna a data formatada de acordo com um formato informado
  - [DateTimeInterface::getMicrosecond](datetimeinterface.getmicrosecond.md) — Obtém a parte de microssegundos do timestamp Unix
  - [DateTimeInterface::getOffset](datetime.getoffset.md) — Retorna o deslocamento do fuso horário
  - [DateTimeInterface::getTimestamp](datetime.gettimestamp.md) — Obtém o timestamp Unix
  - [DateTimeInterface::getTimezone](datetime.gettimezone.md) — Retorna o fuso horário correspondente a um DateTime informado
  - [DateTime::\_\_serialize](datetime.serialize.md) — Serializa um DateTime
  - [DateTime::\_\_unserialize](datetime.unserialize.md) — Desserializa um Datetime
  - [DateTime::\_\_wakeup](datetime.wakeup.md) — O manipulador \_\_wakeup
- [DateTimeZone](class.datetimezone.md) — A classe DateTimeZone
  - [DateTimeZone::\_\_construct](datetimezone.construct.md) — Cria um novo objeto DateTimeZone
  - [DateTimeZone::getLocation](datetimezone.getlocation.md) — Retorna informações da localização de um fuso horário
  - [DateTimeZone::getName](datetimezone.getname.md) — Retorna o nome do fuso horário
  - [DateTimeZone::getOffset](datetimezone.getoffset.md) — Retorna o deslocamento do fuso horário em relação ao GMT
  - [DateTimeZone::getTransitions](datetimezone.gettransitions.md) — Retorna todas as transições para o fuso horário
  - [DateTimeZone::listAbbreviations](datetimezone.listabbreviations.md) — Retorna um array associativo contendo indicativo de horário de verão, deslocamento e nome do fuso horário
  - [DateTimeZone::listIdentifiers](datetimezone.listidentifiers.md) — Retorna um array numericamente indexado contendo todos os indenticadores de fuso horário
- [DateInterval](class.dateinterval.md) — A classe DateInterval
  - [DateInterval::\_\_construct](dateinterval.construct.md) — Cria um novo objeto DateInterval
  - [DateInterval::createFromDateString](dateinterval.createfromdatestring.md) — Cria um DateInterval de porções relativas da string
  - [DateInterval::format](dateinterval.format.md) — Formata um intervalo
- [DatePeriod](class.dateperiod.md) — A classe DatePeriod
  - [DatePeriod::\_\_construct](dateperiod.construct.md) — Cria um novo objeto DatePeriod
  - [DatePeriod::createFromISO8601String](dateperiod.createfromiso8601string.md) — Cria um novo objeto DatePeriod a partir de uma string ISO8601
  - [DatePeriod::getDateInterval](dateperiod.getdateinterval.md) — Obtém o intervalo
  - [DatePeriod::getEndDate](dateperiod.getenddate.md) — Obtém a data final
  - [DatePeriod::getRecurrences](dateperiod.getrecurrences.md) — Obtém o número de recorrências
  - [DatePeriod::getStartDate](dateperiod.getstartdate.md) — Obtém a data inicial
- [Funções de Data/Horário](ref.datetime.md)
  - [checkdate](function.checkdate.md) — Valida uma data gregoriana
  - [date](function.date.md) — Formata um timestamp Unix
  - [date\_add](function.date-add.md) — Sinônimo de DateTime::add
  - [date\_create](function.date-create.md) — Cria um novo objeto DateTime
  - [date\_create\_from\_format](function.date-create-from-format.md) — Sinônimo de DateTime::createFromFormat
  - [date\_create\_immutable](function.date-create-immutable.md) — Cria um novo objeto DateTimeImmutable
  - [date\_create\_immutable\_from\_format](function.date-create-immutable-from-format.md) — Sinônimo de DateTimeImmutable::createFromFormat
  - [date\_date\_set](function.date-date-set.md) — Sinônimo de DateTime::setDate
  - [date\_default\_timezone\_get](function.date-default-timezone-get.md) — Retorna o fuso horário padrão usado por todas as funções de data/horário em um script
  - [date\_default\_timezone\_set](function.date-default-timezone-set.md) — Configura o fuso horário padrão utilizado por todas as funções de data/horário em um script
  - [date\_diff](function.date-diff.md) — Sinônimo de DateTime::diff
  - [date\_format](function.date-format.md) — Sinônimo de DateTime::format
  - [date\_get\_last\_errors](function.date-get-last-errors.md) — Sinônimo de DateTimeImmutable::getLastErrors
  - [date\_interval\_create\_from\_date\_string](function.date-interval-create-from-date-string.md) — Sinônimo de DateInterval::createFromDateString
  - [date\_interval\_format](function.date-interval-format.md) — Sinônimo de DateInterval::format
  - [date\_isodate\_set](function.date-isodate-set.md) — Sinônimo de DateTime::setISODate
  - [date\_modify](function.date-modify.md) — Sinônimo de DateTime::modify
  - [date\_offset\_get](function.date-offset-get.md) — Sinônimo de DateTime::getOffset
  - [date\_parse](function.date-parse.md) — Retorna um array associativo com informações detalhadas da data/horário informada
  - [date\_parse\_from\_format](function.date-parse-from-format.md) — Retorna informações sobre uma data informada de acordo com um formato
  - [date\_sub](function.date-sub.md) — Sinônimo de DateTime::sub
  - [date\_sun\_info](function.date-sun-info.md) — Retorna um array com informações sobre pôr/nascer do sol e o início/fim do dia
  - [date\_sunrise](function.date-sunrise.md) — Retorna a hora do nascer do sol para um dia e uma localicação informados
  - [date\_sunset](function.date-sunset.md) — Retorna a hora do pôr do sol para um dia e uma localização informados.
  - [date\_time\_set](function.date-time-set.md) — Sinônimo de DateTime::setTime
  - [date\_timestamp\_get](function.date-timestamp-get.md) — Sinônimo de DateTime::getTimestamp
  - [date\_timestamp\_set](function.date-timestamp-set.md) — Sinônimo de DateTime::setTimestamp
  - [date\_timezone\_get](function.date-timezone-get.md) — Sinônimo de DateTime::getTimezone
  - [date\_timezone\_set](function.date-timezone-set.md) — Sinônimo de DateTime::setTimezone
  - [getdate](function.getdate.md) — Recupera informações de data/horário
  - [gettimeofday](function.gettimeofday.md) — Obtém o horário atual
  - [gmdate](function.gmdate.md) — Formata uma data/horário GMT/CUT
  - [gmmktime](function.gmmktime.md) — Obtém um timestamp Unix para uma data GMT
  - [gmstrftime](function.gmstrftime.md) — Formata uma data/horário GMT/UTC de acordo com as configurações de localidade
  - [idate](function.idate.md) — Formata uma parte de uma data/horário local como um inteiro
  - [localtime](function.localtime.md) — Obtém o horário local
  - [microtime](function.microtime.md) — Retorna o timestamp Unix atual com microssegundos
  - [mktime](function.mktime.md) — Obtém um timestamp Unix de uma data
  - [strftime](function.strftime.md) — Formata uma data/horário de acordo com as configurações locais
  - [strptime](function.strptime.md) — Interpreta uma data/horário gerada pela função strftime
  - [strtotime](function.strtotime.md) — Interpreta qualquer descrição textual de data/horário em inglês para timestamp Unix
  - [time](function.time.md) — Retorna o timestamp Unix atual
  - [timezone\_abbreviations\_list](function.timezone-abbreviations-list.md) — Sinônimo de DateTimeZone::listAbbreviations
  - [timezone\_identifiers\_list](function.timezone-identifiers-list.md) — Sinônimo de DateTimeZone::listIdentifiers
  - [timezone\_location\_get](function.timezone-location-get.md) — Sinônimo de DateTimeZone::getLocation
  - [timezone\_name\_from\_abbr](function.timezone-name-from-abbr.md) — Retorna um nome de fuso horário através da abreviação e do deslocamento UTC
  - [timezone\_name\_get](function.timezone-name-get.md) — Sinônimo de DateTimeZone::getName
  - [timezone\_offset\_get](function.timezone-offset-get.md) — Sinônimo de DateTimeZone::getOffset
  - [timezone\_open](function.timezone-open.md) — Sinônimo de DateTimeZone::\_\_construct
  - [timezone\_transitions\_get](function.timezone-transitions-get.md) — Sinônimo de DateTimeZone::getTransitions
  - [timezone\_version\_get](function.timezone-version-get.md) — Obtém a versão do banco de dados de fuso horário.
- [Erros e Exceções de Data/Horário](datetime.error.tree.md)
- [Formatos de Data e Horário Suportados](datetime.formats.md)
- [Lista de Fusos Horários Suportados](timezones.md)
  - [África](timezones.africa.md)
  - [América](timezones.america.md)
  - [Antártica](timezones.antarctica.md)
  - [Ártico](timezones.arctic.md)
  - [Ásia](timezones.asia.md)
  - [Atlântico](timezones.atlantic.md)
  - [Austrália](timezones.australia.md)
  - [Europa](timezones.europe.md)
  - [Índia](timezones.indian.md)
  - [Pacífico](timezones.pacific.md)
  - [Outros](timezones.others.md)
- [DateError](class.dateerror.md) — A classe DateError
- [DateObjectError](class.dateobjecterror.md) — A classe DateObjectError
- [DateRangeError](class.daterangeerror.md) — A classe DateRangeError
- [DateException](class.dateexception.md) — A classe DateException
- [DateInvalidOperationException](class.dateinvalidoperationexception.md) — A classe DateInvalidOperationException
- [DateInvalidTimeZoneException](class.dateinvalidtimezoneexception.md) — A classe DateInvalidTimeZoneException
- [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md) — The DateMalformedIntervalStringException class
- [DateMalformedPeriodStringException](class.datemalformedperiodstringexception.md) — A classe DateMalformedPeriodStringException
- [DateMalformedStringException](class.datemalformedstringexception.md) — A classe DateMalformedStringException

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
