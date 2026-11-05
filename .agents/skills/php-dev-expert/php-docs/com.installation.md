# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.installation.php

---

## Instalação

Esta extensão requer que php\_com\_dotnet.dll
esteja habilitado dentro do php.ini para usar suas funções.

O usuário é responsável por instalar o suporte para os vários objetos COM
que pretende usar (como o MS Word); isso não pode e não será incluído
na distribuição do PHP.

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
