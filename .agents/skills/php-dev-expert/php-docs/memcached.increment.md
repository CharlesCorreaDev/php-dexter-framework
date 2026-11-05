# Incrementa o valor do item numérico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.increment.php

---

# Memcached::increment

(PECL memcached >= 0.1.0)

Memcached::increment — Incrementa o valor do item numérico

### Descrição

public function **Memcached::increment**(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Memcached::increment()** incrementa o valor de um item numérico
pelo `offset` especificado. Se o valor do item não for
numérico, ocorrerá um erro.
**Memcached::increment()** irá definir o item para o parâmetro
`initial_value` se a chave não existir.

### Parâmetros

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

### Examples

**Exemplo #1 Exemplo de **Memcached::increment()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('counter', 0);
$m->increment('counter');
$n = $m->increment('counter', 10);
var_dump($n);

$m->set('counter', 'abc');
$n = $m->increment('counter');
// ^ falhará devido ao valor do item não ser numérico
var_dump($n);
?>
```

O exemplo acima produzirá:

```
int(11)
bool(false)
```

### Veja também

- [Memcached::decrement()](memcached.decrement.md) - Decrementa o valor do item numérico
- [Memcached::decrementByKey()](memcached.decrementbykey.md) - Decrementa o valor do item numérico, armazenado em um servidor específico
- [Memcached::incrementByKey()](memcached.incrementbykey.md) - Incrementa o valor do item numérico, armazenado em um servidor específico

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
