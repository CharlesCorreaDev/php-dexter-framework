# Obtém o timestamp Unix para a meia-noite local da Páscoa de um ano informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.easter-date.php

---

# easter\_date

(PHP 4, PHP 5, PHP 7, PHP 8)

easter\_date — Obtém o timestamp Unix para a meia-noite local da Páscoa de um ano informado

### Descrição

function **easter\_date**([?](language.types.null.md)[int](language.types.integer.md) `$year` = **`null`**, [int](language.types.integer.md) `$mode` = **`CAL_EASTER_DEFAULT`**): [int](language.types.integer.md)

Retorna o timestamp Unix correspondente à meia-noite local da Páscoa do
ano informado.

A data do Dia de Páscoa foi definida pelo Concílio de Niceia no
ano 325 D.C. como o domingo após a primeira lua cheia que cai no
equinócio de primavera ou depois dele. Assume-se que o equinócio seja sempre
no dia 21 de março, portanto o cálculo se reduz a determinar a data
da lua cheia e a data do domingo seguinte. O
algoritmo usado aqui foi introduzido por volta do ano 532 por
Dionísio, o exíguo. Sob o calendário Juliano (para anos anteriores a
1753), um ciclo simples de 19 anos é usado para acompanhar as fases da
lua. Sob o calendário Gregoriano (para anos posteriores a 1753 -
concebido por Cristóvão Clávio e Luís Lílio, e introduzido pelo Papa Gregório
XIII em outubro de 1582, e na Grã-Bretanha e suas então colônias em
setembro de 1752), dois fatores de correção são adicionados para deixar
o ciclo mais preciso.

### Parâmetros

`year`
:   O ano deve ser um número entre 1970 e 2037 para sistemas de 32 bits, ou entre 1970 e 2.000.000.000 para sistemas de 64 bits.
    Se omitido ou **`null`**, será usado o padrão que é o ano atual conforme o horário local.

`mode`
:   Permite que datas de Páscoa sejam calculadas com base no calendário Juliano quando definido
    para **`CAL_EASTER_ALWAYS_JULIAN`**. Consulte também as
    [constantes de calendário](calendar.constants.md).

### Valor Retornado

A data da Páscoa como um timestamp Unix.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se o ano for anterior a 1970 ou posterior a 2037
em sistemas de 32 bits, ou posterior a 2.000.000.000 em sistemas de 64 bits.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Em sistemas de 64 bits, o parâmetro `year` agora aceita valores na faixa de 1970 a 2.000.000.000. |
| 8.0.0 | `year` agora pode ser nulo. |
| 8.0.0 | Uma exceção [ValueError](class.valueerror.md) agora é lançada quando `year` estiver fora do intervalo permitido. Anteriormente, um **`E_WARNING`** era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **easter\_date()****

```
<?php

echo date("M-d-Y", easter_date(1999));        // Apr-04-1999
echo date("M-d-Y", easter_date(2000));        // Apr-23-2000
echo date("M-d-Y", easter_date(2001));        // Apr-15-2001

?>
```

**Exemplo #2 Usando **easter\_date()** com [DateTime](class.datetime.md)**

```
<?php

$timestamp = easter_date(2023);

$datetime = new \DateTime();
$datetime->setTimestamp($timestamp);

echo $datetime->format('M-d-Y'); // Apr-09-2023

?>
```

### Notas

> **Nota**:
>
> **easter\_date()** depende das funções de horário da biblioteca
> C do sistema, ao invés de usar as funções de data e horário internas do PHP. Como uma
> consequência, **easter\_date()** usa a variável de ambiente
> `TZ` para determinar o fuso horário onde ela deve
> operar, ao invés de usar o
> [fuso horário padrão](datetime.configuration.md#ini.date.timezone) do PHP, o que pode
> retultar em comportamento inesperado ao usar esta função em conjunto
> com outras funções de data no PHP.
>
> Como uma maneira de contornar isso, pode-se usar [easter\_days()](function.easter-days.md) com
> [DateTime](class.datetime.md) e [DateInterval](class.dateinterval.md) para
> calcular o início da Páscoa no fuso horário do PHP como no exemplo a seguir:
>
> ```
> <?php
> function get_easter_datetime($year) {
>     $base = new DateTime("$year-03-21");
>     $days = easter_days($year);
>
>     return $base->add(new DateInterval("P{$days}D"));
> }
>
> foreach (range(2012, 2015) as $year) {
>     printf("Páscoa em %d é no dia %s\n",
>            $year,
>            get_easter_datetime($year)->format('d/m'));
> }
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> Páscoa em 2012 é no dia 08/04
> Páscoa em 2013 é no dia 31/03
> Páscoa em 2014 é no dia 20/04
> Páscoa em 2015 é no dia 05/04
> ```

### Veja também

- [easter\_days()](function.easter-days.md) - Obtém o número de dias depois de 21 de março no qual a Páscoa cai para um determinado ano para cálculo da Páscoa
  antes de 1970 ou depois de 2037

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
