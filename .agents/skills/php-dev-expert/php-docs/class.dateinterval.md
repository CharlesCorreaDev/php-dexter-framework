# A classe DateInterval

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dateinterval.php

---

# A classe DateInterval

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Representa um intervalo entre datas.

Um intervalo de data armazena, tanto uma quantidade de tempo (em anos, meses,
dias, horas, etc), quanto uma string de tempo relativo no formato que
os construtores das classes [DateTimeImmutable](class.datetimeimmutable.md)
e [DateTime](class.datetime.md) suportam.

Mais especificamente, a informação em um objeto da classe
**DateInterval** é uma instrução para mover de
uma data/horário para outra data/horário. Este processo nem sempre é reversível.

Uma maneira comum de criar um objeto **DateInterval**
é calculando a diferença entre dois objetos data/horário através do método
[DateTimeInterface::diff()](datetime.diff.md).

Como não existe uma maneira bem definida de comparar intervalos de datas,
as instâncias de **DateInterval** são
[incomparáveis](language.operators.comparison.md#language.operators.comparison.incomparable).

## Resumo da classe

class ****DateInterval****
{

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$y](class.dateinterval.md#dateinterval.props.y);

public
[int](language.types.integer.md)
[$m](class.dateinterval.md#dateinterval.props.m);

public
[int](language.types.integer.md)
[$d](class.dateinterval.md#dateinterval.props.d);

public
[int](language.types.integer.md)
[$h](class.dateinterval.md#dateinterval.props.h);

public
[int](language.types.integer.md)
[$i](class.dateinterval.md#dateinterval.props.i);

public
[int](language.types.integer.md)
[$s](class.dateinterval.md#dateinterval.props.s);

public
[float](language.types.float.md)
[$f](class.dateinterval.md#dateinterval.props.f);

public
[int](language.types.integer.md)
[$invert](class.dateinterval.md#dateinterval.props.invert);

public
[mixed](language.types.mixed.md)
[$days](class.dateinterval.md#dateinterval.props.days);

public
[bool](language.types.boolean.md)
[$from\_string](class.dateinterval.md#dateinterval.props.from-string);

public
[string](language.types.string.md)
[$date\_string](class.dateinterval.md#dateinterval.props.date-string);

/\* Métodos \*/

public function [\_\_construct](dateinterval.construct.md)([string](language.types.string.md) `$duration`)

public static function [createFromDateString](dateinterval.createfromdatestring.md)([string](language.types.string.md) `$datetime`): [DateInterval](class.dateinterval.md)

public function [format](dateinterval.format.md)([string](language.types.string.md) `$format`): [string](language.types.string.md)

}

## Propriedades

**Aviso**

As propriedades disponíveis listadas abaixo dependem da versão do PHP, e devem
ser consideradas como *somente-leitura*.

y
:   Número de anos.

m
:   Número de meses.

d
:   Número de dias.

h
:   Número de horas.

i
:   Número de minutos.

s
:   Número de segundos.

f
:   Número de microssegundos, como uma fração de um segundo.

invert
:   Será `1` se o intervalo
    representa um período negativo de tempo e
    `0` caso contrário.
    Veja [DateInterval::format()](dateinterval.format.md).

days
:   Se o objeto DateInterval foi criado por
    [DateTimeImmutable::diff()](datetime.diff.md) ou
    [DateTime::diff()](datetime.diff.md), então ele representará o
    número total de dias inteiros entre a data inicial e final. Caso contrário,
    days será **`false`**.

from\_string
:   Se o objeto DateInterval foi criado por
    [DateInterval::createFromDateString()](dateinterval.createfromdatestring.md), então
    o valor desta propriedade será **`true`** e a propriedade
    date\_string será populada. Caso contrário,
    o valor será **`false`** e as propriedades y a
    f, invert e
    days serão populadas.

date\_string
:   String usado como argumento para
    [DateInterval::createFromDateString()](dateinterval.createfromdatestring.md).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | As propriedades from\_string e date\_string foram adicionadas para instâncias **DateInterval** que foram criadas usando o método [DateInterval::createFromDateString()](dateinterval.createfromdatestring.md). |
| 8.2.0 | Apenas as propriedades `y` a `f`, `invert`, e `days` serão visíveis. |
| 7.4.0 | As instâncias de **DateInterval** agora são incomparáveis; antes, todas as instâncias de **DateInterval** eram consideradas iguais. |
| 7.1.0 | A propriedade f foi adicionada. |

## Índice

- [DateInterval::\_\_construct](dateinterval.construct.md) — Cria um novo objeto DateInterval
- [DateInterval::createFromDateString](dateinterval.createfromdatestring.md) — Cria um DateInterval de porções relativas da string
- [DateInterval::format](dateinterval.format.md) — Formata um intervalo

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
