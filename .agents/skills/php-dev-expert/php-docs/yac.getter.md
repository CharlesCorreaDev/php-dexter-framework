# Obtém valores do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.getter.php

---

# Yac::\_\_get

(PECL yac >= 1.0.0)

Yac::\_\_get — Obtém valores do cache

### Descrição

public function **Yac::\_\_get**([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

Obtém valores do cache.

### Parâmetros

`key`
:   Chave [string](language.types.string.md)

### Valor Retornado

Retorna o valor em caso de sucesso, **`null`** em caso de falha.

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
