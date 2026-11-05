# Obtém os dados associados a um nó de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.get.php

---

# Zookeeper::get

(PECL zookeeper >= 0.1.0)

Zookeeper::get — Obtém os dados associados a um nó de forma síncrona

### Descrição

public
function **Zookeeper::get**(  
    [string](language.types.string.md) `$path`,  
    [callable](language.types.callable.md) `$watcher_cb` = **`null`**,  
    [array](language.types.array.md) `&$stat` = **`null`**,  
    [int](language.types.integer.md) `$max_size` = 0  
): [string](language.types.string.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`watcher_cb`
:   Se for diferente de zero, um relógio será definido no servidor para notificar o cliente se o nó mudar.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

`max_size`
:   Tamanho máximo dos dados. Se 0 for usado, este método retornará todos os dados.

### Valor Retornado

Retorna os dados em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem de parâmetros ou tipos estão errados ou não consegue obter valor do nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::get()****

Obtendo o valor de um nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$value = 'nodevalue';
$zookeeper->set($path, $value);

$r = $zookeeper->get($path);
if ($r)
  echo $r;
else
  echo 'ERR';
?>
```

O exemplo acima produzirá:

```
nodevalue
```

**Exemplo #2 Exemplo de **Zookeeper::get()** com stat**

Obtém informação stat de um nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$stat = [];
$zookeeper->get($path, null, $stat);
var_dump($stat);
?>
```

O exemplo acima produzirá:

```
array(11) {
  ["czxid"]=>
  float(0)
  ["mzxid"]=>
  float(0)
  ["ctime"]=>
  float(0)
  ["mtime"]=>
  float(0)
  ["version"]=>
  int(0)
  ["cversion"]=>
  int(-2)
  ["aversion"]=>
  int(0)
  ["ephemeralOwner"]=>
  float(0)
  ["dataLength"]=>
  int(0)
  ["numChildren"]=>
  int(2)
  ["pzxid"]=>
  float(0)
}
```

### Veja também

- [Zookeeper::set()](zookeeper.set.md) - Define os dados associados a um nó
- [ZookeeperException](class.zookeeperexception.md)

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
