# Converte um valor de variante de data/horário em um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-date-to-timestamp.php

---

# variant\_date\_to\_timestamp

(PHP 5, PHP 7, PHP 8)

variant\_date\_to\_timestamp — Converte um valor de variante de data/horário em um timestamp Unix

### Descrição

function **variant\_date\_to\_timestamp**([variant](class.variant.md) `$variant`): [?](language.types.null.md)[int](language.types.integer.md)

Converte o valor de uma `variant` do tipo **`VT_DATE`**
(ou similar) em um timestamp Unix. Isto permite uma
interoperabilidade mais fácil entre as partes Unix do PHP e o COM.

### Parâmetros

`variant`
:   A variante.

### Valor Retornado

Retorna um timestamp Unix ou **`null`** em caso de falha.

### Veja também

- [variant\_date\_from\_timestamp()](function.variant-date-from-timestamp.md) - Retorna uma representação de data em variante de um timestamp Unix
- [date()](function.date.md) - Formata um timestamp Unix
- [strftime()](function.strftime.md) - Formata uma data/horário de acordo com as configurações locais

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
