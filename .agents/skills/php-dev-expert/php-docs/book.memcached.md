# Memcached

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.memcached.php

---

# Memcached

# Introdução

[» memcached](https://www.memcached.org/) é um sistema de armazenamento
em cache de objeto de memória distribuída de alto desempenho, de natureza genérica,
mas destinado ao uso para acelerar aplicativos da Web dinâmicos, aliviando a carga
do banco de dados.

Esta extensão usa a biblioteca libmemcached para fornecer uma API para comunicação
com servidores memcached. Ele também fornece um manipulador de
[sessão](ref.session.md) (`memcached`).

Informações sobre libmemcached podem ser encontradas em [» https://libmemcached.org/libMemcached.html](https://libmemcached.org/libMemcached.html).

- [Instalação/Configuração](memcached.setup.md)
  - [Dependências](memcached.requirements.md)
  - [Instalação](memcached.installation.md)
  - [Configurações de Execução](memcached.configuration.md)
- [Constantes predefinidas](memcached.constants.md)
- [Prazos de Expiração](memcached.expiration.md)
- [Funções de Retorno](memcached.callbacks.md)
  - [Funções de retorno de resultados](memcached.callbacks.result.md)
  - [Funções de retorno de cache de leitura](memcached.callbacks.read-through.md)
- [Suporte a sessões](memcached.sessions.md)
- [Memcached](class.memcached.md) — A classe Memcached
  - [Memcached::add](memcached.add.md) — Adiciona um item em uma nova key
  - [Memcached::addByKey](memcached.addbykey.md) — Adiciona um item sob uma nova chave em um servidor específico
  - [Memcached::addServer](memcached.addserver.md) — Adiciona um servidor ao pool de servidores
  - [Memcached::addServers](memcached.addservers.md) — Adiciona múltiplos servidores ao pool de servidores
  - [Memcached::append](memcached.append.md) — Anexa dados a um item existente
  - [Memcached::appendByKey](memcached.appendbykey.md) — Anexa dados a um item existente em um servidor específico
  - [Memcached::cas](memcached.cas.md) — Compara e troca um item
  - [Memcached::casByKey](memcached.casbykey.md) — Compara e troca um item em um servidor específico
  - [Memcached::\_\_construct](memcached.construct.md) — Cria uma instância do Memcached
  - [Memcached::decrement](memcached.decrement.md) — Decrementa o valor do item numérico
  - [Memcached::decrementByKey](memcached.decrementbykey.md) — Decrementa o valor do item numérico, armazenado em um servidor específico
  - [Memcached::delete](memcached.delete.md) — Remover um item
  - [Memcached::deleteByKey](memcached.deletebykey.md) — Remover um item de um servidor específico
  - [Memcached::deleteMulti](memcached.deletemulti.md) — Remover vários itens
  - [Memcached::deleteMultiByKey](memcached.deletemultibykey.md) — Remover vários itens de um servidor específico
  - [Memcached::fetch](memcached.fetch.md) — Busca o próximo resultado
  - [Memcached::fetchAll](memcached.fetchall.md) — Busca todos os resultados restantes
  - [Memcached::flush](memcached.flush.md) — Invalida todos os itens no cache
  - [Memcached::get](memcached.get.md) — Recupera um item
  - [Memcached::getAllKeys](memcached.getallkeys.md) — Obtém as chaves armazenadas em todos os servidores
  - [Memcached::getByKey](memcached.getbykey.md) — Recupera item de um servidor específico
  - [Memcached::getDelayed](memcached.getdelayed.md) — Solicita vários itens
  - [Memcached::getDelayedByKey](memcached.getdelayedbykey.md) — Solicita vários itens de um servidor específico
  - [Memcached::getMulti](memcached.getmulti.md) — Recupera vários itens
  - [Memcached::getMultiByKey](memcached.getmultibykey.md) — Recupere vários itens de um servidor específico
  - [Memcached::getOption](memcached.getoption.md) — Recupera um valor de opção do Memcached
  - [Memcached::getResultCode](memcached.getresultcode.md) — Retorna o código de resultado da última operação
  - [Memcached::getResultMessage](memcached.getresultmessage.md) — Retorna a mensagem descrevendo o resultado da última operação
  - [Memcached::getServerByKey](memcached.getserverbykey.md) — Mapear uma chave para um servidor
  - [Memcached::getServerList](memcached.getserverlist.md) — Obtenha a lista dos servidores no pool
  - [Memcached::getStats](memcached.getstats.md) — Obtem estatísticas do pool de servidores
  - [Memcached::getVersion](memcached.getversion.md) — Obtem informações da versão do pool de servidores
  - [Memcached::increment](memcached.increment.md) — Incrementa o valor do item numérico
  - [Memcached::incrementByKey](memcached.incrementbykey.md) — Incrementa o valor do item numérico, armazenado em um servidor específico
  - [Memcached::isPersistent](memcached.ispersistent.md) — Verifica se uma conexão persistente com o memcache está sendo usada
  - [Memcached::isPristine](memcached.ispristine.md) — Verifica se a instância foi criada recentemente
  - [Memcached::prepend](memcached.prepend.md) — Anexa dados a um item existente
  - [Memcached::prependByKey](memcached.prependbykey.md) — Anexa dados a um item existente em um servidor específico
  - [Memcached::quit](memcached.quit.md) — Fecha todas as conexões abertas
  - [Memcached::replace](memcached.replace.md) — Substitui o item em uma chave existente
  - [Memcached::replaceByKey](memcached.replacebykey.md) — Substitua o item em uma chave existente em um servidor específico
  - [Memcached::resetServerList](memcached.resetserverlist.md) — Limpa todos os servidores da lista de servidores
  - [Memcached::set](memcached.set.md) — Armazena um item
  - [Memcached::setByKey](memcached.setbykey.md) — Armazena um item em um servidor específico
  - [Memcached::setEncodingKey](memcached.setencodingkey.md) — Define a chave de criptografia AES para dados no Memcached
  - [Memcached::setMulti](memcached.setmulti.md) — Armazena vários itens
  - [Memcached::setMultiByKey](memcached.setmultibykey.md) — Armazena vários itens em um servidor específico
  - [Memcached::setOption](memcached.setoption.md) — Define uma opção Memcached
  - [Memcached::setOptions](memcached.setoptions.md) — Define opções do Memcached
  - [Memcached::setSaslAuthData](memcached.setsaslauthdata.md) — Define as credenciais a serem usadas para autenticação
  - [Memcached::touch](memcached.touch.md) — Define uma nova expiração para um item
  - [Memcached::touchByKey](memcached.touchbykey.md) — Define uma nova expiração para um item em um servidor específico
- [MemcachedException](class.memcachedexception.md) — A classe MemcachedException

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
