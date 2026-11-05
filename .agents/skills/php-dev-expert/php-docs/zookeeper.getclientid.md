# Retorna o ID da sessão do cliente, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO_CONNECTED_STATE)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.getclientid.php

---

# Zookeeper::getClientId

(PECL zookeeper >= 0.1.0)

Zookeeper::getClientId — Retorna o ID da sessão do cliente, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO\_CONNECTED\_STATE)

### Descrição

public
function **Zookeeper::getClientId**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da sessão do cliente em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite um erro/aviso PHP quando não consegue obter o ID da sessão do cliente.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::connect()](zookeeper.connect.md) - Cria um identificador usado para comunicação com o ZooKeeper
- [Zookeeper::getState()](zookeeper.getstate.md) - Obtém o estado da conexão do zookeper
- [Estados ZooKeeper](class.zookeeper.md#zookeeper.constants.states)
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
