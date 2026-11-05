# Bane uma URL usando uma expressão VCL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnishadmin.banurl.php

---

# VarnishAdmin::banUrl

(PECL varnish >= 0.3)

VarnishAdmin::banUrl — Bane uma URL usando uma expressão VCL

### Descrição

public function **VarnishAdmin::banUrl**([string](language.types.string.md) `$vcl_regex`): [int](language.types.integer.md)

### Parâmetros

`vcl_regex`
:   Expressão regular de URL em sintaxe compatível com PCRE. É baseada no comando
    'varnish ban.url'.

### Valor Retornado

Retorna o status do comando varnish.

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
