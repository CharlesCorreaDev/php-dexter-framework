# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsl.installation.php

---

## Instalação

PHP inclue a extensão XSL por padrão e pode ser habilitada
adicionando o argumento **--with-xsl[=DIR]**
na linha de configuração `DIR` sendo o diretório da instalação
da libxslt.

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
