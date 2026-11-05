# Informa se o token informado é suportado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.supports.php

---

# Dom\TokenList::supports

(PHP 8 >= 8.4.0)

Dom\TokenList::supports — Informa se o token informado é suportado

### Descrição

public function **Dom\TokenList::supports**([string](language.types.string.md) `$token`): [bool](language.types.boolean.md)

Informa se `token` está nos
tokens suportados do atributo associado.

### Parâmetros

`token`
:   O token.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [TypeError](class.typeerror.md) quando o atributo não
define uma lista de tokens suportados.

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
