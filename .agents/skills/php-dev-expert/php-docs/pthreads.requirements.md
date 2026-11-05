# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pthreads.requirements.php

---

## Dependências

pthreads requer uma compilação de PHP com ZTS (Zend Thread Safety) habilitado
(**--enable-zts**, ou em sistemas não-Windows anteriores ao PHP 8.0.0,
**--enable-maintainer-zts**)

**Cuidado**

Zend Thread Safety não pode ser habilitado após a construção; é uma opção de configuração de tempo de construção.

pthreads deve ser compilado em qualquer lugar onde haja um cabeçalho Posix Threads funcional (pthread.h) e uma compilação ZTS de PHP, incluindo Windows (usando o projeto pthread-w32 do redhat).

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
