# Verifica se o código de status representa uma saída normal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wifexited.php

---

# pcntl\_wifexited

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wifexited — Verifica se o código de status representa uma saída normal

### Descrição

function **pcntl\_wifexited**([int](language.types.integer.md) `$status`): [bool](language.types.boolean.md)

Verifica se o código de status do processo filho representa uma saída normal.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna **`true`** se o código de status do filho representa uma saída normal,
**`false`** caso contrário.

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_wexitstatus()](function.pcntl-wexitstatus.md) - Retorna o código de retorno de um filho encerrado

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
