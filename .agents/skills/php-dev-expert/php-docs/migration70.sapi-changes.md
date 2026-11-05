# Modificações nos Módulos SAPI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.sapi-changes.php

---

## Modificações nos Módulos SAPI

### [FPM](book.fpm.md)

#### Portas de [listen](install.fpm.configuration.md#listen) não qualificadas agora escutam IPv4 e IPv6

No PHP 5, uma diretiva [listen](install.fpm.configuration.md#listen) com somente um
número de porta escutaria em todas interfaces, mas somente no IPv4. O PHP
aceitará requisições feitas tanto via IPv4 quanto IPv6.

Isso não afeta diretivas que incluem endereços de IP específicos; estas
continuarão a escutar somente no endereço e protocolo especificados.

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
