# Desregistra uma função dada como implementação de __autoload()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload-unregister.php

---

# spl\_autoload\_unregister

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload\_unregister — Desregistra uma função dada como implementação de \_\_autoload()

### Descrição

function **spl\_autoload\_unregister**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Remove uma função da fila de carregamento automático. Se a fila
estiver ativada e vazia após a remoção da função fornecida, então ela será
desativada.

Quando esta função resulta na desativação da fila, qualquer
função \_\_autoload que existia anteriormente não será reativada.

### Parâmetros

`callback`
:   A função de carregamento automático sendo desregistrada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Passa a função [spl\_autoload\_call()](function.spl-autoload-call.md) como um argumento de chamada de retorno para desregistrar todos os autocarregadores foi descontinuado. Em vez disso, faça uma iteração através do valor de retorno de [spl\_autoload\_functions()](function.spl-autoload-functions.md) e chame **spl\_autoload\_unregister()** com cada valor. |

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
