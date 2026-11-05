# Suporte do Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.windows-support.php

---

## Suporte do Windows

### Núcleo do PHP

#### Mais exclusão de arquivos em conformidade com POSIX

Os descritores de arquivo são abertos no modo compartilhado de leitura/gravação/exclusão por padrão.
Isso mapeia efetivamente a semântica POSIX e permite
excluir arquivos com identificadores em uso. Não é 100% igual, algumas diferenças de
plataforma ainda persistem. Após a exclusão, a entrada do nome do arquivo é
bloqueada, até que todos os identificadores abertos sejam fechados.

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
