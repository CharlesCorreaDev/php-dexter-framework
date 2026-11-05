# Funções de Semaphore

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.sem.php

---

# Funções de Semaphore

## Índice

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
