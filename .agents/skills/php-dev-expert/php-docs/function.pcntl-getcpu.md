# Obtém o número da CPU na qual o processo que fez a chamada foi executado pela última vez

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-getcpu.php

---

# pcntl\_getcpu

(PHP 8 >= 8.4.0)

pcntl\_getcpu — Obtém o número da CPU na qual o processo que fez a chamada foi executado pela última vez

### Descrição

function **pcntl\_getcpu**(): [int](language.types.integer.md)

**pcntl\_getcpu()** retorna o número da CPU na qual
o processo que a chamou foi executado pela última vez. Esta função usa a
chamada de sistema `sched_getcpu(3)` disponível no Linux.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da CPU como um [int](language.types.integer.md).

### Veja também

- [pcntl\_getcpuaffinity()](function.pcntl-getcpuaffinity.md) - Obtém a afinidade de CPU de um processo
- [pcntl\_setcpuaffinity()](function.pcntl-setcpuaffinity.md) - Define a afinidade de CPU de um processo

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
