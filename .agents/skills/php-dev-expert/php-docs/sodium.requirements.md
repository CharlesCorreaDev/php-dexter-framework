# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sodium.requirements.php

---

## Dependências

Esta extensão requer [» libsodium](https://libsodium.org/)
≥ 1.0.8.

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
