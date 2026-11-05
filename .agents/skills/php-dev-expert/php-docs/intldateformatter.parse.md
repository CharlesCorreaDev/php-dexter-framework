# Interpreta uma string para uma valor de timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.parse.php

---

# IntlDateFormatter::parse

# datefmt\_parse

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

IntlDateFormatter::parse -- datefmt\_parse — Interpreta uma string para uma valor de timestamp

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::parse**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_parse**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Converte `string` para um valor de tempo incremental, iniciando em
`offset` e consumindo o máximo possível do valor de entrada.

### Parâmetros

`formatter`
:   O recurso do formatador

`string`
:   String a ser convertida para um horário.

`offset`
:   Posição na qual será iniciada a interpretação da `string` (baseada em zero).
    Se nenhum erro ocorrer antes que a `string` seja consumida, `offset` conterá -1,
    caso contrário conterá a posição na qual a interpretação terminou (e onde o erro ocorreu).
    Se `offset` > `strlen($string)`, a interpretação falha imediatamente.

### Valor Retornado

Timestamp do valor interpretado, ou **`false`** se o valor não puder ser interpretado.

### Examples

**Exemplo #1 Exemplo OO**

```
<?php
$fmt = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo', IntlDateFormatter::GREGORIAN
);
echo 'Primeira saída interpretada: ' . $fmt->parse('quinta-feira, 20 de julho de 1989 21:00:00 Horário Padrão de Brasília');
$fmt = new IntlDateFormatter(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Segunda saída interpretada: ' . datefmt_parse($fmt, 'Donnerstag, 20. Juli 1989 um 21:00:00 Brasília-Normalzeit');
?>
```

**Exemplo #2 Exemplo de **datefmt\_parse()****

```
<?php
$fmt = datefmt_create(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Primeira saída interpretada: ' . datefmt_parse($fmt, 'quinta-feira, 20 de julho de 1989 21:00:00 Horário Padrão de Brasília');
$fmt = datefmt_create(
    'de-DE',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN
);
echo 'Segunda saída interpretada: ' . datefmt_parse($fmt, 'Donnerstag, 20. Juli 1989 um 21:00:00 Brasília-Normalzeit');
?>
```

O exemplo acima produzirá:

```
Primeira saída interpretada: 616982400
Segunda saída interpretada: 616982400
```

### Veja também

- [datefmt\_create()](intldateformatter.create.md) - Cria um formatador de data
- [datefmt\_format()](intldateformatter.format.md) - Formata data/horário como uma string
- [datefmt\_localtime()](intldateformatter.localtime.md) - Interpreta uma string para um valor de horário baseado em campos
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
