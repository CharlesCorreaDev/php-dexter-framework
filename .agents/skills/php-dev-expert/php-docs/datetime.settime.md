# Define o horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.settime.php

---

# DateTime::setTime

# date\_time\_set

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTime::setTime -- date\_time\_set — Define o horário

### Descrição

Estilo orientado a objetos

public function **DateTime::setTime**(  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = 0,  
    [int](language.types.integer.md) `$microsecond` = 0  
): [DateTime](class.datetime.md)

Estilo procedural

function [date\_time\_set](function.date-time-set.md)(  
    [DateTime](class.datetime.md) `$object`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = 0,  
    [int](language.types.integer.md) `$microsecond` = 0  
): [DateTime](class.datetime.md)

Redefine o horário atual do objeto DateTime para um diferente.

Equivalente a [DateTimeImmutable::setTime()](datetimeimmutable.settime.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`hour`
:   Horas do horário.

`minute`
:   Minutos do horário.

`second`
:   Segundos do horário.

`microsecond`
:   Microssegundos do horário.

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O comportamento com duplicidade de horários existentes (durante um retorno de horário de verão) mudou. Anteriormente, o PHP pegaria a segunda ocorrência (depois do retorno do horário de verão), em vez da primeira ocorrência (antes do retorno do horário de verão). |
| 7.1.0 | O parâmetro `microsecond` foi adicionado. |

### Veja também

- [DateTimeImmutable::setTime()](datetimeimmutable.settime.md) - Define um horário

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
