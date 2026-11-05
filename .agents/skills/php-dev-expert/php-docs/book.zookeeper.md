# ZooKeeper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.zookeeper.php

---

# ZooKeeper

# Introdução

Esta extensão usa a biblioteca libzookeeper para fornecer API para comunicação com o serviço ZooKeeper.

O ZooKeeper é um projeto do Apache que permite um serviço centralizado para manter informações de configuração, nomenclatura, fornecer sincronização distribuída e fornecer serviços de grupo.

- [Instalação/Configuração](zookeeper.setup.md)
  - [Dependências](zookeeper.requirements.md)
  - [Instalação](zookeeper.installation.md)
  - [Configurações de Execução](zookeeper.configuration.md)
- [Funções de ZooKeeper](ref.zookeeper.md)
  - [zookeeper\_dispatch](function.zookeeper-dispatch.md) — Chama funções de retorno para operações pendentes
- [Zookeeper](class.zookeeper.md) — A classe Zookeeper
  - [Zookeeper::addAuth](zookeeper.addauth.md) — Especifica credenciais da aplicação
  - [Zookeeper::close](zookeeper.close.md) — Fecha o identificador do zookeeper e libera todos os recursos
  - [Zookeeper::connect](zookeeper.connect.md) — Cria um identificador usado para comunicação com o ZooKeeper
  - [Zookeeper::\_\_construct](zookeeper.construct.md) — Cria um identificador para comunicação com o ZooKeeper
  - [Zookeeper::create](zookeeper.create.md) — Cria um nó de forma síncrona
  - [Zookeeper::delete](zookeeper.delete.md) — Exclui um nó no zookeeper de forma síncrona
  - [Zookeeper::exists](zookeeper.exists.md) — Verifica a existência de um nó no zookeeper de forma síncrona
  - [Zookeeper::get](zookeeper.get.md) — Obtém os dados associados a um nó de forma síncrona
  - [Zookeeper::getAcl](zookeeper.getacl.md) — Obtém a ACL associada a um nó de forma síncrona
  - [Zookeeper::getChildren](zookeeper.getchildren.md) — Lista os filhos de um nó de forma síncrona
  - [Zookeeper::getClientId](zookeeper.getclientid.md) — Retorna o ID da sessão do cliente, válido somente se estiver conectado no momento (ou seja, o último estado do observador é ZOO\_CONNECTED\_STATE)
  - [Zookeeper::getConfig](zookeeper.getconfig.md) — Obtém instância de ZookeeperConfig
  - [Zookeeper::getRecvTimeout](zookeeper.getrecvtimeout.md) — Retorna o tempo limite desta sessão, válido somente se estiver conectado no momento (ou seja, o último estado do observador foi ZOO\_CONNECTED\_STATE). Este valor pode mudar após a reconexão do servidor.
  - [Zookeeper::getState](zookeeper.getstate.md) — Obtém o estado da conexão do zookeper
  - [Zookeeper::isRecoverable](zookeeper.isrecoverable.md) — Verifica se o estado atual da conexão do zookeeper pode ser recuperado
  - [Zookeeper::set](zookeeper.set.md) — Define os dados associados a um nó
  - [Zookeeper::setAcl](zookeeper.setacl.md) — Define a ACL associada a um nó de forma síncrona
  - [Zookeeper::setDebugLevel](zookeeper.setdebuglevel.md) — Define o nível de depuração para a biblioteca
  - [Zookeeper::setDeterministicConnOrder](zookeeper.setdeterministicconnorder.md) — Habilita/desabilita a randomização da ordem da extremidade final do quorum
  - [Zookeeper::setLogStream](zookeeper.setlogstream.md) — Define o fluxo a ser usado pela biblioteca para registro
  - [Zookeeper::setWatcher](zookeeper.setwatcher.md) — Define uma função observadora
- [ZookeeperConfig](class.zookeeperconfig.md) — A classe ZookeeperConfig
  - [ZookeeperConfig::add](zookeeperconfig.add.md) — Adiciona servidores ao conjunto
  - [ZookeeperConfig::get](zookeeperconfig.get.md) — Obtém a última configuração confirmada do cluster ZooKeeper, conforme conhecida pelo servidor ao qual o cliente está conectado, de forma síncrona
  - [ZookeeperConfig::remove](zookeeperconfig.remove.md) — Remove servidores do conjunto
  - [ZookeeperConfig::set](zookeeperconfig.set.md) — Altera a associação do conjunto de clusters ZK e as funções dos pares do conjunto
- [ZookeeperException](class.zookeeperexception.md) — A classe ZookeeperException
- [ZookeeperAuthenticationException](class.zookeeperauthenticationexception.md) — A classe ZookeeperAuthenticationException
- [ZookeeperConnectionException](class.zookeeperconnectionexception.md) — A classe ZookeeperConnectionException
- [ZookeeperMarshallingException](class.zookeepermarshallingexception.md) — A classe ZookeeperMarshallingException
- [ZookeeperNoNodeException](class.zookeepernonodeexception.md) — A classe ZookeeperNoNodeException
- [ZookeeperOperationTimeoutException](class.zookeeperoperationtimeoutexception.md) — A classe ZookeeperOperationTimeoutException
- [ZookeeperSessionException](class.zookeepersessionexception.md) — A classe ZookeeperSessionException

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
