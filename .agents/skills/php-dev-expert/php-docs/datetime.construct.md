# Retorna um novo objeto DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.construct.php

---

# DateTime::\_\_construct

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::\_\_construct — Retorna um novo objeto DateTime

### Descrição

public function **DateTime::\_\_construct**([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**)

Equivalente a [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) mas funciona com
[DateTime](class.datetime.md). Considere usar
[DateTimeImmutable](class.datetimeimmutable.md) e suas caracterísitcas.

Retorna um novo objeto DateTime.

### Parâmetros

`datetime`
:   Uma string de data/hora. Os formatos válidos são explicados em [Formatos de Data e Hora](datetime.formats.md).

    Coloque `"now"` neste parâmetro para obter o horário atual quando
    utilizar o parâmetro `timezone`.

`timezone`
:   Um objeto [DateTimeZone](class.datetimezone.md), representando o
    fuso horário do parâmetro `datetime`.

    Se `timezone` for **`null`** ou omitido,
    o fuso horário atual será utilizado.

    > **Nota**:
    >
    > O parâmetro `timezone`
    > e o fuso horário atual são ignorados quando o
    > parâmetro `datetime`
    > é um timestamp UNIX (exemplo, `@946684800`)
    > ou quando o fuso horário é informado
    > (exemplo. `2010-01-28T15:00:00+02:00`).

### Valor Retornado

Retorna uma nova instância de DateTime.

### Erros/Exceções

Se uma string inválida de data/horário for passada,
uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) é disparada.
Antes do PHP 8.3, era uma [Exception](class.exception.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora dispara [DateMalformedStringException](class.datemalformedstringexception.md) se uma string inválida é passada, em vez de [Exception](class.exception.md). |

### Veja também

- [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) - Retorna um novo objeto DateTimeImmutable

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
