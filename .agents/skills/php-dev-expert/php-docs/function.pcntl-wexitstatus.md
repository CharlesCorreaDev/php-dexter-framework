# Retorna o código de retorno de um filho encerrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-wexitstatus.php

---

# pcntl\_wexitstatus

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

pcntl\_wexitstatus — Retorna o código de retorno de um filho encerrado

### Descrição

function **pcntl\_wexitstatus**([int](language.types.integer.md) `$status`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o código de retorno de um filho encerrado. Esta função é
útil somente se [pcntl\_wifexited()](function.pcntl-wifexited.md) retornou
**`true`**.

### Parâmetros

`status`
:   O parâmetro `status`
    é o parâmetro de status fornecido a uma chamada
    bem sucedida a [pcntl\_waitpid()](function.pcntl-waitpid.md).

### Valor Retornado

Retorna o código de retorno.
Se a funcionalidade não for suportada pelo sistema operacional, **`false`** será retornado.

### Veja também

- [pcntl\_waitpid()](function.pcntl-waitpid.md) - Aguarda ou retorna o status de um filho bifurcado
- [pcntl\_wifexited()](function.pcntl-wifexited.md) - Verifica se o código de status representa uma saída normal

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
