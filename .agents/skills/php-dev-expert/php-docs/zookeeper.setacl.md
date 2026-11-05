# Define a ACL associada a um nó de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.setacl.php

---

# Zookeeper::setAcl

(PECL zookeeper >= 0.1.0)

Zookeeper::setAcl — Define a ACL associada a um nó de forma síncrona

### Descrição

public
function **Zookeeper::setAcl**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$version`, [array](language.types.array.md) `$acl`): [bool](language.types.boolean.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`version`
:   A versão esperada do caminho.

`acl`
:   O ACL a ser definido no caminho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou falha ao definir a ACL para um nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::setAcl()****

Definindo a ACL para um nó.

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
- [Zookeeper::getAcl()](zookeeper.getacl.md) - Obtém a ACL associada a um nó de forma síncrona
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
