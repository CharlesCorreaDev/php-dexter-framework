# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mqseries.ini.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

Esta extensão não possui diretivas de configuração definidas no php.ini.

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
