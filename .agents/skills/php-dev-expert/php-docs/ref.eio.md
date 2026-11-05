# Funções de Eio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.eio.php

---

# Funções de Eio

## Índice

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
