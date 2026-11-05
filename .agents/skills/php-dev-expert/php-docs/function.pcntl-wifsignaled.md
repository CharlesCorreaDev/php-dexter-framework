# Verifica se o código de status representa uma terminação devido a um sinal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wifsignaled.php

---

# pcntl\_wifsignaled

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wifsignaled — Verifica se o código de status representa uma terminação devido a um sinal

### Descrição

function **pcntl\_wifsignaled**([int](language.types.integer.md) `$status`): [bool](language.types.boolean.md)

Verifica se o processo filho saiu devido a um sinal que não foi
capturado.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna **`true`** se o processo filho saiu devido a um sinal que
não foi capturado, **`false`** caso contrário.

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal

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
