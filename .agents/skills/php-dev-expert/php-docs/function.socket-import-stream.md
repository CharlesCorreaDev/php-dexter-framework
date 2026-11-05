# Importa um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-import-stream.php

---

# socket\_import\_stream

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

socket\_import\_stream — Importa um fluxo

### Descrição

function **socket\_import\_stream**([resource](language.types.resource.md) `$stream`): [Socket](class.socket.md)|[false](language.types.singleton.md)

Importa um fluxo que encapsula um soquete em um recurso de extensão de soquete.

### Parâmetros

`stream`
:   O recurso de fluxo a ser importado.

### Valor Retornado

Retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [Socket](class.socket.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Exemplo de **socket\_import\_stream()****

```
<?php
$stream = stream_socket_server("udp://0.0.0.0:58380", $errno, $errstr, STREAM_SERVER_BIND);
$sock   = socket_import_stream($stream);
?>
```

### Veja também

- [stream\_socket\_server()](function.stream-socket-server.md) - Cria socket de servidor de domínio Internet ou Unix

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
