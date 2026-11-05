# dispatchLoopShutdown

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-plugin-abstract.dispatchloopshutdown.php

---

# Yaf\_Plugin\_Abstract::dispatchLoopShutdown

(Yaf >=1.0.0)

Yaf\_Plugin\_Abstract::dispatchLoopShutdown — dispatchLoopShutdown

### Descrição

public function **Yaf\_Plugin\_Abstract::dispatchLoopShutdown**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

Este é o último gancho no sistema de ganchos de plug-ins
Yaf. Se um plug-in personalizado implementar esse método, ele será chamado após a
conclusão do loop de despacho.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`request`

`response`

### Valor Retornado

### Veja também

- [Yaf\_Plugin\_Abstract::routerStartup()](yaf-plugin-abstract.routerstartup.md) - Gancho RouterStartup
- [Yaf\_Plugin\_Abstract::routerShutdown()](yaf-plugin-abstract.routershutdown.md) - routerShutdown
- [Yaf\_Plugin\_Abstract::dispatchLoopStartup()](yaf-plugin-abstract.dispatchloopstartup.md) - Gancho antes do loop de despacho
- [Yaf\_Plugin\_Abstract::preDispatch()](yaf-plugin-abstract.predispatch.md) - preDispatch
- [Yaf\_Plugin\_Abstract::postDispatch()](yaf-plugin-abstract.postdispatch.md) - postDispatch

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
