# Encaminha uma solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-interface.route.php

---

# Yaf\_Route\_Interface::route

(Yaf >=1.0.0)

Yaf\_Route\_Interface::route — Encaminha uma solicitação

### Descrição

abstract public function **Yaf\_Route\_Interface::route**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

**Yaf\_Route\_Interface::route()** é o único método
que uma rota customizada deve implementar.
> **Nota**:
>
> Desde o Yaf 2.3.0, existe um outro método que também deve ser implementado,
> consulte [Yaf\_Route\_Interface::assemble()](yaf-route-interface.assemble.md).

Se este método retornar **`true`**, o processo de roteamento será finalizado. Caso contrário,
o [Yaf\_Router](class.yaf-router.md) chamará a próxima rota da pilha
para encaminhar a solicitação.

Este método define o resultado da rota para o parâmetro "request",
chamando [Yaf\_Request\_Abstract::setControllerName()](yaf-request-abstract.setcontrollername.md),
[Yaf\_Request\_Abstract::setActionName()](yaf-request-abstract.setactionname.md) e
[Yaf\_Request\_Abstract::setModuleName()](yaf-request-abstract.setmodulename.md).

Este método também deve chamar
[Yaf\_Request\_Abstract::setRouted()](yaf-request-abstract.setrouted.md) para fazer com que a
solicitação seja finalmente roteada.

### Parâmetros

`request`
:   Uma instâcia de [Yaf\_Request\_Abstract](class.yaf-request-abstract.md).

### Valor Retornado

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
