# Gera uma String Base de Assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oauth-get-sbs.php

---

# oauth\_get\_sbs

(PECL OAuth >=0.99.7)

oauth\_get\_sbs — Gera uma String Base de Assinatura

### Descrição

function **oauth\_get\_sbs**([string](language.types.string.md) `$http_method`, [string](language.types.string.md) `$uri`, [array](language.types.array.md) `$request_parameters` = ?): [string](language.types.string.md)

Gera uma String Base de Assinatura de acordo com pecl/oauth.

### Parâmetros

`http_method`
:   O método HTTP.

`uri`
:   URI a codificar.

`request_parameters`
:   Array de parâmetros de requisição.

### Valor Retornado

Retorna uma String Base de Assinatura

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
