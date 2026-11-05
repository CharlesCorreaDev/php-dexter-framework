# Obtém uma rota pelo nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-router.getroute.php

---

# Yaf\_Router::getRoute

(Yaf >=1.0.0)

Yaf\_Router::getRoute — Obtém uma rota pelo nome

### Descrição

public function **Yaf\_Router::getRoute**([string](language.types.string.md) `$name`): [Yaf\_Route\_Interface](class.yaf-route-interface.md)

Obtém uma rota pelo nome, consulte também
[Yaf\_Router::getCurrentRoute()](yaf-router.getcurrentroute.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md)
- [Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md)
- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
- [Yaf\_Router::getCurrentRoute()](yaf-router.getcurrentroute.md) - Obtém o nome efetivo da rota

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
