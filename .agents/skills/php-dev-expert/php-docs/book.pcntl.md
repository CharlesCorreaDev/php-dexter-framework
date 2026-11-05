# Controle de Processos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pcntl.php

---

# Controle de Processos

# Introdução

O suporte ao controle de processos no PHP implementa o estilo Unix de
criação de processos, execução de programas, manipulação de sinais e
encerramento de processos. O Controle de Processo não deve ser ativado em um
ambiente de servidor web e resultados inesperados podem ocorrer se alguma
função de Controle de Processo for usada em um ambiente de servidor web.

Esta documentação tem como objetivo explicar o uso geral de
cada uma das funções de Controle de Processo. Para obter informações detalhadas
sobre o controle de processos Unix, você é encorajado a consultar a
documentação do seu sistema, incluindo fork(2), waitpid(2) e signal(2)
ou uma referência abrangente, como Programação Avançada no
Ambiente UNIX por W. Richard Stevens (Addison-Wesley).

PCNTL agora usa ticks como mecanismo de retorno de chamada de identificador de sinal, que é
muito mais rápido que o mecanismo anterior. Esta mudança segue a mesma
semântica do uso de "user ticks". A instrução **declare()** é usada
para especificar os locais na aplicação onde as funções de retorno
podem ocorrer. Isso permite minimizar a sobrecarga do tratamento de
eventos assíncronos. No passado, compilar o PHP com pcntl habilitado
sempre incorreria nessa sobrecarga, independentemente do script usar
pcntl ou não.

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

- [Instalação/Configuração](pcntl.setup.md)
  - [Instalação](pcntl.installation.md)
- [Constantes predefinidas](pcntl.constants.md)
- [Examples](pcntl.examples.md)
  - [Uso básico](pcntl.example.md)
- [Pcntl\QosClass](enum.pcntl-qosclass.md) — A Enumeração Pcntl\QosClass
- [Funções PCNTL](ref.pcntl.md)
  - [pcntl\_alarm](function.pcntl-alarm.md) — Define um alarme para entrega de um sinal
  - [pcntl\_async\_signals](function.pcntl-async-signals.md) — Habilita/desabilita o tratamento de sinal assíncrono ou retorna a configuração antiga
  - [pcntl\_errno](function.pcntl-errno.md) — Sinônimo de pcntl\_get\_last\_error
  - [pcntl\_exec](function.pcntl-exec.md) — Executa o programa especificado no espaço do processo atual
  - [pcntl\_fork](function.pcntl-fork.md) — Bifurca o processo em execução no momento
  - [pcntl\_forkx](function.pcntl-forkx.md) — Cria um processo filho usando forkx(2)
  - [pcntl\_get\_last\_error](function.pcntl-get-last-error.md) — Recupera o número de erro definido pela última função pcntl que falhou
  - [pcntl\_getcpu](function.pcntl-getcpu.md) — Obtém o número da CPU na qual o processo que fez a chamada foi executado pela última vez
  - [pcntl\_getcpuaffinity](function.pcntl-getcpuaffinity.md) — Obtém a afinidade de CPU de um processo
  - [pcntl\_getpriority](function.pcntl-getpriority.md) — Obtém a prioridade de um processo
  - [pcntl\_getqos\_class](function.pcntl-getqos-class.md) — Obtém a classe QoS do thread atual
  - [pcntl\_rfork](function.pcntl-rfork.md) — Manipula recursos do processo
  - [pcntl\_setcpuaffinity](function.pcntl-setcpuaffinity.md) — Define a afinidade de CPU de um processo
  - [pcntl\_setns](function.pcntl-setns.md) — Reassocia o processo de chamada ao espaço de nomes de outro processo
  - [pcntl\_setpriority](function.pcntl-setpriority.md) — Altera a prioridade de qualquer processo
  - [pcntl\_setqos\_class](function.pcntl-setqos-class.md) — Define a classe QoS do thread atual
  - [pcntl\_signal](function.pcntl-signal.md) — Instala um manipulador de sinal
  - [pcntl\_signal\_dispatch](function.pcntl-signal-dispatch.md) — Chama manipuladores de sinais para sinais pendentes
  - [pcntl\_signal\_get\_handler](function.pcntl-signal-get-handler.md) — Obtém o manipulador atual para o sinal especificado
  - [pcntl\_sigprocmask](function.pcntl-sigprocmask.md) — Define e recupera sinais bloqueados
  - [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) — Aguarda sinais, com tempo limite
  - [pcntl\_sigwaitinfo](function.pcntl-sigwaitinfo.md) — Espera por sinais
  - [pcntl\_strerror](function.pcntl-strerror.md) — Recupera a mensagem de erro do sistema associada ao número de erro fornecido
  - [pcntl\_unshare](function.pcntl-unshare.md) — Dissociar partes do contexto de execução do processo
  - [pcntl\_wait](function.pcntl-wait.md) — Aguarda ou retorna o status de um filho bifurcado
  - [pcntl\_waitid](function.pcntl-waitid.md) — Aguarda que um processo filho mude de estado
  - [pcntl\_waitpid](function.pcntl-waitpid.md) — Aguarda ou retorna o status de um filho bifurcado
  - [pcntl\_wexitstatus](function.pcntl-wexitstatus.md) — Retorna o código de retorno de um filho encerrado
  - [pcntl\_wifcontinued](function.pcntl-wifcontinued.md) — Verifica se o processo de acompanhamento da criança prosseguiu a partir de uma interrupção no controle do trabalho
  - [pcntl\_wifexited](function.pcntl-wifexited.md) — Verifica se o código de status representa uma saída normal
  - [pcntl\_wifsignaled](function.pcntl-wifsignaled.md) — Verifica se o código de status representa uma terminação devido a um sinal
  - [pcntl\_wifstopped](function.pcntl-wifstopped.md) — Verifica se o processo filho está parado no momento
  - [pcntl\_wstopsig](function.pcntl-wstopsig.md) — Retorna o sinal que fez o processo filho parar
  - [pcntl\_wtermsig](function.pcntl-wtermsig.md) — Retorna o sinal que causou o término do processo filho

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
