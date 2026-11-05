# Cria um par de fluxos de socket conectados e indistinguíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-socket-pair.php

---

# stream\_socket\_pair

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_socket\_pair — 
Cria um par de fluxos de socket conectados e indistinguíveis

### Descrição

function **stream\_socket\_pair**([int](language.types.integer.md) `$domain`, [int](language.types.integer.md) `$type`, [int](language.types.integer.md) `$protocol`): [array](language.types.array.md)|[false](language.types.singleton.md)

**stream\_socket\_pair()** Cria um par de fluxos de socket
conectados e indistinguíveis. Esta função é normalmente usada em IPC
(Comunicação Entre Processos, da sigla em inglês).

### Parâmetros

`domain`
:   A família de protocolos a ser usada: **`STREAM_PF_INET`**,
    **`STREAM_PF_INET6`** ou
    **`STREAM_PF_UNIX`**

`type`
:   O tipo de comunicação a ser usado:
    **`STREAM_SOCK_DGRAM`**,
    **`STREAM_SOCK_RAW`**,
    **`STREAM_SOCK_RDM`**,
    **`STREAM_SOCK_SEQPACKET`** ou
    **`STREAM_SOCK_STREAM`**

`protocol`
:   O protocolo a ser usado: **`STREAM_IPPROTO_ICMP`**,
    **`STREAM_IPPROTO_IP`**,
    **`STREAM_IPPROTO_RAW`**,
    **`STREAM_IPPROTO_TCP`** ou
    **`STREAM_IPPROTO_UDP`**

> **Nota**:
>
> Favor consultar a [lista de constantes de
> Fluxo](stream.constants.md) para mais detalhes sobre cada constante.

### Valor Retornado

Retorna um [array](language.types.array.md) com os dois recursos de socket em caso de sucesso, ou
**`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **stream\_socket\_pair()****

Este exemplo mostra o uso básico de
**stream\_socket\_pair()** na Comunicação entre Processos.

```
<?php

$sockets = stream_socket_pair(STREAM_PF_UNIX, STREAM_SOCK_STREAM, STREAM_IPPROTO_IP);
$pid     = pcntl_fork();

if ($pid == -1) {
     die('não foi possível duplicar');

} else if ($pid) {
     /* pai */
    fclose($sockets[0]);

    fwrite($sockets[1], "filho PID: $pid\n");
    echo fgets($sockets[1]);

    fclose($sockets[1]);

} else {
    /* filho */
    fclose($sockets[1]);

    fwrite($sockets[0], "mensagem do filho\n");
    echo fgets($sockets[0]);

    fclose($sockets[0]);
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
filho PID: 1378
mensagem do filho
```

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
