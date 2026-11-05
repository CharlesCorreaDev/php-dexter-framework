# Verifica se o processo filho está parado no momento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wifstopped.php

---

# pcntl\_wifstopped

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wifstopped — Verifica se o processo filho está parado no momento

### Descrição

function **pcntl\_wifstopped**([int](language.types.integer.md) `$status`): [bool](language.types.boolean.md)

Verifica se o processo filho que causou o retorno está
parado no momento; isso só é possível se a chamada a
[pcntl\_waitpid()](function.pcntl-waitpid.md) foi feita usando a opção
**`WUNTRACED`**.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna **`true`** se o processo filho que causou o retorno estiver
parado no momento, **`false`** caso contrário.

### Veja também

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
