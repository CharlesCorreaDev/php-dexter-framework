# Abre um fluxo IMAP para uma caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-open.php

---

# imap\_open

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_open — Abre um fluxo IMAP para uma caixa de correio

### Descrição

function **imap\_open**(  
    [string](language.types.string.md) `$mailbox`,  
    [string](language.types.string.md) `$user`,  
    [string](language.types.string.md) `$password`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$retries` = 0,  
    [array](language.types.array.md) `$options` = []  
): [IMAP\Connection](class.imap-connection.md)|[false](language.types.singleton.md)

Abre um fluxo IMAP para a caixa de correio informada em `mailbox`.

Esta função também pode ser usada para abrir fluxos para servidores POP3 e
NNTP, mas algumas funções e recursos estão
disponíveis apenas em servidores IMAP.

### Parâmetros

`mailbox`
:   Um nome de caixa de correio consiste em um servidor e um caminho de caixa de correio neste servidor.
    O nome especial `INBOX` representa a caixa de correio pessoal
    dos usuários atuais. Nomes de caixa de correio que contêm caracteres internacionais
    além daqueles no escopo ASCII imprimível precisam ser codificados com
    [imap\_utf7\_encode()](function.imap-utf7-encode.md).

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

    A parte do servidor, que é delimitada por '{' e '}', consiste no nome
    ou endereço IP do servidor, uma porta opcional (prefixada por ':') e
    uma especificação de protocolo opcional (prefixada por '/').

    A parte do servidor é obrigatória em todos os parâmetros
    da caixa de correio.

    Todos os nomes que começam com `{` são nomes remotos e estão
    no formato `"{" remote_system_name [":" port] [flags] "}"
    [mailbox_name]` onde:

    - `remote_system_name` - Nome de domínio da Internet ou
      endereço IP entre colchetes do servidor.
    - `port` - número de porta TCP opcional, o padrão é a
      porta padrão para esse serviço
    - `flags` - sinalizadores opcionais, veja a tabela a seguir.
    - `mailbox_name` - nome da caixa de correio remota, o padrão é INBOX

    **Sinalizadores opcionais para nomes**

    | Sinalizador | Descrição |
    | --- | --- |
    | `/service=`*serviço* | serviço de acesso à caixa de correio, o padrão é "imap" |
    | `/user=`*usuário* | nome de usuário remoto para login no servidor |
    | `/authuser=`*usuário* | usuário de autenticação remota; se especificado, este é o nome de usuário cuja senha é usada (por exemplo, administrador) |
    | `/anonymous` | acesso remoto como usuário anônimo |
    | `/debug` | registra a telemetria do protocolo no registro de depuração do aplicativo |
    | `/secure` | não transmite uma senha em texto simples pela rede |
    | `/imap`, `/imap2`, `/imap2bis`, `/imap4`, `/imap4rev1` | equivalente a `/service=imap` |
    | `/pop3` | equivalent to `/service=pop3` |
    | `/nntp` | equivalent a `/service=nntp` |
    | `/norsh` | não usa rsh ou ssh para estabelecer uma sessão IMAP pré-autenticada |
    | `/ssl` | usa o `Secure Socket Layer` (SSL) para criptografar a sessão |
    | `/validate-cert` | valida certificados do servidor TLS/SSL (este é o comportamento padrão) |
    | `/novalidate-cert` | não valida certificados do servidor TLS/SSL, necessário se o servidor usa certificados autoassinados |
    | `/tls` | força o uso de `start-TLS` para criptografar a sessão e rejeita conexão com servidores que não o suportam |
    | `/notls` | não faz uso de `start-TLS` para criptografar a sessão, mesmo com servidores que o suportam |
    | `/readonly` | solicita abertura de caixa de correio somente leitura (somente IMAP; ignorado em NNTP e um erro com SMTP e POP3) |

`user`
:   O nome de usuário

`password`
:   A senha associada a `user`

`flags`
:   O parâmetro `flags` consiste em uma máscara de bits com uma ou mais
    das seguintes constantes:

    - **`OP_READONLY`** - Abre a caixa de correio somente leitura
    - **`OP_ANONYMOUS`** - Não usa ou atualiza um
      .newsrc para notícias (somente NNTP)
    - **`OP_HALFOPEN`** - Para nomes IMAP
      e NNTP, abre uma conexão, mas
      não abre uma caixa de correio.
    - **`CL_EXPUNGE`** - Expurga a caixa de correio automaticamente ao fechar a caixa de correio
      (veja também [imap\_delete()](function.imap-delete.md) e
      [imap\_expunge()](function.imap-expunge.md))
    - **`OP_DEBUG`** - Depura negociações de protocolo
    - **`OP_SHORTCACHE`** - Cache curto (somente `elt`)
    - **`OP_SILENT`** - Não deixa passar eventos (uso interno)
    - **`OP_PROTOTYPE`** - Retorna protótipo de driver
    - **`OP_SECURE`** - Não faz autenticação não segura

`retries`
:   Número máximo de tentativas de conexão

`options`
:   Parâmetros de conexão, as seguintes chaves (string) podem ser usadas
    para definir um ou mais parâmetros de conexão:

    - `DISABLE_AUTHENTICATOR` - Desativa propriedades de autenticação

### Valor Retornado

Retorna uma instância [IMAP\Connection](class.imap-connection.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [IMAP\Connection](class.imap-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Uso diferente de **imap\_open()****

```
<?php
// Para conectar-se a um servidor IMAP em execução na porta 143 na máquina local,
// faça o seguinte:
$mbox = imap_open("{localhost:143}INBOX", "user_id", "password");

// Para conectar-se a um servidor POP3 na porta 110 no servidor local, use:
$mbox = imap_open ("{localhost:110/pop3}INBOX", "user_id", "password");

// Para conectar-se a um servidor SSL IMAP ou POP3, adicione /ssl após a especificação
// do protocolo:
$mbox = imap_open ("{localhost:993/imap/ssl}INBOX", "user_id", "password");

// Para conectar-se a um servidor SSL IMAP ou POP3 com um certificado autoassinado,
// adicione /ssl/novalidate-cert após a especificação do protocolo:
$mbox = imap_open ("{localhost:995/pop3/ssl/novalidate-cert}", "user_id", "password");

// Para conectar a um servidor NNTP na porta 119 no servidor local, use:
$nntp = imap_open ("{localhost:119/nntp}comp.test", "", "");
// Para se conectar a um servidor remoto, substitua "localhost" pelo nome ou
// endereço IP do servidor ao qual se deseja conectar.
?>
```

**Exemplo #2 Exemplo de **imap\_open()****

```
<?php
$mbox = imap_open("{imap.example.org:143}", "username", "password");

echo "<h1>Mailboxes</h1>\n";
$folders = imap_listmailbox($mbox, "{imap.example.org:143}", "*");

if ($folders == false) {
    echo "Chamada falhou<br />\n";
} else {
    foreach ($folders as $val) {
        echo $val . "<br />\n";
    }
}

echo "<h1>Cabeçalhos em INBOX</h1>\n";
$headers = imap_headers($mbox);

if ($headers == false) {
    echo "Chamada falhou<br />\n";
} else {
    foreach ($headers as $val) {
        echo $val . "<br />\n";
    }
}

imap_close($mbox);
?>
```

### Veja também

- [imap\_close()](function.imap-close.md) - Fecha um fluxo IMAP

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
