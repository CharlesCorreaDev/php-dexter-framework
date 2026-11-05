# Remove servidores do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeperconfig.remove.php

---

# ZookeeperConfig::remove

(PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0)

ZookeeperConfig::remove — Remove servidores do conjunto

### Descrição

public
function **ZookeeperConfig::remove**([string](language.types.string.md) `$id_list`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

### Parâmetros

`id_list`
:   Lista separada por vírgulas de IDs de servidores a serem removidos do conjunto. Cada um contém um ID de servidor a ser removido, apenas para quóruns principais.

`version`
:   A versão esperada do nó. A função falhará se a versão real do nó não corresponder à versão esperada. Se -1 for usado, a verificação de versão não ocorrerá.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados quando a contagem ou os tipos dos parâmetros estão errados ou falham ao salvar o valor no nó.

### Examples

**Exemplo #1 Exemplo de **ZookeeperConfig::remove()****

Removendo membros.

```
<?php
$client = new Zookeeper();
$client->connect('localhost:2181');
$client->addAuth('digest', 'timandes:timandes');
$zkConfig = $client->getConfig();
$zkConfig->set("server.1=localhost:2888:3888:participant;0.0.0.0:2181,server.2=localhost:2889:3889:participant;0.0.0.0:2182");
$zkConfig->remove("2");
echo $zkConfig->get();
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

- [ZookeeperConfig::get()](zookeeperconfig.get.md) - Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona
- [ZookeeperConfig::add()](zookeeperconfig.add.md) - Adiciona servidores ao conjunto
- [ZookeeperConfig::set()](zookeeperconfig.set.md) - Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto
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
