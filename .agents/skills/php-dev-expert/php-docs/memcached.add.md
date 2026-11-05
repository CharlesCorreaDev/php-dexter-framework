# Adiciona um item em uma nova key

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.add.php

---

# Memcached::add

(PECL memcached >= 0.1.0)

Memcached::add — Adiciona um item em uma nova key

### Descrição

public function **Memcached::add**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::add()** é semelhante a
[Memcached::set()](memcached.set.md), mas a operação falha se a
`key` já existir no servidor.

### Parâmetros

`key`
:   A chave sob a qual armazenar o valor.

`value`
:   O valor a ser armazenado.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_NOTSTORED`** se a chave já existir.

### Veja também

- [Memcached::addByKey()](memcached.addbykey.md) - Adiciona um item sob uma nova chave em um servidor específico
- [Memcached::set()](memcached.set.md) - Armazena um item
- [Memcached::replace()](memcached.replace.md) - Substitui o item em uma chave existente

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
