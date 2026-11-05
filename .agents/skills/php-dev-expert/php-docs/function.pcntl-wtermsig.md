# Retorna o sinal que causou o término do processo filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wtermsig.php

---

# pcntl\_wtermsig

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wtermsig — Retorna o sinal que causou o término do processo filho

### Descrição

function **pcntl\_wtermsig**([int](language.types.integer.md) `$status`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número do sinal que causou o término do processo filho.
Esta função só é útil se
[pcntl\_wifsignaled()](function.pcntl-wifsignaled.md) retornou **`true`**.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna o número do sinal.
Se a funcionalidade não for suportada pelo sistema operacional, **`false`** será retornado.

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal
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
