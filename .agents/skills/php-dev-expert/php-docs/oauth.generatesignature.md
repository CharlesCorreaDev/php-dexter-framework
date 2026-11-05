# Gera uma assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.generatesignature.php

---

# OAuth::generateSignature

(No version information available, might only be in Git)

OAuth::generateSignature — Gera uma assinatura

### Descrição

public function **OAuth::generateSignature**([string](language.types.string.md) `$http_method`, [string](language.types.string.md) `$url`, [mixed](language.types.mixed.md) `$extra_parameters` = ?): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera uma assinatura baseada no método HTTP final, URL e uma string/array de parâmetros.

### Parâmetros

`http_method`
:   Método HTTP para requisição

`url`
:   URL para requisição

`extra_parameters`
:   String ou array de parâmetros adicionais.

### Valor Retornado

Uma string contendo a assinatura gerada ou **`false`** em caso de falha

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
