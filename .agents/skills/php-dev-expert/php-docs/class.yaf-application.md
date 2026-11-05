# A classe Yaf_Application

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-application.php

---

# A classe Yaf\_Application

(Yaf >=1.0.0)

## Introdução

**Yaf\_Application** fornece um recurso de bootstrap
para aplicações que fornece recursos reutilizáveis, classes de bootstrap comuns
e baseadas em módulos verificação de dependência.

> **Nota**:
>
> **Yaf\_Application** implementa o padrão
> singleton, e **Yaf\_Application** não pode ser
> serializado ou desserializado, o que causará problemas quando a intenção
> for usar o PHPUnit para escrever algum caso de teste para Yaf.
>
> Pode-se usar a anotação @backupGlobals do PHPUnit para controlar as
> operações de backup e restauração de variáveis ​​globais. Isto pode resolver
> este problema.

## Resumo da classe

final
class **Yaf\_Application**
{

/\* Propriedades \*/

protected
[$config](class.yaf-application.md#yaf-application.props.config);

protected
[$dispatcher](class.yaf-application.md#yaf-application.props.dispatcher);

protected
static
[$\_app](class.yaf-application.md#yaf-application.props.app);

protected
[$\_modules](class.yaf-application.md#yaf-application.props.modules);

protected
[$\_running](class.yaf-application.md#yaf-application.props.running);

protected
[$\_environ](class.yaf-application.md#yaf-application.props.environ);

/\* Métodos \*/

public function [\_\_construct](yaf-application.construct.md)([mixed](language.types.mixed.md) `$config`, [string](language.types.string.md) `$environ` = ?)

public static function [app](yaf-application.app.md)(): [mixed](language.types.mixed.md)

public function [bootstrap](yaf-application.bootstrap.md)([Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md) `$bootstrap` = ?): [void](language.types.void.md)

public function [clearLastError](yaf-application.clearlasterror.md)(): [Yaf\_Application](class.yaf-application.md)

public function [environ](yaf-application.environ.md)(): [void](language.types.void.md)

public function [execute](yaf-application.execute.md)([callable](language.types.callable.md) `$entry`, [string](language.types.string.md) `...$args`): [void](language.types.void.md)

public function [getAppDirectory](yaf-application.getappdirectory.md)(): [Yaf\_Application](class.yaf-application.md)

public function [getConfig](yaf-application.getconfig.md)(): [Yaf\_Config\_Abstract](class.yaf-config-abstract.md)

public function [getDispatcher](yaf-application.getdispatcher.md)(): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

public function [getLastErrorMsg](yaf-application.getlasterrormsg.md)(): [string](language.types.string.md)

public function [getLastErrorNo](yaf-application.getlasterrorno.md)(): [int](language.types.integer.md)

public function [getModules](yaf-application.getmodules.md)(): [array](language.types.array.md)

public function [run](yaf-application.run.md)(): [void](language.types.void.md)

public function [setAppDirectory](yaf-application.setappdirectory.md)([string](language.types.string.md) `$directory`): [Yaf\_Application](class.yaf-application.md)

public function [\_\_destruct](yaf-application.destruct.md)()

}

## Propriedades

config

dispatcher

\_app

\_modules

\_running

\_environ

## Índice

- [Yaf\_Application::app](yaf-application.app.md) — Obtém uma instância da aplicação
- [Yaf\_Application::bootstrap](yaf-application.bootstrap.md) — Chama o bootstrap
- [Yaf\_Application::clearLastError](yaf-application.clearlasterror.md) — Limpa a última informação de erro
- [Yaf\_Application::\_\_construct](yaf-application.construct.md) — Construtor de Yaf\_Application
- [Yaf\_Application::\_\_destruct](yaf-application.destruct.md) — \_\_destruct
- [Yaf\_Application::environ](yaf-application.environ.md) — Obtém o ambiente
- [Yaf\_Application::execute](yaf-application.execute.md) — Executa uma chamada de função de retorno
- [Yaf\_Application::getAppDirectory](yaf-application.getappdirectory.md) — Obtém o diretório da aplicação
- [Yaf\_Application::getConfig](yaf-application.getconfig.md) — Obtém a instância da configuração
- [Yaf\_Application::getDispatcher](yaf-application.getdispatcher.md) — Obtém a instância de Yaf\_Dispatcher
- [Yaf\_Application::getLastErrorMsg](yaf-application.getlasterrormsg.md) — Obtém a mensagem do último erro ocorrido
- [Yaf\_Application::getLastErrorNo](yaf-application.getlasterrorno.md) — Obtém o código do último erro ocorrido
- [Yaf\_Application::getModules](yaf-application.getmodules.md) — Obtém os nomes dos módulos definidos
- [Yaf\_Application::run](yaf-application.run.md) — Inicia a Yaf\_Application
- [Yaf\_Application::setAppDirectory](yaf-application.setappdirectory.md) — Altera o diretório da aplicação

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
