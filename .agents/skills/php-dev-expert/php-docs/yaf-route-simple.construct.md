# Construtor de Yaf_Route_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-simple.construct.php

---

# Yaf\_Route\_Simple::\_\_construct

(Yaf >=1.0.0)

Yaf\_Route\_Simple::\_\_construct — Construtor de Yaf\_Route\_Simple

### Descrição

public function **Yaf\_Route\_Simple::\_\_construct**([string](language.types.string.md) `$module_name`, [string](language.types.string.md) `$controller_name`, [string](language.types.string.md) `$action_name`)

[Yaf\_Route\_Simple](class.yaf-route-simple.md) obtém informação de rota a partir da string
da requisição. Os parâmetros deste construtor são usados como chaver ao pesquisar a
informação de rota em $\_GET.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`module_name`
:   O nome da chave da informação do módulo.

`controller_name`
:   O nome da chave da informação do controlador.

`action_name`
:   O nome da chave da informação da ação.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de [Yaf\_Route\_Simple::route()](yaf-route-simple.route.md)**

```
<?php
   $route = new Yaf_Route_Simple("m", "controlador", "acao");
   Yaf_Router::getInstance()->addRoute("simple", $route);
?>
```

**Exemplo #2 Exemplo de [Yaf\_Route\_Simple::route()](yaf-route-simple.route.md)**

```
Request: http://seudominio.com/caminho/?controlador=a&acao=b
=> módulo = padrão (index), controlador = a, ação = b

Request: http://seudominio.com/caminho
=> módulo = padrão (index), controlador = padrão (index), ação = padrão (index)
```

### Veja também

- [Yaf\_Route\_Supervar::route()](yaf-route-supervar.route.md) - Encaminha uma requisição
- [Yaf\_Route\_Static::route()](yaf-route-static.route.md) - Encaminha uma requisição
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
