# Mapear uma chave para um servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/memcached.getserverbykey.php

---

# Memcached::getServerByKey

(PECL memcached >= 0.1.0)

Memcached::getServerByKey — Mapear uma chave para um servidor

### Descrição

public function **Memcached::getServerByKey**([string](language.types.string.md) `$server_key`): [array](language.types.array.md)|[false](language.types.singleton.md)

**Memcached::getServerByKey()** retorna o servidor que
seria selecionado por uma `server_key` particular em todas
as operações **Memcached::\*ByKey()**.

### Parâmetros

`server_key`
:   A chave que identifica o servidor no qual armazenar o valor ou de onde recuperá-lo. Em vez de fazer o hash na chave real do item, o hash é feito na chave do servidor ao decidir com qual servidor memcached se comunicar. Isso permite que itens relacionados sejam agrupados em um único servidor para eficiência com múltiplas operações.

### Valor Retornado

Retorna um array contendo três chaves de `host`,
`port` e `weight` em caso de sucesso ou **`false`** em caso de falha.
Use [Memcached::getResultCode()](memcached.getresultcode.md) se necessário.

### Examples

**Exemplo #1 Exemplo de **Memcached::getServerByKey()****

```
<?php
$m = new Memcached();
$m->addServers(array(
    array('mem1.domain.com', 11211, 40),
    array('mem2.domain.com', 11211, 40),
    array('mem3.domain.com', 11211, 20),
));

$m->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE, true);

var_dump($m->getServerByKey('user'));
var_dump($m->getServerByKey('log'));
var_dump($m->getServerByKey('ip'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["host"]=>
  string(15) "mem3.domain.com"
  ["port"]=>
  int(11211)
  ["weight"]=>
  int(20)
}
array(3) {
  ["host"]=>
  string(15) "mem2.domain.com"
  ["port"]=>
  int(11211)
  ["weight"]=>
  int(40)
}
array(3) {
  ["host"]=>
  string(15) "mem2.domain.com"
  ["port"]=>
  int(11211)
  ["weight"]=>
  int(40)
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
