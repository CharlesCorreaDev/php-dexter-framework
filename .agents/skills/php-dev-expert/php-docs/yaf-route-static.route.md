# Encaminha uma requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-static.route.php

---

# Yaf\_Route\_Static::route

(Yaf >=1.0.0)

Yaf\_Route\_Static::route — Encaminha uma requisição

### Descrição

public function **Yaf\_Route\_Static::route**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`request`

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Route\_Static::route()****

```
// assumindo que exite somente um módulo definido: Index
Requisição: http://seudominio.com/a/b
=> módulo = index, controlador = a, ação = b

//assuming ap.action_prefer = On
Requisição: http://seudominio.com/b
=> módulo = padrão (index), controlador = padrão (index), ação = b

//assuming ap.action_prefer = Off
Requisição: http://seudominio.com/b
=> módulo = padrão (index), controlador = b, ação = padrão (index)

Requisição: http://seudominio.com/a/b/foo/bar/test/a/id/4
=> módulo = padrão (index), controlador = a, ação = b, parâmetros da requisição: foo = bar, test = a, id = 4
```

### Veja também

- [Yaf\_Route\_Supervar::route()](yaf-route-supervar.route.md) - Encaminha uma requisição
- [Yaf\_Route\_Simple::route()](yaf-route-simple.route.md) - Encaminha uma requisição
- [Yaf\_Route\_Regex::route()](yaf-route-regex.route.md) - Encaminha uma solicitação
- [Yaf\_Route\_Rewrite::route()](yaf-route-rewrite.route.md) - route
- [Yaf\_Route\_Map::route()](yaf-route-map.route.md) - route

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
