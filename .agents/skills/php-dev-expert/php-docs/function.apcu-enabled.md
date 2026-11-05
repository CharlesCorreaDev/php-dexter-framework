# Informa se o APCu está disponível no ambiente atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-enabled.php

---

# apcu\_enabled

(PECL apcu >= 4.0.3)

apcu\_enabled — Informa se o APCu está disponível no ambiente atual

### Descrição

function **apcu\_enabled**(): [bool](language.types.boolean.md)

Informa se o APCu está utilizável no ambiente atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** quando o APCu está utilizável no ambiente atual, **`false`** caso contrário.

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
