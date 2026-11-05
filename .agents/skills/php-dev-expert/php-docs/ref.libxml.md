# Funções da libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.libxml.php

---

# Funções da libxml

## Índice

- [libxml\_clear\_errors](function.libxml-clear-errors.md) — Limpa o buffer de erro da libxml
- [libxml\_disable\_entity\_loader](function.libxml-disable-entity-loader.md) — Desabilita a capacidade de carregar entidades externas
- [libxml\_get\_errors](function.libxml-get-errors.md) — Obtém um array de erros
- [libxml\_get\_external\_entity\_loader](function.libxml-get-external-entity-loader.md) — Obtém o carregador atual de entidade externa
- [libxml\_get\_last\_error](function.libxml-get-last-error.md) — Obtém o último erro da libxml
- [libxml\_set\_external\_entity\_loader](function.libxml-set-external-entity-loader.md) — Altera o carregador padrão de entidades externas
- [libxml\_set\_streams\_context](function.libxml-set-streams-context.md) — Define o contexto de fluxos para o próximo carregamento ou escrita de documento libxml
- [libxml\_use\_internal\_errors](function.libxml-use-internal-errors.md) — Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário

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
