# Inicializa uma instância do Inotify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inotify-init.php

---

# inotify\_init

(PECL inotify >= 0.1.2)

inotify\_init — Inicializa uma instância do Inotify

### Descrição

function **inotify\_init**(): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Inicializa uma instância do Inotify para uso com
[inotify\_add\_watch()](function.inotify-add-watch.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um recurso de fluxo ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de uso de Inotify**

```
<?php
// Abre uma instância Inotify
$fd = inotify_init();

// Monitora __FILE__ para alterações de metadados (por exemplo, data/horário de modificação)
$watch_descriptor = inotify_add_watch($fd, __FILE__, IN_ATTRIB);

// Gera um evento
touch(__FILE__);

// Lê os eventos
$events = inotify_read($fd);
print_r($events);

// Os métodos a seguir permitem usar funções Inotify sem bloquear em inotify_read():

// - Usando stream_select() em $fd:
$read = array($fd);
$write = null;
$except = null;
stream_select($read,$write,$except,0);

// - Usando stream_set_blocking() em $fd
stream_set_blocking($fd, 0);
inotify_read($fd); // Não bloqueia e retorna falso se nenhum evento estiver pendente

// - Usando inotify_queue_len() para verificar se a fila de eventos não está vazia
$queue_len = inotify_queue_len($fd); // Se > 0, inotify_read() não irá bloquear

// Encerra o monitoramento __FILE__ para alterações de metadados
inotify_rm_watch($fd, $watch_descriptor);

// Fecha a instância do Inotify
// Isso pode encerrar todos os monitoramentos se isso ainda não tiver sido feito
fclose($fd);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(
  array(
    'wd' => 1,     // Igual a $watch_descriptor
    'mask' => 4,   // Bit IN_ATTRIB definido
    'cookie' => 0, // ID esclusivo para conectar eventos relacionados (ex.:
                   // eventos IN_MOVE_FROM e IN_MOVE_TO)
    'name' => '',  // o nome de um arquivo (ex.: se as alterações são monitoradas
                   // em um diretório)
  ),
);
```

### Veja também

- [inotify\_add\_watch()](function.inotify-add-watch.md) - Adiciona um monitoramento a uma instância Inotify inicializada
- [inotify\_rm\_watch()](function.inotify-rm-watch.md) - Remove um monitoramento existente de uma instância do Inotify
- [inotify\_queue\_len()](function.inotify-queue-len.md) - Retorna um número maior que zero se houver eventos pendentes
- [inotify\_read()](function.inotify-read.md) - Lê eventos de uma instância do Inotify
- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto

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
