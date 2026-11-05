# Adiciona servidores ao conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeperconfig.add.php

---

# ZookeeperConfig::add

(PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0)

ZookeeperConfig::add — Adiciona servidores ao conjunto

### Descrição

public
function **ZookeeperConfig::add**([string](language.types.string.md) `$members`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

### Parâmetros

`members`
:   Lista separada por vírgulas de servidores a serem adicionados ao conjunto. Cada um possui uma linha de configuração para um servidor a ser adicionado (como apareceria em um
    arquivo de configuração), apenas para quóruns principais.

`version`
:   A versão esperada do nó. A função falhará se a versão real do nó não corresponder à versão esperada. Se -1 for usado, a verificação de versão não ocorrerá.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados quando a contagem ou os tipos dos parâmetros estão errados ou falham ao salvar o valor no nó.

### Examples

**Exemplo #1 Exemplo de **ZookeeperConfig::add()****

Adicionando membros.

```
<?php
$client = new Zookeeper();
$client->connect('localhost:2181');
$client->addAuth('digest', 'timandes:timandes');
$zkConfig = $client->getConfig();
$zkConfig->set("server.1=localhost:2888:3888:participant;0.0.0.0:2181");
$zkConfig->add("server.2=localhost:2889:3889:participant;0.0.0.0:2182");
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
server.2=localhost:2889:3889:participant;0.0.0.0:2182
version=0xca01e881a2
```

### Veja também

- [ZookeeperConfig::get()](zookeeperconfig.get.md) - Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona
- [ZookeeperConfig::set()](zookeeperconfig.set.md) - Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto
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
