# Armazena vários itens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.setmulti.php

---

# Memcached::setMulti

(PECL memcached >= 0.1.0)

Memcached::setMulti — Armazena vários itens

### Descrição

public function **Memcached::setMulti**([array](language.types.array.md) `$items`, [int](language.types.integer.md) `$expiration` = 0): [bool](language.types.boolean.md)

**Memcached::setMulti()** é semelhante a
[Memcached::set()](memcached.set.md), mas em vez de um único item de key/value,
ele funciona em vários itens especificados em
`items`. O tempo de `expiration`
se aplica a todos os itens de uma só vez.

### Parâmetros

`items`
:   Um array de pares chave/valor para armazenar no servidor.

`expiration`
:   O tempo de expiração padrão é 0. Consulte [Tempos de Expiração](memcached.expiration.md) para mais informações.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::setMulti()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$m->setMulti($items, time() + 300);
?>
```

### Veja também

- [Memcached::setMultiByKey()](memcached.setmultibykey.md) - Armazena vários itens em um servidor específico
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
