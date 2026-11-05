# Funções da JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.json.php

---

# Funções da JSON

## Índice

- [json\_decode](function.json-decode.md) — Decodifica uma string JSON
- [json\_encode](function.json-encode.md) — Retorna a representação JSON de um valor
- [json\_last\_error](function.json-last-error.md) — Retorna o último erro ocorrido
- [json\_last\_error\_msg](function.json-last-error-msg.md) — Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()
- [json\_validate](function.json-validate.md) — Verifica se uma string contém JSON válido

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
