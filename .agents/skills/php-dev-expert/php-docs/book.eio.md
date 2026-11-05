# Eio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.eio.php

---

# Eio

# Introdução

Esta extensão fornece E/S POSIX assíncrona por meio da biblioteca C [» libeio](https://software.schmorp.de/pkg/libeio.html)
escrita por Marc Lehmann.

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

**Aviso**

É importante estar ciente de que cada solicitação é executada em um thread e a
ordem de execução das solicitações enfileiradas continuamente é basicamente
imprevisível. Por exemplo, o trecho de código a seguir está incorreto.

**Exemplo #1 Requisições incorretas**

```
<?php
// Solicitação para criar link simbólico de $filename para $link
eio_symlink($filename, $link);

// Solicitação para mover $filename para $new_filename
eio_rename($filename, $new_filename);

// Processa solicitações
eio_event_loop();
?>
```

No exemplo acima a solicitação [eio\_rename()](function.eio-rename.md) pode terminar
antes de [eio\_symlink()](function.eio-symlink.md). Para corrigir, pode-se chamar [eio\_rename()](function.eio-rename.md)
na função de retorno de [eio\_symlink()](function.eio-symlink.md):

**Exemplo #2 Chamando solicitação de uma chamada de solicitação**

```
<?php
function my_symlink_done($filename, $result) {
 // Solicitação para mover $filename para $new_filename
 eio_rename($filename, "/path/to/new-name");

 // Processa solicitações
 eio_event_loop();
}

// Solicitação para criar ligação simbólica de $filename para $link
eio_symlink($filename, $link, EIO_PRI_DEFAULT, "my_symlink_done", $filename);

// Processa solicitações
eio_event_loop();
?>
```

Alternativamente, pode-se criar um grupo de solicitações:

**Exemplo #3 Chamando solicitação de uma chamada de solicitação**

```
<?php
/* É chamado quando as solicitações do grupo são concluídas */
function my_grp_done($data, $result) {
 // ...
}

function my_symlink_done($filename, $result) {
 // Cria a solicitação eio_rename e adiciona-a ao grupo
 $req = eio_rename($filename, "/path/to/new-name");
 eio_grp_add($grp, $req);
 // Pode-se adicionar mais solicitações...
}

// Cria um grupo de solicitações
$grp = eio_grp("my_grp_done", "my_grp_data");

// Cria a solicitação eio_symlink e adiciona-a ao grupo
// Passa $filename para o retorno de chamada
$req = eio_symlink($filename, $link,
  EIO_PRI_DEFAULT, "my_symlink_done", $filename);
eio_grp_add($grp, $req);

// Processa solicitações
eio_event_loop();
?>
```

Grupo é um tipo especial de solicitação que pode acumular um conjunto de solicitações
*eio* regulares. Isso poderia ser usado para criar uma solicitação complexa
que abre, lê e fecha um arquivo.

Desde a versão 0.3.0 alpha, uma variável usada internamente nas comunicações com o l
ibeio, poderia ser recuperada com
[eio\_get\_event\_stream()](function.eio-get-event-stream.md). A variável poderia ser usada p
ara vincular a um loop de eventos suportado por alguma outra extensão. Pode-se
organizar um loop de eventos simples onde eio e libevent trabalhem juntos:

**Exemplo #4 Usando eio com libevent**

```
<?php
function my_eio_poll($fd, $events, $arg) {
    /* Algum regulamento do libevent pode estar aqui.. */
    if (eio_nreqs()) {
        eio_poll();
    }
    /* .. e aqui */
}

function my_res_cb($d, $r) {
    var_dump($r); var_dump($d);
}

$base = event_base_new();
$event = event_new();

// Este fluxo é usado para vincular com libevent
$fd = eio_get_event_stream();

eio_nop(EIO_PRI_DEFAULT, "my_res_cb", "nop data");
eio_mkdir("/tmp/abc-eio-temp", 0750, EIO_PRI_DEFAULT, "my_res_cb", "mkdir data");
/* algumas outras chamadas eio_* aqui... */

// define opções de evento
event_set($event, $fd, EV_READ /*| EV_PERSIST*/, "my_eio_poll", array($event, $base));

// define a base de eventos
event_base_set($event, $base);

// habilita evento
event_add($event);

// inicia loop de eventos
event_base_loop($base);

/* O mesmo estará disponível através da interface libevent em buffer */
?>
```

- [Instalação/Configuração](eio.setup.md)
  - [Dependências](eio.requirements.md)
  - [Instalação](eio.installation.md)
  - [Tipos de Recurso](eio.resources.md)
- [Constantes predefinidas](eio.constants.md)
- [Examples](eio.examples.md)
- [Funções de Eio](ref.eio.md)
  - [eio\_busy](function.eio-busy.md) — Aumenta artificialmente a carga. Pode ser útil em testes,
    benchmarking
  - [eio\_cancel](function.eio-cancel.md) — Cancela uma requisição
  - [eio\_chmod](function.eio-chmod.md) — Altera permissões de arquivo/diretório
  - [eio\_chown](function.eio-chown.md) — Altera proprietário de arquivo/diretório
  - [eio\_close](function.eio-close.md) — Fecha arquivo
  - [eio\_custom](function.eio-custom.md) — Executa requisição personalizada como qualquer outra chamada eio\_\*
  - [eio\_dup2](function.eio-dup2.md) — Duplica um descritor de arquivo
  - [eio\_event\_loop](function.eio-event-loop.md) — Consulta a libeio até que todas as requisições tenham concluído
  - [eio\_fallocate](function.eio-fallocate.md) — Permite ao chamador manipular diretamente o espaço alocado
    em disco para um arquivo
  - [eio\_fchmod](function.eio-fchmod.md) — Altera permissões de arquivo
  - [eio\_fchown](function.eio-fchown.md) — Altera proprietário de arquivo
  - [eio\_fdatasync](function.eio-fdatasync.md) — Sincroniza o estado central de um arquivo com o dispositivo de armazenamento
  - [eio\_fstat](function.eio-fstat.md) — Obtém status de arquivo
  - [eio\_fstatvfs](function.eio-fstatvfs.md) — Obtém estatísticas de sistema de um arquivo
  - [eio\_fsync](function.eio-fsync.md) — Sincroniza o estado central de um arquivo com o dispositivo de armazenamento
  - [eio\_ftruncate](function.eio-ftruncate.md) — Trunca um arquivo
  - [eio\_futime](function.eio-futime.md) — Altera o horário de último acesso e última modificação de um arquivo
  - [eio\_get\_event\_stream](function.eio-get-event-stream.md) — Obtém fluxo representando uma variável usada em comunicações internas com libeio
  - [eio\_get\_last\_error](function.eio-get-last-error.md) — Retorna uma string que descreve o último erro associado a um recurso de requisição
  - [eio\_grp](function.eio-grp.md) — Cria um grupo de requisições
  - [eio\_grp\_add](function.eio-grp-add.md) — Adiciona uma requisição ao grupo de requisições
  - [eio\_grp\_cancel](function.eio-grp-cancel.md) — Cancela um grupo de requisições
  - [eio\_grp\_limit](function.eio-grp-limit.md) — Define limite de grupo
  - [eio\_init](function.eio-init.md) — (Re-)inicializa a Eio
  - [eio\_link](function.eio-link.md) — Cria uma ligação física para um arquivo
  - [eio\_lstat](function.eio-lstat.md) — Obtém status de arquivo
  - [eio\_mkdir](function.eio-mkdir.md) — Cria diretório
  - [eio\_mknod](function.eio-mknod.md) — Cria arquivo normal ou especial
  - [eio\_nop](function.eio-nop.md) — Não faz nada, exceto passar por todo o ciclo de requisição
  - [eio\_npending](function.eio-npending.md) — Retorna o número de requisições concluídas, mas não tratadas
  - [eio\_nready](function.eio-nready.md) — Retorna o número de requisições ainda não tratadas
  - [eio\_nreqs](function.eio-nreqs.md) — Retorna o número de requisições a serem processadas
  - [eio\_nthreads](function.eio-nthreads.md) — Retorna o número de threads em uso
  - [eio\_open](function.eio-open.md) — Abre um arquivo
  - [eio\_poll](function.eio-poll.md) — Pode ser chamada sempre que houver solicitações pendentes que precisem ser finalizadas
  - [eio\_read](function.eio-read.md) — Lê um descritor de arquivo em determinada posição
  - [eio\_readahead](function.eio-readahead.md) — Execute a leitura antecipada do arquivo no cache da página
  - [eio\_readdir](function.eio-readdir.md) — Lê um diretório inteiro
  - [eio\_readlink](function.eio-readlink.md) — Lê o valor de uma ligação simbólica
  - [eio\_realpath](function.eio-realpath.md) — Obtém o caminho absoluto canônico
  - [eio\_rename](function.eio-rename.md) — Altera o nome ou localização de um arquivo
  - [eio\_rmdir](function.eio-rmdir.md) — Remove um diretório
  - [eio\_seek](function.eio-seek.md) — Aponta para uma posição
  - [eio\_sendfile](function.eio-sendfile.md) — Transfere dados entre descritores de arquivo
  - [eio\_set\_max\_idle](function.eio-set-max-idle.md) — Define o número máximo de threads ociosas
  - [eio\_set\_max\_parallel](function.eio-set-max-parallel.md) — Define número máximo de threads paralelas
  - [eio\_set\_max\_poll\_reqs](function.eio-set-max-poll-reqs.md) — Define número máximo de requisições processadas em uma consulta
  - [eio\_set\_max\_poll\_time](function.eio-set-max-poll-time.md) — Define o tempo máximo de consulta
  - [eio\_set\_min\_parallel](function.eio-set-min-parallel.md) — Define número mínimo de threads paralelas
  - [eio\_stat](function.eio-stat.md) — Obtém status de arquivo
  - [eio\_statvfs](function.eio-statvfs.md) — Obtém estatísticas do sistema de arquivos
  - [eio\_symlink](function.eio-symlink.md) — Cria uma ligação simbólica
  - [eio\_sync](function.eio-sync.md) — Envia o cache em buffer para o disco
  - [eio\_sync\_file\_range](function.eio-sync-file-range.md) — Sincroniza um segmento de arquivo com o disco
  - [eio\_syncfs](function.eio-syncfs.md) — Faz a chamada de sistema syncfs do Linux, se disponível
  - [eio\_truncate](function.eio-truncate.md) — Trunca um arquivo
  - [eio\_unlink](function.eio-unlink.md) — Remove um nome e possivelmente o arquivo ao qual ele se refere
  - [eio\_utime](function.eio-utime.md) — Altera os horários de último acesso e de modificação de um arquivo
  - [eio\_write](function.eio-write.md) — Escreve em um arquivo

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
