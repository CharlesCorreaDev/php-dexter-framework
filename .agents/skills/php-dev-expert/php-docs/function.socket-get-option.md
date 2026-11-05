# Obtém opções para o soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-get-option.php

---

# socket\_get\_option

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

socket\_get\_option — Obtém opções para o soquete

### Descrição

function **socket\_get\_option**([Socket](class.socket.md) `$socket`, [int](language.types.integer.md) `$level`, [int](language.types.integer.md) `$option`): [array](language.types.array.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_get\_option()** recupera o valor para
a opção especificado pelo parâmetro `option` para
o soquete informado no parâmetro `socket`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

`level`
:   O parâmetro `level` especifica o nível de
    protocolo no qual a opção reside. Por exemplo, para recuperar opções no
    nível do soquete, um parâmetro `level` com valor
    **`SOL_SOCKET`** seria usado. Outros níveis, como
    **`TCP`**, podem ser usados
    especificando o número do protocolo para aquele nível. Números de protocolo podem ser
    encontrados usando a função [getprotobyname()](function.getprotobyname.md).

`option`
:   **Opções de Soquete Disponíveis**

    | Opção | Descrição | Tipo |
    | --- | --- | --- |
    | **`SO_DEBUG`** | Reporta se a informação de depuração está sendo gravada. | [int](language.types.integer.md) |
    | **`SO_BROADCAST`** | Reporta se a transmissão de mensagens de difusão é suportada. | [int](language.types.integer.md) |
    | **`SO_REUSEADDR`** | Reporta se os endereços locais podem ser reutilizados. | [int](language.types.integer.md) |
    | **`SO_REUSEPORT`** | Reporta se as portas locais podem ser reutilizadas. | [int](language.types.integer.md) |
    | **`SO_KEEPALIVE`** | Reporta se as conexões são mantidas ativas com transmissão periódicas de mensagens. Se o soquete conectado falhar em responder a essas mensagens, a conexão é quebrada e os processos escrevendo nesse soquete são notificados com um sinal SIGPIPE. | [int](language.types.integer.md) |
    | **`SO_LINGER`** | Informa se o soquete especificado em `socket` permanece em [socket\_close()](function.socket-close.md) se houver dados presentes. Por padrão, quando o soquete é fechado, ele tenta enviar todos os dados não enviados. No caso de um soquete orientado a conexão, [socket\_close()](function.socket-close.md) aguardará que seu par reconheça os dados.  Se l\_onoff for diferente de zero e l\_linger for zero, todos os dados não enviados serão descartados e o RST (redefinição) será enviado ao par no caso de um soquete orientado a conexão.  Por outro lado, se l\_onoff for diferente de zero e l\_linger for diferente de zero, [socket\_close()](function.socket-close.md) irá bloquear até que todos os dados sejam enviados ou que tenha passado o tempo especificado em l\_linger. Se o soquete for não bloqueante, [socket\_close()](function.socket-close.md) falhará e retornará um erro. | [array](language.types.array.md). O array conterá duas chaves: l\_onoff e l\_linger. |
    | **`SO_OOBINLINE`** | Reporta se o `socket` mantém os dados fora-de-banda em linha. | [int](language.types.integer.md) |
    | **`SO_SNDBUF`** | Reporta o tamanho do buffer de envio. | [int](language.types.integer.md) |
    | **`SO_RCVBUF`** | Reporta o tamanho do buffer de recebimento. | [int](language.types.integer.md) |
    | **`SO_ERROR`** | Relata informações sobre o status do erro e o limpa. | [int](language.types.integer.md) (não pode ser definido por [socket\_set\_option()](function.socket-set-option.md)) |
    | **`SO_TYPE`** | Reporta o tipo do `socket` (ex.: **`SOCK_STREAM`**). | [int](language.types.integer.md) (não pode ser definido por [socket\_set\_option()](function.socket-set-option.md)) |
    | **`SO_DONTROUTE`** | Informa se as mensagens de saída ignoram os recursos de roteamento padrão. | [int](language.types.integer.md) |
    | **`SO_RCVLOWAT`** | Informa o número mínimo de bytes a serem processados ​​para operações de entrada de `socket`. | [int](language.types.integer.md) |
    | **`SO_RCVTIMEO`** | Informa o valor do tempo limite para operações de entrada. | [array](language.types.array.md). O array conterá duas chaves: sec que é a parte dos segundos no valor do tempo limite e usec que é a parte dos microssegundos do valor do tempo limite. |
    | **`SO_SNDTIMEO`** | Informa o valor do tempo limite especificando a quantidade de tempo que uma função de saída bloqueia porque o controle de fluxo impede o envio de dados. | [array](language.types.array.md). O array conterá duas chaves: sec que é a parte dos segundos no valor do tempo limite e usec que é a parte dos microssegundos do valor do tempo limite. |
    | **`SO_SNDLOWAT`** | Informa o número mínimo de bytes a serem processados ​​para operações de saída do `socket`. | [int](language.types.integer.md) |
    | **`TCP_NODELAY`** | Informa se o algoritmo Nagle TCP está desabilitado. | [int](language.types.integer.md) |
    | **`MCAST_JOIN_GROUP`** | Ingressa em um grupo "multicast". | [array](language.types.array.md) com chaves `"group"`, especificando uma [string](language.types.string.md) com um endereço "multicast" IPv4 ou IPv6 e `"interface"`, especificando um número de interface (tipo [int](language.types.integer.md)) ou uma `string` com o nome da interface, como `"eth0"`. `0` pode ser especificado para indicar que a interface deve ser selecionada usando regras de roteamento. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`MCAST_LEAVE_GROUP`** | Sai de um grupo "multicast". | [array](language.types.array.md). Veja **`MCAST_JOIN_GROUP`** para mais informação. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`MCAST_BLOCK_SOURCE`** | Bloqueia pacotes que chegam de uma origem específica para um grupo "multicast" específico, no qual deve-se ter ingressado previamente. | [array](language.types.array.md) com as mesmas chaves de **`MCAST_JOIN_GROUP`**, mais uma chave extra, `source`, que mapeia a uma [string](language.types.string.md) especificando um endereço IPv4 ou IPv6 da origem a ser bloqueada. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`MCAST_UNBLOCK_SOURCE`** | Desbloqueia (volta a receber) pacotes que chegam de um endereço de origem específico para um grupo "multicast" específico, no qual deve-se ter ingressado previamente. | [array](language.types.array.md) com o mesmo formato de **`MCAST_BLOCK_SOURCE`**. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`MCAST_JOIN_SOURCE_GROUP`** | Recebe pacotes destinados a um grupo "multicast" específico cujo endereço de origem corresponde a um valor específico. | [array](language.types.array.md) com o mesmo formato de **`MCAST_BLOCK_SOURCE`**. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`MCAST_LEAVE_SOURCE_GROUP`** | Para de receber pacotes destinados a um grupo "multicast" específico cujo endereço de origem corresponde a um valor específico. | [array](language.types.array.md) com o mesmo formato de **`MCAST_BLOCK_SOURCE`**. (só pode ser usada em [socket\_set\_option()](function.socket-set-option.md)) |
    | **`IP_MULTICAST_IF`** | A interface de saída para pacotes "multicast" IPv4. | Pode ser um [int](language.types.integer.md) especificando o número da interface ou uma [string](language.types.string.md) com um nome de interface, como `eth0`. O valor 0 pode ser usado para indicar a tabela de roteamento a ser usada na seleção da interface. A função **socket\_get\_option()** retorna um índice de interface. Observe que, diferentemente da API C, esta opção NÃO utiliza um endereço IP. Isto elimina a diferença de interface entre **`IP_MULTICAST_IF`** e **`IPV6_MULTICAST_IF`**. |
    | **`IPV6_MULTICAST_IF`** | A interface de saída para pacotes "multicast" IPv6. | O mesmo que **`IP_MULTICAST_IF`**. |
    | **`IP_MULTICAST_LOOP`** | A política de "loopback multicast" para pacotes IPv4 habilita ou desabilita o "loopback" de "multicasts" de saída, que devem ter sido previamente ingressados. O efeito difere, entretanto, se for aplicado em unixes ou Windows, o primeiro está no caminho de recepção enquanto o último está no caminho de envio. | [int](language.types.integer.md) (pode ser `0` ou `1`). Para [socket\_set\_option()](function.socket-set-option.md), qualquer valor será aceito e será convertido para um booleano seguindo as regras normais do PHP. |
    | **`IPV6_MULTICAST_LOOP`** | Análoga a **`IP_MULTICAST_LOOP`**, porém para IPv6. | [int](language.types.integer.md). Veja **`IP_MULTICAST_LOOP`**. |
    | **`IP_MULTICAST_TTL`** | O tempo de vida dos pacotes de saída IPv4 "multicast". Deve ser um valor entre 0 (não sair da interface) e 255. O padrão é 1 (apenas a rede local é alcançada). | [int](language.types.integer.md) entre 0 e 255. |
    | **`IPV6_MULTICAST_HOPS`** | Análoga a **`IP_MULTICAST_TTL`**, porém para pacotes IPv6. O valor -1 também é aceito e significa que a rota padrão deve ser usada. | [int](language.types.integer.md) entre -1 e 255. |
    | **`SO_MARK`** | Define um identificador no soquete com o objetivo de filtrar pacotes no Linux. | [int](language.types.integer.md) |
    | **`SO_ACCEPTFILTER`** | Adicionar um filtro de aceitação no soquete sendo escutado (FreeBSD/NetBSD). Um módulo de kernel de filtro de aceitação precisa ser carregado antecipadamente no FreeBSD (ex.: accf\_http). | [string](language.types.string.md). Nome do filtro (comprimento máximo de 15). |
    | **`SO_USER_COOKIE`** | Define um identificador no soquete com o objetivo de filtrar pacotes no FreeBSD. | [int](language.types.integer.md) |
    | **`SO_RTABLE`** | Define um identificador no soquete com o objetivo de filtrar pacotes no OpenBSD. | [int](language.types.integer.md) |
    | **`SO_DONTTRUNC`** | Retém dados não lidos. | [int](language.types.integer.md) |
    | **`SO_WANTMORE`** | Fornece uma dica de quando mais dados estão prontos. | [int](language.types.integer.md) |
    | **`TCP_DEFER_ACCEPT`** | Não notifica um soquete que estiver escutando até que os dados estejam prontos. | [int](language.types.integer.md) |
    | **`SO_INCOMING_CPU`** | Obtém/define a afinidade de CPU de um soquete. | [int](language.types.integer.md) |
    | **`SO_MEMINFO`** | Obtém todas as informações de memória de um soquete. | [int](language.types.integer.md) |
    | **`SO_BPF_EXTENSIONS`** | Obtém as extensões BPF suportadas pelo kernel para anexar a um soquete. | [int](language.types.integer.md) |
    | **`SO_SETFIB`** | Define a tabela de rotas (FIB) de um soquete. (Somente FreeBSD) | [int](language.types.integer.md) |
    | **`SOL_FILTER`** | Filtros atribuídos a um soquete. (Somente Solaris/Illumos) | [int](language.types.integer.md) |
    | **`TCP_KEEPCNT`** | Define o número máximo de sondas de manutenção de atividade que o TCP deve enviar antes de interromper a conexão. | [int](language.types.integer.md) |
    | **`TCP_KEEPIDLE`** | Define o tempo que a conexão precisa permanecer ociosa. | [int](language.types.integer.md) |
    | **`TCP_KEEPINTVL`** | Define o tempo entre sondagens de manutenção de atividade individuais. | [int](language.types.integer.md) |
    | **`TCP_KEEPALIVE`** | Define o tempo que a conexão precisa permanecer ociosa. (somente macOS) | [int](language.types.integer.md) |
    | **`TCP_NOTSENT_LOWAT`** | Define o número limite de dados não enviados na fila de escrita pelo fluxo de soquete. (somente Linux) | [int](language.types.integer.md) |

### Valor Retornado

Retorna o valor da opção informada, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **socket\_get\_option()****

```
<?php
$socket = socket_create_listen(1223);

$linger = array('l_linger' => 1, 'l_onoff' => 1);
socket_set_option($socket, SOL_SOCKET, SO_LINGER, $linger);

var_dump(socket_get_option($socket, SOL_SOCKET, SO_REUSEADDR));
?>
```

### Veja também

- [socket\_create\_listen()](function.socket-create-listen.md) - Abre um soquete em uma porta para aceitar conexões
- [socket\_set\_option()](function.socket-set-option.md) - Define opções para o soquete

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
