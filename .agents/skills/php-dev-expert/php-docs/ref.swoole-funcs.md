# Funções Swoole

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.swoole-funcs.php

---

# Funções Swoole

## Índice

- [swoole\_async\_dns\_lookup](function.swoole-async-dns-lookup.md) — Pesquisa de nome de host para IP assíncrona e não bloqueante
- [swoole\_async\_read](function.swoole-async-read.md) — Lê o fluxo de arquivo de forma assíncrona
- [swoole\_async\_readfile](function.swoole-async-readfile.md) — Lê um arquivo de forma assíncrona
- [swoole\_async\_set](function.swoole-async-set.md) — Atualiza as opções de E/S assíncronas
- [swoole\_async\_write](function.swoole-async-write.md) — Escreve dados em um fluxo de arquivo de forma assíncrona
- [swoole\_async\_writefile](function.swoole-async-writefile.md) — Escreve dados em um arquivo de forma assíncrona
- [swoole\_clear\_error](function.swoole-clear-error.md) — Limpa os erros no socket ou no último código de erro
- [swoole\_client\_select](function.swoole-client-select.md) — Obtém a descrição do arquivo que está pronto para leitura/gravação ou erro
- [swoole\_cpu\_num](function.swoole-cpu-num.md) — Obtém o número de CPUs
- [swoole\_errno](function.swoole-errno.md) — Obtém o código de erro da última chamada de sistema
- [swoole\_error\_log](function.swoole-error-log.md) — Retorna mensagens de erro para o log
- [swoole\_event\_add](function.swoole-event-add.md) — Adiciona novas funções de retorno de chamada de um socket no EventLoop
- [swoole\_event\_defer](function.swoole-event-defer.md) — Adiciona função de retorno de chamada para o próximo loop de eventos
- [swoole\_event\_del](function.swoole-event-del.md) — Remove todas as funções de retorno de chamada de evento de um socket
- [swoole\_event\_exit](function.swoole-event-exit.md) — Sai do eventloop, disponível apenas no lado do cliente
- [swoole\_event\_set](function.swoole-event-set.md) — Atualiza as funções de retorno de chamada de evento de um socket
- [swoole\_event\_wait](function.swoole-event-wait.md) — Inicia o loop de eventos
- [swoole\_event\_write](function.swoole-event-write.md) — Escreve dados em um socket
- [swoole\_get\_local\_ip](function.swoole-get-local-ip.md) — Obtém os endereços IP IPv4 de cada NIC na máquina
- [swoole\_last\_error](function.swoole-last-error.md) — Obtém a mensagem de erro mais recente
- [swoole\_load\_module](function.swoole-load-module.md) — Carrega uma extensão do Swoole
- [swoole\_select](function.swoole-select.md) — Seleciona as descrições de arquivo que estão prontas para leitura/escrita ou erro no loop de eventos
- [swoole\_set\_process\_name](function.swoole-set-process-name.md) — Define o nome do processo
- [swoole\_strerror](function.swoole-strerror.md) — Converte o Errno em mensagens de erro
- [swoole\_timer\_after](function.swoole-timer-after.md) — Aciona uma função de retorno de chamada única no futuro
- [swoole\_timer\_exists](function.swoole-timer-exists.md) — Verifica se uma função de retorno de chamada de temporizador existe
- [swoole\_timer\_tick](function.swoole-timer-tick.md) — Aciona uma função de retorno de chamada de temporizador por intervalo de tempo
- [swoole\_version](function.swoole-version.md) — Obtém a versão do Swoole

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
