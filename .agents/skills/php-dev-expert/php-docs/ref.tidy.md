# Funções de Tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.tidy.php

---

# Funções de Tidy

## Índice

- [ob\_tidyhandler](function.ob-tidyhandler.md) — Função de retorno ob\_start para reparar o buffer
- [tidy\_access\_count](function.tidy-access-count.md) — Retorna o número de avisos de acessibilidade do Tidy encontrados para o documento especificado
- [tidy\_config\_count](function.tidy-config-count.md) — Retorna o número de erros de configuração do Tidy encontrados para o documento especificado
- [tidy\_error\_count](function.tidy-error-count.md) — Retorna o número de erros de Tidy encontrados para o documento especificado
- [tidy\_get\_output](function.tidy-get-output.md) — Retorna uma string representando a marcação Tidy analisada
- [tidy\_warning\_count](function.tidy-warning-count.md) — Retorna o número de avisos do Tidy encontrados para o documento especificado

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
