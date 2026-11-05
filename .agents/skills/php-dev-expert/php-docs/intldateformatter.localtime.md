# Interpreta uma string para um valor de horário baseado em campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.localtime.php

---

# IntlDateFormatter::localtime

# datefmt\_localtime

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::localtime -- datefmt\_localtime — Interpreta uma string para um valor de horário baseado em campos

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::localtime**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_localtime**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Converte o valor da string para um valor de horário baseado em campos (um array com vários campos), iniciando em
offset e consumindo o máximo possível do valor de entrada.

### Parâmetros

`formatter`
:   O recurso do formatador

`string`
:   A string a ser convertida para um horário

`offset`
:   Posição na qual a interpretação da string será iniciada (baseada em zero).
    Se não ocorrer erros antes que a string seja consumida, offset conterá -1,
    caso contrário conterá a posição na qual a interpretação terminou.
    Se offset > strlen(string), a interpretação falha imediatamente.

### Valor Retornado

Array de inteiros compatível com o horário da localidade: contém valor de hora no formato de 24 horas no campo tm\_hour,
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **datefmt\_localtime()****

```
<?php

$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
$arr = datefmt_localtime($fmt, 'Wednesday, December 31, 1969 at 4:00:00 PM Pacific Standard Time', $offset);
echo 'Valor interpretado: ';
if ($arr) {
    foreach ($arr as $key => $value) {
        echo "$key : $value , ";
    }
}

?>
```

**Exemplo #2 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
$arr = $fmt->localtime('Wednesday, December 31, 1969 at 4:00:00 PM Pacific Standard Time', $offset);
echo 'Valor interpretado: ';
if ($arr) {
    foreach ($arr as $key => $value) {
        echo "$key : $value , ";
    }
}

?>
```

O exemplo acima produzirá:

```
Valor interpretado: tm_sec : 0 , tm_min : 0 , tm_hour : 16 , tm_year : 69 ,
tm_mday : 31 , tm_wday : 3 , tm_yday : 365 , tm_mon : 11 , tm_isdst : 0 ,
```

### Veja também

- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data
- [datefmt\_format()](intldateformatter.format.md) - Formata data/horário como uma string
- [datefmt\_parse()](intldateformatter.parse.md) - Interpreta uma string para uma valor de timestamp
- [datefmt\_get\_error\_code()](intldateformatter.geterrorcode.md) - Obtém o código de erro da última operação
- [datefmt\_get\_error\_message()](intldateformatter.geterrormessage.md) - Obtém a mensagem de erro da última operação

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
