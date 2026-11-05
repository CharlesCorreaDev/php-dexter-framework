# Conecta-se a um servidor SSH

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-connect.php

---

# ssh2\_connect

(PECL ssh2 >= 0.9.0)

ssh2\_connect — Conecta-se a um servidor SSH

### Descrição

function **ssh2\_connect**(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = 22,  
    [array](language.types.array.md) `$methods` = ?,  
    [array](language.types.array.md) `$callbacks` = ?  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Estabelece uma conexão com um servidor SSH remoto.

Uma vez conectado, o cliente deve verificar a chave do host do servidor usando
[ssh2\_fingerprint()](function.ssh2-fingerprint.md) e, em seguida, autenticar usando
senha ou chave pública.

### Parâmetros

`host`

`port`

`methods`
:   `methods` pode ser um array associativo com até quatro parâmetros,
    conforme descrito abaixo.

    **`methods` pode ser um array associativo
    com qualquer ou todos dos parâmetros a seguir**

    | Índice | Significado | Valores suportados\* |
    | --- | --- | --- |
    | kex | Lista de métodos de troca de chaves para anunciar, separados por vírgula em ordem de preferência. | `diffie-hellman-group1-sha1`, `diffie-hellman-group14-sha1` e `diffie-hellman-group-exchange-sha1` |
    | hostkey | Lista de métodos hostkey a serem anunciados, separados por vírgula em ordem de preferência. | `ssh-rsa` e `ssh-dss` |
    | client\_to\_server | Array associativo contendo criptografia, compactação e preferências de método de código de autenticação de mensagem (MAC) para mensagens enviadas do cliente para o servidor. |  |
    | server\_to\_client | Array associativo contendo criptografia, compactação e preferências de método de código de autenticação de mensagem (MAC) para mensagens enviadas do servidor para o cliente. |  |

    \* - Os valores suportados dependem dos métodos suportados pela biblioteca subjacente.
    Consulte a documentação de [» libssh2](https://libssh2.org/) para obter informações
    adicionais.

    **`client_to_server` e
    `server_to_client` podem ser um array associativo
    com qualquer um ou todos os seguintes parâmetros**

    | Índice | Significado | Valores suportados\* |
    | --- | --- | --- |
    | crypt | Lista de métodos de criptografia para anunciar, separados por vírgula em ordem de preferência. | `rijndael-cbc@lysator.liu.se`, `aes256-cbc`, `aes192-cbc`, `aes128-cbc`, `3des-cbc`, `blowfish-cbc`, `cast128-cbc`, `arcfour` e `none**` |
    | comp | Lista de métodos de compactação para anunciar, separados por vírgula em ordem de preferência. | `zlib` e `none` |
    | mac | Lista de métodos MAC para anunciar, separados por vírgula em ordem de preferência. | `hmac-sha1`, `hmac-sha1-96`, `hmac-ripemd160`, `hmac-ripemd160@openssh.com` e `none**` |

    > **Nota**:
    > **Método Crypt e MAC "`none`"**  
    >
    > Por motivos de segurança, `none` é desabilitado pela biblioteca subjacente
    > [» libssh2](https://libssh2.org/), a menos que seja explicitamente habilitado
    > durante o tempo de compilação usando as opções ./configure apropriadas. Consulte a documentação
    > da biblioteca subjacente para obter mais informações.

`callbacks`
:   `callbacks` pode ser um array associativo com qualquer
    ou todos os parâmetros a seguir.

    **Parâmetros de callbacks**

    | Índice | Significado | Protótipo |
    | --- | --- | --- |
    | ignore | Nome da função a ser chamada quando um pacote **`SSH2_MSG_IGNORE`** é recebido | void ignore\_cb($message) |
    | debug | Nome da função a ser chamada quando um pacote **`SSH2_MSG_DEBUG`** é recebido | void debug\_cb($message, $language, $always\_display) |
    | macerror | Nome da função a ser chamada quando um pacote é recebido, mas o código de autenticação da mensagem falhou. Se o retorno de chamada retornar **`true`**, a incompatibilidade será ignorada; caso contrário, a conexão será encerrada. | bool macerror\_cb($packet) |
    | disconnect | Nome da função a ser chamada quando um pacote **`SSH2_MSG_DISCONNECT`** é recebido | void disconnect\_cb($reason, $message, $language) |

### Valor Retornado

Retorna um recurso em caso de sucesso ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **ssh2\_connect()****

Abre uma conexão forçando 3des-cbc ao enviar pacotes, cifra aes
de força qualquer ao receber pacotes, sem compactação em qualquer direção,
e troca de chaves do Grupo 1.

```
<?php
/* Notifica o usuário se o servidor encerrar a conexão */
function my_ssh_disconnect($reason, $message, $language) {
    printf("Servidor desconectado com código de motivo [%d] e mensagem: %s\n",
         $reason, $message);
}

$methods = array(
    'kex' => 'diffie-hellman-group1-sha1',
    'client_to_server' => array(
        'crypt' => '3des-cbc',
        'comp' => 'none'),
    'server_to_client' => array(
    'crypt' => 'aes256-cbc,aes192-cbc,aes128-cbc',
    'comp' => 'none'));

$callbacks = array('disconnect' => 'my_ssh_disconnect');

$connection = ssh2_connect('shell.example.com', 22, $methods, $callbacks);
if (!$connection) die('Falha na conexão');
?>
```

### Veja também

- [ssh2\_fingerprint()](function.ssh2-fingerprint.md) - Recupera a impressão digital do servidor remoto
- [ssh2\_auth\_none()](function.ssh2-auth-none.md) - Autentica como "nenhum"
- [ssh2\_auth\_password()](function.ssh2-auth-password.md) - Autentica via SSH usando uma senha simples
- [ssh2\_auth\_pubkey()](function.ssh2-auth-pubkey.md) - Autentica usando uma chave pública em uma variável
- [ssh2\_auth\_pubkey\_file()](function.ssh2-auth-pubkey-file.md) - Autentica usando uma chave pública lida de um arquivo
- [ssh2\_disconnect()](function.ssh2-disconnect.md) - Fecha uma conexão com um servidor SSH remoto

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
