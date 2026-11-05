# Funções da Filter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.filter.php

---

# Funções da Filter

## Índice

- [filter\_has\_var](function.filter-has-var.md) — Verifica se uma variável de um tipo especificado existe
- [filter\_id](function.filter-id.md) — Retorna o ID de filtro pertencente a um filtro nomeado
- [filter\_input](function.filter-input.md) — Obtém uma variável externa específica por nome e filtra-a opcionalmente
- [filter\_input\_array](function.filter-input-array.md) — Obtem variáveis externas e opcionalmente as filtra
- [filter\_list](function.filter-list.md) — Retorna a lista de todos os filtros suportados
- [filter\_var](function.filter-var.md) — Filtra uma variável com um filtro especificado
- [filter\_var\_array](function.filter-var-array.md) — Obtêm e opcionalmente filtra múltiplas variáveis

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
