# Obtém o nome do módulo padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getdefaultmodule.php

---

# Yaf\_Dispatcher::getDefaultModule

(Yaf >=3.2.0)

Yaf\_Dispatcher::getDefaultModule — Obtém o nome do módulo padrão

### Descrição

public function **Yaf\_Dispatcher::getDefaultModule**(): [string](language.types.string.md)

Obtém o nome do módulo padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma [string](language.types.string.md) com o nome do módulo, o padrão é "Index".

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
