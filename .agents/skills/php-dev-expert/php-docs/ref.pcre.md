# Funções da PCRE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pcre.php

---

# Funções da PCRE

## Índice

- [preg\_filter](function.preg-filter.md) — Executa pesquisa e substituição usando expressões regulares
- [preg\_grep](function.preg-grep.md) — Retorna entradas de array que correspondem à expressão regular
- [preg\_last\_error](function.preg-last-error.md) — Retorna o código de erro da última expressão regular PCRE executada
- [preg\_last\_error\_msg](function.preg-last-error-msg.md) — Retorna a mensagem de erro da última execução de expressão regular PCRE
- [preg\_match](function.preg-match.md) — Realiza uma correspondência com expressão regular
- [preg\_match\_all](function.preg-match-all.md) — Realiza uma correspondência global de expressão regular
- [preg\_quote](function.preg-quote.md) — Escapa caracteres de expressão regular
- [preg\_replace](function.preg-replace.md) — Realiza uma pesquisa por uma expressão regular e substitui
- [preg\_replace\_callback](function.preg-replace-callback.md) — Executa uma busca por expressão regular e substitui usando uma chamada de retorno
- [preg\_replace\_callback\_array](function.preg-replace-callback-array.md) — Realiza pesquisa e substituição em expressão regular usando chamadas de retorno
- [preg\_split](function.preg-split.md) — Divide uma string com base em expressão regular

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
