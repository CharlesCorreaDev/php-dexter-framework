# Converte uma data do calendário Republicano Francês para uma contagem de Dias Julianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.frenchtojd.php

---

# frenchtojd

(PHP 4, PHP 5, PHP 7, PHP 8)

frenchtojd — Converte uma data do calendário Republicano Francês para uma contagem de Dias Julianos

### Descrição

function **frenchtojd**([int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`, [int](language.types.integer.md) `$year`): [int](language.types.integer.md)

Converte uma data do calendário Republicano Francês para uma contagem
de Dias Julianos.

Estas rotinas convertem apenas datas dos anos 1 ao 14
(datas Gregorianas 22 de setembro de 1792 a 22 de setembro de
1806). Isto cobre mais que o período em que o calendário esteve
em uso.

### Parâmetros

`month`
:   O mês como um número de 1 (para Vendémiaire) a 13 (para o período de 5 a 6 dias no final de cada ano)

`day`
:   O dia como um número de 1 a 30

`year`
:   O ano como um número entre 1 e 14

### Valor Retornado

O dia Juliano para a data informada do calendário revolucionário francês, como um inteiro.

### Veja também

- [jdtofrench()](function.jdtofrench.md) - Converte do calendário "Julian Day Count" para o calendário Republicano Francês
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
