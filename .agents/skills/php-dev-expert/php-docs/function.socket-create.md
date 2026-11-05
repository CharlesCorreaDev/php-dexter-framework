# Cria um soquete (ponto de extremidade para comunição)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-create.php

---

# socket\_create

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_create — Cria um soquete (ponto de extremidade para comunição)

### Descrição

function **socket\_create**([int](language.types.integer.md) `$domain`, [int](language.types.integer.md) `$type`, [int](language.types.integer.md) `$protocol`): [Socket](class.socket.md)|[false](language.types.singleton.md)

Cria e retorna uma instância de [Socket](class.socket.md), também referenciado como um ponto de extremidade
de comunicação. Uma conexão típica de rede é construída com 2 soquetes, um
fazendo o papel do cliente, e outro fazendo o papel do servidor.

### Parâmetros

`domain`
:   O parâmetro `domain` (domínio) especifica a família de
    protocolo a ser usada pelo soquete.

    **Famílias de endereços/protocolos disponíveis**

    | Domínio | Descrição |
    | --- | --- |
    | **`AF_INET`** | Protocolos baseados em Internet IPv4. TCP e UDP são protocolos comuns desta família. |
    | **`AF_INET6`** | Protocolos baseados em Internet IPv6. TCP e UDP são protocolos comuns desta família. |
    | **`AF_UNIX`** | Família de protocolos de comunicação local. Alta eficiência e pouca sobrecarga fazem dela uma ótima forma de IPC (Comunicação Entre Processos, da sigla em inglês). |

`type`
:   O parâmetro `type` seleciona o tipo de comunicação a
    ser usada pelo soquete.

    **Tipos de soquete disponíveis**

    | Tipo | Descrição |
    | --- | --- |
    | **`SOCK_STREAM`** | Fornece fluxos de byte sequenciais, confiáveis, bidirecionais simultâneos, baseados em conexão. Um mecanismo de transmissão de dados fora-de-banda pode ser suportado. O protocolo TCP é baseado neste tipo de soquete. |
    | **`SOCK_DGRAM`** | Suporta datagramas (mensagens sem uma conexão e não confiáveis ​​de comprimento máximo fixo). O protocolo UDP é baseado neste tipo de soquete. |
    | **`SOCK_SEQPACKET`** | Fornece um caminho de transmissão de dados sequencial, confiável e bidirecional baseado em conexão para datagramas de comprimento máximo fixo; um consumidor é obrigado a ler um pacote inteiro com cada chamada de leitura. |
    | **`SOCK_RAW`** | Fornece acesso bruto ao protocolo de rede. Este tipo especial de soquete pode ser usado para construir manualmente qualquer tipo de protocolo. Um uso comum para esse tipo de soquete é realizar solicitações ICMP (como "ping"). |
    | **`SOCK_RDM`** | Fornece uma camada de datagrama confiável que não garante a ordenação. Na maior parte dos sistemas operacionais isto não está implementado. |

`protocol`
:   O parâmetro `protocol` define o protocolo
    específico dentro do domínio especificado em `domain` a ser usado
    durante a comunicação no socket retornado. O valor adequado pode ser
    recuperado por nome usando [getprotobyname()](function.getprotobyname.md). Se
    o protocolo desejado for TCP ou UDP, as constantes correspondentes
    **`SOL_TCP`** e **`SOL_UDP`**
    também podem ser usadas.

    **Protocolos comuns**

    | Nome | Descrição |
    | --- | --- |
    | icmp | O Internet Control Message Protocol é usado principalmente por "gateways" e "hosts" para relatar erros na comunicação de datagramas. O comando "ping" (presente na maioria dos sistemas operacionais modernos) é um exemplo de aplicação do ICMP. |
    | udp | O User Datagram Protocol é um protocolo sem conexão e não confiável, com comprimentos de registro fixos. Devido a esses aspectos, o UDP requer uma quantidade mínima de sobrecarga de protocolo. |
    | tcp | O Transmission Control Protocol é um protocolo confiável, baseado em conexão, orientado a fluxo e bidirecional simultâneo. O TCP garante que todos os pacotes de dados serão recebidos na ordem em que foram enviados. Se algum pacote for perdido de alguma forma durante a comunicação, o TCP retransmitirá automaticamente o pacote até que o computador de destino reconheça esse pacote. Por razões de confiabilidade e desempenho, a própria implementação do TCP decide os limites apropriados do octeto da camada de comunicação do datagrama subjacente. Portanto, as aplicações TCP devem permitir a possibilidade de transmissão parcial de registros. |

### Valor Retornado

**socket\_create()** retorna uma instância de [Socket](class.socket.md) em caso de sucesso,
ou **`false`** em caso de erro. O código de erro real pode ser recuperado chamando
[socket\_last\_error()](function.socket-last-error.md). Este código de erro pode ser passado para
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

### Erros/Exceções

Se um `domain` ou
`type` inválidos forem fornecidos, o padrão de **socket\_create()**
é usar **`AF_INET`** e
**`SOCK_STREAM`** respectivamente e emitir, adicionalmente, uma
mensagem **`E_WARNING`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora suporta a criação de soquetes da família **`AF_PACKET`**. |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Veja também

- [socket\_accept()](function.socket-accept.md) - Aceita uma conexão em um soquete
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

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
