# Sessões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.sessions.php

---

# Sessões

Suporte a sessões no PHP consiste de uma maneira de preservar dados através
de acessos subsequentes. Isso permite a criação de aplicações mais personalizadas
e aumenta o apelo do seu web site. Todas as informações estão na
seção [Session reference](book.session.md).

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
