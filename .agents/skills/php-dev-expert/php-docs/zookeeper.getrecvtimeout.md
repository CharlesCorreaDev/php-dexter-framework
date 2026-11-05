# Retorna o tempo limite desta sessão, válido somente se estiver conectado no momento (ou seja, o último estado do observador foi ZOO_CONNECTED_STATE). Este valor pode mudar após a reconexão do servidor.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.getrecvtimeout.php

---

# Zookeeper::getRecvTimeout

(PECL zookeeper >= 0.1.0)

Zookeeper::getRecvTimeout — Retorna o tempo limite desta sessão, válido somente se estiver conectado no momento (ou seja, o último estado do observador foi ZOO\_CONNECTED\_STATE). Este valor pode mudar após a reconexão do servidor.

### Descrição

public
function **Zookeeper::getRecvTimeout**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo limite desta sessão em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a operação falha.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::connect()](zookeeper.connect.md) - Cria um identificador usado para comunicação com o ZooKeeper
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
