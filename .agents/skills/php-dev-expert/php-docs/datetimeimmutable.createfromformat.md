# Interpreta um string de data/horário de acordo com o formato especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.createfromformat.php

---

# DateTimeImmutable::createFromFormat

# date\_create\_immutable\_from\_format

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::createFromFormat -- date\_create\_immutable\_from\_format — Interpreta um string de data/horário de acordo com o formato especificado

### Descrição

Estilo orientado a objetos

public static function **DateTimeImmutable::createFromFormat**([string](language.types.string.md) `$format`, [string](language.types.string.md) `$datetime`, [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md)

Estilo procedural

function [date\_create\_immutable\_from\_format](function.date-create-immutable-from-format.md)([string](language.types.string.md) `$format`, [string](language.types.string.md) `$datetime`, [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md)

Retorna um novo objeto DateTimeImmutable representando a data e o horário especificados pelo
string `datetime`, formatado pelo parâmetro
`format`.

### Parâmetros

`format`
:   O formato no qual a [string](language.types.string.md) passada deve estar. Veja as
    opções de formatação abaixo. Na maioria dos casos, as mesmas letras da
    função [date()](function.date.md) podem ser usadas.

    Todos os campos são inicializados com a data/horário atual. Na maioria das vezes,
    a intenção pode ser "zerá-los" (época Unix, `1970-01-01
    00:00:00 UTC`). Isto pode ser feito incluindo o
    caractere `!` como o primeiro no
    parâmetro `format`, ou `|` como o último.
    Favor verificar a documentação para cada caractere abaixo para mais
    informação.

    O formato é analisado da esquerda para a direita, o que significa que em algumas
    situações a ordem na qual os caracteres de formato estão presents afeta
    o resultado. No caso de `z` (o dia do ano),
    é necessário que um ano já tenha sido analisado,
    por exemplo através dos caracteres `Y` ou
    `y`.

    Letras que são usadas para representar números permitem uma ampla gama de valores,
    fora do que seria a faixa lógica. Por exemplo, a letra
    `d` (dia do mês) aceita valores na faixa de
    `00` a `99`. A única restrição é
    o número de dígitos. O mecanismo de overflow do analisador é
    usado quando valores fora da faixa são especificados. Os exemplos abaixo mostram alguns
    destes comportamentos.

    Isto também significa que os dados analisados para um caractere de formatação são ambiciosos, e
    irão ler até a quantidade de dígitos que o formato permite. Isto pode
    também então significar que não há mais
    caracteres suficientes na string do parâmetro `datetime`
    para os caracteres de formato seguintes. Um exemplo nesta página também
    ilustra este problema.

    **Os seguintes caracteres são reconhecidos na
    string do parâmetros `format`**

    | Caractere de `format` | Descrição | Exemplo de valores analisáveis |
    | --- | --- | --- |
    | *Dia* | --- | --- |
    | `d` e `j` | Dia do mês, 2 dígitos com ou sem zeros na frente | `01` a `31` ou `1` a `31`. (números de 2 dígitos maiores queo número de dias no mês são aceitos, e neste caso irão causar uma transferência no mês. Por exemplo, usar 33 com janeiro, significa 2 de fevereiro) |
    | `D` e `l` | Uma representação textual de um dia | `Mon` a `Sun` ou `Sunday` a `Saturday`. Se o nome do dia informado for diferente do nome do dia pertencente a uma data analisada (ou data padrão), então uma transferência ocorre para a *próxima* data com o nome do dia informado. Veja os exemplos abaixo para uma explicação. |
    | `S` | Sufixo em inglês para o ordinal do dia do mês, 2 caracteres. É ignorado durante o processamento. | `st`, `nd`, `rd` ou `th`. |
    | `z` | O dia do ano (iniciando em 0); deve ser precedido de `Y` ou `y`. | `0` a `365`. (números de 3 dígitos maiores que o número de dias em um ano são aceitos, e neste caso case irão causar uma transferência de ano. Por exemplo, usar 366 com 2022, significa 2 de janeiro de 2023) |
    | *Mês* | --- | --- |
    | `F` e `M` | Uma representação textual do mês, como January ou Sept | `January` a `December` ou `Jan` a `Dec` |
    | `m` e `n` | Representação numérica de um mês, com ou sem zeros na frente | `01` a `12` ou `1` a `12`. (números de 2 dígitos maiores que 12 são aceitos, e neste caso eles irão causar uma transferência de ano. Por exemplo, usar 13 significa janeiro do ano seguinte) |
    | *Ano* | --- | --- |
    | `X` e `x` | Uma representação numérica completa de um ano, *com até* 19 dígitos, opcionalmente prefixada por `+` ou `-` | Exemplos: `0055`, `787`, `1999`, `-2003`, `+10191` |
    | `Y` | Uma representação numérica completa de um ano, *com até* 4 dígitos | Exemplos: `25` (o mesmo que `0025`), `787`, `1999`, `2003` |
    | `y` | Uma representação de dois dígitos de um ano (que assume-se estar na faixa 1970-2069, inclusive) | Exemplos: `99` ou `03` (que será interpretado como `1999` e `2003`, respectivamente) |
    | *Horário* | --- | --- |
    | `a` e `A` | Ante meridiem e Post meridiem | `am` ou `pm` |
    | `g` e `h` | Formato de 12 horas para uma hora com ou sem zeros na frente | `1` a `12` ou `01` a `12` (números de 2 dígitos maiores que 12 são aceitos, e neste caso eles irão causar uma transferência de período AM/PM. Por exemplo, usar `14` significa `02` no próximo período AM/PM) |
    | `G` e `H` | Formato de 24 horas para uma hora com ou sem zeros na frente | `0` a `23` ou `00` a `23` (números de 2 dígitos maiores que 24 são aceitos, e neste caso eles irão causar uma transferência de dia. Por exemplo, usar `26` significa `02:00` do dia seguinte) |
    | `i` | Minutos com zero na frente | `00` a `59`. (números de 2 dígitos maiores que 59 são aceitos, e neste caso irão causar uma transferência de hora. Por exemplo, usar `66` significa `:06` da hora seguinte) |
    | `s` | Segundos, com zero na frente | `00` a `59` (números de 2 dígitos maiores que 59 são aceitos, e neste caso irão causar uma transferência de minuto. Por exemplo, usar `90` significa `:30` do próximo minuto) |
    | `v` | Fração em milissegundos (até três dígitos) | Exemplo: `12` (`0.12` segundo), `345` (`0.345` segundo) |
    | `u` | Fração em microssegundos (até seis dígitos) | Exemplo: `45` (`0.45` segundo) `654321` (`0.654321` segundo) |
    | *Fuso horário* | --- | --- |
    | `e`, `O`, `p`, `P` e `T` | Identificador do fuso horário, ou a diferença para UTC em horas, ou a diferença para UTC com dois pontos entre horas e minutos, ou abreviação do fuso horário | Exemplos: `UTC`, `GMT`, `Atlantic/Azores` ou `+0200` ou `+02:00` ou `EST`, `MDT` |
    | *Data/Horário completos* | --- | --- |
    | `U` | Segundos desde a Época Unix (1 janeiro 1970 00:00:00 GMT) | Exemplo: `1292177455` |
    | *Espaços em branco e separadores* | --- | --- |
    | (espaço) | Zero ou mais espaços, tabulações, caracteres NBSP (U+A0), ou NNBSP (U+202F) | Exemplo: `"\t"`, `" "` |
    | `#` | Um dos símbolos de separação: `;`, `:`, `/`, `.`, `,`, `-`, `(` ou `)` | Exemplo: `/` |
    | `;`, `:`, `/`, `.`, `,`, `-`, `(` ou `)` | O caractere especificado. | Exemplo: `-` |
    | `?` | Um byte aleatório | Exemplo: `^` (Esteja ciente que para caracteres UTF-8 pode ser necessário mais de um `?`. Neste caso, usar `*` pode ser o o mais adequado na verdade) |
    | `*` | Bytes aleatórios até o próximo separador ou dígito | Exemplo: `*` em `Y-*-d` com o string `2009-aWord-08` será equivalente a `aWord` |
    | `!` | Reconfigura todos os campos (ano, mês, dia, hora, minuto, segundo, fração e informação de fuso horário) com valores tipo zero ( `0` para hora, minuto, segundo e fração, `1` para mês e dia, `1970` para ano e o fuso horário padrão) | Sem `!,` todos os campos serão configurados com a data/horário atual. |
    | `|` | Reconfigura todos os campos (ano, mês, dia, hora, minuto, segundo, fração e informação de fuso horário) com valores tipo zero se eles ainda não foram analisados | `Y-m-d|` irá configurar o ano, mês e dia para as informações encontradas na string a ser analisada, e configura a hora, minuto e segundo para 0. |
    | `+` | Se esta especificação de formato estiver presente, dados no final da string não irão causar um erro, mas sim um aviso | Use [DateTimeImmutable::getLastErrors()](datetimeimmutable.getlasterrors.md) para descobrir se dados no final da string estavam presentes. |

    Caracteres não reconhecidos na string de formatação irão causar
    falha na análise e uma mensagem de erro será anexada na estrutura
    retornada. É possível recuperar a mensagem de erro com
    [DateTimeImmutable::getLastErrors()](datetimeimmutable.getlasterrors.md).

    Para incluir caracteres literais no parâmetro `format`, deve-se
    usar a barra invertida (`\`) antes deles.

    Se `format` não contiver o caractere
    `!` então partes da data/horário gerada que não foram
    especificadas em `format` serão configuradas para a
    data/horário atual do sistema.

    Se `format` contiver o
    caractere `!`, então partes da data/horário
    gerada não especificada em `format`, assim como
    valores à esquerda de `!`, serão
    configuradas aos valores correspondentes da época Unix.

    Se algum caractere de horário for analisado, então todos os outros campos relacionados a horário são
    configurados para "0", a menos que também tenham sido analisados.

    A Época Unix é 1970-01-01 00:00:00 UTC.

`datetime`
:   String representando a data/horário.

`timezone`
:   Um objeto [DateTimeZone](class.datetimezone.md) representando o
    fuso horário desejado.

    Se `timezone` for **`null`** ou omitido e
    `datetime` não contém o fuso horário,
    o fuso atual será usado.

    > **Nota**:
    >
    > O parâmetro `timezone`
    > e o fuso horário atual são ignorados quando o parâmetro
    > `datetime` contém
    > um timestamp UNIX (ex.: `946684800`)
    > ou especifica um fuso horário
    > (ex.: `2010-01-28T15:00:00+02:00`).

### Valor Retornado

Retorna uma nova instância de DateTimeImmutable ou **`false`** em caso de falha.

### Erros/Exceções

Este método lança uma exceção [ValueError](class.valueerror.md) quando o
parâmetro `datetime` contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.9 | O especificador  (space) agora também suporta caracteres NBSP (U+A0) e NNBSP (U+202F). |
| 8.2.0 | Os especificadores `X` e `x` de `format` foram adicionados. |
| 8.0.21, 8.1.8, 8.2.0 | Agora lança a exceção [ValueError](class.valueerror.md) quando bytes nulos são passados no parâmetro `datetime`, o que antes era silenciosamente ignorado. |
| 7.3.0 | O especificador `v` em `format` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **DateTimeImmutable::createFromFormat()****

Estilo orientado a objetos

```
<?php
$date = DateTimeImmutable::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('Y-m-d');
```

**Exemplo #2 Usando constantes predefinidas de formato com **DateTimeImmutable::createFromFormat()****

Estilo orientado a objetos

```
<?php
$date = DateTimeImmutable::createFromFormat(
    DateTimeInterface::ISO8601,
    '2004-02-12T15:19:21+00:00'
);
echo $date->format('c e') . "\n";

$date = DateTimeImmutable::createFromFormat(
    DateTimeInterface::RFC3339_EXTENDED,
    '2013-10-14T09:00:00.000+02:00'
);
echo $date->format('c e') . "\n";
```

As [constantes de formatação](class.datetimeinterface.md#datetimeinterface.constants.types)
como usadas neste exemplo consistem de
uma string de caracteres para [formatar](datetime.format.md) um
objeto [DateTimeImmutable](class.datetimeimmutable.md). Na maioria dos casos, estas
letras são equivalentes aos elementos de data/horário definidos na seção parameters
acima, mas elas tendem a ser mais lenientes.

**Exemplo #3 Complexidades de **DateTimeImmutable::createFromFormat()****

```
<?php
echo 'Horário atual: ' . date('Y-m-d H:i:s') . "\n";

$format = 'Y-m-d';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15');
echo "Formato: $format; " . $date->format('Y-m-d H:i:s') . "\n";

$format = 'Y-m-d H:i:s';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
echo "Formato: $format; " . $date->format('Y-m-d H:i:s') . "\n";

$format = 'Y-m-!d H:i:s';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
echo "Formato: $format; " . $date->format('Y-m-d H:i:s') . "\n";

$format = '!d';
$date = DateTimeImmutable::createFromFormat($format, '15');
echo "Formato: $format; " . $date->format('Y-m-d H:i:s') . "\n";

$format = 'i';
$date = DateTimeImmutable::createFromFormat($format, '15');
echo "Formato: $format; " . $date->format('Y-m-d H:i:s') . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
Horário atual: 2022-06-02 15:50:46
Formato: Y-m-d; 2009-02-15 15:50:46
Formato: Y-m-d H:i:s; 2009-02-15 15:16:17
Formato: Y-m-!d H:i:s; 1970-01-15 15:16:17
Formato: !d; 1970-01-15 00:00:00
Formato: i; 2022-06-02 00:15:00
```

**Exemplo #4 String de formatação com caracteres literais**

```
<?php
echo DateTimeImmutable::createFromFormat('H\h i\m s\s','23h 15m 03s')->format('H:i:s');
```

O exemplo acima produzirá
algo semelhante a:

```
23:15:03
```

**Exemplo #5 Comportamento de transferência**

```
<?php
echo DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97')->format(DateTimeImmutable::RFC2822);
```

O exemplo acima produzirá
algo semelhante a:

```
Sat, 04 Jun 2022 17:01:37 +0000
```

Embora o resultado pareça estranho, ele está correto, já que as transferências abaixo
ocorrem:

1. `97` segundos transferem para `1` minuto,
   sobrando `37` segundos.
2. `61` minutos transferem para `1` hora,
   sobrando `1` minuto.
3. `35` dias transferem para `1` mês,
   sobrando `4` dias. A quantidade de dias que sobram
   depende do mês, já que nem todo mês tem o mesmo número de dias.
4. `18` meses transferem para `1` ano,
   sobrando `6` meses.

**Exemplo #6 Comportamento de transferência do nome do dia**

```
<?php
$d = DateTime::createFromFormat(DateTimeInterface::RFC1123, 'Mon, 3 Aug 2020 25:00:00 +0000');
echo $d->format(DateTime::RFC1123), "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
Mon, 10 Aug 2020 01:00:00 +0000
```

Embora o resultado pareça estranho, ele está correto, já que as transferências abaixo
ocorrem:

1. `3 Aug 2020 25:00:00` transfere para `(Tue) 4 Aug
   2020 01:00`.
2. `Mon` é aplicado, o que avança a data para
   `Mon, 10 Aug 2020 01:00:00`. A explicação para
   as palavras-chaves relativas como `Mon` está disponível na
   seção sobre [formatos
   relativos](datetime.formats.md#datetime.formats.relative).

Para detectar transferências em datas/horas, pode-se usar
o método [DateTimeImmutable::getLastErrors()](datetimeimmutable.getlasterrors.md), que irá
incluir um aviso se uma transferência tiver ocorrido.

**Exemplo #7 Detectando transferência de datas/horas**

```
<?php
$d = DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2021-17-35 16:60:97');
echo $d->format(DateTimeImmutable::RFC2822), "\n\n";

var_dump(DateTimeImmutable::getLastErrors());
```

O exemplo acima produzirá
algo semelhante a:

```
Sat, 04 Jun 2022 17:01:37 +0000

array(4) {
  'warning_count' =>
  int(2)
  'warnings' =>
  array(1) {
    [19] =>
    string(27) "The parsed date was invalid"
  }
  'error_count' =>
  int(0)
  'errors' =>
  array(0) {
  }
}
```

**Exemplo #8 Comportamento de análise ambicioso**

```
<?php
print_r(date_parse_from_format('Gis', '60101'));
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [year] =>
    [month] =>
    [day] =>
    [hour] => 60
    [minute] => 10
    [second] => 0
    [fraction] => 0
    [warning_count] => 1
    [warnings] => Array
        (
            [5] => The parsed time was invalid
        )

    [error_count] => 1
    [errors] => Array
        (
            [4] => A two digit second could not be found
        )

    [is_localtime] =>
)
```

O formato `G` analisa horas no formato de 24 horas, com ou
sem zeros na frente. Isto requer analisar 1 ou 2 dígitos. Como há
dois dígitos disponíveis, o analisador ambiciosamente lê o valor como `60`.

Os caracteres seguintes `i` e `s`
ambos requerem dois dígitos. Isto significa que `10`
é passado como minutos (`i`), e que não há então
dígitos suficientes restantes para serem analisados como segundos (`s`).

O array `errors` indica este problema.

Adicionalmente, um valor de hora de `60` está fora da faixa
`0`-`24`, o que faz com que o array de
`warnings` inclua um aviso de que o horário é
inválido.

### Veja também

- [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md) - Retorna um novo objeto DateTimeImmutable
- [DateTimeImmutable::getLastErrors()](datetimeimmutable.getlasterrors.md) - Retorna os avisos e erros
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana
- [strptime()](function.strptime.md) - Interpreta uma data/horário gerada pela função strftime

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
