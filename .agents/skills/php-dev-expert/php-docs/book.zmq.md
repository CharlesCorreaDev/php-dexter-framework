# ZMQ

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.zmq.php

---

# ZMQ

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

"ØMQ é uma biblioteca que permite a criação e implementação rápida de aplicações baseadas na troca rápida de mensagens." --0MQ Website

Para mais informações sobre 0MQ, consulte [» https://zeromq.org/](https://zeromq.org/).

- [Instalação/Configuração](zmq.setup.md)
  - [Dependências](zmq.requirements.md)
  - [Instalação](zmq.installation.md)
- [ZMQ](class.zmq.md) — A classe ZMQ
  - [ZMQ::\_\_construct](zmq.construct.md) — Construtor da classe ZMQ
- [ZMQContext](class.zmqcontext.md) — A classe ZMQContext
  - [ZMQContext::\_\_construct](zmqcontext.construct.md) — Constrói um novo objeto ZMQContext
  - [ZMQContext::getOpt](zmqcontext.getopt.md) — Obtém uma opção de contexto
  - [ZMQContext::getSocket](zmqcontext.getsocket.md) — Cria um novo socket
  - [ZMQContext::isPersistent](zmqcontext.ispersistent.md) — Retorna se o contexto é persistente
  - [ZMQContext::setOpt](zmqcontext.setopt.md) — Define uma opção de socket
- [ZMQSocket](class.zmqsocket.md) — A classe ZMQSocket
  - [ZMQSocket::bind](zmqsocket.bind.md) — Associa o socket
  - [ZMQSocket::connect](zmqsocket.connect.md) — Conecta o socket
  - [ZMQSocket::\_\_construct](zmqsocket.construct.md) — Constrói um novo ZMQSocket
  - [ZMQSocket::disconnect](zmqsocket.disconnect.md) — Desconecta um socket
  - [ZMQSocket::getEndpoints](zmqsocket.getendpoints.md) — Obtém uma lista de destinos
  - [ZMQSocket::getPersistentId](zmqsocket.getpersistentid.md) — Obtém o id persistente
  - [ZMQSocket::getSocketType](zmqsocket.getsockettype.md) — Retorna o tipo de socket
  - [ZMQSocket::getSockOpt](zmqsocket.getsockopt.md) — Obtém a opção do socket
  - [ZMQSocket::isPersistent](zmqsocket.ispersistent.md) — Informa se o soquete é persistente
  - [ZMQSocket::recv](zmqsocket.recv.md) — Recebe uma mensagem
  - [ZMQSocket::recvMulti](zmqsocket.recvmulti.md) — Recebe uma mensagem de múltiplas partes
  - [ZMQSocket::send](zmqsocket.send.md) — Envia uma mensagem
  - [ZMQSocket::sendmulti](zmqsocket.sendmulti.md) — Envia uma mensagem de múltiplas partes
  - [ZMQSocket::setSockOpt](zmqsocket.setsockopt.md) — Define uma opção de soquete
  - [ZMQSocket::unbind](zmqsocket.unbind.md) — Desvincula o socket
- [ZMQPoll](class.zmqpoll.md) — A classe ZMQPoll
  - [ZMQPoll::add](zmqpoll.add.md) — Adiciona o item na lista de pesquisa
  - [ZMQPoll::clear](zmqpoll.clear.md) — Limpa a lista de consulta
  - [ZMQPoll::count](zmqpoll.count.md) — Conta os itens na lista de consulta
  - [ZMQPoll::getLastErrors](zmqpoll.getlasterrors.md) — Obtém erros da consulta
  - [ZMQPoll::poll](zmqpoll.poll.md) — Consulta os itens
  - [ZMQPoll::remove](zmqpoll.remove.md) — Remove um item da lista de consulta
- [ZMQDevice](class.zmqdevice.md) — A classe ZMQDevice
  - [ZMQDevice::\_\_construct](zmqdevice.construct.md) — Constrói um novo dispositivo
  - [ZMQDevice::getIdleTimeout](zmqdevice.getidletimeout.md) — Obtém o tempo limite de inatividade
  - [ZMQDevice::getTimerTimeout](zmqdevice.gettimertimeout.md) — Obtém o tempo limite do temporizador
  - [ZMQDevice::run](zmqdevice.run.md) — Executa o novo dispositivo
  - [ZMQDevice::setIdleCallback](zmqdevice.setidlecallback.md) — Define a função de retorno de inatividade
  - [ZMQDevice::setIdleTimeout](zmqdevice.setidletimeout.md) — Define o tempo limite de inatividade
  - [ZMQDevice::setTimerCallback](zmqdevice.settimercallback.md) — Define a função de retorno do temporizador
  - [ZMQDevice::setTimerTimeout](zmqdevice.settimertimeout.md) — Define o tempo limite do temporizador

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
