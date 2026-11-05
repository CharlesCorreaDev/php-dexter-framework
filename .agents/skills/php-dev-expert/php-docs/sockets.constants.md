# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sockets.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`AF_UNIX`** ([int](language.types.integer.md))
:   Família de endereços de soquete de nomes de caminhos do sistema de arquivos no domínio Unix.

**`AF_INET`** ([int](language.types.integer.md))
:   Família de endereços de soquete IPv4 no domínio da Internet.

**`AF_INET6`** ([int](language.types.integer.md))
:   Família de endereços de soquete IPv6 no domínio da Internet. Disponível apenas se compilado com suporte IPv6.

**`AF_DIVERT`** ([int](language.types.integer.md))
:   Família de endereços de soquete para a interface `divert(4)` do FreeBSD
    usada para receber pacotes desviados pelo firewall.
    Disponível a partir do PHP 8.3.0 (somente FreeBSD).

**`AF_PACKET`** ([int](language.types.integer.md))
:   Família de endereços de soquete para soquetes de pacotes de baixo nível, usada para enviar e
    receber pacotes brutos no nível do driver de dispositivo (camada 2 do modelo OSI).
    Disponível a partir do PHP 8.5.0 (somente Linux).

**`SOCK_STREAM`** ([int](language.types.integer.md))

**`SOCK_DGRAM`** ([int](language.types.integer.md))

**`SOCK_RAW`** ([int](language.types.integer.md))

**`SOCK_SEQPACKET`** ([int](language.types.integer.md))

**`SOCK_RDM`** ([int](language.types.integer.md))

**`SOCK_CONN_DGRAM`** ([int](language.types.integer.md))
:   Define o socket para um datagrama orientado a conexão.
    Disponível a partir do PHP 8.4.0. (Somente NetBSD)

**`SOCK_DCCP`** ([int](language.types.integer.md))
:   Define o socket para um protocolo de controle de congestão de datagrama.
    Disponível a partir do PHP 8.4.0. (Somente NetBSD)

**`SOCK_NONBLOCK`** ([int](language.types.integer.md))
:   Define o sinalizador de status de socket não bloqueante.
    Disponível a partir do PHP 8.4.0.

**`SOCK_CLOEXEC`** ([int](language.types.integer.md))
:   Define o sinalizador de status de socket fechado-na-execução.
    Disponível a partir do PHP 8.4.0.

**`MSG_OOB`** ([int](language.types.integer.md))

**`MSG_WAITALL`** ([int](language.types.integer.md))

**`MSG_PEEK`** ([int](language.types.integer.md))

**`MSG_DONTROUTE`** ([int](language.types.integer.md))

**`MSG_EOR`** ([int](language.types.integer.md))
:   Indisponível em plataformas Windows.

**`MSG_EOF`** ([int](language.types.integer.md))
:   Indisponível em plataformas Windows.

**`MSG_ZEROCOPY`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_DEBUG`** ([int](language.types.integer.md))

**`SO_REUSEADDR`** ([int](language.types.integer.md))

**`SO_REUSEPORT`** ([int](language.types.integer.md))
:   Esta constante está disponível apenas em plataformas que
    suportam a opção de soquete **`SO_REUSEPORT`**: isso inclui
    Linux, macOS e \*BSD, mas não inclui Windows.

**`SO_KEEPALIVE`** ([int](language.types.integer.md))

**`SO_DONTROUTE`** ([int](language.types.integer.md))

**`SO_LINGER`** ([int](language.types.integer.md))

**`SO_BROADCAST`** ([int](language.types.integer.md))

**`SO_OOBINLINE`** ([int](language.types.integer.md))

**`SO_SNDBUF`** ([int](language.types.integer.md))

**`SO_RCVBUF`** ([int](language.types.integer.md))

**`SO_SNDLOWAT`** ([int](language.types.integer.md))

**`SO_RCVLOWAT`** ([int](language.types.integer.md))

**`SO_SNDTIMEO`** ([int](language.types.integer.md))

**`SO_RCVTIMEO`** ([int](language.types.integer.md))

**`SO_TYPE`** ([int](language.types.integer.md))

**`SO_ERROR`** ([int](language.types.integer.md))

**`SO_ZEROCOPY`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_NODELAY`** ([int](language.types.integer.md))
:   Usado para desabilitar o algoritmo Nagle TCP.

