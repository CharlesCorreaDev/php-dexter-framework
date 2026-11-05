# Remover um item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.delete.php

---

# Memcached::delete

(PECL memcached >= 0.1.0)

Memcached::delete — Remover um item

### Descrição

public function **Memcached::delete**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$time` = 0): [bool](language.types.boolean.md)

Remover a `key` do servidor.

### Parâmetros

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

### Examples

**Exemplo #1 Exemplo de **Memcached::delete()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->delete('key1');
?>
```

### Veja também

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
