# Recupera um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.get.php

---

# Memcached::get

(PECL memcached >= 0.1.0)

Memcached::get — Recupera um item

### Descrição

public function **Memcached::get**([string](language.types.string.md) `$key`, [?](language.types.null.md)[callable](language.types.callable.md) `$cache_cb` = **`null`**, [int](language.types.integer.md) `$get_flags` = 0): [mixed](language.types.mixed.md)

**Memcached::get()** retorna o item que foi armazenado anteriormente
na `key`. Se o item for encontrado e
o `get_flags` for fornecido como **`Memcached::GET_EXTENDED`**,
ele também retornará o valor do token CAS para o item. Consulte
[Memcached::cas()](memcached.cas.md) para saber como usar tokens CAS.
[O callback de cache de leitura](memcached.callbacks.md) pode ser
especificado por meio do parâmetro `cache_cb`.

### Parâmetros

`key`
:   A chave do item a ser recuperado.

`cache_cb`
:   Callback de cache de leitura ou **`null`**.

`get_flags`
:   Flags para controlar o resultado retornado. Quando **`Memcached::GET_EXTENDED`**
    for fornecido, a função também retornará o token CAS.

### Valor Retornado

Retorna o valor armazenado no cache ou **`false`** caso contrário.
Se o parâmetro `get_flags` for definido como **`Memcached::GET_EXTENDED`**,
um array contendo o valor e o token CAS será retornado em vez de apenas o valor.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_NOTFOUND`** se a chave não existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL memcached 3.0.0 | O parâmetro `&cas_token` foi removido. Em vez disso, as `get_flags` foram adicionadas e, quando receber o valor de **`Memcached::GET_EXTENDED`**, garantirá que o token CAS seja buscado. |

### Examples

**Exemplo #1 **Memcached::get()** exemplo #1**

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('foo', 100);
var_dump($m->get('foo'));
?>
```

O exemplo acima produzirá:

```
int(100)
```

**Exemplo #2 **Memcached::get()** exemplo #2**

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

if (!($ip = $m->get('ip_block'))) {
    if ($m->getResultCode() == Memcached::RES_NOTFOUND) {
        $ip = array();
        $m->set('ip_block', $ip);
    } else {
        /* log error */
        /* ...       */
    }
}
?>
```

### Veja também

- [Memcached::getByKey()](memcached.getbykey.md) - Recupera item de um servidor específico
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
