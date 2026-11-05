# URLs

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.url.php

---

# URLs

# Introdução

Lidando com URLs: codificando, decodificando e interpretando.

- [Constantes predefinidas](url.constants.md)
- [Funções de URL](ref.url.md)
  - [base64\_decode](function.base64-decode.md) — Decodifica dados no formato MIME base64
  - [base64\_encode](function.base64-encode.md) — Codifica dados com MIME base64
  - [get\_headers](function.get-headers.md) — Retorna todos os cabeçalhos enviados pelo servidor em resposta a uma requisição HTTP
  - [get\_meta\_tags](function.get-meta-tags.md) — Extrai todos os atributos de conteúdo de metatags de um arquivo e retorna um array
  - [http\_build\_query](function.http-build-query.md) — Gera a string de consulta em formato URL
  - [parse\_url](function.parse-url.md) — Analisa uma URL e retorna seus componentes
  - [rawurldecode](function.rawurldecode.md) — Decodifica uma URL
  - [rawurlencode](function.rawurlencode.md) — Codifica uma URL de acordo com RFC 3986
  - [urldecode](function.urldecode.md) — Decodifica uma URL codificada
  - [urlencode](function.urlencode.md) — Codifica uma string no formato URL

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
