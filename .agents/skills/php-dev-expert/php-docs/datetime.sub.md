# Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
   um objeto DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.sub.php

---

# DateTime::sub

# date\_sub

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTime::sub -- date\_sub — 
Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos de
um objeto DateTime

### Descrição

Estilo orientado a objetos

public function **DateTime::sub**([DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

Estilo procedural

function [date\_sub](function.date-sub.md)([DateTime](class.datetime.md) `$object`, [DateInterval](class.dateinterval.md) `$interval`): [DateTime](class.datetime.md)

Modifica o objeto DateTime especificado, subtraindo o
objeto [DateInterval](class.dateinterval.md) especificado.

Equivalente a [DateTimeImmutable::sub()](datetimeimmutable.sub.md) mas funciona com
[DateTime](class.datetime.md).

A versão procedural usa o objeto [DateTime](class.datetime.md) como
seu primeiro argumento.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md).
    A função modifica este objeto.

`interval`
:   Um objeto [DateInterval](class.dateinterval.md)

### Valor Retornado

Retorna o objeto [DateTime](class.datetime.md) modificado para encadeamento de métodos.

### Erros/Exceções

Apenas para API orientada a objetos: Se uma operação não suportada for realizada, como o uso
de um objeto [DateInterval](class.dateinterval.md) representando especificações de tempo relativo
tipo `next weekday`, uma
exceção [DateInvalidOperationException](class.dateinvalidoperationexception.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança uma exceção [DateInvalidOperationException](class.dateinvalidoperationexception.md) com **DateTime::sub()**, em vez de um alerta quando uma operação não suportada é realizada. A função [date\_sub()](function.date-sub.md) não foi alterada. |

### Veja também

- [DateTimeImmutable::sub()](datetimeimmutable.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos

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
