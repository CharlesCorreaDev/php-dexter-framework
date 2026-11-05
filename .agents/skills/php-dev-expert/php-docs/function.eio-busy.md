# Aumenta artificialmente a carga. Pode ser útil em testes,
  benchmarking

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-busy.php

---

# eio\_busy

(PECL eio >= 0.0.1dev)

eio\_busy — Aumenta artificialmente a carga. Pode ser útil em testes,
benchmarking

### Descrição

function **eio\_busy**(  
    [int](language.types.integer.md) `$delay`,  
    [int](language.types.integer.md) `$pri` = EIO\_PRI\_DEFAULT,  
    [callable](language.types.callable.md) `$callback` = NULL,  
    [mixed](language.types.mixed.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_busy()** aumenta artificialmente a carga levando
`delay` segundos para executar. Pode ser usado para depuração ou
benchmarking.

### Parâmetros

`delay`
:   Atraso em segundos.

`pri`
:   A prioridade da requisição: **`EIO_PRI_DEFAULT`**, **`EIO_PRI_MIN`**, **`EIO_PRI_MAX`** ou **`null`**.
    Se **`null`** for passado, o parâmetro `pri` internamente será definido como
    **`EIO_PRI_DEFAULT`**.

`callback`
:   Esta função de retorno é chamada quando todas as requisições do grupo forem concluídas.

`data`
:   Variável arbitrária passada para `callback`.

### Valor Retornado

**eio\_busy()** retorna o recurso da requisição em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [eio\_nop()](function.eio-nop.md) - Não faz nada, exceto passar por todo o ciclo de requisição

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
