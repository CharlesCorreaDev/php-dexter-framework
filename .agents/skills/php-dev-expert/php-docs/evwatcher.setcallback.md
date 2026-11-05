# Define uma nova função de retorno para o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.setcallback.php

---

# EvWatcher::setCallback

(PECL ev >= 0.2.0)

EvWatcher::setCallback — Define uma nova função de retorno para o observador

### Descrição

public
function **EvWatcher::setCallback**(
[callable](language.types.callable.md) `$callback`
): [void](language.types.void.md)

Define uma nova função de retorno para o observador.

### Parâmetros

`callback`
:   Consulte
    [funções de retorno observadoras](ev.watcher-callbacks.md).

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
