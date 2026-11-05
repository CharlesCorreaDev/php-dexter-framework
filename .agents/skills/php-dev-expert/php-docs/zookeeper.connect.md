# Cria um identificador usado para comunicação com o ZooKeeper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zookeeper.connect.php

---

# Zookeeper::connect

(PECL zookeeper >= 0.2.0)

Zookeeper::connect — Cria um identificador usado para comunicação com o ZooKeeper

### Descrição

public
function **Zookeeper::connect**([string](language.types.string.md) `$host`, [callable](language.types.callable.md) `$watcher_cb` = **`null`**, [int](language.types.integer.md) `$recv_timeout` = 10000): [void](language.types.void.md)

Este método cria um novo identificador e uma sessão do zookeeper correspondente a esse identificador. O estabelecimento da sessão é assíncrono, o que significa que a sessão não deve ser considerada estabelecida até (e a menos que) um evento de estado ZOO\_CONNECTED\_STATE seja recebido.

### Parâmetros

`host`
:   Pares de host:porta separados por vírgula, cada um correspondendo a um servidor zk. Por exemplo: "127.0.0.1:3000,127.0.0.1:3001,127.0.0.1:3002".

`watcher_cb`
:   A função de retorno do observador global. Quando as notificações forem acionadas, esta função será invocada.

`recv_timeout`
:   O tempo limite para esta sessão, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO\_CONNECTED\_STATE).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Este método emite erro/aviso PHP quando a contagem de parâmetros ou tipos estiverem errados ou quando não for possível inicializar a instância.

**Cuidado**

Desde a versão 0.3.0, este método emite [ZookeeperException](class.zookeeperexception.md) e seus derivados.

### Veja também

- [Zookeeper::\_\_construct()](zookeeper.construct.md) - Cria um identificador para comunicação com o ZooKeeper
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
