# Semáforos, Memória Compartilhada e Comunicação entre Processos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.sem.php

---

# Semáforos, Memória Compartilhada e Comunicação entre Processos

# Introdução

Esses módulos fornecem encapsulamento para a família de funções IPC do System V.
Inclui semáforos, memória compartilhada e mensagens entre processos (IPC).

Semáforos podem ser usados ​​para fornecer acesso exclusivo a
recursos na máquina atual ou para limitar o número de
processos que podem usar um recurso simultaneamente.

Este módulo também fornece funções de memória compartilhada usando a memória
compartilhada do System V. A memória compartilhada pode ser usada para fornecer acesso a
variáveis ​​globais. Diferentes daemons httpd e até mesmo outros programas
(como Perl, C, ...) são capazes de acessar esses dados para fornecer uma
troca global de dados. Lembre-se de que a memória compartilhada NÃO é segura
contra acesso simultâneo. Use semáforos para sincronização.

**Limites de memória compartilhada pelo sistema operacional Unix**

|  |  |
| --- | --- |
| SHMMAX | tamanho máximo da memória compartilhada, normalmente 131072 bytes |
| SHMMIN | tamanho mínimo de memória compartilhada, normalmente 1 byte |
| SHMMNI | quantidade máxima de segmentos de memória compartilhada em um sistema, normalmente 100 |
| SHMSEG | quantidade máxima de segmentos de memória compartilhada por processo, normalmente 6 |

As funções de mensagens podem ser usadas para enviar e receber mensagens de/para
outros processos. Elas fornecem um meio simples e eficaz de trocar
dados entre processos, sem a necessidade de configurar uma alternativa
usando soquetes de domínio Unix.

> **Nota**:
>
> Somente as funções de memória compartilhada e [ftok()](function.ftok.md) estão disponíveis
> no Windows. Nem semáforos nem funções de mensagens entre processos são
> suportadas nessa plataforma.

- [Instalação/Configuração](sem.setup.md)
  - [Instalação](sem.installation.md)
  - [Configurações de Execução](sem.configuration.md)
  - [Tipos de Recurso](sem.resources.md)
- [Constantes predefinidas](sem.constants.md)
- [Funções de Semaphore](ref.sem.md)
  - [ftok](function.ftok.md) — Converte um nome de caminho e um identificador de projeto em uma chave IPC do System V
  - [msg\_get\_queue](function.msg-get-queue.md) — Cria ou anexa a uma fila de mensagens
  - [msg\_queue\_exists](function.msg-queue-exists.md) — Verifica se existe uma fila de mensagens
  - [msg\_receive](function.msg-receive.md) — Recebe uma mensagem de uma fila de mensagens
  - [msg\_remove\_queue](function.msg-remove-queue.md) — Destrói uma fila de mensagens
  - [msg\_send](function.msg-send.md) — Envia uma mensagem para uma fila de mensagens
  - [msg\_set\_queue](function.msg-set-queue.md) — Define informações na estrutura de dados da fila de mensagens
  - [msg\_stat\_queue](function.msg-stat-queue.md) — Retorna informações da estrutura de dados da fila de mensagens
  - [sem\_acquire](function.sem-acquire.md) — Adquire um semáforo
  - [sem\_get](function.sem-get.md) — Obtém um ID de semáforo
  - [sem\_release](function.sem-release.md) — Libera um semáforo
  - [sem\_remove](function.sem-remove.md) — Remove um semáforo
  - [shm\_attach](function.shm-attach.md) — Cria ou abre um segmento de memória compartilhada
  - [shm\_detach](function.shm-detach.md) — Desconecta do segmento de memória compartilhada
  - [shm\_get\_var](function.shm-get-var.md) — Retorna uma variável da memória compartilhada
  - [shm\_has\_var](function.shm-has-var.md) — Verifica se uma entrada específica existe
  - [shm\_put\_var](function.shm-put-var.md) — Insere ou atualiza uma variável na memória compartilhada
  - [shm\_remove](function.shm-remove.md) — Remove memória compartilhada de sistemas Unix
  - [shm\_remove\_var](function.shm-remove-var.md) — Remove uma variável da memória compartilhada
- [SysvMessageQueue](class.sysvmessagequeue.md) — A classe SysvMessageQueue
- [SysvSemaphore](class.sysvsemaphore.md) — A classe SysvSemaphore
- [SysvSharedMemory](class.sysvsharedmemory.md) — A classe SysvSharedMemory

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
