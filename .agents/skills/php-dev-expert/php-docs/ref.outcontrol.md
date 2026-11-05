# Funções para Control de Saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.outcontrol.php

---

# Funções para Control de Saída

# Veja também

Veja também [header()](function.header.md) e
[setcookie()](function.setcookie.md).

## Índice

- [flush](function.flush.md) — Descarrega o buffer na saída do sistema
- [ob\_clean](function.ob-clean.md) — Limpa (apaga) o conteúdo do buffer de saída ativo
- [ob\_end\_clean](function.ob-end-clean.md) — Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
- [ob\_end\_flush](function.ob-end-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_flush](function.ob-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_get\_clean](function.ob-get-clean.md) — Obtém o conteúdo do buffer de saída ativo e desliga-o
- [ob\_get\_contents](function.ob-get-contents.md) — Retorna o conteúdo do buffer de saída
- [ob\_get\_flush](function.ob-get-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo,
  retorna o conteúdo do buffer de saída ativo e desliga-o
- [ob\_get\_length](function.ob-get-length.md) — Retorna o comprimento do buffer de saída
- [ob\_get\_level](function.ob-get-level.md) — Retorna o nível de aninhamento do mecanismo de buffer de saída
- [ob\_get\_status](function.ob-get-status.md) — Obtém status dos buffers de saída
- [ob\_implicit\_flush](function.ob-implicit-flush.md) — Liga ou desliga o descarregamento implícito
- [ob\_list\_handlers](function.ob-list-handlers.md) — Lista todos os manipuladores de saída em uso
- [ob\_start](function.ob-start.md) — Ativa o buffer de saída
- [output\_add\_rewrite\_var](function.output-add-rewrite-var.md) — Adiciona valores de reescritor de URL
- [output\_reset\_rewrite\_vars](function.output-reset-rewrite-vars.md) — Redefine valores de reescritor de URL

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
