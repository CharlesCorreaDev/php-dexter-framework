# Funções de Data/Horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.datetime.php

---

# Funções de Data/Horário

## Índice

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
