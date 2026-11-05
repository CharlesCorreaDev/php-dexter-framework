# Funções de retorno de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.callbacks.result.php

---

## Funções de retorno de resultados

[callable](language.types.callable.md)s de resultados são chamados pelos métodos
[Memcached::getDelayed()](memcached.getdelayed.md) ou
[Memcached::getDelayedBykey()](memcached.getdelayedbykey.md) para cada item no conjunto de
resultados. A função de retorno recebe o objeto Memcached e o array
com as informações do item. A função não precisa retornar nada.

**Exemplo #1 Exemplo de função de retorno de resultado**

```
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$m->setMulti($items);
$m->getDelayed(array('key1', 'key3'), true, 'result_cb');

function result_cb($memc, $item)
{
    var_dump($item);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["key"]=>
  string(4) "key1"
  ["value"]=>
  string(6) "value1"
  ["cas"]=>
  float(49)
}
array(3) {
  ["key"]=>
  string(4) "key3"
  ["value"]=>
  string(6) "value3"
  ["cas"]=>
  float(50)
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
