# A classe Yaf_Router

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-router.php

---

# A classe Yaf\_Router

(Yaf >=1.0.0)

## Introdução

**Yaf\_Router** é o roteador padrão da extensão. Roteamento é
o processo de pegar um ponto de extremidade de URI (aquela parte do URI que vem
depois da base: veja [Yaf\_Request\_Abstract::setBaseUri()](yaf-request-abstract.setbaseuri.md))
e decompô-lo em parâmetros para determinar qual módulo, controlador e
ação desse controlador deve receber a requisição. Esses valores de módulo,
controlador, ação e outros parâmetros são empacotados em um
objeto [Yaf\_Request\_Abstract](class.yaf-request-abstract.md) que é então processado por
[Yaf\_Dispatcher](class.yaf-dispatcher.md). O roteamento ocorre apenas uma vez: quando a requisição
é recebida inicialmente e antes do primeiro controlador ser despachado.
**Yaf\_Router** foi projetado para permitir funcionalidades
semelhantes a mod\_rewrite usando estruturas PHP puras. É vagamente baseado no
roteamento Ruby on Rails e não requer nenhum conhecimento prévio de reescrita
de URL de servidor web. Ele foi projetado para funcionar com uma única regra mod\_rewrite
do Apache (uma destas):

**Exemplo #1 Regra de re-escrita para Apache**

```
RewriteEngine on
RewriteRule !\.(js|ico|gif|jpg|png|css|html)$ index.php
```

ou (preferível):

**Exemplo #2 Regra de re-escrita para Apache**

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} -s [OR]
RewriteCond %{REQUEST_FILENAME} -l [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^.*$ - [NC,L]
RewriteRule ^.*$ index.php [NC,L]
```

Se o Lighttpd for usado, a seguinte regra de re-escrita é válida:

**Exemplo #3 Regra de re-escrita para Lighttpd**

```
url.rewrite-once = (
  ".*\?(.*)$" => "/index.php?$1",
  ".*\.(js|ico|gif|jpg|png|css|html)$" => "$0",
  "" => "/index.php"
)
```

Se o Nginx for usado, use a seguinte regra de re-escrita:

**Exemplo #4 Regra de re-escrita para Nginx**

```
server {
  listen ****;
  server_name  yourdomain.com;
  root   document_root;
  index  index.php index.html;

  if (!-e $request_filename) {
    rewrite ^/(.*)  /index.php/$1 last;
  }
}
```

## Rota padrão

**Yaf\_Router** vem pré-configurado com uma rota padrão
[Yaf\_Route\_Static](class.yaf-route-static.md), que corresponderá aos URIs no formato
de controlador/ação. Além disso, um nome de módulo pode ser especificado como o primeiro
elemento do caminho, permitindo URIs no formato módulo/controlador/ação. Por fim,
também corresponderá a quaisquer parâmetros adicionais anexados ao URI por padrão
- controlador/ação/var1/valor1/var2/valor2.
> **Nota**:
>
> O nome do módulo deve ser definido na configuração, considerando application.module="Index,Foo,Bar".
> Neste caso apenas Index, Foo e Bar podem ser considerados como nome do módulo.
> Caso não seja configurado, existirá apenas um módulo chamado "Index".

Alguns exemplos de como essas rotas são correspondidas:

**Exemplo #5 Exemplo de [Yaf\_Route\_Static](class.yaf-route-static.md) (rota padrão)**

```
// Assumindo a seguinte configuração:
$conf = array(
   "application" => array(
      "modules" => "Index,Blog",
   ),
);

Apenas controlador:
http://example/noticias
    controlador == noticias
Apenas ação (quando definido yaf.action_prefer=1 no php.ini)
    ação        == noticias

Módulo inválido é mapeado para nome de controlador:
http://example/foo
    controlador == foo

Módulo + controlador:
http://example/blog/arquivo
    módulo      == blog
    controlador == arquivo

Módulo + controlador + ação:
http://example/blog/arquivo/lista
    módulo      == blog
    controlador == arquivo
    ação        == lista

Módulo + controlador + ação + parâmetros:
http://example/blog/archive/lista/ordem/alfa/data/decres
    módulo      == blog
    controlador == archive
    ação        == lista
    ordem       == alfa
    data        == decres
```

## Resumo da classe

class **Yaf\_Router**
{

/\* Propriedades \*/

protected
[$\_routes](class.yaf-router.md#yaf-router.props.routes);

protected
[$\_current](class.yaf-router.md#yaf-router.props.current);

/\* Métodos \*/

public function [\_\_construct](yaf-router.construct.md)()

public function [addConfig](yaf-router.addconfig.md)([Yaf\_Config\_Abstract](class.yaf-config-abstract.md) `$config`): [bool](language.types.boolean.md)

public function [addRoute](yaf-router.addroute.md)([string](language.types.string.md) `$name`, Yaf\_Route\_Abstract `$route`): [bool](language.types.boolean.md)

public function [getCurrentRoute](yaf-router.getcurrentroute.md)(): [string](language.types.string.md)

public function [getRoute](yaf-router.getroute.md)([string](language.types.string.md) `$name`): [Yaf\_Route\_Interface](class.yaf-route-interface.md)

public function [getRoutes](yaf-router.getroutes.md)(): [mixed](language.types.mixed.md)

public function [route](yaf-router.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

\_routes
:   Pilha de rotas registradas.

\_current
:   Após a fase de roteamento, indica o nome de qual
    rota está sendo usada para a requisição atual.
    O nome da rota pode ser obtido por
    [Yaf\_Router::getCurrentRoute()](yaf-router.getcurrentroute.md).

## Índice

- [Yaf\_Router::addConfig](yaf-router.addconfig.md) — Adiciona as rotas definidas na configuração
- [Yaf\_Router::addRoute](yaf-router.addroute.md) — Adiciona nova rota
- [Yaf\_Router::\_\_construct](yaf-router.construct.md) — Construtor de Yaf\_Router
- [Yaf\_Router::getCurrentRoute](yaf-router.getcurrentroute.md) — Obtém o nome efetivo da rota
- [Yaf\_Router::getRoute](yaf-router.getroute.md) — Obtém uma rota pelo nome
- [Yaf\_Router::getRoutes](yaf-router.getroutes.md) — Obtém rotas registradas
- [Yaf\_Router::route](yaf-router.route.md) — Encaminha uma requisição

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
