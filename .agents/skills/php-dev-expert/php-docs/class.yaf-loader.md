# A classe Yaf_Loader

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-loader.php

---

# A classe Yaf\_Loader

(Yaf >=1.0.0)

## Introdução

**Yaf\_Loader** introduz uma solução compreensiva de
carregamento automático para o Yaf.

Na primeira vez que uma instância de [Yaf\_Application](class.yaf-application.md) for recuperada,
**Yaf\_Loader** instanciará um singleton e se registrará com
spl\_autoload. Uma instância é recuperada usando [Yaf\_Loader::getInstance()](yaf-loader.getinstance.md).

**Yaf\_Loader** tenta carregar uma classe em apenas uma tentativa.
Se falhar, dependerá de [yaf.use\_spl\_autoload](yaf.configuration.md#ini.yaf.use-spl-autoload). Se esta
configuração estiver ativada, [Yaf\_Loader::autoload()](yaf-loader.autoload.md) retornará
**`false`**, dando assim a chance para outra função de carregamento automático. Se estiver desligada
(por padrão), [Yaf\_Loader::autoload()](yaf-loader.autoload.md) retornará
**`true`** e o mais importante é que um alerta será acionado
(muito útil para descobrir por que uma classe não pôde ser carregada).
> **Nota**:
>
> A configuração yaf.use\_spl\_autoload deve ser mantida desativada, a menos que haja alguma biblioteca
> com seu próprio mecanismo de carregamento automático e seja impossível reescrevê-lo.

Por padrão, **Yaf\_Loader** assume que todas as bibliotecas (script
definido por classe) são armazenadas no [diretório de
biblioteca global](yaf.configuration.md#ini.yaf.library), que é definido no php.ini (yaf.library).

Se for desejado que o **Yaf\_Loader** pesquise algumas
classes (bibliotecas) no [diretório de classes
local](class.yaf-loader.md#yaf-loader.props.library) (que é definido no application.ini e por padrão
é [application.directory](yaf.appconfig.md#configuration.yaf.directory) . "/library"),
o prefixo da classe deve ser registrado usando
[Yaf\_Loader::registerLocalNameSpace()](yaf-loader.registerlocalnamespace.md).

Vejamos alguns exemplo (assumindo que APPLICATION\_PATH seja [application.directory](yaf.appconfig.md#configuration.yaf.directory)):

**Exemplo #1 Exemplo de configuração**

```
// Assumindo a configuração a seguir no php.ini:
yaf.library = "/global_dir"

// Assumindo a configuração a seguir no application.ini
application.library = APPLICATION_PATH "/library"
```

Supondo que o seguinte namespace local esteja registrado:

**Exemplo #2 Registrando namespace local**

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {
     public function _initLoader($dispatcher) {
          Yaf_Loader::getInstance()->registerLocalNameSpace(array("Foo", "Bar"));
     }
}
?>
```

A seguir, exemplos de carregamento automático:

**Exemplo #3 Exemplo de carregamento de classe**

```
class Foo_Bar_Test =>
  // APPLICATION_PATH/library/Foo/Bar/Test.php

class GLO_Name  =>
  // /global_dir/Glo/Name.php

class BarNon_Test
  // /global_dir/Barnon/Test.php
```

**Exemplo #4 Exemplo de carregamento de classe de namespace**

```
class \Foo\Bar\Dummy =>
   // APPLICATION_PATH/library/Foo/Bar/Dummy.php

class \FooBar\Bar\Dummy =>
   // /global_dir/FooBar/Bar/Dummy.php
```

Observe que todos os diretórios têm a primeira letra maiúscula. Eles podem ficar em letras
minúsculas definindo [yaf.lowcase\_path](yaf.configuration.md#ini.yaf.lowcase-path) para "On" no php.ini.

**Yaf\_Loader** também é projetado para carregar as classes MVC,
e a regra é:

**Exemplo #5 Exemplo de carregamento de classes MVC**

```
Controller Classes =>
// APPLICATION_PATH/controllers/

Model Classes =>
// APPLICATION_PATH/models/

Plugin Classes =>
// APPLICATION_PATH/plugins/
```

Yaf identifica o sufixo de uma classe (isto é padrão, o sufixo
pode ser alterado pela configuração [yaf.name\_suffix](yaf.configuration.md#ini.yaf.name-suffix)) para decidir se é
uma classe MVC:

**Exemplo #6 Distinções de classes MVC**

```
Controller Classes =>
    // ***Controller

Model Classes =>
    // ***Model

Plugin Classes =>
    // ***Plugin
```

Alguns exemplos:

**Exemplo #7 Exemplo de carregamento MVC**

```
class IndexController
    // APPLICATION_PATH/controllers/Index.php

class DataModel =>
   // APPLICATION_PATH/models/Data.php

class DummyPlugin =>
  // APPLICATION_PATH/plugins/Dummy.php

class A_B_TestModel =>
  // APPLICATION_PATH/models/A/B/Test.php
```

> **Nota**:
>
> A partir do Yaf 2.1.18, é oferecido suporte ao carregamento automático de controladores para o lado do script do usuário
> (isto é, o carregamento automático é acionado pelo script PHP do usuário, por exemplo: acessar uma
> propriedade estática do controlador no Bootstrap ou em Plugins),
> mas o carregador automático apenas tenta localizar o script da classe do controlador sob o pasta
> padrão do módulo, que é "APPLICATION\_PATH/controllers/".

Além disso, o diretório será afetado por [yaf.lowcase\_path](yaf.configuration.md#ini.yaf.lowcase-path).

## Resumo da classe

class **Yaf\_Loader**
{

/\* Propriedades \*/

protected
[$\_local\_ns](class.yaf-loader.md#yaf-loader.props.local-ns);

protected
[$\_library](class.yaf-loader.md#yaf-loader.props.library);

protected
[$\_global\_library](class.yaf-loader.md#yaf-loader.props.global-library);

static
[$\_instance](class.yaf-loader.md#yaf-loader.props.instance);

/\* Métodos \*/

private function [\_\_construct](yaf-loader.construct.md)()

public function [autoload](yaf-loader.autoload.md)(): [void](language.types.void.md)

public function [clearLocalNamespace](yaf-loader.clearlocalnamespace.md)(): [void](language.types.void.md)

public static function [getInstance](yaf-loader.getinstance.md)(): [void](language.types.void.md)

public function [getLibraryPath](yaf-loader.getlibrarypath.md)([bool](language.types.boolean.md) `$is_global` = **`false`**): [Yaf\_Loader](class.yaf-loader.md)

public function [getLocalNamespace](yaf-loader.getnamespaces.md)(): [void](language.types.void.md)

public function [getNamespacePath](yaf-loader.getnamespacepath.md)([string](language.types.string.md) `$namespaces`): [string](language.types.string.md)

public function **getNamespaces**(): [array](language.types.array.md)

public static function [import](yaf-loader.import.md)(): [void](language.types.void.md)

public function [isLocalName](yaf-loader.islocalname.md)(): [void](language.types.void.md)

public function [registerLocalNamespace](yaf-loader.registerlocalnamespace.md)([mixed](language.types.mixed.md) `$prefix`): [void](language.types.void.md)

public function [registerNamespace](yaf-loader.registernamespace.md)([string](language.types.string.md)|[array](language.types.array.md) `$namespaces`, [string](language.types.string.md) `$path` = ?): [bool](language.types.boolean.md)

public function [setLibraryPath](yaf-loader.setlibrarypath.md)([string](language.types.string.md) `$directory`, [bool](language.types.boolean.md) `$is_global` = **`false`**): [Yaf\_Loader](class.yaf-loader.md)

}

## Propriedades

\_local\_ns

\_library
:   Por padrão, este valor é [application.directory](yaf.appconfig.md#configuration.yaf.directory) . "/library".
    Ele pode ser alterado no application.ini (application.library) ou com uma chamada a
    [Yaf\_Loader::setLibraryPath()](yaf-loader.setlibrarypath.md)

\_global\_library

\_instance

## Índice

- [Yaf\_Loader::autoload](yaf-loader.autoload.md) — autoload
- [Yaf\_Loader::clearLocalNamespace](yaf-loader.clearlocalnamespace.md) — clearLocalNamespace
- [Yaf\_Loader::\_\_construct](yaf-loader.construct.md) — \_\_construct
- [Yaf\_Loader::getInstance](yaf-loader.getinstance.md) — getInstance
- [Yaf\_Loader::getLibraryPath](yaf-loader.getlibrarypath.md) — Obtem o caminho da biblioteca
- [Yaf\_Loader::getLocalNamespace](yaf-loader.getlocalnamespace.md) — getLocalNamespace
- [Yaf\_Loader::getNamespacePath](yaf-loader.getnamespacepath.md) — Obtém o caminho do namespace registrado
- [Yaf\_Loader::getLocalNamespace](yaf-loader.getnamespaces.md) — Obtém informação de todos os namespaces registrados
- [Yaf\_Loader::import](yaf-loader.import.md) — import
- [Yaf\_Loader::isLocalName](yaf-loader.islocalname.md) — isLocalName
- [Yaf\_Loader::registerLocalNamespace](yaf-loader.registerlocalnamespace.md) — Registra prefixo de classe local
- [Yaf\_Loader::registerNamespace](yaf-loader.registernamespace.md) — Registra namespace com caminho de pesquisa
- [Yaf\_Loader::setLibraryPath](yaf-loader.setlibrarypath.md) — Altera o caminho da biblioteca

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
