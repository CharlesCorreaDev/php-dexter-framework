# Verifica se o estado atual da conexão do zookeeper pode ser recuperado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.isrecoverable.php

---

# Zookeeper::isRecoverable

(PECL zookeeper >= 0.1.0)

Zookeeper::isRecoverable — Verifica se o estado atual da conexão do zookeeper pode ser recuperado

### Descrição

public
function **Zookeeper::isRecoverable**(): [bool](language.types.boolean.md)

A aplicação deve fechar o identificador e tentar reconectar.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna verdadeiro/falso em caso de sucesso e falso em caso de falha.

### Erros/Exceções

Este método emite erro/aviso PHP quando a operação falha.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
- [Zookeeper::connect()](zookeeper.connect.md) - Cria um identificador usado para comunicação com o ZooKeeper
- [Zookeeper::getClientId()](zookeeper.getclientid.md) - Retorna o ID da sessão do cliente, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO\_CONNECTED\_STATE)
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
