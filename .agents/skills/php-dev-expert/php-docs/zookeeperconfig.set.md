# Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeperconfig.set.php

---

# ZookeeperConfig::set

(PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0)

ZookeeperConfig::set — Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto

### Descrição

public
function **ZookeeperConfig::set**([string](language.types.string.md) `$members`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

### Parâmetros

`members`
:   Lista separada por vírgulas de novas associações (por exemplo, conteúdo de um arquivo de configuração de associação) - para uso somente com uma reconfiguração não incremental.

`version`
:   A versão esperada do nó. A função falhará se a versão real do nó não corresponder à versão esperada. Se -1 for usado, a verificação de versão não ocorrerá.

`stat`
:   Se não for NULL, manterá o valor de stat para o caminho no retorno.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados quando a contagem ou os tipos dos parâmetros estão errados ou falham ao salvar o valor no nó.

### Examples

**Exemplo #1 Exemplo de **ZookeeperConfig::set()****

Reconfiguração.

```
<?php
$client = new Zookeeper();
$client->connect('localhost:2181');
$client->addAuth('digest', 'timandes:timandes');
$zkConfig = $client->getConfig();
$zkConfig->set("server.1=localhost:2888:3888:participant;0.0.0.0:2181");
?>
```

### Veja também

- [ZookeeperConfig::get()](zookeeperconfig.get.md) - Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona
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
