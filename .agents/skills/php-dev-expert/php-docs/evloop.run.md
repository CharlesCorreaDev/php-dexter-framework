# Começa a verificar eventos e chamar funções de retorno para o laço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.run.php

---

# EvLoop::run

(PECL ev >= 0.2.0)

EvLoop::run — Começa a verificar eventos e chamar funções de retorno para o laço

### Descrição

public
function **EvLoop::run**(
[int](language.types.integer.md) `$flags`
 = 0
): [void](language.types.void.md)

Começa a verificar eventos e chamar retornos de chamada para o laço de eventos atual.
Retorna quando uma função de retorno chama
o método [Ev::stop()](ev.stop.md),
ou as opções são diferentes de zero (nesse caso, o valor de retorno é true) ou
quando não há observadores ativos que referenciam o laço
([EvWatcher::keepalive()](evwatcher.keepalive.md)
é **`true`**), nesse caso o valor de retorno será **`false`**. O valor
de retorno pode geralmente ser interpretado como
*se **`true`**, há mais
trabalho a ser feito*.

### Parâmetros

`flags`
:   Parâmetro opcional
    `flags`
    pode ser um dos seguintes:

    **Lista de valores possíveis para `flags`**

    | `flags` | Descrição |
    | --- | --- |
    | `0` | O valor padrão descrito acima |
    | **`Ev::RUN_ONCE`** | Bloqueie no máximo um (espera, mas não entra no laço) |
    | **`Ev::RUN_NOWAIT`** | Não bloqueia nada (busca/manipula eventos, mas não espera) |

    Consulte
    [as constantes
    de opções de execução](class.ev.md#ev.constants.run-flags).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvLoop::stop()](evloop.stop.md) - Interrompe o laço de eventos
- [Ev::run()](ev.run.md) - Começa a verificar eventos e chamar funções de retorno para o
  laço padrão

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
