# Busca o próximo resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.fetch.php

---

# Memcached::fetch

(PECL memcached >= 0.1.0)

Memcached::fetch — Busca o próximo resultado

### Descrição

public function **Memcached::fetch**(): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::fetch()** recupera o próximo resultado da
última solicitação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o próximo resultado ou **`false`** caso contrário.
O [Memcached::getResultCode()](memcached.getresultcode.md) retornará
**`Memcached::RES_END`** se o conjunto de resultados estiver esgotado.

### Examples

**Exemplo #1 Exemplo de **Memcached::fetch()****

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('int', 99);
$m->set('string', 'a simple string');
$m->set('array', array(11, 12));

$m->getDelayed(array('int', 'array'), true);
while ($result = $m->fetch()) {
    var_dump($result);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["key"]=>
  string(3) "int"
  ["value"]=>
  int(99)
  ["cas"]=>
  float(2363)
}
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
```

### Veja também

- [Memcached::fetchAll()](memcached.fetchall.md) - Busca todos os resultados restantes
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
