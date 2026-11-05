# Aguarda que um processo filho mude de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-waitid.php

---

# pcntl\_waitid

(PHP 8 >= 8.4.0)

pcntl\_waitid — Aguarda que um processo filho mude de estado

### Descrição

function **pcntl\_waitid**(  
    [int](language.types.integer.md) `$idtype` = **`P_ALL`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$id` = **`null`**,  
    [array](language.types.array.md) `&$info` = [],  
    [int](language.types.integer.md) `$flags` = **`WEXITED`**,  
    [array](language.types.array.md) `&$resource_usage` = []  
): [bool](language.types.boolean.md)

Obtém informações de status referentes a eventos de término, parada e/ou continuação
em um dos processos filhos do chamador.

A menos que o sinalizador **`WNOHANG`** seja passado, o processo de chamada ficará
bloqueado até que ocorra um erro ou informações de status fiquem
disponíveis, satisfazendo todos os seguintes:

- As informações de status são de um dos processos filhos no conjunto de
  processos filhos especificados pelos argumentos `idtype` e
  `id`.
- A mudança de estado nas informações de status corresponde a um dos sinalizadores de mudança de estado
  definidos no argumento `flags`.

Se informações de status correspondentes estiverem disponíveis antes da chamada a
**pcntl\_waitid()**, o retorno será imediato. Se informações
de status correspondentes estiverem disponíveis para dois ou mais processos filhos, a ordem
em que seus status são relatados não é especificada.

> **Nota**:
>
> Esta documentação abrange a especificação POSIX da
> função `waitid`, juntamente com alguns parâmetros adicionais
> específicos para implementações em Linux, NetBSD e FreeBSD. Consulte a
> página de manual `waitid(2)` do sistema operacional para obter detalhes específicos sobre
> como `waitid` funciona.

### Parâmetros

`idtype`

`id`
:   Os argumentos `idtype` e `id`
    são usados ​​para especificar quais filhos esperar.

    **Padrão POSIX para argumentos `idtype` e `id`**

    |  |  |
    | --- | --- |
    | Se `idtype` for `P_ALL` | espera por qualquer processo filho, `id` é ignorado. |
    | Se `idtype` for `P_PID` | espera pelo processo filho com ID de processo igual a `id`. |
    | Se `idtype` for `P_PGID` | espera por qualquer processo filho com ID de grupo de processo igual a `id`. |

    **Argumentos `idtype` e `id` específicos para Linux**

    |  |  |
    | --- | --- |
    | Se `idtype` for `P_PIDFD` (desde o Linux 5.4) | espera pelo processo filho referido pelo descritor de arquivo PID especificado em `id`. (Consulte a página de manual do Linux `pidfd_open(2)` para obter mais informações sobre descritores de arquivo PID.) |

    **Argumentos `idtype` e `id` específicos do NetBSD e FreeBSD**

    |  |  |
    | --- | --- |
    | Se `idtype` for `P_UID` | aguarda processos cujo ID de usuário efetivo seja igual a `id`. |
    | Se `idtype` for `P_GID` | aguarda processos cujo ID de grupo efetivo seja igual a `id`. |
    | Se `idtype` for `P_SID` | aguarda processos cujo ID de sessão seja igual a `id`. Se o processo filho iniciou sua própria sessão, seu ID de sessão será o mesmo que seu ID de processo. Caso contrário, o ID de sessão de um processo filho corresponderá ao ID de sessão do chamador. |

    **Argumentos `idtype` e `id` específicos do FreeBSD**

    |  |  |
    | --- | --- |
    | Se `idtype` for `P_JAILID` | aguarda processos dentro de uma "jail" cujo identificador de "jail" seja igual a `id`. |

`info`
:   O parâmetro `info` é definido como um array
    contendo informações sobre o sinal.

    O array `info` pode conter as seguintes chaves:

    - `signo`: Número do sinal
    - `errno`: Número do erro do sistema
    - `code`: Código do sinal
    - `status`: Valor ou sinal de saída
    - `pid`: ID do processo que envia
    - `uid`: ID do usuário real do processo que envia
    - `utime`: Tempo do usuário consumido
    - `stime`: Tempo do sistema consumido

`flags`
:   O valor de `flags` é o valor de zero ou mais das
    seguintes constantes combinadas com OR:

    **Valores possíveis para `flags`**

    |  |  |
    | --- | --- |
    | **`WCONTINUED`** | O status deve ser retornado para qualquer processo filho continuado cujo status não tenha sido relatado desde que continuou a partir de uma parada de controle de tarefa ou tenha sido relatado apenas por chamadas a **pcntl\_waitid()** com o sinalizador **`WNOWAIT`** definido. |
    | **`WEXITED`** | Aguarda processos que foram encerrados. |
    | **`WNOHANG`** | Não trava se nenhum status estiver disponível; retorna imediatamente. |
    | **`WNOWAIT`** | Mantém o processo cujo status é retornado em `info` em um estado de espera. Isso não deve afetar o estado do processo; o processo pode ser aguardado novamente após a conclusão desta chamada. |
    | **`WSTOPPED`** | O status deve ser retornado para qualquer processo filho que tenha parado ao receber um sinal e cujo status não tenha sido relatado desde sua parada ou tenha sido relatado apenas por chamadas a **pcntl\_waitid()** com o sinalizador **`WNOWAIT`** definido. |

`resource_usage`
:   O parâmetro `resource_usage` é definido como um array
    que contém estatística de uso de recursos do processo filho.
    Isto é suportado se a chamada de sistema wait6 estiver disponível
    (por exemplo no FreeBSD), ou também no Linux através da chamada de sistema waitid.

### Valor Retornado

**pcntl\_waitid()** retorna **`true`** se
**`WNOHANG`** foi especificado e o status não está disponível para
qualquer processo especificado por `idtype` e
`id`.

**pcntl\_waitid()** retorna **`true`** devido à mudança de estado
de um de seus filhos.

Caso contrário, **`false`** é retornado e [pcntl\_get\_last\_error()](function.pcntl-get-last-error.md)
pode ser usado para obter o número do erro `errno`.

> **Nota**:
>
> Uma vez obtido um número de erro `errno`,
> [pcntl\_strerror()](function.pcntl-strerror.md) pode ser usada para obter a mensagem de texto
> associada a ele.

### Erros/Exceções

**Valores de número de erro (`errno`)**

|  |  |
| --- | --- |
| **`ECHILD`** | O processo de chamada não possui processos filho existentes não aguardados. |
| **`EINTR`** | **pcntl\_waitid()** foi interrompido por um sinal. |
| **`EINVAL`** | Um valor inválido foi especificado para `flags`, ou `idtype` e `id` especificam um conjunto inválido de processos. |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `resource_usage` foi adicionado. |

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_wait()](function.pcntl-wait.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_fork()](function.pcntl-fork.md) - Bifurca o processo em execução no momento
- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal
- [pcntl\_wifexited()](function.pcntl-wifexited.md) - Verifica se o código de status representa uma saída normal
- [pcntl\_wifstopped()](function.pcntl-wifstopped.md) - Verifica se o processo filho está parado no momento
- [pcntl\_wifsignaled()](function.pcntl-wifsignaled.md) - Verifica se o código de status representa uma terminação devido a um sinal
- [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md) - Retorna o código de retorno de um filho encerrado
- [pcntl\_wtermsig()](function.pcntl-wtermsig.md) - Retorna o sinal que causou o término do processo filho
- [pcntl\_wstopsig()](function.pcntl-wstopsig.md) - Retorna o sinal que fez o processo filho parar

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
