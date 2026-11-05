# Converte uma data do calendário Judaico para o calendário de Contagem de Dias Julianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jewishtojd.php

---

# jewishtojd

(PHP 4, PHP 5, PHP 7, PHP 8)

jewishtojd — Converte uma data do calendário Judaico para o calendário de Contagem de Dias Julianos

### Descrição

function **jewishtojd**([int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`, [int](language.types.integer.md) `$year`): [int](language.types.integer.md)

Embora esta função suporte datas no passado distante até o ano 1
(3761 AEC), este uso pode não fazer sentido. O calendário Judaico tem
sido usado por milhares de anos mas nos primórdios não havia
uma fórmula para determinar o início de um mês. Um novo mês iniciava
quando a lua nova era observada pela primeira vez.

### Parâmetros

`month`
:   O mês como um número de `1` a `13`,
    onde `1` significa `Tishri`,
    `13` significa `Elul`,
    `6` *e* `7` significam
    `Adar` em anos não bissextos, ou `Adar I`
    e `Adar II`, respectivamente, em anos bissextos.

`day`
:   O dia como um número de `1` a `30`.
    Se um mês tem apenas 29 dias, será considerado o primeiro dia do mês
    seguinte.

`year`
:   O ano como um número entre 1 e 9999

### Valor Retornado

O Dia Juliano como um inteiro para a data judaica informada.

### Veja também

- [jdtojewish()](function.jdtojewish.md) - Converte uma contagem de dias Julianos para uma data do calendário Judeu
- [cal\_to\_jd()](function.cal-to-jd.md) - Converte de um calendário suportado para o calendário de Contagem de Dias Julianos

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
