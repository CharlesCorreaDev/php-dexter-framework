# Retorna a data formatada de acordo com um formato informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.format.php

---

# DateTimeInterface::format

# DateTimeImmutable::format

# DateTime::format

# date\_format

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeInterface::format -- DateTimeImmutable::format -- DateTime::format -- date\_format — Retorna a data formatada de acordo com um formato informado

### Descrição

Estilo orientado a objetos

public function **DateTimeInterface::format**([string](language.types.string.md) `$format`): [string](language.types.string.md)

public function **DateTimeImmutable::format**([string](language.types.string.md) `$format`): [string](language.types.string.md)

public function **DateTime::format**([string](language.types.string.md) `$format`): [string](language.types.string.md)

Estilo procedural

function [date\_format](function.date-format.md)([DateTimeInterface](class.datetimeinterface.md) `$object`, [string](language.types.string.md) `$format`): [string](language.types.string.md)

Retorna a data formatada de acordo com um formato informado.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTime](class.datetime.md)
    retornado por [date\_create()](function.date-create.md)

`format`
:   O formato da [string](language.types.string.md) de data resultante. Veja abaixo as
    opções de formatação. Existem também várias
    [constantes de data predefinidas](class.datetimeinterface.md#datetimeinterface.constants.types)
    que podem ser usadas, por exemplo, **`DATE_RSS`**
    contém a string de formatação `'D, d M Y H:i:s'`.

    **Os seguintes caracteres são reconhecidos na
    string do parâmetro `format`**

    | Caractere em `format` | Descrição | Exemplo de valores retornados |
    | --- | --- | --- |
    | *Dia* | --- | --- |
    | `d` | Dia do mês, 2 digits com zeros à esquerda | `01` a `31` |
    | `D` | Uma representação textual de um dia, três letras | `Mon` a `Sun` |
    | `j` | Dia do mês sem zeros à esquerda | `1` a `31` |
    | `l` (lowercase 'L') | Uma representação textual completa do dia da semana | `Sunday` a `Saturday` |
    | `N` | Representação numérica ISO 8601 do dia da semana | `1` (para segunda-feira) a `7` (para domingo) |
    | `S` | Sufixo ordinal inglês para o dia do mês, 2 caracteres | `st`, `nd`, `rd` ou `th`. Funciona bem com `j` |
    | `w` | Representação numérica do dia da semana | `0` (para domingo) a `6` (para sábado) |
    | `z` | O dia do ano (começando em 0) | `0` a `365` |
    | *Semana* | --- | --- |
    | `W` | Número da semana do mês ISO 8601, semanas começando na segunda-feira | Exemplo: `42` (a 42ª semana no ano) |
    | *Mês* | --- | --- |
    | `F` | Uma representação textual completa do mês, como January ou March | `January` a `December` |
    | `m` | Representação numérica de um mês, com zeros à esquerda | `01` a `12` |
    | `M` | Uma representação textual curta de um mês, três letras | `Jan` a `Dec` |
    | `n` | Representação numérica de um mês, sem zeros à esquerda | `1` a `12` |
    | `t` | Número de dias em determinado mês | `28` a `31` |
    | *Ano* | --- | --- |
    | `L` | Se é um ano bissexto | `1` se for um ano bissexto, `0` caso contrário. |
    | `o` | Ano de numeração da semana ISO 8601. Tem o mesmo valor que `Y`, exceto que se o número da semana ISO (`W`) pertencer ao ano anterior ou seguinte, esse ano será usado. | Exemplos: `1999` ou `2003` |
    | `X` | Uma representação numérica completa expandida de um ano, pelo menos 4 dígitos, com `-` para anos AEC, e `+` para anos EC. | Exemplos: `-0055`, `+0787`, `+1999`, `+10191` |
    | `x` | Uma representação numérica completa expandida se necessário, ou uma representação numérica completa padrão se possível (como `Y`). Pelo menos quatro dígitos. Anos AEC são prefixados com um `-`. Anos além de (e incluindo) `10000` são prefixados com um `+`. | Exemplos: `-0055`, `0787`, `1999`, `+10191` |
    | `Y` | Uma representação numérica completa de um ano, pelo menos 4 dígitos, com `-` para anos AEC. | Exemplos: `-0055`, `0787`, `1999`, `2003`, `10191` |
    | `y` | Uma representação de dois digitos do ano | Exemplos: `99` ou `03` |
    | *Hora* | --- | --- |
    | `a` | Ante meridiem e Post meridiem em letras minúsculas | `am` ou `pm` |
    | `A` | Ante meridiem e Post meridiem em letras maiúsculas | `AM` ou `PM` |
    | `B` | Internet Time da Swatch | `000` a `999` |
    | `g` | Formato de 12 horas de uma hora sem zeros à esquerda | `1` a `12` |
    | `G` | Formato de 24 horas de uma hora sem zeros à esquerda | `0` a `23` |
    | `h` | Formato de 12 horas de uma hora com zeros à esquerda | `01` a `12` |
    | `H` | Formato de 24 horas de uma hora com zeros à esquerda | `00` a `23` |
    | `i` | Minutos com zeros à esquerda | `00` to `59` |
    | `s` | Segundos com zeros à esquerda | `00` a `59` |
    | `u` | Microssegundos. Note que [date()](function.date.md) sempre irá gerar `000000` uma vez que leva um parâmetro [int](language.types.integer.md), enquanto **DateTimeInterface::format()** suporta microssegundos se um objeto do tipo [DateTimeInterface](class.datetimeinterface.md) foi criado com microssegundos. | Exemplo: `654321` |
    | `v` | Milissegundos. A mesma nota se aplica como no `u`. | Exemplo: `654` |
    | *Fuso horário* | --- | --- |
    | `e` | Identificador do fuso horário | Exemplos: `UTC`, `GMT`, `Atlantic/Azores` |
    | `I` (i maiúsculo) | Se a data está ou não no horário de verão | `1` se está no horário de verão, `0` caso contrário. |
    | `O` | Diferença para o horário de Greenwich (GMT) sem dois pontos entre horas e minutos | Example: `+0200` |
    | `P` | Diferença para o horário de Greenwich (GMT) com dois pontos entre horas e minutos | Exemplo: `+02:00` |
    | `p` | O mesmo que `P`, mas retorna `Z` em vez de `+00:00` (disponível a partir do PHP 8.0.0) | Exemplo: `Z` ou `+02:00` |
    | `T` | Abreviação do fuso horário, se conhecido; ou o deslocamento GMT caso contrário. | Exemplos: `EST`, `MDT`, `+05` |
    | `Z` | Deslocamento do fuso horário em segundos. O deslocamento para fusos a oeste de UTC é sempre negativo, e para aqueles a leste de UTC é sempre positivo. | `-43200` a `50400` |
    | *Data/Horário completos* | --- | --- |
    | `c` | Data ISO 8601. Compatível somente com o formato não expandido (até o ano 9999). Datas posteriores resultarão em string inválida. Para datas posteriores e formato expandido, consulte `x` e `X`. | 2004-02-12T15:19:21+00:00 |
    | `r` | Data formatada [» RFC 2822](https://datatracker.ietf.org/doc/html/rfc2822)/[» RFC 5322](https://datatracker.ietf.org/doc/html/rfc5322) | Exemplo: `Thu, 21 Dec 2000 16:01:07 +0200` |
    | `U` | Segundos desde a Época Unix (1 de janeiro de 1970 00:00:00 GMT) | Veja também [time()](function.time.md) |

    Caracteres não reconhecidos na string de formatação serão impressos
    como estão. O formato `Z` sempre retornará
    `0` ao usar [gmdate()](function.gmdate.md).

    > **Nota**:
    >
    > Uma vez que esta função só aceita timestamps [int](language.types.integer.md), o caractere de formato
    > `u` só é útil ao usar a função
    > [date\_format()](function.date-format.md) com timestamps baseados no usuário
    > criados com [date\_create()](function.date-create.md).

### Valor Retornado

Retorna a data formatada em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Os caracteres de formatação `X` e `x` foram adicionados. |
| 8.0.0 | O caractere de formatação `p` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **DateTimeInterface::format()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2000-01-01');
echo $date->format('Y-m-d H:i:s');
?>
```

O exemplo acima produzirá:

```
2000-01-01 00:00:00
```

Estilo procedural

```
<?php
$date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');
?>
```

O exemplo acima produzirá:

```
2000-01-01 00:00:00
```

**Exemplo #2 Mais exemplos**

```
<?php
// define o fuso horário padrão a ser usado.
date_default_timezone_set('UTC');

// agora
$date = new DateTimeImmutable();

// Imprime algo como: Wednesday
echo $date->format('l'), "\n";

// Imprime algo como: Wednesday 19th of October 2022 08:40:48 AM
echo $date->format('l jS \o\f F Y h:i:s A'), "\n";

/* usa as constantes no parâmetro format */
// Imprime algo como: Wed, 19 Oct 2022 08:40:48 +0000
echo $date->format(DateTimeInterface::RFC2822), "\n";
?>
```

Pode-se evitar que um caractere reconhecido na string de formação seja
expandido escapando-o com uma barra invertida antes. Se o caractere com
uma barra invertida já for uma sequência especial, pode-se escapar também
a barra invertida.

**Exemplo #3 Escapando caracteres ao formatar**

```
<?php
$date = new DateTimeImmutable();

// exibe algo como: Wednesday the 19th
echo $date->format('l \t\h\e jS');
?>
```

Para formatar datas em outras línguas,
[IntlDateFormatter::format()](intldateformatter.format.md)
pode ser usado em vez do **DateTimeInterface::format()**.

### Notas

Este método não utiliza configurações baseadas no idioma. Toda a saída será em Inglês.

### Veja também

- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string

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
