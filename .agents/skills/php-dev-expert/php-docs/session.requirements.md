# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.requirements.php

---

## Dependências

Nenhuma biblioteca externa é necessária para compilar esta extensão.

> **Nota**:
>
> Opcionalmente você pode usar alocação de memória compartilhada (mm), desenvolvida por
> Ralf S. Engelschall, para armazenar a sessão. Você terá que baixar
> [» mm](http://www.ossp.org/pkg/lib/mm/) e instalá-lo. Esta opção não está
> disponível para plataformas Windows. Note que o módulo de armazenamento de sessões para o
> mm não garante que acessos concorrentes à mesma sessão
> sejam travados apropriadamente. Pode ser mais apropriado usar um sistema de arquivos
> baseado em memória compartilhada (como tmpfs em Solaris/Linux, ou /dev/md em BSD) para
> armazenar sessões em arquivos, por que eles são travados apropriadamente.
> Os dados das sessões são salvos na memória então se o servidor for reiniciado os dados são excluídos.

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
