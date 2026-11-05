# Cria um nó de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.create.php

---

# Zookeeper::create

(PECL zookeeper >= 0.1.0)

Zookeeper::create — Cria um nó de forma síncrona

### Descrição

public
function **Zookeeper::create**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$value`,  
    [array](language.types.array.md) `$acls`,  
    [int](language.types.integer.md) `$flags` = **`null`**  
): [string](language.types.string.md)

Este método criará um nó no ZooKeeper. Um nó só pode ser criado se ainda não existir. Os sinalizadores de criação afetam a criação de nós. Se o sinalizador ZOO\_EPHEMERAL estiver definido, o nó será removido automaticamente se a sessão do cliente for encerrada. Se o sinalizador ZOO\_SEQUENCE estiver definido, um número de sequência único e crescente será anexado ao nome do caminho.

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`value`
:   Os dados a serem armazenados no nó.

`acls`
:   A ACL inicial do nó. A ACL não pode ser nula ou vazia.

`flags`
:   Este parâmetro pode ser definido como 0 para criação normal ou um OR dos sinalizadores de criação.

### Valor Retornado

Retorna o caminho do novo nó (pode ser diferente do caminho fornecido devido ao sinalizador ZOO\_SEQUENCE) em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem de parâmetros ou tipos estão errados ou falha ao criar o nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::create()****

Criando um novo nó.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$aclArray = array(
  array(
    'perms'  => Zookeeper::PERM_ALL,
    'scheme' => 'world',
    'id'     => 'anyone',
  )
);
$path = '/path/to/newnode';
$realPath = $zookeeper->create($path, null, $aclArray);
if ($realPath)
  echo $realPath;
else
  echo 'ERR';
?>
```

O exemplo acima produzirá:

```
/path/to/newnode
```

### Veja também

- [Zookeeper::delete()](zookeeper.delete.md) - Exclui um nó no zookeeper de forma síncrona
- [Zookeeper::getChildren()](zookeeper.getchildren.md) - Lista os filhos de um nó de forma síncrona
- [Permissões do ZooKeeper](class.zookeeper.md#zookeeper.constants.perms)
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
