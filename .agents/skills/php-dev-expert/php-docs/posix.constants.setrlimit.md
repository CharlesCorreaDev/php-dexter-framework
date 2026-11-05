# Constantes de posix_setrlimit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/posix.constants.setrlimit.php

---

## Constantes de [posix\_setrlimit()](function.posix-setrlimit.md)

> **Nota**:
>
> Observe que algumas delas podem não estar disponíveis em todos os sistemas.

> **Nota**:
>
> As notas abaixo devem ser lidas em conjunto com a página do manual de
> **setrlimit()** para o sistema operacional específico, pois há
> variação na forma como esses limites são interpretados, mesmo entre
> sistemas operacionais que afirmam implementar POSIX por completo.

**`POSIX_RLIMIT_AS`** ([int](language.types.integer.md))
:   O tamanho máximo do espaço de endereço do processo em bytes. Veja também
    a diretiva de configuração [memory\_limit](ini.core.md#ini.memory-limit)
    do PHP.

**`POSIX_RLIMIT_CORE`** ([int](language.types.integer.md))
:   O tamanho máximo de um arquivo "core". Se o limite for definido como 0, nenhum arquivo "core"
    será gerado.

**`POSIX_RLIMIT_CPU`** ([int](language.types.integer.md))
:   A quantidade máxima de tempo de CPU que o processo pode usar, em segundos.
    Quando o limite suave é atingido, um sinal **`SIGXCPU`** será
    enviado, que pode ser capturado com [pcntl\_signal()](function.pcntl-signal.md).
    Dependendo do sistema operacional, sinais **`SIGXCPU`**
    adicionais podem ser enviados a cada segundo até que o limite rígido seja atingido, momento
    em que um sinal **`SIGKILL`** não capturável é enviado.

    Veja também [set\_time\_limit()](function.set-time-limit.md).

**`POSIX_RLIMIT_DATA`** ([int](language.types.integer.md))
:   O tamanho máximo do segmento de dados do processo, em bytes. É
    extremamente improvável que isso tenha algum efeito na execução do
    PHP, a menos que uma extensão em uso chame **brk()** ou
    **sbrk()**.

**`POSIX_RLIMIT_FSIZE`** ([int](language.types.integer.md))
:   O tamanho máximo de arquivos que o processo pode criar, em bytes.

**`POSIX_RLIMIT_LOCKS`** ([int](language.types.integer.md))
:   O número máximo de bloqueios que o processo pode criar. Isso só é
    suportado em kernels Linux extremamente antigos.

**`POSIX_RLIMIT_MEMLOCK`** ([int](language.types.integer.md))
:   O número máximo de bytes que podem ser bloqueados na memória.

**`POSIX_RLIMIT_MSGQUEUE`** ([int](language.types.integer.md))
:   O número máximo de bytes que podem ser alocados para filas de mensagens
    POSIX. O PHP não é fornecido com suporte para filas de mensagens POSIX, então esse
    limite não terá efeito algum a menos que se esteja usando uma extensão que
    implemente esse suporte.

**`POSIX_RLIMIT_NICE`** ([int](language.types.integer.md))
:   O valor máximo para o qual o processo pode ser
    [priorizado](function.pcntl-setpriority.md). O valor
    usado será `20 - limit`, pois os valores de
    limite de recurso não podem ser negativos.

**`POSIX_RLIMIT_NOFILE`** ([int](language.types.integer.md))
:   Um valor uma unidade maior que o número máximo de descritores de arquivo que podem ser
    abertos por este processo.

**`POSIX_RLIMIT_NPROC`** ([int](language.types.integer.md))
:   O número máximo de processos (e/ou threads, em alguns sistemas
    operacionais) que podem ser criados para o ID de usuário real do processo.

**`POSIX_RLIMIT_RSS`** ([int](language.types.integer.md))
:   O tamanho máximo do conjunto residente do processo, em páginas.

**`POSIX_RLIMIT_RTPRIO`** ([int](language.types.integer.md))
:   A prioridade máxima em tempo real que pode ser definida por meio das chamadas de sistema
    **sched\_setscheduler()** e
    **sched\_setparam()**.

**`POSIX_RLIMIT_RTTIME`** ([int](language.types.integer.md))
:   A quantidade máxima de tempo de CPU, em microssegundos, que o processo pode
    consumir sem fazer uma chamada de sistema de bloqueio se estiver usando agendamento em
    tempo real.

**`POSIX_RLIMIT_SIGPENDING`** ([int](language.types.integer.md))
:   O número máximo de sinais que podem ser enfileirados para o ID de usuário real
    do processo.

**`POSIX_RLIMIT_STACK`** ([int](language.types.integer.md))
:   O tamanho máximo da pilha do processo, em bytes.

**`POSIX_RLIMIT_INFINITY`** ([int](language.types.integer.md))
:   Usado para indicar um valor infinito para um limite de recurso.

**`POSIX_RLIMIT_KQUEUES`** ([int](language.types.integer.md))
:   O número máximo de kqueues que este ID de usuário tem permissão para criar (FreeBSD).
    Disponível a partir do PHP 8.1.0.

**`POSIX_RLIMIT_NPTS`** ([int](language.types.integer.md))
:   O número máximo de pseudo-terminais que este ID de usuário tem permissão para criar (FreeBSD).
    Disponível a partir do PHP 8.1.0.

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