**`TCP_KEEPCNT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_KEEPIDLE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_KEEPINTVL`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_KEEPALIVE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_NOTSENT_LOWAT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_MARK`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`SO_USER_COOKIE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`SO_RTABLE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_ACCEPTFILTER`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`SO_DONTTRUNC`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`SO_WANTMORE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`SO_INCOMING_CPU`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_MEMINFO`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_BPF_EXTENSIONS`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_SETFIB`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SO_ATTACH_REUSEPORT_CBPF`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`SO_DETACH_BPF`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`SO_DETACH_FILTER`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`SO_RERROR`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente NetBSD)

**`SO_ZEROIZE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente OpenBSD)

**`SO_SPLICE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente OpenBSD)

**`SO_REUSEPORT_LB`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente FreeBSD)

**`SOL_FILTER`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SOL_UDPLITE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0

**`UDPLITE_RECV_CSCOV`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0

**`UDPLITE_SEND_CSCOV`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0

**`TCP_DEFER_ACCEPT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.1.0

**`TCP_CONGESTION`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`TCP_QUICKACK`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`TCP_REPAIR`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`TCP_SYNCNT`** ([int](language.types.integer.md))
:   Define o número de retransmissões SYN que o TCP deve enviar
    antes de abortar a tentativa de conexão.
    Disponível a partir do PHP 8.4.0 (somente Linux)

**`IP_DONTFRAG`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente FreeBSD)

**`IP_MTU_DISCOVER`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_DO`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_DONT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_WANT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_PROBE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_INTERFACE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_PMTUDISC_OMIT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`IP_BIND_ADDRESS_NO_PORT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.3.0 (somente Linux)

**`SOL_SOCKET`** ([int](language.types.integer.md))

**`PHP_NORMAL_READ`** ([int](language.types.integer.md))

**`PHP_BINARY_READ`** ([int](language.types.integer.md))

**`SOL_TCP`** ([int](language.types.integer.md))

**`SOL_UDP`** ([int](language.types.integer.md))

As constantes a seguir são definidas em plataformas Windows e semelhantes a UNIX.
Cada constante só é definida se o seu equivalente estiver disponível na plataforma.

**`SOCKET_EINTR`** ([int](language.types.integer.md))
:   Chamada de sistema interrompida.

**`SOCKET_EBADF`** ([int](language.types.integer.md))
:   Número de descritor de arquivo inválido.

**`SOCKET_EACCES`** ([int](language.types.integer.md))
:   Permissão negada.

**`SOCKET_EFAULT`** ([int](language.types.integer.md))
:   Endereço inválido.

**`SOCKET_EINVAL`** ([int](language.types.integer.md))
:   Argumento inválido.

**`SOCKET_EMFILE`** ([int](language.types.integer.md))
:   Muitos arquivos abertos.

**`SOCKET_ENAMETOOLONG`** ([int](language.types.integer.md))
:   Nome de arquivo muito longo.

**`SOCKET_ENOTEMPTY`** ([int](language.types.integer.md))
:   Diretório não está vazio.

**`SOCKET_ELOOP`** ([int](language.types.integer.md))
:   Muitas ligações simbólicas encontradas.

**`SOCKET_EWOULDBLOCK`** ([int](language.types.integer.md))
:   A operação seria bloqueada.

**`SOCKET_EREMOTE`** ([int](language.types.integer.md))
:   O objeto é remoto.

**`SOCKET_EUSERS`** ([int](language.types.integer.md))
:   Muitos usuários.

**`SOCKET_ENOTSOCK`** ([int](language.types.integer.md))
:   Operação de soquete em não-soquete.

**`SOCKET_EDESTADDRREQ`** ([int](language.types.integer.md))
:   Endereço de destino obrigatório.

**`SOCKET_EMSGSIZE`** ([int](language.types.integer.md))
:   Mensagem muito longa.

**`SOCKET_EPROTOTYPE`** ([int](language.types.integer.md))
:   Tipo errado de protocolo para soquete.

**`SOCKET_EPROTONOSUPPORT`** ([int](language.types.integer.md))
:   Protocolo não suportado.

**`SOCKET_ESOCKTNOSUPPORT`** ([int](language.types.integer.md))
:   Tipo de soquete não suportado.

**`SOCKET_EOPNOTSUPP`** ([int](language.types.integer.md))
:   Operação não suportada no ponto de extremidade do transporte.

