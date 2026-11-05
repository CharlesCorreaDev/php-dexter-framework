# Remover um item de um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.deletebykey.php

---

# Memcached::deleteByKey

(PECL memcached >= 0.1.0)

Memcached::deleteByKey — Remover um item de um servidor específico

### Descrição

public function **Memcached::deleteByKey**([string](language.types.string.md) `$server_key`, [string](language.types.string.md) `$key`, [int](language.types.integer.md) `$time` = 0): [bool](language.types.boolean.md)

**Memcached::deleteByKey()** é funcionalmente equivalente a
[Memcached::delete()](memcached.delete.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave a ser excluída.

`time`
:   A quantidade de tempo que o servidor aguardará para excluir o item.

    > **Nota**:
    >
    > A partir da memcached 1.3.0 (lançada em 2009), este recurso não é mais
    > suportado. Passar um parâmetro `time` diferente de zero causará
    > a falha da exclusão. [Memcached::getResultCode()](memcached.getresultcode.md)
    > retornará **`MEMCACHED_INVALID_ARGUMENTS`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_NOTFOUND`** se a chave não existir.

### Veja também

- [Memcached::delete()](memcached.delete.md) - Remover um item
- [Memcached::deleteMulti()](memcached.deletemulti.md) - Remover vários itens
- [Memcached::deleteMultiByKey()](memcached.deletemultibykey.md) - Remover vários itens de um servidor específico

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
