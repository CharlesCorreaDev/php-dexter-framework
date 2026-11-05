# Dissociar partes do contexto de execução do processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-unshare.php

---

# pcntl\_unshare

(PHP 7 >= 7.4.0, PHP 8)

pcntl\_unshare — Dissociar partes do contexto de execução do processo

### Descrição

function **pcntl\_unshare**([int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

**pcntl\_unshare()** permite que um processo desassocie partes de seu contexto de execução que estão
sendo compartilhadas com outros processos.
O principal uso de **pcntl\_unshare()** é permitir que um processo controle
seu contexto de execução compartilhado sem criar um novo processo.

### Parâmetros

`flags`
:   O parâmetro `flags` é uma máscara de bits que especifica quais partes do contexto de execução devem ser descompartilhadas.
    Este parâmetro é especificado pela operação OR de zero ou mais das constantes `CLONE_*`:

    - **`CLONE_NEWNS`**
    - **`CLONE_NEWIPC`**
    - **`CLONE_NEWUTS`**
    - **`CLONE_NEWNET`**
    - **`CLONE_NEWPID`**
    - **`CLONE_NEWUSER`**
    - **`CLONE_NEWCGROUP`**

### Valor Retornado

Retorna `0` em caso de sucesso, `-1` caso contrário.
Em caso de falha, define um código de erro, que pode ser recuperado com [pcntl\_get\_last\_error()](function.pcntl-get-last-error.md).

### Veja também

- [Constantes PCNTL](pcntl.constants.md#pcntl.constants.clone)
- [pcntl\_get\_last\_error()](function.pcntl-get-last-error.md) - Recupera o número de erro definido pela última função pcntl que falhou

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
