# Obtém um timestamp Unix para uma data GMT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmmktime.php

---

# gmmktime

(PHP 4, PHP 5, PHP 7, PHP 8)

gmmktime — Obtém um timestamp Unix para uma data GMT

### Descrição

function **gmmktime**(  
    [int](language.types.integer.md) `$hour`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$minute` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$month` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$day` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$year` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Idêntico ao [mktime()](function.mktime.md) exceto que os parâmetros representam uma
data GMT. A função **gmmktime()** usa internamente a função [mktime()](function.mktime.md),
significando que somente horários válidos derivados de horários locais podem ser utilizados.

Como em [mktime()](function.mktime.md), argumentos opcionais podem ser
omitidos da direita para esquerda, com todos os argumentos omitidos sendo
definidos para o valor GMT correspondente.

Chamar **gmmktime()** sem nenhum argumento não é
suportado, e vai resultar em um [ArgumentCountError](class.argumentcounterror.md).
[time()](function.time.md) pode ser usado para obter o horário atual.

### Parâmetros

`hour`
:   O número de horas relativas ao início do dia determinadas pelos parâmetros
    `month`, `day` e `year`.
    Valores negativos são referenciados à horas antes da meia noite do dia em questão.
    Valores maiores que 23 referenciam horas correspondentes ao(s) próximo(s) dia(s).

`minute`
:   O número de minutos relativos ao início da `hour`.
    Valores negativos referenciam minutos da hora anterior.
    Valores maiores que 23 referenciam os minutos correspondentes a(s) próxima(s) horas(s).

`second`
:   O número de segundos relativos ao início do `minute`.
    Valores negativos referenciam segundos do minuto anterior.
    Valores maiores que 23 referenciam os segundos correspondentes ao(s) próximo(s) minuto(s).

`month`
:   O número do mês relativo ao fim do anterior.
    Valores de 1 a 12 referenciam o calendário normal de meses do ano em questão.
    Valores menores que 1 (valores negativos, incluso) referenciam meses do ano anterior em ordem reversa, então 0 é Dezembro, -1 Novembro, e etc.
    Valores maiores que 12 referenciam meses correspondentes ao(s) próximo(s) ano(s).

`day`
:   O número do dia relativo ao final do mês anterior.
    Valores de 1 a 28, 29, 30 e 31 (dependendo do mês) corresponde a dias normais no mês.
    Valores menores que 1 (valores negativos, incluso) corresponde a dias no mês anterior, então 0 é o último dia do mês anterior, -1 é o dia anterior a este, e etc.
    Valores maiores que o número de dias do mês, referenciam dias correspondentes ao(s) próximo(s) mês(es).

`year`
:   O ano

### Valor Retornado

Retorna um [int](language.types.integer.md) timestamp Unix em caso de sucesso, ou **`false`** se o
timestamp não couber em um número inteiro do PHP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `hour` não é mais opcional. Se for necessário um timestamp Unix, use [time()](function.time.md). |
| 8.0.0 | `minute`, `second`, `month`, `day` e `year` agora podem ser nulos. |

### Examples

**Exemplo #1 A função **gmmktime()** no Windows**

```
<?php
date_default_timezone_set("Indian/Maldives");

echo "July 1, 2000 is on a " . date("l", gmmktime(0, 0, 0, 7, 1, 2000));
```

O exemplo acima produzirá:

```
July 1, 2000 is on a Saturday
```

### Veja também

- A classe [DateTimeImmutable](class.datetimeimmutable.md)
- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [date()](function.date.md) - Formata um timestamp Unix
- [time()](function.time.md) - Retorna o timestamp Unix atual

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
