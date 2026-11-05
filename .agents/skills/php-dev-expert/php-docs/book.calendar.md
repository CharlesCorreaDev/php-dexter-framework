# Calendário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.calendar.php

---

# Calendário

# Introdução

A extensão de calendário apresenta uma série de funções para simplificar
a conversão entre diferentes formatos de calendários. O intermédiário ou
padrão é baseado na Contagem de Dias Julianos. A Contagem de Dias Julianos
é uma contagem de dias iniciando em 1º de Janeiro de 4713 AEC. Para converter entre
sistemas de calendários, deve-se primeiro convertê-lo para a Contagem de Dias Julianos, e então
convertê-lo para o sistema de calendário desejado. A Contagem de Dias Julianos é muito diferente
do calendário juliano! Para mais informações sobre a Contagem de Dias Julianos, visite
[» http://www.hermetic.ch/cal\_stud/jdn.htm](http://www.hermetic.ch/cal_stud/jdn.htm). Para mais
informações sobre sistemas de calendários, visite [» https://www.fourmilab.ch/documents/calendar/](https://www.fourmilab.ch/documents/calendar/). Trechos desta página estão
incluídos nestas instruções e estão entre aspas.

- [Instalação/Configuração](calendar.setup.md)
  - [Instalação](calendar.installation.md)
- [Constantes predefinidas](calendar.constants.md)
- [Calendário Funções](ref.calendar.md)
  - [cal\_days\_in\_month](function.cal-days-in-month.md) — Retorna o número de dias em um mês de um ano e calendário informados
  - [cal\_from\_jd](function.cal-from-jd.md) — Converte de uma Contagem de Dias Julianos para um calendário suportado
  - [cal\_info](function.cal-info.md) — Retorna informação sobre um calendário específico
  - [cal\_to\_jd](function.cal-to-jd.md) — Converte de um calendário suportado para o calendário de Contagem de Dias Julianos
  - [easter\_date](function.easter-date.md) — Obtém o timestamp Unix para a meia-noite local da Páscoa de um ano informado
  - [easter\_days](function.easter-days.md) — Obtém o número de dias depois de 21 de março no qual a Páscoa cai para um determinado ano
  - [frenchtojd](function.frenchtojd.md) — Converte uma data do calendário Republicano Francês para uma contagem de Dias Julianos
  - [gregoriantojd](function.gregoriantojd.md) — Converte uma data Gregoriana para a Contagem de Dias Julianos
  - [jddayofweek](function.jddayofweek.md) — Retorna o dia da semana de um dia Juliano
  - [jdmonthname](function.jdmonthname.md) — Retorna o nome de um mês
  - [jdtofrench](function.jdtofrench.md) — Converte do calendário "Julian Day Count" para o calendário Republicano Francês
  - [jdtogregorian](function.jdtogregorian.md) — Converte uma data no formato "Julian Day Count" para o formato Gregoriano
  - [jdtojewish](function.jdtojewish.md) — Converte uma contagem de dias Julianos para uma data do calendário Judeu
  - [jdtojulian](function.jdtojulian.md) — Converte uma Contagem de Dias Julianos para uma data do calendário juliano
  - [jdtounix](function.jdtounix.md) — Converte Dia Juliano para timestamp Unix
  - [jewishtojd](function.jewishtojd.md) — Converte uma data do calendário Judaico para o calendário de Contagem de Dias Julianos
  - [juliantojd](function.juliantojd.md) — Converte uma data do calendário juliano para uma contagem de dias julianos
  - [unixtojd](function.unixtojd.md) — Converte um timestamp Unix para um dia Juliano

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
