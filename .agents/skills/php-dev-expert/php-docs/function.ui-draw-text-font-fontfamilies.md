# Recupera Famílias de Fontes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ui-draw-text-font-fontfamilies.php

---

# UI\Draw\Text\Font\fontFamilies

(UI 0.9.9)

UI\Draw\Text\Font\fontFamilies — Recupera Famílias de Fontes

### Descrição

function **UI\Draw\Text\Font\fontFamilies**(): [array](language.types.array.md)

Retorna um array com famílias de fontes válidas para o sistema atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) de famílias de fontes válidas para o sistema atual.

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
