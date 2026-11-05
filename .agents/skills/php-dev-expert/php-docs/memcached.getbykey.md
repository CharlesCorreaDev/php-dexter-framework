# Recupera item de um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getbykey.php

---

# Memcached::getByKey

(PECL memcached >= 0.1.0)

Memcached::getByKey — Recupera item de um servidor específico

### Descrição

public function **Memcached::getByKey**(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [?](language.types.null.md)[callable](language.types.callable.md) `$cache_cb` = **`null`**,  
    [int](language.types.integer.md) `$get_flags` = 0  
): [mixed](language.types.mixed.md)

**Memcached::getByKey()** é funcionalmente equivalente a
[Memcached::get()](memcached.get.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`key`
:   A chave do item a ser recuperado.

`cache_cb`
:   Função de retorno de cache de leitura ou **`null`**

`get_flags`
:   Flags para controlar o resultado retornado. Quando o valor de **`Memcached::GET_EXTENDED`**
    for fornecido, retornará o token CAS.

### Valor Retornado

Retorna o valor armazenado no cache ou **`false`** caso contrário.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_NOTFOUND`** se a chave não existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL memcached 3.0.0 | O parâmetro `&cas_token` foi removido. Em vez disso, o parâmetro `get_flags` foi adicionado e quando é fornecido o valor **`Memcached::GET_EXTENDED`**, ele garantirá que o token CAS seja obtido. |

### Veja também

- [Memcached::get()](memcached.get.md) - Recupera um item
- [Memcached::getMulti()](memcached.getmulti.md) - Recupera vários itens
- [Memcached::getDelayed()](memcached.getdelayed.md) - Solicita vários itens

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
