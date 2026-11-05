# Exclui um nó no zookeeper de forma síncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.delete.php

---

# Zookeeper::delete

(PECL zookeeper >= 0.2.0)

Zookeeper::delete — Exclui um nó no zookeeper de forma síncrona

### Descrição

public
function **Zookeeper::delete**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$version` = -1): [bool](language.types.boolean.md)

### Parâmetros

`path`
:   O nome do nó. Expresso como um nome de arquivo com barras separando os ancestrais do nó.

`version`
:   A versão esperada do nó. A função falhará se a versão real do nó não corresponder à versão esperada. Se -1 for usado, a verificação de versão não ocorrerá.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou não consegue excluir o nó.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::delete()****

Excluindo um nó existente.

```
<?php
$zookeeper = new Zookeeper('localhost:2181');
$path = '/path/to/node';
$r = $zookeeper->delete($path);
if ($r)
  echo 'SUCESSO';
else
  echo 'ERRO';
?>
```

O exemplo acima produzirá:

```
SUCESSO
```

### Veja também

- [Zookeeper::create()](zookeeper.create.md) - Cria um nó de forma síncrona
- [Zookeeper::getChildren()](zookeeper.getchildren.md) - Lista os filhos de um nó de forma síncrona
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
