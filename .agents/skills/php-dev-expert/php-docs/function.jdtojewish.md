# Converte uma contagem de dias Julianos para uma data do calendário Judeu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdtojewish.php

---

# jdtojewish

(PHP 4, PHP 5, PHP 7, PHP 8)

jdtojewish — Converte uma contagem de dias Julianos para uma data do calendário Judeu

### Descrição

function **jdtojewish**([int](language.types.integer.md) `$julian_day`, [bool](language.types.boolean.md) `$hebrew` = **`false`**, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)

Converte uma contagem de dias Julianos para o calendário Judeu.

### Parâmetros

`julian_day`
:   O número do dia Juliano como um inteiro

`hebrew`
:   Se o parâmetro `hebrew` for definido para **`true`**,
    o parâmetro `flags` é usado para o formato de saída hebraico,
    baseado em string codificado em ISO-8859-8.

`flags`
:   Uma máscara de bits que pode consistir em
    **`CAL_JEWISH_ADD_ALAFIM_GERESH`**,
    **`CAL_JEWISH_ADD_ALAFIM`** e
    **`CAL_JEWISH_ADD_GERESHAYIM`**.

### Valor Retornado

A data Judia como uma string no formato "mês/dia/ano", ou uma data string codificada em
em ISO-8859-8, hebraico, de acordo com o parâmetro
`hebrew`.

### Examples

**Exemplo #1 Exemplo de **jdtojewish()****

```
<?php
$jd = gregoriantojd(10, 8, 2002);
echo jdtojewish($jd, true), PHP_EOL,
     jdtojewish($jd, true, CAL_JEWISH_ADD_GERESHAYIM), PHP_EOL,
     jdtojewish($jd, true, CAL_JEWISH_ADD_ALAFIM), PHP_EOL,
     jdtojewish($jd, true,CAL_JEWISH_ADD_ALAFIM_GERESH), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
ב חשון התשסג
ב' חשון התשס"ג
ב חשון ה אלפים תשסג
ב חשון ה'תשסג
```

### Veja também

- [jewishtojd()](function.jewishtojd.md) - Converte uma data do calendário Judaico para o calendário de Contagem de Dias Julianos
- [cal\_from\_jd()](function.cal-from-jd.md) - Converte de uma Contagem de Dias Julianos para um calendário suportado

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