**`SOCKET_EPFNOSUPPORT`** ([int](language.types.integer.md))
:   Família de protocolos não suportada.

**`SOCKET_EAFNOSUPPORT`** ([int](language.types.integer.md))
:   Família de endereços não suportada pelo protocolo.

**`SOCKET_EADDRNOTAVAIL`** ([int](language.types.integer.md))
:   Não é possível atribuir o endereço solicitado.

**`SOCKET_ENETDOWN`** ([int](language.types.integer.md))
:   A rede está inoperante.

**`SOCKET_ENETUNREACH`** ([int](language.types.integer.md))
:   A rede está inacessível.

**`SOCKET_ENETRESET`** ([int](language.types.integer.md))
:   A conexão da rede caiu devido à redefinição.

**`SOCKET_ECONNABORTED`** ([int](language.types.integer.md))
:   O software causou a interrupção da conexão.

**`SOCKET_ECONNRESET`** ([int](language.types.integer.md))
:   Conexão redefinida pelo par.

**`SOCKET_ENOBUFS`** ([int](language.types.integer.md))
:   Nenhum espaço de buffer disponível.

**`SOCKET_EISCONN`** ([int](language.types.integer.md))
:   O ponto final de transporte já está conectado.

**`SOCKET_ENOTCONN`** ([int](language.types.integer.md))
:   O ponto de extremidade do transporte não está conectado.

**`SOCKET_ESHUTDOWN`** ([int](language.types.integer.md))
:   Não é possível enviar após o encerramento do ponto de extremidade do transporte.

**`SOCKET_ETIMEDOUT`** ([int](language.types.integer.md))
:   A conexão expirou.

**`SOCKET_ECONNREFUSED`** ([int](language.types.integer.md))
:   Conexão recusada.

**`SOCKET_EHOSTDOWN`** ([int](language.types.integer.md))
:   O servidor está inativo.

**`SOCKET_EHOSTUNREACH`** ([int](language.types.integer.md))
:   Nenhuma rota para o servidor.

**`SOCKET_EALREADY`** ([int](language.types.integer.md))
:   Operação já em andamento.

**`SOCKET_EINPROGRESS`** ([int](language.types.integer.md))
:   Operação agora em andamento.

As constantes a seguir estão definidas apenas no Windows.

**`SOCKET_ENOPROTOOPT`** ([int](language.types.integer.md))

**`SOCKET_EADDRINUSE`** ([int](language.types.integer.md))

**`SOCKET_ETOOMYREFS`** ([int](language.types.integer.md))

**`SOCKET_EPROCLIM`** ([int](language.types.integer.md))

**`SOCKET_EDUOT`** ([int](language.types.integer.md))

**`SOCKET_ESTALE`** ([int](language.types.integer.md))

**`SOCKET_EDISCON`** ([int](language.types.integer.md))

**`SOCKET_SYSNOTREADY`** ([int](language.types.integer.md))

**`SOCKET_VERNOTSUPPORTED`** ([int](language.types.integer.md))

**`SOCKET_NOTINITIALISED`** ([int](language.types.integer.md))

**`SOCKET_HOST_NOT_FOUND`** ([int](language.types.integer.md))

**`SOCKET_TRY_AGAIN`** ([int](language.types.integer.md))

**`SOCKET_NO_RECOVERY`** ([int](language.types.integer.md))

**`SOCKET_NO_DATA`** ([int](language.types.integer.md))

**`SOCKET_NO_ADDRESS`** ([int](language.types.integer.md))

As constantes a seguir estão disponíveis apenas em plataformas do
tipo UNIX. Cada constante só é definida se o seu equivalente
estiver disponível na plataforma.

**`SOCKET_EPERM`** ([int](language.types.integer.md))
:   Operação não permitida.

**`SOCKET_ENOENT`** ([int](language.types.integer.md))
:   Não existe tal arquivo ou diretório.

**`SOCKET_EIO`** ([int](language.types.integer.md))
:   Erro de E/S.

**`SOCKET_ENXIO`** ([int](language.types.integer.md))
:   Não existe tal dispositivo ou endereço.

**`SOCKET_E2BIG`** ([int](language.types.integer.md))
:   Lista de argumentos muito longa.

**`SOCKET_EAGAIN`** ([int](language.types.integer.md))
:   Tente novamente.

**`SOCKET_ENOMEM`** ([int](language.types.integer.md))
:   Sem memória.

