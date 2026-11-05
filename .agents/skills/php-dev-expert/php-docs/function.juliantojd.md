# Converte uma data do calendário juliano para uma contagem de dias julianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.juliantojd.php

---

# juliantojd

(PHP 4, PHP 5, PHP 7, PHP 8)

juliantojd — Converte uma data do calendário juliano para uma contagem de dias julianos

### Descrição

function **juliantojd**([int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`, [int](language.types.integer.md) `$year`): [int](language.types.integer.md)

O Calendário juliano vai de 4713 AEC até 9999 EC.

Embora esta função possa lidar com datas tão antigas quanto 4713
AEC, seu uso pode não ter significado. O calendário foi criado em
46 AEC, mas os detalhes não foram padronizados até pelo menos no ano 8 EC,
e talvez até mais tarde, no 4º século. Além disso, o começo de um ano
variou de uma cultura para outra - nem todas aceitaram
janeiro como o primeiro mês.

**Cuidado**

Lembre-se, o sistema atual de calendário que é usado mundialmente é
o gregoriano. A função [gregoriantojd()](function.gregoriantojd.md) pode ser usada para
converter essas datas para o formato de contagem de dias julianos.

### Parâmetros

`month`
:   O mês como um número entre 1 (para janeiro) a 12 (para dezembro)

`day`
:   O dia como um número entre 1 a 31

`year`
:   O ano como um número entre -4713 a 9999

### Valor Retornado

O dia juliano para a dada juliana como um inteiro.

### Veja também

- [jdtojulian()](function.jdtojulian.md) - Converte uma Contagem de Dias Julianos para uma data do calendário juliano
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
