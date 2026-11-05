# Lista os filhos de um nó de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.getchildren.php

---

# Zookeeper::getChildren

(PECL zookeeper >= 0.1.0)

Zookeeper::getChildren — Lista os filhos de um nó de forma síncrona

### Descrição

public
function **Zookeeper::getChildren**([string](language.types.string.md) `$path`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**): [array](language.types.array.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`watcher_cb`
:   Se for diferente de zero, um relógio será definido no servidor para notificar o cliente se o nó mudar.

### Valor Retornado

Retorna um array com caminhos filhos em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem de parâmetros ou tipos estão errados ou não listam os filhos de um nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::getChildren()****

Listando filhos de um nó.

```
<?php

$zookeeper = new Zookeeper('localhost:2181');
$path = '/zookeeper';
$r = $zookeeper->getchildren($path);

if ($r) {
    var_dump($r);
} else {
    echo 'ERR';
}

?>
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  string(6) "config"
}
```

### Veja também

- [Zookeeper::create()](zookeeper.create.md) - Cria um nó de forma síncrona
- [Zookeeper::delete()](zookeeper.delete.md) - Exclui um nó no zookeeper de forma síncrona
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