**`SOCKET_ENOTBLK`** ([int](language.types.integer.md))
:   Dispositivo de bloco necessário.

**`SOCKET_EBUSY`** ([int](language.types.integer.md))
:   Dispositivo ou recurso ocupado.

**`SOCKET_EEXIST`** ([int](language.types.integer.md))
:   O arquivo existe.

**`SOCKET_EXDEV`** ([int](language.types.integer.md))
:   Ligação entre dispositivos.

**`SOCKET_ENODEV`** ([int](language.types.integer.md))
:   Não existe tal dispositivo.

**`SOCKET_ENOTDIR`** ([int](language.types.integer.md))
:   Não é um diretório.

**`SOCKET_EISDIR`** ([int](language.types.integer.md))
:   É um diretório.

**`SOCKET_ENFILE`** ([int](language.types.integer.md))
:   Estouro de tabela de arquivos.

**`SOCKET_ENOTTY`** ([int](language.types.integer.md))
:   Não é um TTY.

**`SOCKET_ENOSPC`** ([int](language.types.integer.md))
:   Não há mais espaço no dispositivo.

**`SOCKET_ESPIPE`** ([int](language.types.integer.md))
:   Procura ilegal.

**`SOCKET_EROFS`** ([int](language.types.integer.md))
:   Sistema de arquivos somente leitura.

**`SOCKET_EMLINK`** ([int](language.types.integer.md))
:   Muitas conexões.

**`SOCKET_EPIPE`** ([int](language.types.integer.md))
:   Pipe quebrado.

**`SOCKET_ENOLCK`** ([int](language.types.integer.md))
:   Nenhuma trava de registro disponível.

**`SOCKET_ENOSYS`** ([int](language.types.integer.md))
:   Função não implementada.

**`SOCKET_ENOMSG`** ([int](language.types.integer.md))
:   Nenhuma mensagem do tipo desejado.

**`SOCKET_EIDRM`** ([int](language.types.integer.md))
:   Identificador removido.

**`SOCKET_ECHRNG`** ([int](language.types.integer.md))
:   Número do canal fora do intervalo.

**`SOCKET_EL2NSYNC`** ([int](language.types.integer.md))
:   Nível 2 não sincronizado.

**`SOCKET_EL3HLT`** ([int](language.types.integer.md))
:   O nível 3 foi interrompido.

**`SOCKET_EL3RST`** ([int](language.types.integer.md))
:   O nível 3 foi redefinido.

**`SOCKET_ELNRNG`** ([int](language.types.integer.md))
:   Número da conexão fora do intervalo.

**`SOCKET_EUNATCH`** ([int](language.types.integer.md))
:   Driver de protocolo não conectado.

**`SOCKET_ENOCSI`** ([int](language.types.integer.md))
:   Nenhuma estrutura CSI disponível.

**`SOCKET_EL2HLT`** ([int](language.types.integer.md))
:   O nível 2 foi interrompido.

**`SOCKET_EBADE`** ([int](language.types.integer.md))
:   Troca inválida.

**`SOCKET_EBADR`** ([int](language.types.integer.md))
:   Descritor de solicitação inválido.

**`SOCKET_EXFULL`** ([int](language.types.integer.md))
:   Troca completa.

**`SOCKET_ENOANO`** ([int](language.types.integer.md))
:   Sem ânodo.

**`SOCKET_EBADRQC`** ([int](language.types.integer.md))
:   Código de solicitação inválido.

**`SOCKET_EBADSLT`** ([int](language.types.integer.md))
:   Slot inválido.

**`SOCKET_ENOSTR`** ([int](language.types.integer.md))
:   Dispositivo não é um fluxo.

**`SOCKET_ENODATA`** ([int](language.types.integer.md))
:   Não há dados disponíveis.

**`SOCKET_ETIME`** ([int](language.types.integer.md))
:   O cronômetro expirou.

**`SOCKET_ENOSR`** ([int](language.types.integer.md))
:   Sem recursos de fluxo.

**`SOCKET_ENONET`** ([int](language.types.integer.md))
:   A máquina não está na rede.

**`SOCKET_ENOLINK`** ([int](language.types.integer.md))
:   A conexão foi cortada.

**`SOCKET_EADV`** ([int](language.types.integer.md))
:   Erro de anúncio.

**`SOCKET_ESRMNT`** ([int](language.types.integer.md))
:   Erro de montagem.

