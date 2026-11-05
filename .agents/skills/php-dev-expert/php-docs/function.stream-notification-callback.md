# Uma função de chamada de retorno para o parâmetro de contexto de notification

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-notification-callback.php

---

# stream\_notification\_callback

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

stream\_notification\_callback — Uma função de chamada de retorno para o parâmetro de contexto de `notification`

### Descrição

function stream\_notification\_callback(  
    [int](language.types.integer.md) `$notification_code`,  
    [int](language.types.integer.md) `$severity`,  
    [?](language.types.null.md)[string](language.types.string.md) `$message`,  
    [int](language.types.integer.md) `$message_code`,  
    [int](language.types.integer.md) `$bytes_transferred`,  
    [int](language.types.integer.md) `$bytes_max`  
): [void](language.types.void.md)

Uma função do tipo [callable](language.types.callable.md), usada pelo
[parâmetro de contexto de notificação](context.params.md#context.params.notification),
chamado durante um evento.

> **Nota**:
>
> Esta *não* é uma função real, apenas um protótipo de como uma função
> deve ser.

### Parâmetros

`notification_code`
:   Uma das constantes de notificação **`STREAM_NOTIFY_*`**.

`severity`
:   Uma das constantes de notificação **`STREAM_NOTIFY_SEVERITY_*`**.

`message`
:   Passado se uma mensagem descritiva estiver disponível para o evento.

`message_code`
:   Passado se um código de mensagem descritiva estiver disponível para o evento.

    O significado deste valor depende do empacotador específico em uso.

`bytes_transferred`
:   Se aplicável, o número de bytes em `bytes_transferred` será
    preenchido.

`bytes_max`
:   Se aplicável, o número máximo de bytes em `bytes_max` será
    preenchido.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Suporte para **`STREAM_NOTIFY_COMPLETED`** foi implementado, versões mais antigas do PHP nunca ativariam esta notificação. |

### Examples

**Exemplo #1 Exemplo de **stream\_notification\_callback()****

```
<?php
function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {

    switch($notification_code) {
        case STREAM_NOTIFY_RESOLVE:
        case STREAM_NOTIFY_AUTH_REQUIRED:
        case STREAM_NOTIFY_COMPLETED:
        case STREAM_NOTIFY_FAILURE:
        case STREAM_NOTIFY_AUTH_RESULT:
            var_dump($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max);
            /* Ignora */
            break;

        case STREAM_NOTIFY_REDIRECTED:
            echo "Sendo redirecionado para: ", $message;
            break;

        case STREAM_NOTIFY_CONNECT:
            echo "Conectado...";
            break;

        case STREAM_NOTIFY_FILE_SIZE_IS:
            echo "Tamanho do arquivo: ", $bytes_max;
            break;

        case STREAM_NOTIFY_MIME_TYPE_IS:
            echo "Encontrado o tipo de mídia: ", $message;
            break;

        case STREAM_NOTIFY_PROGRESS:
            echo "Algum progresso, já baixados ", $bytes_transferred, " bytes até agora";
            break;
    }
    echo "\n";
}

$ctx = stream_context_create();
stream_context_set_params($ctx, array("notification" => "stream_notification_callback"));

file_get_contents("http://php.net/contact", false, $ctx);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Conectado...
Encontrado o tipo de mídia: text/html; charset=utf-8
Sendo redirecionado para: http://no.php.net/contact
Conectado...
Tamanho do arquivo: 0
Encontrado o tipo de mídia: text/html; charset=utf-8
Sendo redirecionado para: http://no.php.net/contact.php
Conectado...
Tamanho do arquivo: 4589
Encontrado o tipo de mídia: text/html;charset=utf-8
Algum progresso, já baixados 0 até agora
Algum progresso, já baixados 0 até agora
Algum progresso, já baixados 0 até agora
Algum progresso, já baixados 1440 até agora
Algum progresso, já baixados 2880 até agora
Algum progresso, já baixados 4320 até agora
Algum progresso, já baixados 5760 até agora
Algum progresso, já baixados 6381 até agora
Algum progresso, já baixados 7002 até agora
```

**Exemplo #2 Barra de progresso simples para cliente de download em linha de comando**

```
<?php
function usage($argv) {
    echo "Uso:\n";
    printf("\tphp %s <http://example.com/file> <localfile>\n", $argv[0]);
    exit(1);
}

function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {
    static $filesize = null;

    switch($notification_code) {
    case STREAM_NOTIFY_RESOLVE:
    case STREAM_NOTIFY_AUTH_REQUIRED:
    case STREAM_NOTIFY_COMPLETED:
    case STREAM_NOTIFY_FAILURE:
    case STREAM_NOTIFY_AUTH_RESULT:
        /* Ignore */
        break;

    case STREAM_NOTIFY_REDIRECTED:
        echo "Sendo redirecionado para: ", $message, "\n";
        break;

    case STREAM_NOTIFY_CONNECT:
        echo "Conectado...\n";
        break;

    case STREAM_NOTIFY_FILE_SIZE_IS:
        $filesize = $bytes_max;
        echo "Tamanho do arquivo: ", $filesize, "\n";
        break;

    case STREAM_NOTIFY_MIME_TYPE_IS:
        echo "Tipo de mídia: ", $message, "\n";
        break;

    case STREAM_NOTIFY_PROGRESS:
        if ($bytes_transferred > 0) {
            if (!isset($filesize)) {
                printf("\rTamanho de arquivo desconhecido.. %2d kb concluídos..", $bytes_transferred/1024);
            } else {
                $length = (int) (($bytes_transferred/$filesize)*100);
                printf("\r[%-100s] %d%% (%2d/%2d kb)", str_repeat("=", $length). ">", $length, ($bytes_transferred/1024), $filesize/1024);
            }
        }
        break;
    }
}

isset($argv[1], $argv[2]) or usage($argv);

$ctx = stream_context_create();
stream_context_set_params($ctx, array("notification" => "stream_notification_callback"));

$fp = fopen($argv[1], "r", false, $ctx);
if (is_resource($fp) && file_put_contents($argv[2], $fp)) {
    echo "\nPronto!\n";
    exit(0);
}

$err = error_get_last();
echo "\nErrrrro..\n", $err["message"], "\n";
exit(1);
?>
```

Executando o exemplo acima com:
`php -n fetch.php
http://no2.php.net/get/php-5-LATEST.tar.bz2/from/this/mirror
php-latest.tar.bz2` irá exibir algo parecido também:

```
Conectado...
Tipo de mídia: text/html; charset=utf-8
Sendo redirecionado para: http://no2.php.net/distributions/php-5.2.5.tar.bz2
Conectado...
Tamanho do arquivo: 7773024
Tipo de mídia: application/octet-stream
[========================================>                                                           ] 40% (3076/7590 kb)
```

### Veja também

- [Parâmetros de contexto](context.params.md)

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
