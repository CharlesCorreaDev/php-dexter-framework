# Analisa uma string e a converte em um timestamp, atualizando um calendário aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.parsetocalendar.php

---

# IntlDateFormatter::parseToCalendar

(PHP 8 >= 8.4.0)

IntlDateFormatter::parseToCalendar — Analisa uma string e a converte em um timestamp, atualizando um calendário aberto

### Descrição

public function **IntlDateFormatter::parseToCalendar**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

Converte `string` em um valor de tempo incremental, começando em
`offset` e consumindo o máximo possível do valor de entrada.

Este método se comporta como [IntlDateFormatter::parse()](intldateformatter.parse.md), exceto que
o fuso horário do formatador é atualizado de acordo com as informações de fuso horário
contidas na `string` analisada.

### Parâmetros

`string`
:   A string a ser convertida em um horário.

`offset`
:   Posição inicial da análise em `string` (base zero).
    Se nenhum erro ocorrer antes da `string` ser consumida,
    `offset` conterá -1; caso contrário, conterá a posição
    em que a análise terminou (e o erro ocorreu).
    Esta variável conterá a posição final se a análise falhar.
    Se `offset` > `strlen($string)`, a análise falhará imediatamente.

### Valor Retornado

Timestamp do valor analisado ou **`false`** se o valor não puder ser analisado.

### Examples

**Exemplo #1 Exemplo de **IntlDateFormatter::parseToCalendar()****

```
<?php
$fmt = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo $fmt->parseToCalendar('Wednesday, December 20, 1989 at 4:00:00 PM Pacific Standard Time');
?>
```

O exemplo acima produzirá:

```
630201600
```

### Veja também

- [IntlDateFormatter::parse()](intldateformatter.parse.md) - Interpreta uma string para uma valor de timestamp
- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string
- [IntlDateFormatter::getErrorCode()](intldateformatter.geterrorcode.md) - Obtém o código de erro da última operação
- [IntlDateFormatter::getErrorMessage()](intldateformatter.geterrormessage.md) - Obtém a mensagem de erro da última operação

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
