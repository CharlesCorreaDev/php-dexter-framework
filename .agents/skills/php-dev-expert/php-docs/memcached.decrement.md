# Decrementa o valor do item numérico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.decrement.php

---

# Memcached::decrement

(PECL memcached >= 0.1.0)

Memcached::decrement — Decrementa o valor do item numérico

### Descrição

public function **Memcached::decrement**(  
    [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$offset` = 1,  
    [int](language.types.integer.md) `$initial_value` = 0,  
    [int](language.types.integer.md) `$expiry` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**Memcached::decrement()** diminui o valor de um item numérico
pelo `offset` especificado. Se o valor do item não for
numérico, ocorrerá um erro. Se a operação diminuir o valor
abaixo de 0, o novo valor será 0.
**Memcached::decrement()** irá definir o item para o
parâmetro `initial_value` se a chave não existir.

### Parâmetros

`key`
:   A chave do item a ser decrementado.

`offset`
:   A quantia pela qual decrementar o valor do item.

`initial_value`
:   O valor para definir o item se ele não existir no momento.

`expiry`
:   O tempo de expiração a ser definido no item.

### Valor Retornado

Retorna o novo valor do item em caso de sucesso ou ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Memcached::decrement()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('counter', 5);
$n = $m->decrement('counter');
var_dump($n);

$n = $m->decrement('counter', 10);
var_dump($n);

var_dump($m->get('counter'));

$m->set('counter', 'abc');
$n = $m->increment('counter');
// ^ falhará devido ao valor do item não ser numérico
var_dump($n);
?>
```

O exemplo acima produzirá:

```
int(4)
int(0)
int(0)
bool(false)
```

### Veja também

- [Memcached::increment()](memcached.increment.md) - Incrementa o valor do item numérico
- [Memcached::incrementByKey()](memcached.incrementbykey.md) - Incrementa o valor do item numérico, armazenado em um servidor específico
- [Memcached::decrementByKey()](memcached.decrementbykey.md) - Decrementa o valor do item numérico, armazenado em um servidor específico

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
