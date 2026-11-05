# Recupere vários itens de um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getmultibykey.php

---

# Memcached::getMultiByKey

(PECL memcached >= 0.1.0)

Memcached::getMultiByKey — Recupere vários itens de um servidor específico

### Descrição

public function **Memcached::getMultiByKey**([string](language.types.string.md) `$server_key`, [array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$get_flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getMultiByKey()**é funcionalmente equivalente a
[Memcached::getMulti()](memcached.getmulti.md), exceto que a forma livre
`server_key` pode ser usada para mapear as
`keys` para um servidor específico.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

`keys`
:   Array de chaves a ser recuperado.

`get_flags`
:   As flags para a operação get.

### Valor Retornado

Retorna o array de itens encontrados ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL memcached 3.0.0 | O parâmetro `&cas_tokens` foi removido. O **`Memcached::GET_EXTENDED`**foi adicionado e quando passado como flag garante que os tokens CAS sejam buscados. |

### Veja também

- [Memcached::getMulti()](memcached.getmulti.md) - Recupera vários itens
- [Memcached::get()](memcached.get.md) - Recupera um item
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
