# A classe Yaf_Plugin_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-plugin-abstract.php

---

# A classe Yaf\_Plugin\_Abstract

(Yaf >=1.0.0)

## Introdução

Os plugins permitem fácil extensibilidade e personalização da estrutura.

Plugins são classes. A definição real da classe irá variar de acordo com o
componente - pode ser necessário implementar esta interface, mas o fato
é que o próprio plugin é uma classe.

Um plugin pode ser carregado no Yaf usando
[Yaf\_Dispatcher::registerPlugin()](yaf-dispatcher.registerplugin.md). Após
o registro, todos os métodos que o plugin implementou de acordo com esta
interface serão chamados no momento apropriado.

## Examples

**Exemplo #1 Exemplo de plugin**

```
<?php
   /* A classe Bootstrap deve ser definida em ./application/Bootstrap.php */
   class Bootstrap extends Yaf_Bootstrap_Abstract {
        public function _initPlugin(Yaf_Dispatcher $dispatcher) {
            /* registrar um plugin */
            $dispatcher->registerPlugin(new TestPlugin());
        }
   }

   /* a classe do plugin deve ser colocada em ./application/plugins/ */
   class TestPlugin extends Yaf_Plugin_Abstract {
        public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            /* Antes do roteamento.
               Neste gancho, o usuário pode reescrever o URL. */
            var_dump("routerStartup");
        }
        public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            /* Roteamento completo.
               Neste gancho, o usuário pode verificar o login. */
            var_dump("routerShutdown");
        }
        public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            var_dump("dispatchLoopStartup");
        }
        public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            var_dump("preDispatch");
        }
        public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            var_dump("postDispatch");
        }
        public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
            /* Gancho final.
               Neste gancho o usuário pode fazer log ou implementar layout. */
            var_dump("dispatchLoopShutdown");
        }
   }

   Class IndexController extends Yaf_Controller_Abstract {
        public function indexAction() {
            return FALSE; // evita a renderização
        }
   }

   $config = array(
       "application" => array(
           "directory" => dirname(__FILE__) . "/application/",
       ),
   );

   $app = new Yaf_Application($config);
   $app->bootstrap()->run();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(13) "routerStartup"
string(14) "routerShutdown"
string(19) "dispatchLoopStartup"
string(11) "preDispatch"
string(12) "postDispatch"
string(20) "dispatchLoopShutdown"
```

## Resumo da classe

class **Yaf\_Plugin\_Abstract**
{

/\* Métodos \*/

public function [dispatchLoopShutdown](yaf-plugin-abstract.dispatchloopshutdown.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [dispatchLoopStartup](yaf-plugin-abstract.dispatchloopstartup.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [postDispatch](yaf-plugin-abstract.postdispatch.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [preDispatch](yaf-plugin-abstract.predispatch.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [preResponse](yaf-plugin-abstract.preresponse.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [routerShutdown](yaf-plugin-abstract.routershutdown.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

public function [routerStartup](yaf-plugin-abstract.routerstartup.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

}

## Índice

- [Yaf\_Plugin\_Abstract::dispatchLoopShutdown](yaf-plugin-abstract.dispatchloopshutdown.md) — dispatchLoopShutdown
- [Yaf\_Plugin\_Abstract::dispatchLoopStartup](yaf-plugin-abstract.dispatchloopstartup.md) — Gancho antes do loop de despacho
- [Yaf\_Plugin\_Abstract::postDispatch](yaf-plugin-abstract.postdispatch.md) — postDispatch
- [Yaf\_Plugin\_Abstract::preDispatch](yaf-plugin-abstract.predispatch.md) — preDispatch
- [Yaf\_Plugin\_Abstract::preResponse](yaf-plugin-abstract.preresponse.md) — preResponse
- [Yaf\_Plugin\_Abstract::routerShutdown](yaf-plugin-abstract.routershutdown.md) — routerShutdown
- [Yaf\_Plugin\_Abstract::routerStartup](yaf-plugin-abstract.routerstartup.md) — Gancho RouterStartup

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
