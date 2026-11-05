# Adiciona um item sob uma nova chave em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.addbykey.php

---

# Memcached::addByKey

(PECL memcached >= 0.1.0)

Memcached::addByKey — Adiciona um item sob uma nova chave em um servidor específico

### Descrição

public function **Memcached::addByKey**(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

**Memcached::addByKey()** é funcionalmente equivalente a
[Memcached::add()](memcached.add.md), exceto que o formato livre
`server_key` pode ser usado para mapear a
`key` para um servidor específico. Isso é útil se você precisar
manter várias chaves relacionadas em um determinado servidor.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

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

- [Memcached::add()](memcached.add.md) - Adiciona um item em uma nova key
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
