# Começa a verificar eventos e chamar funções de retorno para o
  laço padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.run.php

---

# Ev::run

(PECL ev >= 0.2.0)

Ev::run — Começa a verificar eventos e chamar funções de retorno para o
laço padrão

### Descrição

final
public
static
function **Ev::run**(
[int](language.types.integer.md) `$flags`
 = ?): [void](language.types.void.md)

Começa a verificar eventos e chamar funções de retorno
*para o laço padrão*.
Retorna quando uma função de retorno chama
o método [Ev::stop()](ev.stop.md)
ou quando as opções são diferentes de zero (nete caso com valor de retorno true) ou
quando não há observadores ativos que referenciam o laço
([EvWatcher::keepalive()](evwatcher.keepalive.md)
é **`true`**), que neste caso o valor de retorno será **`false`**. O valor de
retorna pode geralmente ser interpretado como
*se **`true`**, há mais
trabalho a fazer*.

### Parâmetros

`flags`
:   O parâmetro opcional
    `flags`
    pode ser um dos seguintes:

    **Lista de possíveis valores para `flags`**

    | `flags` | Descrição |
    | --- | --- |
    | `0` | O comportamento padrão descrito acima |
    | **`Ev::RUN_ONCE`** | Bloqueia no máximo um (aguarda, mas não entra no laço de repetiçaõ) |
    | **`Ev::RUN_NOWAIT`** | Não bloqueia de forma alguma (busca/manipula eventos, mas não aguarda) |

    Consulte
    [as constantes
    de opção de execução](class.ev.md#ev.constants.run-flags).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::stop()](ev.stop.md) - Interrompe o laço de eventos padrão
- [EvLoop::run()](evloop.run.md) - Começa a verificar eventos e chamar funções de retorno para o laço

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