**`SOCKET_ECOMM`** ([int](language.types.integer.md))
:   Erro de comunicação no envio.

**`SOCKET_EPROTO`** ([int](language.types.integer.md))
:   Erro de protocolo.

**`SOCKET_EMULTIHOP`** ([int](language.types.integer.md))
:   Tentativa de múltiplos saltos.

**`SOCKET_EBADMSG`** ([int](language.types.integer.md))
:   Não é uma mensagem de dados.

**`SOCKET_ENOTUNIQ`** ([int](language.types.integer.md))
:   Nome não exclusivo na rede.

**`SOCKET_EBADFD`** ([int](language.types.integer.md))
:   Descritor de arquivo em mau estado.

**`SOCKET_EREMCHG`** ([int](language.types.integer.md))
:   Endereço remoto alterado.

**`SOCKET_ERESTART`** ([int](language.types.integer.md))
:   A chamada do sistema interrompida deve ser reiniciada.

**`SOCKET_ESTRPIPE`** ([int](language.types.integer.md))
:   Erro de pipe de fluxo.

**`SOCKET_EPROTOOPT`** ([int](language.types.integer.md))
:   Protocolo não disponível.

**`SOCKET_ADDRINUSE`** ([int](language.types.integer.md))
:   Endereço já em uso.

**`SOCKET_ETOOMANYREFS`** ([int](language.types.integer.md))
:   Muitas referências: não é possível unir.

**`SOCKET_EISNAM`** ([int](language.types.integer.md))
:   É um arquivo de tipo nomeado.

**`SOCKET_EREMOTEIO`** ([int](language.types.integer.md))
:   Erro de E/S remota.

**`SOCKET_EDQUOT`** ([int](language.types.integer.md))
:   Cota excedida.

**`SOCKET_ENOMEDIUM`** ([int](language.types.integer.md))
:   Nenhuma mídia encontrada.

**`SOCKET_EMEDIUMTYPE`** ([int](language.types.integer.md))
:   Tipo de mídia errado.

**`SCM_RIGHTS`** ([int](language.types.integer.md))
:   Envia ou recebe um conjunto de descritores de arquivos abertos de outro processo.

**`SCM_CREDENTIALS`** ([int](language.types.integer.md))

