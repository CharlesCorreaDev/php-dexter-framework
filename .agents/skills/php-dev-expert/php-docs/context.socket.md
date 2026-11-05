# Lista de opções de contexto de Socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.socket.php

---

# Opções de contexto de Socket

Opções de contexto de Socket — Lista de opções de contexto de Socket

### Descrição

As opções de contextos para Socket estão disponíveis em todos os empacotadores que trabalham em
sockets, como `tcp`, `http` e
`ftp`.

### Opções

`bindto`
:   Utilizado para especificar o endereço IP (tanto IPv4 quanto IPv6) e/ou o
    número da porta que o PHP usará para acessar a rede. A sintaxe é
    `ip:port` para endereços IPv4, e
    `[ip]:port` para endereços IPv6.
    Definir o IP ou a porta com `0` fará com que o sistema
    escolha o IP e/ou a porta.

    > **Nota**:
    >
    > Como o FTP cria duas conexões socket durante sua operação normal,
    > o número da porta não poderá ser especificado ao se usar esta opção.

`backlog`
:   Utilizado para limitar o número de conexões excedentes na fila de
    escuta do socket.

    > **Nota**:
    >
    > Este parâmetro só é aplicável na função [stream\_socket\_server()](function.stream-socket-server.md).

`ipv6_v6only`
:   Sobrescreve a diretiva do sistema operacional no que se refere ao mapeamento IPv4 em IPv6.

    > **Nota**:
    >
    > Isto é importante quando tentando ouvir em um endereço IPv4
    > separadamente da existência de um binding em `[::]`.
    >
    > Somente aplicável em [stream\_socket\_server()](function.stream-socket-server.md).

`so_reuseport`
:   Permite várias ligações no mesmo IP:porta, mesmo de processos separados.

    > **Nota**:
    >
    > Somente aplicável em [stream\_socket\_server()](function.stream-socket-server.md).

`so_broadcast`
:   Permite enviar e receber dados de/para endereços de transmissão ampla.

    > **Nota**:
    >
    > Somente aplicável a [stream\_socket\_server()](function.stream-socket-server.md).

`tcp_nodelay`
:   Ao ativar essa opção com **`true`** será configurado `SOL_TCP,NO_DELAY=1`,
    de forma a desabilitar o algoritmo Nagle TCP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Adicionado o parâmetro `tcp_nodelay`. |
| 7.0.1 | Adicionado o parâmetro `ipv6_v6only`. |

### Examples

**Exemplo #1 Exemplo básico de uso do parâmetro `bindto`**

```
<?php
// conecta à internet usando o IP '192.168.0.100'
$opts = array(
    'socket' => array(
        'bindto' => '192.168.0.100:0',
    ),
);

// conecta à internet usando o IP '192.168.0.100' e a porta '7000'
$opts = array(
    'socket' => array(
        'bindto' => '192.168.0.100:7000',
    ),
);

// conecta à internet usando o endereço IPv6 '2001:db8::1'
// e a porta '7000'
$opts = array(
    'socket' => array(
        'bindto' => '[2001:db8::1]:7000',
    ),
);

// conecta à internet usando a porta '7000'
$opts = array(
    'socket' => array(
        'bindto' => '0:7000',
    ),
);

// cria o contexto...
$context = stream_context_create($opts);

// ...que será utilizado para buscar os dados
echo file_get_contents('http://www.example.com', false, $context);

?>
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
