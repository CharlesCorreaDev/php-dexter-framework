# A classe Yaf_Controller_Abstract

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-controller-abstract.php

---

# A classe Yaf\_Controller\_Abstract

(Yaf >=1.0.0)

## Introdução

**Yaf\_Controller\_Abstract** é o coração do sustema do
Yaf. MVC é o acrônimo para (Modelo-Visualizador-Controlador) e é um padrão de projeto
cujo objetivo é separar a lógica da aplicação da lógica da exibição.

Todo controlador customizado deve herdar
**Yaf\_Controller\_Abstract**.

A função \_\_construct não pode ser definida no controlador
customizado. Por isso, **Yaf\_Controller\_Abstract** fornece
um método mágico: [Yaf\_Controller\_Abstract::init()](yaf-controller-abstract.init.md).

Se um método init() for definido no controlador customizado, ele será
chamado assim que o controlador for instanciado.

A ação pode ter argumentos, quando uma solicitação chega, se houver a variável
de mesmo nome nos parâmetros da solicitação (veja
[Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md)). Depois de roteada,
Yaf irá passá-los para o método de ação
(veja [Yaf\_Action\_Abstract::execute()](yaf-action-abstract.execute.md)).
> **Nota**:
>
> Esses argumentos são obtidos diretamente sem filtragem, devem ser cuidadosamente
> processados ​​​​antes de serem usados.

## Resumo da classe

abstract
class **Yaf\_Controller\_Abstract**
{

/\* Propriedades \*/

public
[$actions](class.yaf-controller-abstract.md#yaf-controller-abstract.props.actions);

protected
[$\_module](class.yaf-controller-abstract.md#yaf-controller-abstract.props.module);

protected
[$\_name](class.yaf-controller-abstract.md#yaf-controller-abstract.props.name);

protected
[$\_request](class.yaf-controller-abstract.md#yaf-controller-abstract.props.request);

protected
[$\_response](class.yaf-controller-abstract.md#yaf-controller-abstract.props.response);

protected
[$\_invoke\_args](class.yaf-controller-abstract.md#yaf-controller-abstract.props.invoke-args);

protected
[$\_view](class.yaf-controller-abstract.md#yaf-controller-abstract.props.view);

/\* Métodos \*/

final private function [\_\_construct](yaf-controller-abstract.construct.md)()

protected function [display](yaf-controller-abstract.display.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$parameters` = ?): [bool](language.types.boolean.md)

public function [forward](yaf-controller-abstract.forward.md)([string](language.types.string.md) `$action`, [array](language.types.array.md) `$paramters` = ?): [bool](language.types.boolean.md)

public function [getInvokeArg](yaf-controller-abstract.getinvokearg.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [getInvokeArgs](yaf-controller-abstract.getinvokeargs.md)(): [void](language.types.void.md)

public function [getModuleName](yaf-controller-abstract.getmodulename.md)(): [string](language.types.string.md)

public function [getName](yaf-controller-abstract.getname.md)(): [string](language.types.string.md)

public function [getRequest](yaf-controller-abstract.getrequest.md)(): [Yaf\_Request\_Abstract](class.yaf-request-abstract.md)

public function [getResponse](yaf-controller-abstract.getresponse.md)(): [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

public function [getView](yaf-controller-abstract.getview.md)(): [Yaf\_View\_Interface](class.yaf-view-interface.md)

public function [getViewpath](yaf-controller-abstract.getviewpath.md)(): [string](language.types.string.md)

public function [init](yaf-controller-abstract.init.md)(): [void](language.types.void.md)

public function [initView](yaf-controller-abstract.initview.md)([array](language.types.array.md) `$options` = ?): [void](language.types.void.md)

public function [redirect](yaf-controller-abstract.redirect.md)([string](language.types.string.md) `$url`): [bool](language.types.boolean.md)

protected function [render](yaf-controller-abstract.render.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$parameters` = ?): [string](language.types.string.md)

public function [setViewpath](yaf-controller-abstract.setviewpath.md)([string](language.types.string.md) `$view_directory`): [void](language.types.void.md)

}

## Propriedades

actions
:   Um método de ação também pode ser definido em um script PHP separado usando
    esta propriedade e [Yaf\_Action\_Abstract](class.yaf-action-abstract.md).

    **Exemplo #1 Definindo ação em um arquivo separado**

    ```
    <?php
    class IndexController extends Yaf_Controller_Abstract {
        protected $actions = array(
            /** agora dummyAction está definida em um arquivo separado */
            "dummy" => "actions/Dummy_action.php",
        );

        /* o método de ação pode ter argumentos */
        public function indexAction($name, $id) {
           /* $name e $id são dados brutos inseguros */
           assert($name == $this->getRequest()->getParam("name"));
           assert($id   == $this->_request->getParam("id"));
        }
    }
    ?>
    ```

    **Exemplo #2 Dummy\_action.php**

    ```
    <?php
    class DummyAction extends Yaf_Action_Abstract {
        /* uma classe de ação deve definir este método como o ponto de entrada */
        public function execute() {
        }
    }
    ?>
    ```

\_module
:   Nome do módulo.

\_name
:   Nome do controlador.

\_request
:   Objeto da requisição atual.

\_response
:   Objeto da resposta atual.

\_invoke\_args

\_view
:   Objeto do mecanismo de visualização.

## Índice

- [Yaf\_Controller\_Abstract::\_\_construct](yaf-controller-abstract.construct.md) — Construtor de Yaf\_Controller\_Abstract
- [Yaf\_Controller\_Abstract::display](yaf-controller-abstract.display.md) — display
- [Yaf\_Controller\_Abstract::forward](yaf-controller-abstract.forward.md) — Encaminha para outra ação
- [Yaf\_Controller\_Abstract::getInvokeArg](yaf-controller-abstract.getinvokearg.md) — getInvokeArg
- [Yaf\_Controller\_Abstract::getInvokeArgs](yaf-controller-abstract.getinvokeargs.md) — getInvokeArgs
- [Yaf\_Controller\_Abstract::getModuleName](yaf-controller-abstract.getmodulename.md) — Obtém o nome do módulo
- [Yaf\_Controller\_Abstract::getName](yaf-controller-abstract.getname.md) — Obtém o próprio nome
- [Yaf\_Controller\_Abstract::getRequest](yaf-controller-abstract.getrequest.md) — Obtém o objeto da requisição atual
- [Yaf\_Controller\_Abstract::getResponse](yaf-controller-abstract.getresponse.md) — Obtém o objeto da resposta atual
- [Yaf\_Controller\_Abstract::getView](yaf-controller-abstract.getview.md) — Obtém o mecanismo de visualização
- [Yaf\_Controller\_Abstract::getViewpath](yaf-controller-abstract.getviewpath.md) — getViewpath
- [Yaf\_Controller\_Abstract::init](yaf-controller-abstract.init.md) — Inicializador do controlador
- [Yaf\_Controller\_Abstract::initView](yaf-controller-abstract.initview.md) — initView
- [Yaf\_Controller\_Abstract::redirect](yaf-controller-abstract.redirect.md) — Redireciona para um URL
- [Yaf\_Controller\_Abstract::render](yaf-controller-abstract.render.md) — Renderiza o modelo de visualização
- [Yaf\_Controller\_Abstract::setViewpath](yaf-controller-abstract.setviewpath.md) — setViewpath

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
