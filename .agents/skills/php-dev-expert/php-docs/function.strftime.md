# Formata uma data/horário de acordo com as configurações locais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strftime.php

---

# strftime

(PHP 4, PHP 5, PHP 7, PHP 8)

strftime — Formata uma data/horário de acordo com as configurações locais

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

Alternativas a esta função incluem:

- [date()](function.date.md)
- [IntlDateFormatter::format()](intldateformatter.format.md)

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **strftime**([string](language.types.string.md) `$format`, [?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = [null](reserved.constants.md#constant.null)): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata uma data/horário local de acordo com a configuração do idioma. Nome do mês
e dia da semana e outras strings respeitam o idioma corrente definido
com a função [setlocale()](function.setlocale.md).

**Aviso**

Nem todos os especificadores de conversão podem ser suportados por suas bibliotecas C, e nestes
casos eles não serão suportados pela função do PHP **strftime()**.
Além disso, nem todas as plataformas suportam timestamps negativos, então sua
faixa de datas pode ficar limitada a um valor não anterior à época Unix. Isto significa que
%e, %T, %R e %D (e possivelmente outras) - assim como datas anteriores a
`1 de janeiro de 1970` - não funcionarão no Windows, algumas distribuições
Linux, e alguns outros sistemas operacionais. Para sistemas Windows, uma visão
completa dos especificadores de conversão suportados podem ser encontrados em
[» MSDN](https://msdn.microsoft.com/en-us/library/fe06s4ak.aspx).
No lugar desta função, use
o método [IntlDateFormatter::format()](intldateformatter.format.md).

### Parâmetros

`format`
:   **Os seguintes caracteres são reconhecidos na string do
    parâmetro `format`**

    | `format` | Descrição | Exemplo de valores retornados |
    | --- | --- | --- |
    | *Dia* | --- | --- |
    | `%a` | Representação textual abreviada do dia | `Sun` até `Sat` |
    | `%A` | Representação textual completa do dia | `Sunday` até `Saturday` |
    | `%d` | Dia do mês, com dois dígitos (com zeros à esquerda) | `01` a `31` |
    | `%e` | Dia do mês com um dígito, precedido com um espaço. Não implementado como descrito no Windows. Veja abaixo para mais informações. | `1` a `31` |
    | `%j` | Dia do ano, com 3 dígitos e zeros à esquerda | `001` a `366` |
    | `%u` | Representação numérica, do dia da semana, compatível com a ISO-8601 | `1` (para segunda-feira) até `7` (para domingo) |
    | `%w` | Representação numérica do dia da semana | `0` (para domingo) até `6` (para sábado) |
    | *Semana* | --- | --- |
    | `%U` | Número da semana de um dado ano, iniciado com o primeiro domingo sendo a primeira semana | `13` (como a 13ª semana completa do ano) |
    | `%V` | Número da semana, compatível com a ISO-8601:1988 de um dado ano, iniciada com a primeira semana do ano com pelo menos 4 finais de semana, sendo a segunda-feira como o início da semana. | `01` até `53` (onde 53 é responsável por uma sobreposição) |
    | `%W` | Representação numérica da semana do ano, começando pela primeira segunda-feira como primeira semana | `46` (como a 46ª semana do do ano iniciando na segunda-feira) |
    | *Mês* | --- | --- |
    | `%b` | Nome do mês abreviado, baseado no idioma | `jan` até `dez` |
    | `%B` | Nome completo do mês, baseado no idioma | `janeiro` até `dezembro` |
    | `%h` | Nome do mês abreviado, baseado no idioma (sinônimo de %b) | `jan` até `dez` |
    | `%m` | Representação com dois dígitos do mês | `01` (para janeiro) até `12` (para dezembro) |
    | *Ano* | --- | --- |
    | `%C` | Representação, com dois dígitos, do século (ano dividido por 100, truncado como inteiro) | `19` para o século 20 |
    | `%g` | Representação do ano, com dois dígitos, seguindo o padrão ISO-8601:1988 (veja %V) | Exemplo: `09` de 6 de janeiro de 2009 |
    | `%G` | Versão de 4 dígitos de %g | Exemplo: `2008` de 3 de janeiro de 2009 |
    | `%y` | Representação, com dois dígitos, do ano | Exemplo: `09` de 2009, `79` de 1979 |
    | `%Y` | Representação, com quatro dígitos, do ano | Exemplo: `2038` |
    | *Hora* | --- | --- |
    | `%H` | Representação, com dois dígitos, da hora no formato 24 horas | `00` até `23` |
    | `%k` | Representação da hora no formato 24 horas, com um espaço precedendo dígito único | `0` até `23` |
    | `%I` | Representação, com dois dígitos, da hora no formato 12 horas | `01` até `12` |
    | `%l ('L' minúsculo)` | Representação da hora no formato 12 horas, com um espaço precedendo dígito único | `1` até `12` |
    | `%M` | Representação, com dois dígitos, do minuto | `00` até `59` |
    | `%p` | 'AM' ou 'PM' maiúsculo baseado na hora informada | Exemplo: `AM` para 00:31, `PM` para 22:23. O resultado exato depende do sistema operacional, e pode retornar variantes em minúsculoas, ou variantes com pontos (como `a.m.`). |
    | `%P` | 'am' ou 'pm' maiúsculo baseado na hora informada | Exemplo: `am` para 00:31, `pm` para 22:23. Não suportado por todos os sistemas operacionais. |
    | `%r` | O mesmo que "%I:%M:%S %p" | Exemplo: `09:34:17 PM` de 21:34:17 |
    | `%R` | O mesmo que "%H:%M" | Exemplo: `00:35` de 12:35 AM, `16:44` de 4:44 PM |
    | `%S` | Representação, com dois dígitos, do segundo | `00` até `59` |
    | `%T` | O mesmo que "%H:%M:%S" | Exemplo: `21:34:17` para 09:34:17 PM |
    | `%X` | Representação escolhida baseada no idioma, sem a data | Exemplo: `03:59:16` ou `15:59:16` |
    | `%z` | O deslocamento do fuso horário. Não implementado como descrito no Windows. Veja mais informações a seguir. | Exemplo: `-0500` para hora à leste dos EUA |
    | `%Z` | A abreviação do fuso horário. Não implementado como descrito no Windows. Veja mais informações a seguir. | Exemplo: `EST` para Eastern Time |
    | *Carimbos de Data e Hora* | --- | --- |
    | `%c` | Carimbo escolhido de data e hora baseado no idioma | Exemplo: `Ter Fev 5 00:45:10 2009` de February 5, 2009 at 12:45:10 AM |
    | `%D` | O mesmo que "%m/%d/%y" | Exemplo: `02/05/09` de February 5, 2009 |
    | `%F` | O mesmo que "%Y-%m-%d" (geralmente utilizado em carimbos de data em bancos de dados) | Exemplo: `2009-02-05` de February 5, 2009 |
    | `%s` | Timestamp Unix(o mesmo que a função [time()](function.time.md) function) | Exemplo: `305815200` de September 10, 1979 08:40:00 AM |
    | `%x` | Representação da data baseada na preferência da localidade, sem a hora | Exemplo: `02/05/09` de February 5, 2009 |
    | *Miscelânea* | --- | --- |
    | `%n` | Uma nova linha ("\n") | --- |
    | `%t` | Um caractere TAB ("\t") | --- |
    | `%%` | Um caractere literal de porcento ("%") | --- |

    **Aviso**

    Contrário a ISO-9899:1999, o sistema Sun Solaris começa a semana no Domingo, como 1. Resultando
    em `%u` não funcionando como descrito neste
    manual.

    **Aviso**

    *Somente no Windows:*

    O modificador `%e` não possui suporte a implementação
    desta função no Windows. Para conseguir este valor, o
    modificador `%#d` pode ser utilizado em substituição. O exemplo a seguir
    ilustra como escrever uma função com compatibilidade multiplataforma.

    Os modificadores `%z` e `%Z`
    retornam o nome do fuso horário em vez do deslocamento ou abreviação do mesmo.

    **Aviso**

    *macOS e musl somente:* O modificador `%P`
    não é suportado na implementação macOS desta função.

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna uma string formatada de acordo com o `format`
informado em `timestamp` ou o horário local
atual se nenhum timestamp foi informado. Nomes de meses e dia da semana, e outras strings dependentes de linguagens
respeitam o idioma definido
com a função [setlocale()](function.setlocale.md).
A função retorna **`false`** se `format` for vazio, contém especificadores
de conversão não suportados, ou se o comprimento da string retornada fosse
maior que `4095`.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

Como a saída depende da biblioteca C disponível, alguns especificadores de
conversão não possuem suporte. No Windows, informar especificadores de
conversão desconhecidos resultará em mensagens **`E_WARNING`** e
retornará **`false`**. Em outros sistemas operacionais, pode não haver nenhuma
mensagem **`E_WARNING`** e a saída poderá conter os
especificadores de conversão não convertidos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

Este exemplo funciona se os respectivos idiomas estiverem instalados
no sistema.

**Exemplo #1 Exemplo da função **strftime()** com idiomas**

```
<?php
setlocale(LC_TIME, "C");
echo strftime("%A");
setlocale(LC_TIME, "fi_FI");
echo strftime(" em finlandês é %A,");
setlocale(LC_TIME, "fr_FR");
echo strftime(" em francês %A e");
setlocale(LC_TIME, "de_DE");
echo strftime(" em alemão %A.\n");
```

**Exemplo #2 Exemplo do número de semana ISO 8601:1988**

```
<?php
/*     Dezembro 2002 / Janeiro 2003
ISOWk  M   Tu  W   Thu F   Sa  Su
----- ----------------------------
51     16  17  18  19  20  21  22
52     23  24  25  26  27  28  29
1      30  31   1   2   3   4   5
2       6   7   8   9  10  11  12
3      13  14  15  16  17  18  19   */

// Mostra: 12/28/2002 - %V,%G,%Y = 52,2002,2002
echo "12/28/2002 - %V,%G,%Y = " . strftime("%V,%G,%Y", strtotime("12/28/2002")) . "\n";

// Mostra: 12/30/2002 - %V,%G,%Y = 1,2003,2002
echo "12/30/2002 - %V,%G,%Y = " . strftime("%V,%G,%Y", strtotime("12/30/2002")) . "\n";

// Mostra: 1/3/2003 - %V,%G,%Y = 1,2003,2003
echo "1/3/2003 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/3/2003")) . "\n";

// Mostra: 1/10/2003 - %V,%G,%Y = 2,2003,2003
echo "1/10/2003 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/10/2003")) . "\n";

/*     Dezembro 2004 / Janeiro 2005
ISOWk  M   Tu  W   Thu F   Sa  Su
----- ----------------------------
51     13  14  15  16  17  18  19
52     20  21  22  23  24  25  26
53     27  28  29  30  31   1   2
1       3   4   5   6   7   8   9
2      10  11  12  13  14  15  16   */

// Mostra: 12/23/2004 - %V,%G,%Y = 52,2004,2004
echo "12/23/2004 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("12/23/2004")) . "\n";

// Mostra: 12/31/2004 - %V,%G,%Y = 53,2004,2004
echo "12/31/2004 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("12/31/2004")) . "\n";

// Mostra: 1/2/2005 - %V,%G,%Y = 53,2004,2005
echo "1/2/2005 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/2/2005")) . "\n";

// Mostra: 1/3/2005 - %V,%G,%Y = 1,2005,2005
echo "1/3/2005 - %V,%G,%Y = " . strftime("%V,%G,%Y",strtotime("1/3/2005")) . "\n";
```

**Exemplo #3 Exemplo do uso do modificador `%e` compatível com múltiplas plataformas**

```
<?php

// Jan 1: resulta em: '%e%1%' (%%, e, %%, %e, %%)
$format = '%%e%%%e%%';

// Verifica se está no Windows e substitui o modificador %e
// adequadamente
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    $format = preg_replace('#(?<!%)((?:%%)*)%e#', '\1%#d', $format);
}

echo strftime($format);
```

**Exemplo #4 Mostra os formatos conhecidos e desconhecidos**

```
<?php

// Descreve os formatos
$strftimeFormats = array(
    'A' => 'A full textual representation of the day',
    'B' => 'Full month name, based on the locale',
    'C' => 'Two digit representation of the century (year divided by 100, truncated to an integer)',
    'D' => 'Same as "%m/%d/%y"',
    'E' => '',
    'F' => 'Same as "%Y-%m-%d"',
    'G' => 'The full four-digit version of %g',
    'H' => 'Two digit representation of the hour in 24-hour format',
    'I' => 'Two digit representation of the hour in 12-hour format',
    'J' => '',
    'K' => '',
    'L' => '',
    'M' => 'Two digit representation of the minute',
    'N' => '',
    'O' => '',
    'P' => 'lower-case "am" or "pm" based on the given time',
    'Q' => '',
    'R' => 'Same as "%H:%M"',
    'S' => 'Two digit representation of the second',
    'T' => 'Same as "%H:%M:%S"',
    'U' => 'Week number of the given year, starting with the first Sunday as the first week',
    'V' => 'ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week',
    'W' => 'A numeric representation of the week of the year, starting with the first Monday as the first week',
    'X' => 'Preferred time representation based on locale, without the date',
    'Y' => 'Four digit representation for the year',
    'Z' => 'The time zone offset/abbreviation option NOT given by %z (depends on operating system)',
    'a' => 'An abbreviated textual representation of the day',
    'b' => 'Abbreviated month name, based on the locale',
    'c' => 'Preferred date and time stamp based on local',
    'd' => 'Two-digit day of the month (with leading zeros)',
    'e' => 'Day of the month, with a space preceding single digits',
    'f' => '',
    'g' => 'Two digit representation of the year going by ISO-8601:1988 standards (see %V)',
    'h' => 'Abbreviated month name, based on the locale (an alias of %b)',
    'i' => '',
    'j' => 'Day of the year, 3 digits with leading zeros',
    'k' => 'Hour in 24-hour format, with a space preceding single digits',
    'l' => 'Hour in 12-hour format, with a space preceding single digits',
    'm' => 'Two digit representation of the month',
    'n' => 'A newline character ("\n")',
    'o' => '',
    'p' => 'UPPER-CASE "AM" or "PM" based on the given time',
    'q' => '',
    'r' => 'Same as "%I:%M:%S %p"',
    's' => 'Unix Epoch Time timestamp',
    't' => 'A Tab character ("\t")',
    'u' => 'ISO-8601 numeric representation of the day of the week',
    'v' => '',
    'w' => 'Numeric representation of the day of the week',
    'x' => 'Preferred date representation based on locale, without the time',
    'y' => 'Two digit representation of the year',
    'z' => 'Either the time zone offset from UTC or the abbreviation (depends on operating system)',
    '%' => 'A literal percentage character ("%")',
);

// Resultados
$strftimeValues = array();

// Avalia os formatos enqunto suprime os erros.
foreach ($strftimeFormats as $format => $description) {
    if (false !== ($value = @strftime("%{$format}"))) {
        $strftimeValues[$format] = $value;
    }
}

// Encontra o valor mais longo
$maxValueLength = 2 + max(array_map('strlen', $strftimeValues));

// Reporta formatos conhecidos
foreach ($strftimeValues as $format => $value) {
    echo "Formato conhecido    : '{$format}' = ", str_pad("'{$value}'", $maxValueLength), " ( {$strftimeFormats[$format]} )\n";
}

// Reporta formatos desconhecidos
foreach (array_diff_key($strftimeFormats, $strftimeValues) as $format => $description) {
    echo "Formato desconhecido : '{$format}'   ", str_pad(' ', $maxValueLength), ($description ? " ( {$description} )" : ''), "\n";
}
```

O exemplo acima produzirá
algo semelhante a:

```
Formato conhecido    : 'A' = 'Friday'            ( A full textual representation of the day )
Formato conhecido    : 'B' = 'December'          ( Full month name, based on the locale )
Formato conhecido    : 'H' = '11'                ( Two digit representation of the hour in 24-hour format )
Formato conhecido    : 'I' = '11'                ( Two digit representation of the hour in 12-hour format )
Formato conhecido    : 'M' = '24'                ( Two digit representation of the minute )
Formato conhecido    : 'S' = '44'                ( Two digit representation of the second )
Formato conhecido    : 'U' = '48'                ( Week number of the given year, starting with the first Sunday as the first week )
Formato conhecido    : 'W' = '48'                ( A numeric representation of the week of the year, starting with the first Monday as the first week )
Formato conhecido    : 'X' = '11:24:44'          ( Preferred time representation based on locale, without the date )
Formato conhecido    : 'Y' = '2010'              ( Four digit representation for the year )
Formato conhecido    : 'Z' = 'GMT Standard Time' ( The time zone offset/abbreviation option NOT given by %z (depends on operating system) )
Formato conhecido    : 'a' = 'Fri'               ( An abbreviated textual representation of the day )
Formato conhecido    : 'b' = 'Dec'               ( Abbreviated month name, based on the locale )
Formato conhecido    : 'c' = '12/03/10 11:24:44' ( Preferred date and time stamp based on local )
Formato conhecido    : 'd' = '03'                ( Two-digit day of the month (with leading zeros) )
Formato conhecido    : 'j' = '337'               ( Day of the year, 3 digits with leading zeros )
Formato conhecido    : 'm' = '12'                ( Two digit representation of the month )
Formato conhecido    : 'p' = 'AM'                ( UPPER-CASE "AM" or "PM" based on the given time )
Formato conhecido    : 'w' = '5'                 ( Numeric representation of the day of the week )
Formato conhecido    : 'x' = '12/03/10'          ( Preferred date representation based on locale, without the time )
Formato conhecido    : 'y' = '10'                ( Two digit representation of the year )
Formato conhecido    : 'z' = 'GMT Standard Time' ( Either the time zone offset from UTC or the abbreviation (depends on operating system) )
Formato conhecido    : '%' = '%'                 ( A literal percentage character ("%") )
Formato desconhecido : 'C'                       ( Two digit representation of the century (year divided by 100, truncated to an integer) )
Formato desconhecido : 'D'                       ( Same as "%m/%d/%y" )
Formato desconhecido : 'E'
Formato desconhecido : 'F'                       ( Same as "%Y-%m-%d" )
Formato desconhecido : 'G'                       ( The full four-digit version of %g )
Formato desconhecido : 'J'
Formato desconhecido : 'K'
Formato desconhecido : 'L'
Formato desconhecido : 'N'
Formato desconhecido : 'O'
Formato desconhecido : 'P'                       ( lower-case "am" or "pm" based on the given time )
Formato desconhecido : 'Q'
Formato desconhecido : 'R'                       ( Same as "%H:%M" )
Formato desconhecido : 'T'                       ( Same as "%H:%M:%S" )
Formato desconhecido : 'V'                       ( ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week )
Formato desconhecido : 'e'                       ( Day of the month, with a space preceding single digits )
Formato desconhecido : 'f'
Formato desconhecido : 'g'                       ( Two digit representation of the year going by ISO-8601:1988 standards (see %V) )
Formato desconhecido : 'h'                       ( Abbreviated month name, based on the locale (an alias of %b) )
Formato desconhecido : 'i'
Formato desconhecido : 'k'                       ( Hour in 24-hour format, with a space preceding single digits )
Formato desconhecido : 'l'                       ( Hour in 12-hour format, with a space preceding single digits )
Formato desconhecido : 'n'                       ( A newline character ("\n") )
Formato desconhecido : 'o'
Formato desconhecido : 'q'
Formato desconhecido : 'r'                       ( Same as "%I:%M:%S %p" )
Formato desconhecido : 's'                       ( Unix Epoch Time timestamp )
Formato desconhecido : 't'                       ( A Tab character ("\t") )
Formato desconhecido : 'u'                       ( ISO-8601 numeric representation of the day of the week )
Formato desconhecido : 'v'
```

### Notas

> **Nota**:
>
> %G e %V, que são baseadas nos números de semana da ISO 8601:1988,
> podem dar resultados inesperados (embora corretos), se o sistema numérico
> não for reconhecido perfeitamente. Veja exemplos da %V nesta página do manual.

### Veja também

- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [» Ferramenta online para criação de formatos compatíveis com o strftime()](https://strftime.net/)
- [setlocale()](function.setlocale.md) - Define informação de localidade
- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [strptime()](function.strptime.md) - Interpreta uma data/horário gerada pela função strftime
- [gmstrftime()](function.gmstrftime.md) - Formata uma data/horário GMT/UTC de acordo com as configurações de localidade
- [» Especificação Open Group da **strftime()**](https://www.opengroup.org/onlinepubs/007908799/xsh/strftime.html)

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
