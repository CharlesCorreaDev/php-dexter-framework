# Cria um processo filho usando forkx(2)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-forkx.php

---

# pcntl\_forkx

(PHP 8 >= 8.2.0)

pcntl\_forkx — Cria um processo filho usando forkx(2)

### Descrição

function **pcntl\_forkx**([int](language.types.integer.md) `$flags`): [int](language.types.integer.md)

A função **pcntl\_forkx()** cria um processo filho
usando a chamada de sistema `forkx(2)`, que está disponível
nos sistemas illumos e Solaris.

### Parâmetros

`flags`
:   O parâmetro `flags` controla o comportamento
    do processo filho. Passe `0` para o comportamento padrão ou
    **`FORK_NOSIGCHLD`** para impedir que o
    sinal **`SIGCHLD`** seja enviado ao processo pai
    quando o processo filho for encerrado.

### Valor Retornado

Em caso de sucesso, o PID do processo filho é retornado na thread de execução
do processo pai e um valor `0` é retornado na thread
de execução do processo filho. Em caso de falha, um valor `-1`
será retornado no contexto do processo pai, nenhum processo filho será
criado e um erro PHP será gerado.

### Veja também

- [pcntl\_fork()](function.pcntl-fork.md) - Bifurca o processo em execução no momento
- [pcntl\_rfork()](function.pcntl-rfork.md) - Manipula recursos do processo
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
