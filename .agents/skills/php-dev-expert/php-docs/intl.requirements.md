# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intl.requirements.php

---

## Dependências

Para construir a extensão é necessário instalar a
biblioteca [» ICU](https://icu.unicode.org/).
Versão 4.0.0 ou posterior é requerida.
A partir do PHP 7.4.0, ICU 50.1 ou posterior é requerida.

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
