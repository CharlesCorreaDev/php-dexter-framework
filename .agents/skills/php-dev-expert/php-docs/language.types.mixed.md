# Misto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.mixed.php

---

## Misto

O tipo [mixed](language.types.mixed.md) aceita todos os valores. É equivalente ao
[tipo de união](language.types.type-system.md#language.types.type-system.composite.union)
`object|resource|array|string|float|int|bool|null`.
Disponível a partir do PHP 8.0.0.

[mixed](language.types.mixed.md) é, na linguagem da teoria dos tipos, o tipo universal,
que significa que todos os outros tipos são um subtipo dele.

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
