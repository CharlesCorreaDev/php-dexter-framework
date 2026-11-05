# Adiciona um socket ao monitor de eventos subjacente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.add.php

---

# Swoole\Event::add

(PECL swoole >= 1.9.0)

Swoole\Event::add — Adiciona um socket ao monitor de eventos subjacente

### Descrição

public static function **Swoole\Event::add**(  
    [mixed](language.types.mixed.md) `$sock`,  
    [callable](language.types.callable.md) `$read_callback`,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$flags` = ?  
): [bool](language.types.boolean.md)

Adiciona um socket ao monitor de eventos subjacente. Esta função pode ser usada nos modos Cliente e Servidor.

**Aviso**

Um socket que já foi adicionado não pode ser adicionado novamente. Utilize `swoole\_event\_set` para
modificar as funções de callback e os tipos de evento correspondentes para o socket.

### Parâmetros

`sock`
:   Descritor de arquivo, recurso de fluxo, recurso de socket ou objeto.

`read_callback`
:   Função de callback para eventos de leitura.

`write_callback`
:   Função de callback para eventos de escrita.

`flags`
:   Máscara de tipo de evento (por exemplo, **`SWOOLE_EVENT_READ`**, **`SWOOLE_EVENT_WRITE`**
    ou **`SWOOLE_EVENT_READ`** | **`SWOOLE_EVENT_WRITE`**).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Swoole\Event::add()****

```
<?php
$fp = stream_socket_client("tcp://www.qq.com:80", $errno, $errstr, 30);
fwrite($fp,"GET / HTTP/1.1\r\nHost: www.qq.com\r\n\r\n");

Swoole\Event::add($fp, function($fp) {
    $resp = fread($fp, 8192);
    Swoole\Event::del($fp);
    fclose($fp);
});
echo "Finish\n";
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
