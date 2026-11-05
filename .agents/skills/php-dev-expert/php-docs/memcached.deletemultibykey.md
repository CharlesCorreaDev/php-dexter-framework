# Remover vários itens de um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.deletemultibykey.php

---

# Memcached::deleteMultiByKey

(PECL memcached >= 2.0.0)

Memcached::deleteMultiByKey — Remover vários itens de um servidor específico

### Descrição

public function **Memcached::deleteMultiByKey**([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$time` = 0): [array](language.types.array.md)

**Memcached::deleteMultiByKey()** é funcionalmente equivalente a
[Memcached::deleteMulti()](memcached.deletemulti.md), exceto que a forma livre
`server_key` pode ser usada para mapear as
`keys` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`keys`
:   As chaves a serem excluídas.

`time`
:   A quantidade de tempo que o servidor aguardará para excluir os itens.

    > **Nota**:
    >
    > A partir da memcached 1.3.0 (lançada em 2009), este recurso não é mais
    > suportado. Passar um parâmetro `time` diferente de zero causará
    > a falha da exclusão. [Memcached::getResultCode()](memcached.getresultcode.md)
    > retornará **`MEMCACHED_INVALID_ARGUMENTS`**.

### Valor Retornado

Retorna um array indexado por `keys`. Cada elemento
é **`true`** se a chave correspondente foi deletada ou uma das
constantes **`Memcached::RES_*`** se a exclusão correspondente
falhou.

O método [Memcached::getResultCode()](memcached.getresultcode.md) retornará
o código de resultado da última operação de exclusão executada, ou seja, a operação
de exclusão do último elemento de `keys`.

### Veja também

- [Memcached::delete()](memcached.delete.md) - Remover um item
- [Memcached::deleteByKey()](memcached.deletebykey.md) - Remover um item de um servidor específico
- [Memcached::deleteMulti()](memcached.deletemulti.md) - Remover vários itens

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
