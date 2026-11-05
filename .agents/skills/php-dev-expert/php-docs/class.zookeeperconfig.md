# A classe ZookeeperConfig

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zookeeperconfig.php

---

# A classe ZookeeperConfig

(PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0)

## Introdução

A classe de manipulação de configuração do ZooKeeper.

## Resumo da classe

class **ZookeeperConfig**
{

/\* Métodos \*/

public
function [add](zookeeperconfig.add.md)([string](language.types.string.md) `$members`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

public
function [get](zookeeperconfig.get.md)([callable](language.types.callable.md) `$watcher_cb` = **`null`**, [array](language.types.array.md) `&$stat` = **`null`**): [string](language.types.string.md)

public
function [remove](zookeeperconfig.remove.md)([string](language.types.string.md) `$id_list`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

public
function [set](zookeeperconfig.set.md)([string](language.types.string.md) `$members`, [int](language.types.integer.md) `$version` = -1, [array](language.types.array.md) `&$stat` = **`null`**): [void](language.types.void.md)

}

## Índice

- [ZookeeperConfig::add](zookeeperconfig.add.md) — Adiciona servidores ao conjunto
- [ZookeeperConfig::get](zookeeperconfig.get.md) — Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona
- [ZookeeperConfig::remove](zookeeperconfig.remove.md) — Remove servidores do conjunto
- [ZookeeperConfig::set](zookeeperconfig.set.md) — Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto

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
