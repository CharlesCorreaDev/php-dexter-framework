# A classe ZMQ

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zmq.php

---

# A classe ZMQ

(PECL zmq >= 0.5.0)

## Introdução

## Resumo da classe

class **ZMQ**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[SOCKET\_PAIR](class.zmq.md#zmq.constants.socket-pair);

const
[int](language.types.integer.md)
[SOCKET\_PUB](class.zmq.md#zmq.constants.socket-pub);

const
[int](language.types.integer.md)
[SOCKET\_SUB](class.zmq.md#zmq.constants.socket-sub);

const
[int](language.types.integer.md)
[SOCKET\_REQ](class.zmq.md#zmq.constants.socket-req);

const
[int](language.types.integer.md)
[SOCKET\_REP](class.zmq.md#zmq.constants.socket-rep);

const
[int](language.types.integer.md)
[SOCKET\_XREQ](class.zmq.md#zmq.constants.socket-xreq);

const
[int](language.types.integer.md)
[SOCKET\_XREP](class.zmq.md#zmq.constants.socket-xrep);

const
[int](language.types.integer.md)
[SOCKET\_PUSH](class.zmq.md#zmq.constants.socket-push);

const
[int](language.types.integer.md)
[SOCKET\_PULL](class.zmq.md#zmq.constants.socket-pull);

const
[int](language.types.integer.md)
[SOCKET\_ROUTER](class.zmq.md#zmq.constants.socket-router);

const
[int](language.types.integer.md)
[SOCKET\_DEALER](class.zmq.md#zmq.constants.socket-dealer);

const
[int](language.types.integer.md)
[SOCKET\_XPUB](class.zmq.md#zmq.constants.socket-xpub);

const
[int](language.types.integer.md)
[SOCKET\_XSUB](class.zmq.md#zmq.constants.socket-xsub);

const
[int](language.types.integer.md)
[SOCKET\_STREAM](class.zmq.md#zmq.constants.socket-stream);

const
[int](language.types.integer.md)
[SOCKOPT\_HWM](class.zmq.md#zmq.constants.sockopt-hwm);

const
[int](language.types.integer.md)
[SOCKOPT\_SNDHWM](class.zmq.md#zmq.constants.sockopt-sndhwm);

const
[int](language.types.integer.md)
[SOCKOPT\_RCVHWM](class.zmq.md#zmq.constants.sockopt-rcvhwm);

const
[int](language.types.integer.md)
[SOCKOPT\_AFFINITY](class.zmq.md#zmq.constants.sockopt-affinity);

const
[int](language.types.integer.md)
[SOCKOPT\_IDENTITY](class.zmq.md#zmq.constants.sockopt-identity);

const
[int](language.types.integer.md)
[SOCKOPT\_SUBSCRIBE](class.zmq.md#zmq.constants.sockopt-subscribe);

const
[int](language.types.integer.md)
[SOCKOPT\_UNSUBSCRIBE](class.zmq.md#zmq.constants.sockopt-unsubscribe);

const
[int](language.types.integer.md)
[SOCKOPT\_RATE](class.zmq.md#zmq.constants.sockopt-rate);

const
[int](language.types.integer.md)
[SOCKOPT\_RECOVERY\_IVL](class.zmq.md#zmq.constants.sockopt-recovery-ivl);

const
[int](language.types.integer.md)
[SOCKOPT\_RECONNECT\_IVL](class.zmq.md#zmq.constants.sockopt-reconnect-ivl);

const
[int](language.types.integer.md)
[SOCKOPT\_RECONNECT\_IVL\_MAX](class.zmq.md#zmq.constants.sockopt-reconnect-ivl-max);

const
[int](language.types.integer.md)
[SOCKOPT\_MCAST\_LOOP](class.zmq.md#zmq.constants.sockopt-mcast-loop);

const
[int](language.types.integer.md)
[SOCKOPT\_SNDBUF](class.zmq.md#zmq.constants.sockopt-sndbuf);

const
[int](language.types.integer.md)
[SOCKOPT\_RCVBUF](class.zmq.md#zmq.constants.sockopt-rcvbuf);

const
[int](language.types.integer.md)
[SOCKOPT\_RCVMORE](class.zmq.md#zmq.constants.sockopt-rcvmore);

const
[int](language.types.integer.md)
[SOCKOPT\_TYPE](class.zmq.md#zmq.constants.sockopt-type);

const
[int](language.types.integer.md)
[SOCKOPT\_LINGER](class.zmq.md#zmq.constants.sockopt-linger);

const
[int](language.types.integer.md)
[SOCKOPT\_BACKLOG](class.zmq.md#zmq.constants.sockopt-backlog);

const
[int](language.types.integer.md)
[SOCKOPT\_MAXMSGSIZE](class.zmq.md#zmq.constants.sockopt-maxmsgsize);

const
[int](language.types.integer.md)
[SOCKOPT\_SNDTIMEO](class.zmq.md#zmq.constants.sockopt-sndtimeo);

const
[int](language.types.integer.md)
[SOCKOPT\_RCVTIMEO](class.zmq.md#zmq.constants.sockopt-rcvtimeo);

const
[int](language.types.integer.md)
[SOCKOPT\_IPV4ONLY](class.zmq.md#zmq.constants.sockopt-ipv4only);

const
[int](language.types.integer.md)
[SOCKOPT\_LAST\_ENDPOINT](class.zmq.md#zmq.constants.sockopt-last-endpoint);

const
[int](language.types.integer.md)
[SOCKOPT\_TCP\_KEEPALIVE\_IDLE](class.zmq.md#zmq.constants.sockopt-tcp-keepalive-idle);

const
[int](language.types.integer.md)
[SOCKOPT\_TCP\_KEEPALIVE\_CNT](class.zmq.md#zmq.constants.sockopt-tcp-keepalive-cnt);

const
[int](language.types.integer.md)
[SOCKOPT\_TCP\_KEEPALIVE\_INTVL](class.zmq.md#zmq.constants.sockopt-tcp-keepalive-intvl);

const
[int](language.types.integer.md)
[SOCKOPT\_TCP\_ACCEPT\_FILTER](class.zmq.md#zmq.constants.sockopt-tcp-accept-filter);

const
[int](language.types.integer.md)
[SOCKOPT\_TCP\_ACCEPT\_FILTER](class.zmq.md#zmq.constants.sockopt-tcp-accept-filter);

const
[int](language.types.integer.md)
[SOCKOPT\_DELAY\_ATTACH\_ON\_CONNECT](class.zmq.md#zmq.constants.sockopt-delay-attach-on-connect);

const
[int](language.types.integer.md)
[SOCKOPT\_XPUB\_VERBOSE](class.zmq.md#zmq.constants.sockopt-xpub-verbose);

const
[int](language.types.integer.md)
[SOCKOPT\_ROUTER\_RAW](class.zmq.md#zmq.constants.sockopt-router-raw);

const
[int](language.types.integer.md)
[SOCKOPT\_IPV6](class.zmq.md#zmq.constants.sockopt-ipv6);

const
[int](language.types.integer.md)
[CTXOPT\_MAX\_SOCKETS](class.zmq.md#zmq.constants.ctxopt-max-sockets);

const
[int](language.types.integer.md)
[POLL\_IN](class.zmq.md#zmq.constants.poll-in);

const
[int](language.types.integer.md)
[POLL\_OUT](class.zmq.md#zmq.constants.poll-out);

const
[int](language.types.integer.md)
[MODE\_NOBLOCK](class.zmq.md#zmq.constants.mode-noblock);

const
[int](language.types.integer.md)
[MODE\_DONTWAIT](class.zmq.md#zmq.constants.mode-dontwait);

const
[int](language.types.integer.md)
[MODE\_SNDMORE](class.zmq.md#zmq.constants.mode-sndmore);

const
[int](language.types.integer.md)
[ERR\_INTERNAL](class.zmq.md#zmq.constants.err-internal);

const
[int](language.types.integer.md)
[ERR\_EAGAIN](class.zmq.md#zmq.constants.err-eagain);

const
[int](language.types.integer.md)
[ERR\_ENOTSUP](class.zmq.md#zmq.constants.err-enotsup);

const
[int](language.types.integer.md)
[ERR\_EFSM](class.zmq.md#zmq.constants.err-efsm);

const
[int](language.types.integer.md)
[ERR\_ETERM](class.zmq.md#zmq.constants.err-eterm);

/\* Métodos \*/

private function [\_\_construct](zmq.construct.md)()

}

## Constantes predefinidas

## Tipos de Constantes ZMQ

**`ZMQ::SOCKET_PAIR`**
:   Padrão de paridade exclusiva

**`ZMQ::SOCKET_PUB`**
:   Socket de publicação

**`ZMQ::SOCKET_SUB`**
:   Socket de subscrição

**`ZMQ::SOCKET_REQ`**
:   Socket de requisição

**`ZMQ::SOCKET_REP`**
:   Socket de resposta

**`ZMQ::SOCKET_XREQ`**
:   Um pseudônimo para SOCKET\_DEALER

**`ZMQ::SOCKET_XREP`**
:   Um pseudônimo para SOCKET\_ROUTER

**`ZMQ::SOCKET_PUSH`**
:   Um socket para envio de fluxo

**`ZMQ::SOCKET_PULL`**
:   Um socket para recepção de fluxo

**`ZMQ::SOCKET_ROUTER`**
:   Um socket de resposta estendido que pode rotear respostas para os solicitantes

**`ZMQ::SOCKET_DEALER`**
:   Um socket estendido de requisição que equilibra a carga para todos os clientes conectados

**`ZMQ::SOCKET_XPUB`**
:   Similar ao SOCKET\_PUB, exceto que é possível receber subscrições como mensagens.
    A mensagem de subscrição é 0 (não subscrever) ou 1 (subscrever) seguido por um tópico.

**`ZMQ::SOCKET_XSUB`**
:   Similar ao SOCKET\_SUB, exceto que é possível enviar subscrições como mensagens. Consulte SOCKET\_XPUB para saber o formato.

**`ZMQ::SOCKET_STREAM`**
:   Usado para enviar e receber dados via TCP de um cliente não ØMQ. Disponível se compilado em versão igual ou superior a 4.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_HWM`**
:   O marcador High Water Mark (HWM) para as mensagens que entram e saem, é um marcador de limite do número máximo de mensagens que a ØMQ enfileira na memória para um cliente qualquer ao qual o socket especificado esteja se comunicando. Definir esta opção em um socket afetará apenas as conexões feitas após a configuração da opção. Na ZeroMQ 3.x esta opção é um encapsulador para a configuração de SNDHWM e RCVHWM. (Valor: [int](language.types.integer.md)).

**`ZMQ::SOCKOPT_SNDHWM`**
:   A opção ZMQ\_SNDHWM define o limite HWM para as mensagens de saída no socket especificado. Disponível se compilado na versão 3.x ou maior da ZeroMQ (Valor: [int](language.types.integer.md)).

**`ZMQ::SOCKOPT_RCVHWM`**
:   A opção ZMQ\_RCVHWM define o limite HWM para as mensagens de entrada no socket especificado. Disponível se compilado na versão 3.x ou maior da ZeroMQ (Valor: [int](language.types.integer.md)).

**`ZMQ::SOCKOPT_AFFINITY`**
:   Define a relação com a thread de E/S (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_IDENTITY`**
:   Define a identidade do socket (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_SUBSCRIBE`**
:   Estabelece um filtro de mensagens. Válido para o socket subscrito (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_UNSUBSCRIBE`**
:   Remove um filtro de mensagens. Válido para o socket subscrito (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_RATE`**
:   Define a taxa de envio para sockets multicast (pgm) (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_RECOVERY_IVL`**
:   Define o intervalo de recuperação multicast (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_RECONNECT_IVL`**
:   Define o intervalo de reconexão inicial (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_RECONNECT_IVL_MAX`**
:   Define o intervalo máximo de reconexão (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_MCAST_LOOP`**
:   Controla o retorno do multicast (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_SNDBUF`**
:   Define o tamanho do buffer do kernel de transmissão (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_RCVBUF`**
:   Define o tamanho do buffer do kernel de recepção (Valor: [int](language.types.integer.md) >= 0)

**`ZMQ::SOCKOPT_RCVMORE`**
:   Recebe mensagens com várias partes (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_TYPE`**
:   Obtém o tipo de socket. Válido para o método getSockOpt (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_LINGER`**
:   O tempo de permanência após fechamento do socket. Especifica por quanto tempo o socket fica bloqueado
    enquanto tenta dar vazão às mensagens depois que ele tenha sido fechado (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_BACKLOG`**
:   A opção SOCKOPT\_BACKLOG define o comprimento máximo da fila de conexões de clientes para o socket especificado; isso só se aplica a transportes orientados a conexão. (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_MAXMSGSIZE`**
:   Limita o tamanho máximo da mensagem de entrada. O valor -1 significa que não há limite. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_SNDTIMEO`**
:   Define o tempo limite para a operação de envio no socket. O valor -1 indica que não há limite. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_RCVTIMEO`**
:   Define o tempo limite para a operação de recepção no socket. O valor -1 indica que não há limite. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_IPV4ONLY`**
:   Desabilita o suporte ao IPV6 caso o valor seja 1. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_LAST_ENDPOINT`**
:   Recupera o último destino conectado - para o uso com as portas \* coringa. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_TCP_KEEPALIVE_IDLE`**
:   Tempo de ociosidade para os pacotes TCP keepalive. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_TCP_KEEPALIVE_CNT`**
:   Contador para os pacotes TCp keepalive. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_TCP_KEEPALIVE_INTVL`**
:   Intervalo para os pacotes TCP keepalive. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::SOCKOPT_DELAY_ATTACH_ON_CONNECT`**
:   Define uma string CIDR para comparar com as conexões TCP de entrada. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_TCP_ACCEPT_FILTER`**
:   Define uma string CIDR para comparar com as conexões TCP de entrada. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_XPUB_VERBOSE`**
:   Define que a opção XPUB deve receber uma mensagem de aplicação em cada instância de subscrição. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_ROUTER_RAW`**
:   Define o modo raw (sem processamento) para o ROUTER, quando passado o valor 1. No modo raw, ao usar um socket TCP, a leitura e escrita dos dados será realizada sem o processamento do ZeroMQ.
    Disponível se compilado em versão igual ou superior a 4.0 da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::SOCKOPT_IPV6`**
:   Habilita o protocolo IPV6. Disponível se compilado em versão igual ou superior a 4.0 da ZeroMQ (Valor: [string](language.types.string.md))

**`ZMQ::CTXOPT_MAX_SOCKETS`**
:   O número máximo de sockets para o contexto. Disponível se compilado em versão igual ou superior a 3.x da ZeroMQ (Valor: [int](language.types.integer.md))

**`ZMQ::POLL_IN`**
:   Consulta se há dados de entrada

**`ZMQ::POLL_OUT`**
:   Consulta se há dados e saída

**`ZMQ::MODE_NOBLOCK`**
:   Define a operação como não bloqueante. Constante descontinuada, use ZMQ::MODE\_DONTWAIT em seu lugar

**`ZMQ::MODE_DONTWAIT`**
:   Define a operação como não bloqueante

**`ZMQ::MODE_SNDMORE`**
:   Envia uma mensagem particionada (com várias partes)

**`ZMQ::DEVICE_FORWARDER`**
:   Define um dispositivo de encaminhamento

**`ZMQ::DEVICE_QUEUE`**
:   Define um dispositivo de enfileiramento

**`ZMQ::DEVICE_STREAMER`**
:   Define um dispositivo de fluxo

**`ZMQ::ERR_INTERNAL`**
:   Erro interno na extensão ZMQ

**`ZMQ::ERR_EAGAIN`**
:   Implica que a operação será bloqueante caso ZMQ::MODE\_DONTWAIT seja usada

**`ZMQ::ERR_ENOTSUP`**
:   A operação não é suportada pelo tipo de socket informado

**`ZMQ::ERR_EFSM`**
:   A operação não pode ser executada porque o socket não está em um estado válido

**`ZMQ::ERR_ETERM`**
:   O contexto foi encerrado

## Índice

- [ZMQ::\_\_construct](zmq.construct.md) — Construtor da classe ZMQ

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
