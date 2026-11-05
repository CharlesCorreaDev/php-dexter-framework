# Retorna o sinal que fez o processo filho parar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wstopsig.php

---

# pcntl\_wstopsig

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wstopsig — Retorna o sinal que fez o processo filho parar

### Descrição

function **pcntl\_wstopsig**([int](language.types.integer.md) `$status`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número do sinal que fez o processo filho parar.
Esta função só é útil se
[pcntl\_wifstopped()](function.pcntl-wifstopped.md) retornou **`true`**.

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
- [pcntl\_wifstopped()](function.pcntl-wifstopped.md) - Verifica se o processo filho está parado no momento

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
