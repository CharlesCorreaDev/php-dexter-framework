# Retorna um novo objeto DateTimeImmutable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.construct.php

---

# DateTimeImmutable::\_\_construct

# date\_create\_immutable

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::\_\_construct -- date\_create\_immutable — Retorna um novo objeto DateTimeImmutable

### Descrição

Estilo orientado a objetos

public function **DateTimeImmutable::\_\_construct**([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**)

Estilo procedural

function [date\_create\_immutable](function.date-create-immutable.md)([string](language.types.string.md) `$datetime` = "now", [?](language.types.null.md)[DateTimeZone](class.datetimezone.md) `$timezone` = **`null`**): [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md)

Retorna um novo objeto DateTimeImmutable.

### Parâmetros

`datetime`
:   Uma string de data/hora. Os formatos válidos são explicados em [Formatos de Data e Hora](datetime.formats.md).

    Utilize `"now"` para obter o horário atual quando usar
    o parâmetro`timezone`.

`timezone`
:   Um objeto [DateTimeZone](class.datetimezone.md) representando o
    fuso horário do parâmetro `datetime`.

    Se `timezone` for **`null`** ou omitido,
    o fuso horário atual será utilizado.

    > **Nota**:
    >
    > O parâmetro `timezone`
    > e o fuso horário atual são ignorados quando o
    > parâmetro `datetime` for
    > um timestamp UNIX (ex.: `@946684800`)
    > ou especificar um fuso horário
    > (ex.: `2010-01-28T15:00:00+02:00` ou
    > `2010-07-05T06:00:00Z`).

### Valor Retornado

Retorna uma nova instância de DateTimeImmutable.

### Erros/Exceções

Se um string inválido de data/horário for passado,
uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) é disparada.
Antes do PHP 8.3, era [Exception](class.exception.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora dispara [DateMalformedStringException](class.datemalformedstringexception.md) se uma string inválida for passada, em vez de [Exception](class.exception.md). |
| 7.1.0 | De agora em diante os microssegundos são preenchidos com o valor real. Não mais com '00000'. |

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::\_\_construct()****

Estilo orientado a objetos

```
<?php
try {
    $date = new DateTimeImmutable('2000-01-01');
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}

echo $date->format('Y-m-d');
```

O exemplo acima produzirá:

```
2000-01-01
```

Estilo procedural

```
<?php
$date = date_create('2000-01-01');
if (!$date) {
    $e = date_get_last_errors();
    foreach ($e['errors'] as $error) {
        echo "$error\n";
    }
    exit(1);
}

echo date_format($date, 'Y-m-d');
```

O exemplo acima produzirá:

```
2000-01-01
```

**Exemplo #2 Complexidades de **DateTimeImmutable::\_\_construct()****

```
<?php
date_default_timezone_set('America/Jamaica');

// Data/horário especificados no fuso horário padrão do PHP.
$date = new DateTimeImmutable('2000-01-01');
echo $date->format('Y-m-d H:i:sP') . "\n";

// Data/horário especificados no fuso horário informado.
$date = new DateTimeImmutable('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";

// Data/horário atual no fuso horário padrão do PHP.
$date = new DateTimeImmutable();
echo $date->format('Y-m-d H:i:sP') . "\n";

// Data/horário atual no fuso horário informado.
$date = new DateTimeImmutable('now', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";

// Usando um timestamp UNIX. Note que o resultado é no fuso horário UTC.
$date = new DateTimeImmutable('@946684800');
echo $date->format('Y-m-d H:i:sP') . "\n";

// Valores não existentes são transferidos.
$date = new DateTimeImmutable('2000-02-30');
echo $date->format('Y-m-d H:i:sP') . "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
2000-01-01 00:00:00-05:00
2000-01-01 00:00:00+12:00
2010-04-24 10:24:16-04:00
2010-04-25 02:24:16+12:00
2000-01-01 00:00:00+00:00
2000-03-01 00:00:00-05:00
```

> **Nota**:
>
> Datas transferidas podem ser detectadas através da verificação de avisos usando
> [DateTimeImmutable::getLastErrors()](datetimeimmutable.getlasterrors.md).

**Exemplo #3 Mudando o fuso horário associado**

```
<?php
$timeZone = new \DateTimeZone('Asia/Tokyo');

$time = new \DateTimeImmutable();
$time = $time->setTimezone($timeZone);

echo $time->format('Y/m/d H:i:s e'), "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
2022/08/12 23:49:23 Asia/Tokyo
```

**Exemplo #4 Usando uma string relativo de data/horário**

```
<?php
$time = new \DateTimeImmutable("-1 year");

echo $time->format('Y/m/d H:i:s'), "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
2021/08/12 15:43:51
```

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
