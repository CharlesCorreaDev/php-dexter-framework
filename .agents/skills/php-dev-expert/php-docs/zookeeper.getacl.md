# Obtém a ACL associada a um nó de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.getacl.php

---

# Zookeeper::getAcl

(PECL zookeeper >= 0.1.0)

Zookeeper::getAcl — Obtém a ACL associada a um nó de forma síncrona

### Descrição

public
function **Zookeeper::getAcl**([string](language.types.string.md) `$path`): [array](language.types.array.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

### Valor Retornado

Retorna um array ACL em caso de sucesso e false em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou não consegue obter a ACL de um nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::getAcl()****

Obtendo o ACL de um nó.

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
$zookeeper->setAcl($path, $aclArray);

$r = $zookeeper->getAcl($path);
if ($r)
  var_dump($r);
else
  echo 'ERR';
?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  array(3) {
    ["perms"]=>
    int(31)
    ["scheme"]=>
    string(5) "world"
    ["id"]=>
    string(6) "anyone"
  }
}
```

### Veja também

- [Zookeeper::create()](zookeeper.create.md) - Cria um nó de forma síncrona
- [Zookeeper::setAcl()](zookeeper.setacl.md) - Define a ACL associada a um nó de forma síncrona
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
