# Armazena no cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.set.php

---

# Yac::set

(PECL yac >= 1.0.0)

Yac::set — Armazena no cache

### Descrição

public function **Yac::set**([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

public function [Yac::add](yac.add.md)([array](language.types.array.md) `$key_vals`): [bool](language.types.boolean.md)

Adiciona um item ao cache e, se a chave já existir, substitui o item.

### Parâmetros

`keys`
:   Chave [string](language.types.string.md).

`value`
:   Valor a ser armazenado, de qualquer tipo PHP exceto [resource](language.types.resource.md).

`ttl`
:   Tempo de vida.

### Valor Retornado

O próprio valor.

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
