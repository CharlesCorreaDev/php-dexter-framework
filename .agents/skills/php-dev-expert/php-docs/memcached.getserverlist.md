# Obtenha a lista dos servidores no pool

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getserverlist.php

---

# Memcached::getServerList

(PECL memcached >= 0.1.0)

Memcached::getServerList — Obtenha a lista dos servidores no pool

### Descrição

public function **Memcached::getServerList**(): [array](language.types.array.md)

**Memcached::getServerList()** retorna a lista de todos
os servidores que estão em seu pool de servidores.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A lista de todos os servidores no pool de servidores.

### Examples

**Exemplo #1 Exemplo de **Memcached::getServerList()****

```
<?php
$m = new Memcached();
$m->addServers(array(
    array('mem1.domain.com', 11211, 20),
    array('mem2.domain.com', 11311, 80),
));
var_dump($m->getServerList());
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  array(3) {
    ["host"]=>
    string(15) "mem1.domain.com"
    ["port"]=>
    int(11211)
    ["weight"]=>
    int(20)
  }
  [1]=>
  array(3) {
    ["host"]=>
    string(15) "mem2.domain.com"
    ["port"]=>
    int(11311)
    ["weight"]=>
    int(80)
  }
}
```

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
