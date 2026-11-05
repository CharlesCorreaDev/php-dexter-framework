# Configuração de Aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf.appconfig.php

---

# Configuração de Aplicação

Um array ou um arquivo INI com configurações (consulte
[Yaf\_Config\_Ini](class.yaf-config-ini.md)) deve ser passado para o método
[Yaf\_Application::\_\_construct()](yaf-application.construct.md).

Yaf mesclará as configurações de aplicação com as configurações do usuário
automaticamente. As configurações de aplicação têm o prefixo "yaf." ou
"application.". Se ambos "yaf." e "application." existirem, "application."
terá preferência na aceitação.

**Exemplo #1 Um exemplo de array PHP**

```
<?php

$configs = array(
    "application" => array(
        "directory" => dirname(__FILE__),
        "dispatcher" => array(
            "catchException" => 0,
        ),
        "view" => array(
            "ext" => "phtml",
        ),
    ),
);

$app = new Yaf_Application($configs);

?>
```

**Exemplo #2 Um exemplo de arquivo INI**

```
[yaf]
yaf.directory = APPLICATION_PATH "/application"
yaf.dispatcher.catchException = 0

[product : yaf]
; configuração do usuário listada aqui
```

**Configuração de Aplicação Yaf**

| Nome | Padrão | Registro de Alterações |
| --- | --- | --- |
| application.directory |  |  |
| application.ext | "php" |  |
| application.view.ext | "phtml" |  |
| application.modules | "index" |  |
| application.library | application.directory . "/library" |  |
| application.library.directory | application.directory . "/library" |  |
| application.library.namespace | "" |  |
| application.bootstrap | application.directory . "/Bootstrap" . application.ext |  |
| application.baseUri | "" |  |
| application.dispatcher.defaultRoute |  |  |
| application.dispatcher.throwException | 1 |  |
| application.dispatcher.catchException | 0 |  |
| application.dispatcher.defaultModule | "index" |  |
| application.dispatcher.defaultController | "index" |  |
| application.dispatcher.defaultAction | "index" |  |
| application.system |  |  |

Aqui está uma breve explicação das
diretivas de configuração.

`application.directory` [string](language.types.string.md)
:   O diretório da aplicação, que é o diretório que contém os diretórios
    "controllers", "views", "models" e "plugins".

    > **Nota**:
    >
    > Esta entrada de configuração é a única que não tem um valor padrão.
    > Deve sempre ser definida manualmente.

`application.ext` [string](language.types.string.md)
:   A extensão de arquivo do script PHP, usado no autocarregamento de classname
    ([Yaf\_Loader](class.yaf-loader.md)).

`application.view.ext` [string](language.types.string.md)
:   A extensão de arquivo dos scripts de modelo de visualização.

`application.modules` [string](language.types.string.md)
:   Uma lista de módulos registrados, separados por vírgulas, usados no processo
    de roteamento, especialmente enquanto existem mais de três segmentos em PATH\_INFO.

    Yaf precisa de uma maneira de descobrir se o primeiro segmento é ou não um nome de módulo.

`application.library` [string](language.types.string.md)
:   O diretório de biblioteca local, consulte [Yaf\_Loader](class.yaf-loader.md) e
    [yaf.library](yaf.configuration.md#ini.yaf.library).

    > **Nota**:
    >
    > Depois do Yaf 2.1.6, esta entrada de configuração pode ser um array. O caminho da biblioteca
    > tentará usar os itens definidos em [application.library.directory](yaf.appconfig.md#configuration.yaf.library.directory)

`application.library.directory` [string](language.types.string.md)
:   Sinônimo de [application.library](yaf.appconfig.md#configuration.yaf.library). Introduzido
    no Yaf 2.1.6

`application.library.namespace` [string](language.types.string.md)
:   Uma lista de prefixos de namespace de biblioteca local, separados por vírgula.

    Introduzido no Yaf 2.1.6

`application.bootstrap` [string](language.types.string.md)
:   Um caminho absoluto do script da classe Bootstrap.

`application.baseUri` [string](language.types.string.md)
:   Usado para remover um prefixo fixo de URI de solicitação no processo de roteamento.
    Por exemplo, é recebida uma solicitação com a URI contendo
    "/prefix/controller/action". Se application.baseUri for definida como
    "/prefix", apenas "/controller/action" será considerado PATH\_INFO no
    processo de roteamento.

    Em geral, não há necessidade de definir este valor.

`application.dispatcher.throwException` [bool](language.types.boolean.md)
:   Se definido para On, Yaf lançará uma exceção caso algum erro ocorrer.
    Consulte também [Yaf\_Dispatcher::throwException()](yaf-dispatcher.throwexception.md).

`application.dispatcher.catchException` [bool](language.types.boolean.md)
:   Se definido para On, Yaf encaminhará para controlador de erro ou ação enquanto
    houver uma exceção não manipulada. Consulte também
    [Yaf\_Dispatcher::catchException()](yaf-dispatcher.catchexception.md).

`application.dispatcher.defaultRoute` [string](language.types.string.md)
:   A rota padrão, se não especificada, a rota estática será usada
    como padrão. Consulte:
    [Yaf\_Router::addRoute()](yaf-router.addroute.md).

`application.dispatcher.defaultModule` [string](language.types.string.md)
:   O nome do módulo padrão, consulte também
    [Yaf\_Dispatcher::setDefaultModule()](yaf-dispatcher.setdefaultmodule.md).

`application.dispatcher.defaultController` [string](language.types.string.md)
:   O nome do controlador padrão, consulte também
    [Yaf\_Dispatcher::setDefaultController()](yaf-dispatcher.setdefaultcontroller.md).

`application.dispatcher.defaultAction` [string](language.types.string.md)
:   O nome da ação padrão, consulte também
    [Yaf\_Dispatcher::setDefaultAction()](yaf-dispatcher.setdefaultaction.md).

`application.system` [string](language.types.string.md)
:   Define configuração yaf em tempo de execução no application.ini, como:
    [application.system.lowcase\_path](yaf.configuration.md#ini.yaf.lowcase-path).
    > **Nota**:
    >
    > Somente as configurações **`INI_ALL`** podem ser definidas desta forma.

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
