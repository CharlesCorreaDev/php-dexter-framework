# Define os parâmetros de configuração na instância atual do Varnish

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnishadmin.setparam.php

---

# VarnishAdmin::setParam

(PECL varnish >= 0.4)

VarnishAdmin::setParam — Define os parâmetros de configuração na instância atual do Varnish

### Descrição

public function **VarnishAdmin::setParam**([string](language.types.string.md) `$name`, [string](language.types.string.md)|[int](language.types.integer.md) `$value`): [int](language.types.integer.md)

### Parâmetros

`name`
:   Nome do parâmetro de configuração do Varnish.

`value`
:   Valor do parâmetro de configuração do Varnish.

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
