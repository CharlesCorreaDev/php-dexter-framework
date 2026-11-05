# Aguarda ou retorna o status de um filho bifurcado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wait.php

---

# pcntl\_wait

(PHP 5, PHP 7, PHP 8)

pcntl\_wait — Aguarda ou retorna o status de um filho bifurcado

### Descrição

function **pcntl\_wait**([int](language.types.integer.md) `&$status`, [int](language.types.integer.md) `$flags` = 0, [array](language.types.array.md) `&$resource_usage` = []): [int](language.types.integer.md)

A função wait suspende a execução do processo atual até que
um filho tenha saído, ou até que um sinal seja entregue, cuja ação seja
encerrar o processo atual ou chamar uma função de tratamento de sinais. Se um
filho já tiver saído no momento da chamada (um processo chamado de "zumbi"),
a função retorna imediatamente. Quaisquer recursos do sistema usados
pelo filho são liberados. Consulte a página de manual wait(2) do sistema operacional para
detalhes específicos sobre como wait funciona.

> **Nota**:
>
> Esta função é equivalente a chamar [pcntl\_waitpid()](function.pcntl-waitpid.md)
> com um `-1` `process_id` e sem
> `flags`.

### Parâmetros

`status`
:   **pcntl\_wait()** armazenará informações de status
    no parâmetro `status`, que podem ser
    avaliadas usando as seguintes funções:
    [pcntl\_wifexited()](function.pcntl-wifexited.md),
    [pcntl\_wifstopped()](function.pcntl-wifstopped.md),
    [pcntl\_wifsignaled()](function.pcntl-wifsignaled.md),
    [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md),
    [pcntl\_wtermsig()](function.pcntl-wtermsig.md) e
    [pcntl\_wstopsig()](function.pcntl-wstopsig.md).

`flags`
:   Se wait3 estiver disponível no sistema (principalmente sistemas no estilo BSD), pode
    ser fornecido o parâmetro opcional `flags`. Se este
    parâmetro não for fornecido, wait será usado para a chamada de sistema. Se
    wait3 não estiver disponível, fornecer um valor para `flags`
    não terá efeito. O valor de `flags`
    é uma operação `OR` de zero ou mais das duas
    constantes a seguir:

    **Valores possíveis para `flags`**

    |  |  |
    | --- | --- |
    | **`WNOHANG`** | Retorna imediatamente se nenhum processo filho tiver saído. |
    | **`WUNTRACED`** | Retorna para processos filhos que estão parados e cujos status não tenham sido reportados. |

### Valor Retornado

**pcntl\_wait()** retorna o ID do processo
filho que saiu, -1 em caso de erro ou zero se WNOHANG foi fornecido como uma
opção (em sistemas que tenham wait3 disponível) e nenhum processo filho estava disponível.

### Veja também

- [pcntl\_fork()](function.pcntl-fork.md) - Bifurca o processo em execução no momento
- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal
- [pcntl\_wifexited()](function.pcntl-wifexited.md) - Verifica se o código de status representa uma saída normal
- [pcntl\_wifstopped()](function.pcntl-wifstopped.md) - Verifica se o processo filho está parado no momento
- [pcntl\_wifsignaled()](function.pcntl-wifsignaled.md) - Verifica se o código de status representa uma terminação devido a um sinal
- [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md) - Retorna o código de retorno de um filho encerrado
- [pcntl\_wtermsig()](function.pcntl-wtermsig.md) - Retorna o sinal que causou o término do processo filho
- [pcntl\_wstopsig()](function.pcntl-wstopsig.md) - Retorna o sinal que fez o processo filho parar
- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado

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
