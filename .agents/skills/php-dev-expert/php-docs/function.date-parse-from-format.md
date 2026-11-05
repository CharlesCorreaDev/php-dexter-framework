# Retorna informações sobre uma data informada de acordo com um formato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-parse-from-format.php

---

# date\_parse\_from\_format

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

date\_parse\_from\_format — Retorna informações sobre uma data informada de acordo com um formato

### Descrição

function **date\_parse\_from\_format**([string](language.types.string.md) `$format`, [string](language.types.string.md) `$datetime`): [array](language.types.array.md)

Retorna um array associativo com informação detalhada sobre a data/horário informada.

### Parâmetros

`format`
:   Para documentação sobre como o parâmetro `format` é usado, favor
    se referir à documentação da função
    [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md). As mesmas
    regras se aplicam.

`datetime`
:   String que representa a data/horário.

### Valor Retornado

Retorna um array associativo com informação detalhada da data/horário informada.

O array de retorno tem chaves para `year`,
`month`, `day`, `hour`,
`minute`, `second`,
`fraction`, e `is_localtime`.

Se `is_localtime` estiver presente então
`zone_type` indica o tipo do fuso horário. Para o tipo
`1` (deslocamento UTC), os campos `zone` e
`is_dst` são incluídos; para o tipo `2`
(abreviação), os campos `tz_abbr` e
`is_dst` são incluídos; e para tipo `3`
(identificador de fuso), os campos `tz_abbr` e
`tz_id` são incluídos.

O array inclui os campos `warning_count` e
`warnings`. O primeiro indica quantos
avisos ocorreram.
As chaves dos elementos do array `warnings` indicam as
posições na string `datetime` onde os avisos
ocorreram, com o valor da string descrevendo o aviso em si. Um exemplo
abaixo mostra tal aviso.

O array também contém os campos `error_count` e
`errors`. O primeiro indica quantos erros
foram encontrados.
As chaves dos elementos do array `errors` indicam
posição na string `datetime` onde os erros
ocorreram, com o valor da string descrevendo o erro em si. Um exemplo
abaixo mostra tal erro.

**Aviso**

O número de elementos do arrays `warnings` ou
`errors` pode ser menor que
`warning_count` ou `error_count` se eles
ocorreram na mesma posição.

### Erros/Exceções

Esta função dispara a exceção [ValueError](class.valueerror.md) quando o
parâmetro `datetime` contém bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.21, 8.1.8, 8.2.0 | Agora lança [ValueError](class.valueerror.md) quando bytes nulos são passados por `datetime`, o que antes era silenciosamente ignorado. |
| 7.2.0 | O elemento `zone` do array retornado agora representa segundos em vez de minutos, e seu sinal é invertido. Por exemplo, `-120` agora é `7200`. |

### Examples

**Exemplo #1 Exemplo da função **date\_parse\_from\_format()****

```
<?php
$date = "6.1.2009 13:00+01:00";
print_r(date_parse_from_format("j.n.Y H:iP", $date));
```

O exemplo acima produzirá:

```
Array
(
    [year] => 2009
    [month] => 1
    [day] => 6
    [hour] => 13
    [minute] => 0
    [second] => 0
    [fraction] => 0
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 0
    [errors] => Array
        (
        )

    [is_localtime] => 1
    [zone_type] => 1
    [zone] => 3600
    [is_dst] =>
)
```

**Exemplo #2 Exemplo da função **date\_parse\_from\_format()** com avisos**

```
<?php
$date = "26 August 2022 22:30 pm";
$parsed = date_parse_from_format("j F Y G:i a", $date);

echo "Contagem de avisos: ", $parsed['warning_count'], "\n";
foreach ($parsed['warnings'] as $position => $message) {
    echo "\tNa posição {$position}: {$message}\n";
}
```

O exemplo acima produzirá:

```
Contagem de avisos: 1
Na posição 23: The parsed time was invalid
```

**Exemplo #3 Exemplo da função **date\_parse\_from\_format()** com erros**

```
<?php
$date = "26 August 2022 CEST";
$parsed = date_parse_from_format("j F Y H:i", $date);

echo "Contagem de erros: ", $parsed['error_count'], "\n";
foreach ($parsed['errors'] as $position => $message) {
    echo "\tNa posição {$position}: {$message}\n";
}
```

O exemplo acima produzirá:

```
Contagem de erros: 3
Na posição 15: A two digit hour could not be found
Na posição 19: Not enough data available to satisfy format
```

### Veja também

- [DateTimeImmutable::createFromFormat()](datetimeimmutable.createfromformat.md) - Interpreta um string de data/horário de acordo com o formato especificado
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana

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
