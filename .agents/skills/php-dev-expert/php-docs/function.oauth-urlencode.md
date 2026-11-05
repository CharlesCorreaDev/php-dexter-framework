# Codifica uma URI conforme RFC 3986

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oauth-urlencode.php

---

# oauth\_urlencode

(PECL OAuth >=0.99.2)

oauth\_urlencode — Codifica uma URI conforme RFC 3986

### Descrição

function **oauth\_urlencode**([string](language.types.string.md) `$uri`): [string](language.types.string.md)

Codifica uma URI conforme a [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986).

### Parâmetros

`uri`
:   URI a codificar.

### Valor Retornado

Retorna uma string codificada conforme a [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986).

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
