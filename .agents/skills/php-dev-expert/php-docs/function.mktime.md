# Obtém um timestamp Unix de uma data

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mktime.php

---

# mktime

(PHP 4, PHP 5, PHP 7, PHP 8)

mktime — Obtém um timestamp Unix de uma data

### Descrição

function **mktime**(  
    [int](language.types.integer.md) `$hour`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$minute` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$month` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$day` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$year` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o timestamp Unix correspondente aos argumentos informados.
Este timestamp é um inteiro longo contendo o número de segundos
entre a Época Unix (January 1 1970 00:00:00 GMT), e o horário
especificado.

Quaisquer argumentos opcionais
omitidos ou **`null`** serão definidos para os valores correntes de acordo
com a data e horário locais.

**Aviso**

Favor notar que os argumentos estão em uma ordem não usual:
`month`, `day`,
`year`, e não na ordem mais razoável
`year`, `month`,
`day`.

Chamar **mktime()** sem argumentos não é suportado,
e irá resultar em um [ArgumentCountError](class.argumentcounterror.md).
[time()](function.time.md) pode ser usada para obter o timestamp atual.

### Parâmetros

`hour`
:   O número da hora relativa ao início de determinado dia do
    `month`, `day` e `year`.
    Valores negativos referenciam a hora anterior a meia noite do dia em questão.
    Valores maiores que 23 referenciam a hora correspondente no(s) próximo(s) dia(s).

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
    Valores menores que 1 (valores negativos, inclusos) referenciam meses do ano anterior em ordem reversa, então 0 é Dezembro, -1 Novembro, e etc.
    Valores maiores que 12 referenciam meses correspondentes ao(s) próximo(s) ano(s).

`day`
:   O número do dia relativo ao final do mês anterior.
    Valores de 1 a 28, 29, 30 e 31 (dependendo do mês) corresponde a dias normais no mês.
    Valores menores que 1 (valores negativos, inclusos) corresponde a dias no mês anterior, então 0 é o último dia do mês anterior, -1 é o dia anterior a este, e etc.
    Valores maiores que o número de dias do mês, referenciam dias correspondentes ao(s) próximo(s) mês(es).

`year`
:   O número do ano. Pode conter dois ou quatro dígitos, com os valores
    entre 0-69 significando 2000-2069 e 70-100 para 1970-2000. Em
    sistemas aonde o time\_t é um inteiro assinado de 32 bit, como é mais
    comum, o faixa de valores para `year`
    é algo entre 1901 e 2038.

### Valor Retornado

A função **mktime()** retorna o timestamp Unix dos argumentos
informados ou **`false`** se o timestamp não couber em um inteiro do PHP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `hour` não é mais opcional. Se for necessário um timestamp Unix, use a função [time()](function.time.md). |
| 8.0.0 | `minute`, `second`, `month`, `day` e `year` agora podem ser nulos. |

### Examples

**Exemplo #1 Exemplo básico da função **mktime()****

```
<?php
// Configura o fuso horário padrão a ser utilizado.
date_default_timezone_set('UTC');

// Imprime: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "\n";

// Imprime algo como: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006)) . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
July 1, 2000 is on a Saturday
2006-04-05T01:02:03+00:00
```

**Exemplo #2 Exemplo da **mktime()****

**mktime()** é útil para a aritmética e validação de data,
já que calculará automaticamente o valor correto para a entrada fora
do intervalo. Por exemplo, cada uma das seguintes linhas produzirá a string
"Jan-01-1998".

```
<?php
date_default_timezone_set('America/New_York');

echo date("c", mktime(0, 0, 0, 12, 32, 1997)) . "\n";
echo date("c", mktime(0, 0, 0, 13, 1, 1997)) . "\n";
echo date("c", mktime(0, 0, 0, 1, 1, 1998)) . "\n";
echo date("c", mktime(0, 0, 0, 1, 1, 98)) . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
1998-01-01T00:00:00-05:00
1998-01-01T00:00:00-05:00
1998-01-01T00:00:00-05:00
1998-01-01T00:00:00-05:00
```

**Exemplo #3 Usando mktime para encontrar datas relativas**

```
<?php
date_default_timezone_set('Asia/Tokyo');

$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
print date('c', $tomorrow) . "\n";

$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
print date('c', $lastmonth) . "\n";

$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1) . "\n";
print date('c', $nextyear) . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
2025-09-30T00:00:00+09:00
2025-08-29T00:00:00+09:00
2026-09-29T00:00:00+09:00
```

> **Nota**:
>
> Isto pode ser mais confiável que simplesmente adicionar ou substrair o número
> de segundos em um dia ou mês de um timestamp por causa do fuso
> horário.

**Exemplo #4 Último dia do próximo mês**

O último dia de um mês informado pode ser expressado como o dia "0" do mês
seguinte, não o dia -1. Os dois exemplos a seguir
produzirão a string "Last day in Feb 2000 is: 29".

```
<?php

$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo 'Last day in Feb 2000 is: ', date('d', $lastday) . "\n";

$lastday = mktime(0, 0, 0, 4, -31, 2000);
echo 'Last day in Feb 2000 is: ', date('d', $lastday) . "\n";
```

O exemplo acima produzirá:

```
Last day in Feb 2000 is: 29
Last day in Feb 2000 is: 29
```

### Veja também

- A classe [DateTimeImmutable](class.datetimeimmutable.md)
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana
- [gmmktime()](function.gmmktime.md) - Obtém um timestamp Unix para uma data GMT
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
