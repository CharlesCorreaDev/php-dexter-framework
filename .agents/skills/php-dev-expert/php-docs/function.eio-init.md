# (Re-)inicializa a Eio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-init.php

---

# eio\_init

(PECL eio = 1.0.0)

eio\_init — (Re-)inicializa a Eio

### Descrição

function **eio\_init**(): [void](language.types.void.md)

**eio\_init()** (re-)inicializa a Eio. Aloca memória para estruturas internas da libeio e da própria Eio. **eio\_init()** pode ser chamada antes da utilização de funções Eio. De qualquer forma, ela será chamada internamente na primeira vez que um função Eio seja invocada em um processo.

> **Nota**:
>
> Esta função foi removida na versão 3.0.0RC1 da extensão Eio para o PHP versão 8 e superiores.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
