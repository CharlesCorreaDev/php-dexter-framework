# Obtém o nome do controlador padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getdefaultcontroller.php

---

# Yaf\_Dispatcher::getDefaultController

(Yaf >=3.2.0)

Yaf\_Dispatcher::getDefaultController — Obtém o nome do controlador padrão

### Descrição

public function **Yaf\_Dispatcher::getDefaultController**(): [string](language.types.string.md)

Obtém o nome do controlador padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma [string](language.types.string.md) com nome do controlador, o padrão é "Index"

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
