# Busca todos os resultados restantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.fetchall.php

---

# Memcached::fetchAll

(PECL memcached >= 0.1.0)

Memcached::fetchAll — Busca todos os resultados restantes

### Descrição

public function **Memcached::fetchAll**(): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::fetchAll()** recupera todos os resultados
restantes da última solicitação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os resultados ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de [Memcached::getDelayed()](memcached.getdelayed.md)**

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('int', 99);
$m->set('string', 'a simple string');
$m->set('array', array(11, 12));

$m->getDelayed(array('int', 'array'), true);
var_dump($m->fetchAll());
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  array(3) {
    ["key"]=>
    string(3) "int"
    ["value"]=>
    int(99)
    ["cas"]=>
    float(2363)
  }
  [1]=>
  array(3) {
    ["key"]=>
    string(5) "array"
    ["value"]=>
    array(2) {
      [0]=>
      int(11)
      [1]=>
      int(12)
    }
    ["cas"]=>
    float(2365)
  }
}
```

### Veja também

- [Memcached::fetch()](memcached.fetch.md) - Busca o próximo resultado
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
