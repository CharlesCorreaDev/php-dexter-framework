# Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.run.php

---

# Threaded::run

(PECL pthreads >= 2.0.0)

Threaded::run — Execução

### Descrição

public function **Threaded::run**(): [void](language.types.void.md)

O programador deve sempre implementar o método run para objetos que devem ser executados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor de retorno dos métodos, se usado, será ignorado.

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
