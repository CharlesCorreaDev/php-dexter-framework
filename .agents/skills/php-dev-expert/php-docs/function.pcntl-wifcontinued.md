# Verifica se o processo de acompanhamento da criança prosseguiu a partir de uma interrupção no controle do trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wifcontinued.php

---

# pcntl\_wifcontinued

(PHP 7, PHP 8)

pcntl\_wifcontinued — Verifica se o processo de acompanhamento da criança prosseguiu a partir de uma interrupção no controle do trabalho

### Descrição

function **pcntl\_wifcontinued**([int](language.types.integer.md) `$status`): [bool](language.types.boolean.md)

Verifica se o processo filho que causou o retorno de
[pcntl\_waitpid()](function.pcntl-waitpid.md) continuou após uma parada de controle de tarefas.
Esta função só é útil se a chamada para
[pcntl\_waitpid()](function.pcntl-waitpid.md) foi feita usando a opção
**`WCONTINUED`**.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna **`true`** se o processo filho que causou o retorno de
[pcntl\_waitpid()](function.pcntl-waitpid.md) continuou a partir de uma parada de controle de trabalho,
**`false`** caso contrário.

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_wifstopped()](function.pcntl-wifstopped.md) - Verifica se o processo filho está parado no momento
- [pcntl\_wifexited()](function.pcntl-wifexited.md) - Verifica se o código de status representa uma saída normal
- [pcntl\_wifsignaled()](function.pcntl-wifsignaled.md) - Verifica se o código de status representa uma terminação devido a um sinal

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
