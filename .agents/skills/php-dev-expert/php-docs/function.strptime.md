# Interpreta uma data/horário gerada pela função strftime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strptime.php

---

# strptime

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

strptime — 
Interpreta uma data/horário gerada pela função [strftime()](function.strftime.md)

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **strptime**([string](language.types.string.md) `$timestamp`, [string](language.types.string.md) `$format`): [array](language.types.array.md)|[false](language.types.singleton.md)

**strptime()** retorna um array com a
`timestamp` analisada, ou [false](reserved.constants.md#constant.false) em caso de erro.

Nomes de meses e semanas, e outras strings que dependem do idioma, respeitam o
idioma corrente definido com a função [setlocale()](function.setlocale.md) ([LC\_TIME](string.constants.md#constant.lc-time)).

### Parâmetros

`timestamp` ([string](language.types.string.md))
:   A string a ser interpretada (retornada da função [strftime()](function.strftime.md)).

`format` ([string](language.types.string.md))
:   O formato utilizado em `timestamp` (o mesmo utilizado
    na função [strftime()](function.strftime.md)). Note que algumas opções de
    formato disponíveis na função [strftime()](function.strftime.md) podem não ter nenhum
    efeito com **strptime()**; o subconjunto exato que é
    suportado vai variar por ser baseado no sistema operacional e biblioteca C em
    uso.

    Para mais informações sobre as opções de formato, veja a
    página da função [strftime()](function.strftime.md).

### Valor Retornado

Retorna um array ou **`false`** em caso de falha.

**Os seguintes parâmetros são retornados no array**

| Parâmetro | Descrição |
| --- | --- |
| `"tm_sec"` | Segundos após o minuto (0-61) |
| `"tm_min"` | Minutos após a hora (0-59) |
| `"tm_hour"` | Horas passadas desde a meia-noite (0-23) |
| `"tm_mday"` | Dia do mês (1-31) |
| `"tm_mon"` | Meses passados desde janeiro (0-11) |
| `"tm_year"` | Anos passados desde 1900 |
| `"tm_wday"` | Dias passados desde domingo (0-6) |
| `"tm_yday"` | Dias passados desde 1º de janeiro 1 (0-365) |
| `"unparsed"` | A parte `timestamp` que não foi reconhecida usando o `format` especificado |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use [date\_parse\_from\_format()](function.date-parse-from-format.md) no lugar (para análise independente de localidade), ou [IntlDateFormatter::parse()](intldateformatter.parse.md) (para análise dependente de localidade). |

### Examples

**Exemplo #1 Exemplo da função **strptime()****

```
<?php
$format = '%d/%m/%Y %H:%M:%S';
$strf = strftime($format);

echo "$strf\n";

print_r(strptime($strf, $format));
```

O exemplo acima produzirá
algo semelhante a:

```
03/10/2004 15:54:19

Array
(
    [tm_sec] => 19
    [tm_min] => 54
    [tm_hour] => 15
    [tm_mday] => 3
    [tm_mon] => 9
    [tm_year] => 104
    [tm_wday] => 0
    [tm_yday] => 276
    [unparsed] =>
)
```

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

> **Nota**:
>
> Internamente, esta função chama a função `strptime()`
> presente na biblioteca C do sistema. Esta função pode apresentar um
> comportamento diferente entre diferentes sistemas operacionais. A
> utilização da função [date\_parse\_from\_format()](function.date-parse-from-format.md), que não é
> afetada por esta questão, é recomendada.

> **Nota**:
>
> `"tm_sec"` inclui todos os segundos intercalares (atualmente 2
> por ano). Para mais informações sobre segundos intercalares, veja o [» o artigo da Wikipedia sobre
> segundos intercalares](https://en.wikipedia.org/wiki/Leap_second).

### Veja também

- [IntlDateFormatter::parse()](intldateformatter.parse.md) - Interpreta uma string para uma valor de timestamp
- [DateTime::createFromFormat()](datetime.createfromformat.md) - Interpreta um string de data/horário de acordo com um formato especificado.
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana
- [strftime()](function.strftime.md) - Formata uma data/horário de acordo com as configurações locais
- [date\_parse\_from\_format()](function.date-parse-from-format.md) - Retorna informações sobre uma data informada de acordo com um formato

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
