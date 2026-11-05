# Armazena no cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.setter.php

---

# Yac::\_\_set

(PECL yac >= 1.0.0)

Yac::\_\_set — Armazena no cache

### Descrição

public function **Yac::\_\_set**([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

Armazena um item no cache.

### Parâmetros

`keys`
:   Chave [string](language.types.string.md).

`value`
:   Valor a ser armazenado, de qualquer tipo PHP exceto [resource](language.types.resource.md).

### Valor Retornado

Sempre retorna o próprio valor.

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
