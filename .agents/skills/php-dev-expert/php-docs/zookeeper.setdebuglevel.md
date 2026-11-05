# Define o nível de depuração para a biblioteca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.setdebuglevel.php

---

# Zookeeper::setDebugLevel

(PECL zookeeper >= 0.1.0)

Zookeeper::setDebugLevel — Define o nível de depuração para a biblioteca

### Descrição

public
static
function **Zookeeper::setDebugLevel**([int](language.types.integer.md) `$logLevel`): [bool](language.types.boolean.md)

### Parâmetros

`logLevel`
:   Constantes de nível de registro do ZooKeeper.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem ou os tipos de parâmetros estão errados ou não conseguem definir o nível de depuração.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Examples

**Exemplo #1 Exemplo de **Zookeeper::setDebugLevel()****

Definindo o nível de depuração.

```
<?php
$r = Zookeeper::setDebugLevel(Zookeeper::LOG_LEVEL_WARN);
if ($r)
  echo 'SUCESSO';
else
  echo 'ERRO';
?>
?>
```

O exemplo acima produzirá:

```
SUCESSO
```

### Veja também

- [Níveis de Registro ZooKeeper](class.zookeeper.md#zookeeper.constants.log-levels)
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
