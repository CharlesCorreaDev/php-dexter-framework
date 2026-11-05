# Obtém a data de mudança do calendário gregoriano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlgregoriancalendar.getgregorianchange.php

---

# IntlGregorianCalendar::getGregorianChange

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlGregorianCalendar::getGregorianChange — Obtém a data de mudança do calendário gregoriano

### Descrição

Estilo orientado a objetos

public function **IntlGregorianCalendar::getGregorianChange**(): [float](language.types.float.md)

Estilo procedural

function **intlgregcal\_get\_gregorian\_change**([IntlGregorianCalendar](class.intlgregoriancalendar.md) `$calendar`): [float](language.types.float.md)

Obtém a data de mudança do calendário gregoriano. Este é o ponto em que o
calendário muda de datas julianas para datas gregorianas, expresso como um
timestamp Unix em milissegundos. O padrão é meia-noite (UTC) em 15 de outubro de 1582.

### Parâmetros

`calendar`
:   Uma instância de [IntlGregorianCalendar](class.intlgregoriancalendar.md).

### Valor Retornado

Retorna a data de mudança.

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
