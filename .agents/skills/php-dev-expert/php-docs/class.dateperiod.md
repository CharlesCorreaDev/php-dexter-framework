# A classe DatePeriod

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dateperiod.php

---

# A classe DatePeriod

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Representa um período entre datas.

O período entre datas permite a interação entre um conjunto de datas e horários recorrentes a
intervalos regulares, durante um determinado período.

## Resumo da classe

class ****DatePeriod****
implements
[IteratorAggregate](class.iteratoraggregate.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[EXCLUDE\_START\_DATE](class.dateperiod.md#dateperiod.constants.exclude-start-date);

public
const
[int](language.types.integer.md)
[INCLUDE\_END\_DATE](class.dateperiod.md#dateperiod.constants.include-end-date);

/\* Propriedades \*/

public
readonly
?[DateTimeInterface](class.datetimeinterface.md)
[$start](class.dateperiod.md#dateperiod.props.start);

public
readonly
?[DateTimeInterface](class.datetimeinterface.md)
[$current](class.dateperiod.md#dateperiod.props.current);

public
readonly
?[DateTimeInterface](class.datetimeinterface.md)
[$end](class.dateperiod.md#dateperiod.props.end);

public
readonly
?[DateInterval](class.dateinterval.md)
[$interval](class.dateperiod.md#dateperiod.props.interval);

public
readonly
[int](language.types.integer.md)
[$recurrences](class.dateperiod.md#dateperiod.props.recurrences);

public
readonly
[bool](language.types.boolean.md)
[$include\_start\_date](class.dateperiod.md#dateperiod.props.include-start-date);

public
readonly
[bool](language.types.boolean.md)
[$include\_end\_date](class.dateperiod.md#dateperiod.props.include-end-date);

/\* Métodos \*/

public function [\_\_construct](dateperiod.construct.md)(  
    [DateTimeInterface](class.datetimeinterface.md) `$start`,  
    [DateInterval](class.dateinterval.md) `$interval`,  
    [int](language.types.integer.md) `$recurrences`,  
    [int](language.types.integer.md) `$options` = 0  
)

public function [\_\_construct](dateperiod.construct.md)(  
    [DateTimeInterface](class.datetimeinterface.md) `$start`,  
    [DateInterval](class.dateinterval.md) `$interval`,  
    [DateTimeInterface](class.datetimeinterface.md) `$end`,  
    [int](language.types.integer.md) `$options` = 0  
)

public function [\_\_construct](dateperiod.construct.md)([string](language.types.string.md) `$isostr`, [int](language.types.integer.md) `$options` = 0)

public static function [createFromISO8601String](dateperiod.createfromiso8601string.md)([string](language.types.string.md) `$specification`, [int](language.types.integer.md) `$options` = 0): static

public function [getDateInterval](dateperiod.getdateinterval.md)(): [DateInterval](class.dateinterval.md)

public function [getEndDate](dateperiod.getenddate.md)(): [?](language.types.null.md)[DateTimeInterface](class.datetimeinterface.md)

public function [getRecurrences](dateperiod.getrecurrences.md)(): [?](language.types.null.md)[int](language.types.integer.md)

public function [getStartDate](dateperiod.getstartdate.md)(): [DateTimeInterface](class.datetimeinterface.md)

}

## Constantes predefinidas

**`DatePeriod::EXCLUDE_START_DATE`** [int](language.types.integer.md)
:   Exclui a data inicial, utilizada em [DatePeriod::\_\_construct()](dateperiod.construct.md).

**`DatePeriod::INCLUDE_END_DATE`** [int](language.types.integer.md)
:   Inclui a data final, utilizado em [DatePeriod::\_\_construct()](dateperiod.construct.md).

## Propriedades

recurrences
:   O número mínimo de instâncias retornadas pelo iterador.

    O número de recorrências que foi informado explicitamente no parâmetro
    recurrences no construtor da instância de
    **DatePeriod**, de forma que essa propriedade contém
    este valor, *mais* um se a data inicial não foi excluída
    através de **`DatePeriod::EXCLUDE_START_DATE`**,
    *mais* um se a data final foi incluída através de
    **`DatePeriod::INCLUDE_END_DATE`**.

    Se o número de recorrências não foi informado explicitamente, então esta
    propriedade conta o número mínimo de recorrências a retornar. Isto pode
    ser `0`, *mais* um se a data inicial
    não foi excluída através de
    **`DatePeriod::EXCLUDE_START_DATE`**,
    *mais* um se a data final não foi incluída através de
    **`DatePeriod::INCLUDE_END_DATE`**.

    ```
    <?php
    $start = new DateTime('2018-12-31 00:00:00');
    $end   = new DateTime('2021-12-31 00:00:00');
    $interval = new DateInterval('P1M');
    $recurrences = 5;

    // recorrências informadas no construtor
    $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::EXCLUDE_START_DATE);
    echo $period->recurrences, "\n";

    $period = new DatePeriod($start, $interval, $recurrences);
    echo $period->recurrences, "\n";

    $period = new DatePeriod($start, $interval, $recurrences, DatePeriod::INCLUDE_END_DATE);
    echo $period->recurrences, "\n";

    // recorrências não informadas no construtor
    $period = new DatePeriod($start, $interval, $end);
    echo $period->recurrences, "\n";

    $period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
    echo $period->recurrences, "\n";
    ```

    O exemplo acima produzirá:

    ```
    5
    6
    7
    1
    0
    ```

    Veja também [DatePeriod::getRecurrences()](dateperiod.getrecurrences.md).

include\_end\_date
:   Informa se deve ser incluída a data final no conjunto de datas a retornar.

include\_start\_date
:   Informa se deve ser incluída a data inicial no conjunto de datas a retornar.

start
:   A data inicial do período.

current
:   Contém a data atual dentro do período.

end
:   Data final do período.

interval
:   Uma especificação ISO 8601 do intervalo repetidor.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |
| 8.2.0 | A constante **`DatePeriod::INCLUDE_END_DATE`** e a propriedade include\_end\_date foram adicionados. |
| 8.0.0 | **DatePeriod** agora implementa [IteratorAggregate](class.iteratoraggregate.md). Anteriormente implementava [Traversable](class.traversable.md). |

## Índice

- [DatePeriod::\_\_construct](dateperiod.construct.md) — Cria um novo objeto DatePeriod
- [DatePeriod::createFromISO8601String](dateperiod.createfromiso8601string.md) — Cria um novo objeto DatePeriod a partir de uma string ISO8601
- [DatePeriod::getDateInterval](dateperiod.getdateinterval.md) — Obtém o intervalo
- [DatePeriod::getEndDate](dateperiod.getenddate.md) — Obtém a data final
- [DatePeriod::getRecurrences](dateperiod.getrecurrences.md) — Obtém o número de recorrências
- [DatePeriod::getStartDate](dateperiod.getstartdate.md) — Obtém a data inicial

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
