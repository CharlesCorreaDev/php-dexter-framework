# Converte um chamável em uma closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.fromcallable.php

---

# Closure::fromCallable

(PHP 7 >= 7.1.0)

Closure::fromCallable — Converte um chamável em uma closure

### Descrição

public static function **Closure::fromCallable**([callable](language.types.callable.md) `$callback`): [Closure](class.closure.md)

Cria e retorna uma nova [função
anônima](functions.anonymous.md) a partir do `callback` fornecido usando o
escopo atual. Esse método verifica se o `callback` é
chamável no escopo atual e lança um [TypeError](class.typeerror.md)
se ele não for.

> **Nota**:
>
> A partir do PHP 8.1.0, [Sintaxe de chamáveis de primeira classe](functions.first_class_callable_syntax.md) possui a mesma semântica que este método.

### Parâmetros

`callback`
:   O chamável a ser convertido.

### Valor Retornado

Retorna a recém-criada [Closure](class.closure.md) ou lança um
[TypeError](class.typeerror.md) se o `callback` não
é chamável no escopo atual.

### Veja também

- [Funções anônimas](functions.anonymous.md)
- [Sintaxe de chamável de primeira classe](functions.first_class_callable_syntax.md)

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
