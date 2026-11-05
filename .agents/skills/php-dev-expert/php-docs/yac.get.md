# Obtém valores do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.get.php

---

# Yac::get

(PECL yac >= 1.0.0)

Yac::get — Obtém valores do cache

### Descrição

public function **Yac::get**([string](language.types.string.md)|[array](language.types.array.md) `$key`, [int](language.types.integer.md) `&$cas` = **`null`**): [mixed](language.types.mixed.md)

Obtém valores do cache.

### Parâmetros

`key`
:   Chaves [string](language.types.string.md) ou [array](language.types.array.md) de várias chaves.

`cas`
:   Se não for **`null`**, será definido para o CAS do item obtido.

### Valor Retornado

Retorna o valor em caso de sucesso, false em caso de falha.

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
