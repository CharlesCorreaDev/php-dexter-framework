# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pspell.resources.php

---

## Tipos de Recurso

Antes do PHP 8.1.0, havia dois tipos de recursos usados nesta extensão. O primeiro é o identificador de conexão do dicionário, o segundo é um recurso que contém a configuração do pspell.

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
