# Substitui o item em uma chave existente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.replace.php

---

# Memcached::replace

(PECL memcached >= 0.1.0)

Memcached::replace — Substitui o item em uma chave existente

### Descrição

public function **Memcached::replace**([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::replace()** é semelhante a
[Memcached::set()](memcached.set.md), mas a operação falha se
a `key` não existir no servidor.

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
**`Memcached::RES_NOTSTORED`** se a chave não existir.

### Veja também

- [Memcached::replaceByKey()](memcached.replacebykey.md) - Substitua o item em uma chave existente em um servidor específico
- [Memcached::set()](memcached.set.md) - Armazena um item
- [Memcached::add()](memcached.add.md) - Adiciona um item em uma nova key

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
