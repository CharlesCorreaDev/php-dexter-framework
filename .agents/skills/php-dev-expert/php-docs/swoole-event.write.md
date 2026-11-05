# Escreve dados no socket de forma assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.write.php

---

# Swoole\Event::write

(PECL swoole >= 1.9.0)

Swoole\Event::write — Escreve dados no socket de forma assíncrona

### Descrição

public static function **Swoole\Event::write**([mixed](language.types.mixed.md) `$fd`, [mixed](language.types.mixed.md) `$data`): [bool](language.types.boolean.md)

Torna o envio de dados assíncrono para recursos de stream/sockets.

> **Nota**:
>
> Se dados forem gravados continuamente em um socket, mas a outra ponta não conseguir lê-los com rapidez suficiente, o buffer do socket
> acabará ficando cheio. Nesse caso, a camada subjacente do Swoole armazenará os dados excedentes
> em um buffer na memória e aguardará o disparo do evento de disponibilidade de escrita antes de tentar gravar
> novamente no socket. No entanto, se o buffer na memória também ficar cheio, o Swoole emitirá um
> erro do tipo "pipe buffer overflow, reactor will block" e alternará para o modo bloqueante, pausando novas
> operações de escrita até que haja espaço disponível.

> **Nota**:
>
> O retorno de false devido ao buffer cheio é uma operação atômica — garante
> sucesso completo (todos os dados escritos) ou falha total (nenhum dado escrito).

**Aviso**

Event::write não pode ser usado com streams ou sockets criptografados com SSL/TLS (conexões tuneladas).

**Aviso**

Após a execução bem-sucedida, Event::write alternará automaticamente o $socket para o modo não bloqueante.

### Parâmetros

`fd`
:   Descritor de arquivo (recurso de fluxo/socket, inteiro ou objeto).

`data`
:   Dados a serem enviados (o comprimento não deve exceder o tamanho do buffer do socket).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Swoole\Event::write()****

```
<?php
use Swoole\Event;

$fp = stream_socket_client('tcp://127.0.0.1:9501');
$data = str_repeat('A', 1024 * 1024*2);
Event::add($fp, function($fp) {
     echo fread($fp);
});
Event::write($fp, $data);
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
