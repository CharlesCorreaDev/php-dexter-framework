# Obtém o rastreamento do ponto de execução atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfiber.gettrace.php

---

# ReflectionFiber::getTrace

(PHP 8 >= 8.1.0)

ReflectionFiber::getTrace — Obtém o rastreamento do ponto de execução atual

### Descrição

public function **ReflectionFiber::getTrace**([int](language.types.integer.md) `$options` = **`DEBUG_BACKTRACE_PROVIDE_OBJECT`**): [array](language.types.array.md)

Obtém o rastreamento do ponto de execução atual na [Fiber](class.fiber.md) refletida.

### Parâmetros

`options`
:   O valor de `options` pode ser qualquer um dos
    seguintes sinalizadores.

    **Opções disponíveis**

    | Opção | Descrição |
    | --- | --- |
    | **`DEBUG_BACKTRACE_PROVIDE_OBJECT`** | Padrão. |
    | **`DEBUG_BACKTRACE_IGNORE_ARGS`** | Não inclui as informações dos argumentos das funções na pilha de rastreamento. |

### Valor Retornado

O rastreamento do ponto de execução atual no Fiber.

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
