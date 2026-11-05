# Torna o processo atual um líder de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setsid.php

---

# posix\_setsid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_setsid — Torna o processo atual um líder de sessão

### Descrição

function **posix\_setsid**(): [int](language.types.integer.md)

Torna o processo atual um líder de sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da sessão ou -1 em caso de erros.

### Veja também

- A página de manual POSIX.1 e setsid(2) no sistema POSIX para obter mais
  informações sobre grupos de processos e controle de tarefas.

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
