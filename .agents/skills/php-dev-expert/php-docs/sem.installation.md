# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sem.installation.php

---

## Instalação

O suporte para essas funções não está habilitado por padrão.
Para habilitar o suporte a semáforos do System V, compile o PHP com a opção
**--enable-sysvsem**.
Para habilitar o suporte a memória compartilhada do System V, compile o PHP com a opção
**--enable-sysvshm**.
Para habilitar o suporte a mensagens do System V, compile o PHP com a opção
**--enable-sysvmsg**.

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
