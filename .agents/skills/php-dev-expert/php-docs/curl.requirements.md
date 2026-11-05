# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curl.requirements.php

---

## Dependências

Para utilizar as funções cURL no PHP, é necessário instalar o pacote [» libcurl](https://curl.haxx.se/). O PHP requer libcurl
versão 7.10.5 ou superior.
A partir do PHP 7.3.0, a versão 7.15.5 ou superior é requerida.
A partir do PHP 8.0.0, a versão 7.29.0 ou superior é requerida.
A partir do PHP 8.4.0, a versão 7.61.0 ou superior é requerida.

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
