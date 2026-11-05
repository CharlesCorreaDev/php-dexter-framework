# Retorna uma representação de data em variante de um timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-date-from-timestamp.php

---

# variant\_date\_from\_timestamp

(PHP 5, PHP 7, PHP 8)

variant\_date\_from\_timestamp — Retorna uma representação de data em variante de um timestamp Unix

### Descrição

function **variant\_date\_from\_timestamp**([int](language.types.integer.md) `$timestamp`): [variant](class.variant.md)

Converte um valor de `timestamp` Unix
em uma variante do tipo **`VT_DATE`**. Isto permite uma
interoperabilidade mais fácil entre as partes Unix do PHP e o COM.

### Parâmetros

`timestamp`
:   Um timestamp Unix.

### Valor Retornado

Retorna uma variante **`VT_DATE`**.

### Veja também

- [variant\_date\_to\_timestamp()](function.variant-date-to-timestamp.md) - Converte um valor de variante de data/horário em um timestamp Unix
- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [time()](function.time.md) - Retorna o timestamp Unix atual

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
