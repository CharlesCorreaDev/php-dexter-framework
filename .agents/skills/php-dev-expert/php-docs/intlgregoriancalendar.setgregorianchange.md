# Define a data de mudança do calendário gregoriano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlgregoriancalendar.setgregorianchange.php

---

# IntlGregorianCalendar::setGregorianChange

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlGregorianCalendar::setGregorianChange — Define a data de mudança do calendário gregoriano

### Descrição

Estilo orientado a objetos

public function **IntlGregorianCalendar::setGregorianChange**([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

Estilo procedural

function **intlgregcal\_set\_gregorian\_change**([IntlGregorianCalendar](class.intlgregoriancalendar.md) `$calendar`, [float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

Define a data de mudança do calendário gregoriano. Este é o ponto em que o
calendário muda de datas julianas para datas gregorianas, expresso como um
timestamp Unix em milissegundos.

### Parâmetros

`calendar`
:   Uma instância de [IntlGregorianCalendar](class.intlgregoriancalendar.md).

`timestamp`
:   A data de mudança do calendário gregoriano, expressa como um timestamp Unix em
    milissegundos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
