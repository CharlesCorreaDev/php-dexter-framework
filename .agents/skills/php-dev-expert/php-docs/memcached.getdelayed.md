# Solicita vários itens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getdelayed.php

---

# Memcached::getDelayed

(PECL memcached >= 0.1.0)

Memcached::getDelayed — Solicita vários itens

### Descrição

public function **Memcached::getDelayed**([array](language.types.array.md) `$keys`, [bool](language.types.boolean.md) `$with_cas` = **`false`**, [?](language.types.null.md)[callable](language.types.callable.md) `$value_cb` = **`null`**): [bool](language.types.boolean.md)

**Memcached::getDelayed()** emite uma solicitação ao memcache
para vários itens cujas chaves são especificadas no
array `keys`. O método não espera resposta e retorna
imediatamente. Quando estiver pronto para coletar os itens, chame
[Memcached::fetch()](memcached.fetch.md) ou
[Memcached::fetchAll()](memcached.fetchall.md). Se `with_cas`
for true, os valores do token CAS também serão solicitados.

Em vez de buscar os resultados explicitamente, você pode especificar um [callback de resultado](memcached.callbacks.md) via
o parâmetro `value_cb`.

### Parâmetros

`keys`
:   Array de chaves a ser recuperado.

`with_cas`
:   Se os valores de token CAS também devem ser solicitados.

`value_cb`
:   O resultado de callback ou **`null`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::getDelayed()****

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

- [Memcached::getDelayedByKey()](memcached.getdelayedbykey.md) - Solicita vários itens de um servidor específico
- [Memcached::fetch()](memcached.fetch.md) - Busca o próximo resultado
- [Memcached::fetchAll()](memcached.fetchall.md) - Busca todos os resultados restantes

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