**`SCM_CREDS`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SCM_CREDS2`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`LOCAL_CREDS`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`LOCAL_CREDS_PERSISTENT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_OFF`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_PROTOCOL`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_PKTTYPE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_IFINDEX`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_NLATTR`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_NLATTR_NEST`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_MARK`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_QUEUE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_HATYPE`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_RXHASH`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_CPU`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_ALU_XOR_X`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_VLAN_TAG`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_VLAN_TAG_PRESENT`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_PAY_OFFSET`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_RANDOM`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_VLAN_TPID`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`SKF_AD_MAX`** ([int](language.types.integer.md))
:   Disponível a partir do PHP 8.2.0

**`AI_ADDRCONFIG`** ([int](language.types.integer.md))

**`AI_ALL`** ([int](language.types.integer.md))

**`AI_CANONIDN`** ([int](language.types.integer.md))

**`AI_CANONNAME`** ([int](language.types.integer.md))

**`AI_IDN`** ([int](language.types.integer.md))

**`AI_NUMERICHOST`** ([int](language.types.integer.md))

**`AI_NUMERICSERV`** ([int](language.types.integer.md))

**`AI_PASSIVE`** ([int](language.types.integer.md))

**`AI_V4MAPPED`** ([int](language.types.integer.md))

**`FIL_ATTACH`** ([int](language.types.integer.md))

**`FIL_DETACH`** ([int](language.types.integer.md))

**`IPPROTO_IP`** ([int](language.types.integer.md))

**`IPPROTO_IPV6`** ([int](language.types.integer.md))

**`IPV6_HOPLIMIT`** ([int](language.types.integer.md))

**`IPV6_MULTICAST_HOPS`** ([int](language.types.integer.md))

**`IPV6_MULTICAST_IF`** ([int](language.types.integer.md))

**`IPV6_MULTICAST_LOOP`** ([int](language.types.integer.md))

**`IPV6_PKTINFO`** ([int](language.types.integer.md))

**`IPV6_RECVHOPLIMIT`** ([int](language.types.integer.md))

**`IPV6_RECVPKTINFO`** ([int](language.types.integer.md))

**`IPV6_RECVTCLASS`** ([int](language.types.integer.md))

**`IPV6_TCLASS`** ([int](language.types.integer.md))

**`IPV6_UNICAST_HOPS`** ([int](language.types.integer.md))

**`IPV6_V6ONLY`** ([int](language.types.integer.md))

**`IP_MULTICAST_IF`** ([int](language.types.integer.md))

**`IP_MULTICAST_LOOP`** ([int](language.types.integer.md))

**`IP_MULTICAST_TTL`** ([int](language.types.integer.md))

**`IP_PORTRANGE`** ([int](language.types.integer.md))
:   Define a faixa de portas usada para selecionar um número de porta local.
    Disponível a partir do PHP 8.4.0. (somente FreeBSD/NetBSD/OpenBSD)

**`IP_PORTRANGE_DEFAULT`** ([int](language.types.integer.md))
:   Usa a faixa padrão de valores de portas.
    Disponível a partir do PHP 8.4.0. (somente FreeBSD/NetBSD/OpenBSD)

**`IP_PORTRANGE_HIGH`** ([int](language.types.integer.md))
:   Usa uma faixa alta de valores de portas.
    Disponível a partir do PHP 8.4.0. (somente FreeBSD/NetBSD/OpenBSD)

**`IP_PORTRANGE_LOW`** ([int](language.types.integer.md))
:   Usa uma faixa baixa de valores de portas.
    Disponível a partir do PHP 8.4.0. (somente FreeBSD/NetBSD/OpenBSD)

**`MCAST_BLOCK_SOURCE`** ([int](language.types.integer.md))

**`MCAST_JOIN_GROUP`** ([int](language.types.integer.md))

**`MCAST_JOIN_SOURCE_GROUP`** ([int](language.types.integer.md))

**`MCAST_LEAVE_GROUP`** ([int](language.types.integer.md))

**`MCAST_LEAVE_SOURCE_GROUP`** ([int](language.types.integer.md))

**`MCAST_UNBLOCK_SOURCE`** ([int](language.types.integer.md))

**`MSG_CMSG_CLOEXEC`** ([int](language.types.integer.md))

**`MSG_CONFIRM`** ([int](language.types.integer.md))

**`MSG_CTRUNC`** ([int](language.types.integer.md))

**`MSG_DONTWAIT`** ([int](language.types.integer.md))

**`MSG_ERRQUEUE`** ([int](language.types.integer.md))

**`MSG_MORE`** ([int](language.types.integer.md))

**`MSG_NOSIGNAL`** ([int](language.types.integer.md))

**`MSG_TRUNC`** ([int](language.types.integer.md))

**`MSG_WAITFORONE`** ([int](language.types.integer.md))

**`SOL_LOCAL`** ([int](language.types.integer.md))

**`SOMAXCONN`** ([int](language.types.integer.md))

**`SO_BINDTODEVICE`** ([int](language.types.integer.md))

**`SO_FAMILY`** ([int](language.types.integer.md))

**`SO_LABEL`** ([int](language.types.integer.md))

**`SO_LISTENQLEN`** ([int](language.types.integer.md))

**`SO_LISTENQLIMIT`** ([int](language.types.integer.md))

**`SO_PASSCRED`** ([int](language.types.integer.md))

**`SO_PEERLABEL`** ([int](language.types.integer.md))

**`SO_EXCLUSIVEADDRUSE`** ([int](language.types.integer.md))
:   Evita que outros sockets sejam vinculados de maneira forçada ao mesmo endereço e mesma porta.
    Disponível a partir do PHP 8.4.0. (Windows only)

**`SO_EXCLBIND`** ([int](language.types.integer.md))
:   Habilita/desabilita vinculação exclusiva do socket.
    Disponível a partir do PHP 8.4.0. (somente Solaris)

**`SO_NOSIGPIPE`** ([int](language.types.integer.md))
:   Controla a geração de SIGPIPE para o socket.
    Disponível a partir do PHP 8.4.0. (somente macOs e FreeBSD)

**`SO_LINGER_SEC`** ([int](language.types.integer.md))
:   Similar a **`SO_LINGER`** mas a persistência é em segundos
    ao invés de tiques do relógio no macOs.
    Disponível a partir do PHP 8.4.0. (somente macOs)

**`SO_BINDTOIFINDEX`** ([int](language.types.integer.md))
:   Vincula um socket a uma interface específica de rede pelo seu índice.
    Disponível a partir do PHP 8.4.0.

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
