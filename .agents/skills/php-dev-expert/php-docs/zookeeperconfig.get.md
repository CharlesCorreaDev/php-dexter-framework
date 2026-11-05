# Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeperconfig.get.php

---

# ZookeeperConfig::get

(PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0)

ZookeeperConfig::get — Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona

### Descrição

public
function **ZookeeperConfig::get**([callable](language.types.callable.md) `$watcher_cb` = **`null`**, [array](language.types.array.md) `&$stat` = **`null`**): [string](language.types.string.md)

### Parâmetros

`watcher_cb`
:   Se for diferente de zero, um relógio será definido no servidor para notificar o cliente se o nó mudar.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

### Valor Retornado

Retorna a string de configuração em caso de sucesso e false em caso de falha.

### Erros/Exceções

Este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados quando a contagem de parâmetros ou os tipos estão errados ou não conseguem obter a configuração.

### Examples

**Exemplo #1 Exemplo de **ZookeeperConfig::get()****

Obtendo a configuração.

```
<?php
$zk = new Zookeeper();
$zk->connect('localhost:2181');
$zk->addAuth('digest', 'timandes:timandes');
$zkConfig = $zk->getConfig();
$r = $zkConfig->get();
if ($r)
  echo $r;
else
  echo 'ERR';
?>
```

O exemplo acima produzirá:

```
server.1=localhost:2888:3888:participant;0.0.0.0:2181
version=0xca01e881a2
```

### Veja também

- [ZookeeperConfig::set()](zookeeperconfig.set.md) - Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto
- [ZookeeperConfig::add()](zookeeperconfig.add.md) - Adiciona servidores ao conjunto
- [ZookeeperConfig::remove()](zookeeperconfig.remove.md) - Remove servidores do conjunto
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
