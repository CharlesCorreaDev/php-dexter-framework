# Incrementa o valor do item numérico, armazenado em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.incrementbykey.php

---

# Memcached::incrementByKey

(PECL memcached >= 2.0.0)

Memcached::incrementByKey — Incrementa o valor do item numérico, armazenado em um servidor específico

### Descrição

public function **Memcached::incrementByKey**(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Memcached::incrementByKey()** incrementa o valor de um item numérico
pelo `offset` especificado. Se o valor do item não for numérico,
ocorrerá um erro.
**Memcached::incrementByKey()** irá definir o item para o
parâmetro `initial_value` se a chave não existir.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave do item a incrementar.

`offset`
:   A quantia pela qual incrementar o valor do item.

`initial_value`
:   O valor para definir o item se ele não existir no momento.

`expiry`
:   O tempo de expiração a ser definido no item.

### Valor Retornado

Retorna o valor do novo item em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Memcached::decrement()](memcached.decrement.md) - Decrementa o valor do item numérico
- [Memcached::decrementByKey()](memcached.decrementbykey.md) - Decrementa o valor do item numérico, armazenado em um servidor específico
- [Memcached::increment()](memcached.increment.md) - Incrementa o valor do item numérico

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
