# Armazena um item em um servidor específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setbykey.php

---

# Memcached::setByKey

(PECL memcached >= 0.1.0)

Memcached::setByKey — Armazena um item em um servidor específico

### Descrição

public function **Memcached::setByKey**(  
    [string](language.types.string.md) `$server_key`,  
    [string](language.types.string.md) `$key`,  
    [mixed](language.types.mixed.md) `$value`,  
    [int](language.types.integer.md) `$expiration` = 0  
): [bool](language.types.boolean.md)

**Memcached::setByKey()** é funcionalmente equivalente a
[Memcached::set()](memcached.set.md), exceto que a forma livre
`server_key` pode ser usada para mapear a
`key` para um servidor específico. Isso é útil se você
precisar manter várias chaves relacionadas em um determinado servidor.

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
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::setByKey()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

/* manter blocos de IP em um determinado servidor */
$m->setByKey('api-cache', 'block-ip:169.254.253.252', 1);
$m->setByKey('api-cache', 'block-ip:169.127.127.202', 1);
?>
```

### Veja também

- [Memcached::set()](memcached.set.md) - Armazena um item

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
