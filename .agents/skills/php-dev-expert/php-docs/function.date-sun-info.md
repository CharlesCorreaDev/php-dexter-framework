# Retorna um array com informações sobre pôr/nascer do sol e o início/fim do dia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-sun-info.php

---

# date\_sun\_info

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

date\_sun\_info — Retorna um array com informações sobre pôr/nascer do sol e o início/fim do dia

### Descrição

function **date\_sun\_info**([int](language.types.integer.md) `$timestamp`, [float](language.types.float.md) `$latitude`, [float](language.types.float.md) `$longitude`): [array](language.types.array.md)

### Parâmetros

`timestamp`
:   Timestamp Unix.

`latitude`
:   Latitude em graus.

`longitude`
:   Longitude em graus.

### Valor Retornado

Retorna um cuja estrutura é detalhada na lista abaixo:

`sunrise`
:   O timestamp do nascer do sol (ângulo em relação ao zênite = 90°35').

`sunset`
:   O timestamp do pôr do sol (ângulo em relação ao zênite = 90°35').

`transit`
:   O timestamp quando o sol está em seu zênite, ou seja, atingiu seu ponto
    mais alto.

`civil_twilight_begin`
:   O início do amanhecer civil (ângulo em relação ao zênite = 96°). Termina no
    `sunrise`.

`civil_twilight_end`
:   O final do crepúsculo civil (ângulo em relação ao zênite = 96°). Começa no
    `sunset`.

`nautical_twilight_begin`
:   O início do amanhecer náutico (ângulo em relação ao zênite = 102°). Termina no
    `civil_twilight_begin`.

`nautical_twilight_end`
:   O final do crepúsculo náutico (ângulo em relação ao zênite = 102°). Começa no
    `civil_twilight_end`.

`astronomical_twilight_begin`
:   O início do amanhecer astronômico (ângulo em relação ao zênite = 108°). Termina no
    `nautical_twilight_begin`.

`astronomical_twilight_end`
:   O final do crepúsculo astronômico (ângulo em relação ao zênite = 108°). Começa no
    `nautical_twilight_end`.

Os valores dos elementos do array podem ser timestamps UNIX, **`false`** se o
sol estiver abaixo do respectivo ângulo durante todo o dia, ou **`true`** se o sol estiver
acima do respectivo ângulo durante todo o dia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Os cálculos foram corrigidos com base na meia-noite local em vez do meio-dia local, o que muda os resultados um pouco. |

### Examples

**Exemplo #1 Um exemplo de **date\_sun\_info()****

```
<?php
date_default_timezone_set('Asia/Jerusalem');
$sun_info = date_sun_info(strtotime("2006-12-12"), 31.7667, 35.2333);
foreach ($sun_info as $key => $val) {
    echo "$key: " . date("H:i:s", $val) . "\n";
}
```

O exemplo acima produzirá:

```
sunrise: 06:29:21
sunset: 16:36:00
transit: 11:32:41
civil_twilight_begin: 06:02:36
civil_twilight_end: 17:02:45
nautical_twilight_begin: 05:32:14
nautical_twilight_end: 17:33:08
astronomical_twilight_begin: 05:02:31
astronomical_twilight_end: 18:02:51
```

**Exemplo #2 Noite polar, com algum processamento**

```
<?php
$tz = new \DateTimeZone('America/Anchorage');

$si = date_sun_info(strtotime("2022-12-21"), 70.21, -148.51);
foreach ($si as $key => $value) {
    echo
        match ($value) {
            true => 'always',
            false => 'never',
            default => date_create("@{$value}")->setTimeZone($tz)->format( 'H:i:s T' ),
        },
        ": {$key}",
        "\n";
}
```

O exemplo acima produzirá:

```
never: sunrise
never: sunset
12:52:18 AKST: transit
10:53:19 AKST: civil_twilight_begin
14:51:17 AKST: civil_twilight_end
09:01:47 AKST: nautical_twilight_begin
16:42:48 AKST: nautical_twilight_end
07:40:47 AKST: astronomical_twilight_begin
18:03:49 AKST: astronomical_twilight_end
```

**Exemplo #3 Sol da meia-noite (Tromsø, Norway)**

```
<?php
$si = date_sun_info(strtotime("2022-06-26"), 69.68, 18.94);
print_r($si);
```

O exemplo acima produzirá:

```
Array
(
    [sunrise] => 1
    [sunset] => 1
    [transit] => 1656240426
    [civil_twilight_begin] => 1
    [civil_twilight_end] => 1
    [nautical_twilight_begin] => 1
    [nautical_twilight_end] => 1
    [astronomical_twilight_begin] => 1
    [astronomical_twilight_end] => 1
)
```

**Exemplo #4 Calculando a duração do dia (Kiev)**

```
<?php
$si = date_sun_info(strtotime('2022-08-26'), 50.45, 30.52);
$diff = $si['sunset'] - $si['sunrise'];
echo "Duração do dia: ",
    floor($diff / 3600), "h ",
    floor(($diff % 3600) / 60), "m\n";
```

O exemplo acima produzirá:

```
Duração do dia: 13h 53m
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
