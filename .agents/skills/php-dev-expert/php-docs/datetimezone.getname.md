# Retorna o nome do fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.getname.php

---

# DateTimeZone::getName

# timezone\_name\_get

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::getName -- timezone\_name\_get — Retorna o nome do fuso horário

### Descrição

Estilo orientado a objetos

public function **DateTimeZone::getName**(): [string](language.types.string.md)

Estilo procedural

function [timezone\_name\_get](function.timezone-name-get.md)([DateTimeZone](class.datetimezone.md) `$object`): [string](language.types.string.md)

Retorna o nome do fuso horário.

### Parâmetros

`object`
:   O objeto [DateTimeZone](class.datetimezone.md) do qual se deseja obter o nome.

### Valor Retornado

Dependendo do tipo do fuso horário, deslocamento UTC (tipo 1), abreviação do fuso (tipo
2), e identificadores de fuso como publicado no banco de dados da IANA
(tipo 3), o valor retornado será um descritor string para criar um novo
objeto [DateTimeZone](class.datetimezone.md) com o mesmo deslocamento e/ou
regras. Por exemplo `02:00`, `CEST`, ou
um dos nomes na [lista de
fusos horários](timezones.md).

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
