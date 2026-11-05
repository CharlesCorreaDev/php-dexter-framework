# Recupera vários itens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getmulti.php

---

# Memcached::getMulti

(PECL memcached >= 0.1.0)

Memcached::getMulti — Recupera vários itens

### Descrição

public function **Memcached::getMulti**([array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$get_flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getMulti()** é semelhante a
[Memcached::get()](memcached.get.md), mas em vez de um único item de chave,
ele recupera vários itens cujas chaves são especificadas no
array `keys`.
> **Nota**:
>
> Antes da versão 3.0, um segundo argumento `&cas_tokens` estava em uso.
> Ele foi preenchido com os valores de token CAS para os itens encontrados.
> O parâmetro `&cas_tokens` foi removido na v3.0 da extensão.
> Ele foi substituído por uma nova flag **`Memcached::GET_EXTENDED`**
> que precisa ser usado como valor para `get_flags`.

O parâmetro `get_flags` pode ser usado para especificar
opções adicionais para **Memcached::getMulti()**.
**`Memcached::GET_PRESERVE_ORDER`** garante que as
chaves sejam retornadas na mesma ordem em que foram solicitadas.
**`Memcached::GET_EXTENDED`** garante que os
tokens CAS também sejam buscados.

### Parâmetros

`keys`
:   Array de chaves a ser recuperado.

`get_flags`
:   As flags para a operação get.

### Valor Retornado

Retorna o array de itens encontrados ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL memcached 3.0.0 | O parâmetro `&cas_tokens` foi removido. O **`Memcached::GET_EXTENDED`**foi adicionado e quando passado como flag garante que os tokens CAS sejam buscados. |

### Examples

**Exemplo #1 **Memcached::getMulti()** exemplo para Memcached v3**

```
<?php
// Válido para v3 da extensão

$m = new Memcached();
$m->addServer('localhost', 11211);

$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$m->setMulti($items);
$result = $m->getMulti(array('key1', 'key3', 'badkey'));
var_dump($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["key1"]=>
  string(6) "value1"
  ["key3"]=>
  string(6) "value3"
}
```

**Exemplo #2 **Memcached::getMulti()** exemplo para Memcached v1 e v2**

```
<?php
// Válido para v1 e v2 da extensão

$m = new Memcached();
$m->addServer('localhost', 11211);

$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$m->setMulti($items);
$result = $m->getMulti(array('key1', 'key3', 'badkey'), $cas);
var_dump($result, $cas);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["key1"]=>
  string(6) "value1"
  ["key3"]=>
  string(6) "value3"
}
array(2) {
  ["key1"]=>
  float(2360)
  ["key3"]=>
  float(2362)
}
```

**Exemplo #3 **`Memcached::GET_PRESERVE_ORDER`** exemplo para Memcached v3**

```
<?php
// Válido para v3 da extensão

$m = new Memcached();
$m->addServer('localhost', 11211);

$data = array(
    'foo' => 'foo-data',
    'bar' => 'bar-data',
    'baz' => 'baz-data',
    'lol' => 'lol-data',
    'kek' => 'kek-data',
);

$m->setMulti($data, 3600);

$keys = array_keys($data);
$keys[] = 'zoo';
$got = $m->getMulti($keys, Memcached::GET_PRESERVE_ORDER);

foreach ($got as $k => $v) {
    echo "$k $v\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
foo foo-data
bar bar-data
baz baz-data
lol lol-data
kek kek-data
zoo
```

**Exemplo #4 **`Memcached::GET_PRESERVE_ORDER`** exemplo para Memcached v1 e v2**

```
<?php
// Válido para v1 e v2 da extensão

$m = new Memcached();
$m->addServer('localhost', 11211);

$data = array(
    'foo' => 'foo-data',
    'bar' => 'bar-data',
    'baz' => 'baz-data',
    'lol' => 'lol-data',
    'kek' => 'kek-data',
);

$m->setMulti($data, 3600);

$null = null;
$keys = array_keys($data);
$keys[] = 'zoo';
$got = $m->getMulti($keys, $null, Memcached::GET_PRESERVE_ORDER);

foreach ($got as $k => $v) {
    echo "$k $v\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
foo foo-data
bar bar-data
baz baz-data
lol lol-data
kek kek-data
zoo
```

### Veja também

- [Memcached::getMultiByKey()](memcached.getmultibykey.md) - Recupere vários itens de um servidor específico
- [Memcached::get()](memcached.get.md) - Recupera um item
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
