# Aguarda ou retorna o status de um filho bifurcado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-waitpid.php

---

# pcntl\_waitpid

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_waitpid — Aguarda ou retorna o status de um filho bifurcado

### Descrição

function **pcntl\_waitpid**(  
    [int](language.types.integer.md) `$process_id`,  
    [int](language.types.integer.md) `&$status`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [array](language.types.array.md) `&$resource_usage` = []  
): [int](language.types.integer.md)

Suspende a execução do processo atual até que um filho, conforme especificado pelo
argumento `process_id`, tenha saído, ou até que um sinal seja
entregue, cuja ação seja encerrar o processo atual ou chamar uma
função de tratamento de sinal.

Se um filho, conforme solicitado por `process_id`, já tiver saído
no momento da chamada (um processo chamado "zumbi"), a função
retorna imediatamente. Quaisquer recursos do sistema utilizados pelo filho são liberados.
Consulte a página de manual waitpid(2) do sistema para obter detalhes específicos sobre
como o waitpid funciona.

### Parâmetros

`process_id`
:   O valor de `process_id` pode ser um dos seguintes:

    **Valores possíveis para `process_id`**

    |  |  |
    | --- | --- |
    | `< -1` | aguarda qualquer processo filho cujo ID do grupo de processos seja igual ao valor absoluto de `process_id`. |
    | `-1` | aguarda qualquer processo filho; este é o mesmo comportamento que a função [pcntl\_wait()](function.pcntl-wait.md) exibe. |
    | `0` | aguarda qualquer processo filho cujo ID do grupo de processos seja igual ao do processo de chamada. |
    | `> 0` | aguarda o filho cujo ID do processo é igual ao valor de `process_id`. |

    > **Nota**:
    >
    > Especificar `-1` como `process_id` é
    > equivalente à funcionalidade que [pcntl\_wait()](function.pcntl-wait.md) fornece
    > (menos `flags`).

`status`
:   **pcntl\_waitpid()** armazenará informações de status
    no parâmetro `status`, que podem ser
    avaliadas usando as seguintes funções:
    [pcntl\_wifexited()](function.pcntl-wifexited.md),
    [pcntl\_wifstopped()](function.pcntl-wifstopped.md),
    [pcntl\_wifsignaled()](function.pcntl-wifsignaled.md),
    [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md),
    [pcntl\_wtermsig()](function.pcntl-wtermsig.md) e
    [pcntl\_wstopsig()](function.pcntl-wstopsig.md).

`flags`
:   O valor de `flags` é o valor de zero
    ou mais das duas constantes globais a seguir
    combinadas com `OR`:

    **Valores possíveis para `flags`**

    |  |  |
    | --- | --- |
    | **`WNOHANG`** | Retorna imediatamente se nenhum processo filho tiver saído. |
    | **`WUNTRACED`** | Retorna para filhos que estão parados e cujos status não tenham sido reportados. |

### Valor Retornado

**pcntl\_waitpid()** retorna o ID do processo
do filho que saiu, -1 em caso de erro ou zero se **`WNOHANG`** foi usado e nenhum
filho estava disponível.

### Veja também

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
