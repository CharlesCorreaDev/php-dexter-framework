# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Yaf**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [yaf.library](yaf.configuration.md#ini.yaf.library) |  | **`INI_ALL`** |  |
| [yaf.action\_prefer](yaf.configuration.md#ini.yaf.action-prefer) | 0 | **`INI_ALL`** |  |
| [yaf.lowcase\_path](yaf.configuration.md#ini.yaf.lowcase-path) | 0 | **`INI_ALL`** |  |
| [yaf.use\_spl\_autoload](yaf.configuration.md#ini.yaf.use-spl-autoload) | 0 | **`INI_ALL`** |  |
| [yaf.forward\_limit](yaf.configuration.md#ini.yaf.forward-limit) | 5 | **`INI_ALL`** |  |
| [yaf.name\_suffix](yaf.configuration.md#ini.yaf.name-suffix) | 1 | **`INI_ALL`** |  |
| [yaf.name\_separator](yaf.configuration.md#ini.yaf.name-separator) |  | **`INI_ALL`** |  |
| [yaf.cache\_config](yaf.configuration.md#ini.yaf.cache-config) | 0 | **`INI_SYSTEM`** |  |
| [yaf.environ](yaf.configuration.md#ini.yaf.environ) | product | **`INI_SYSTEM`** |  |
| [yaf.use\_namespace](yaf.configuration.md#ini.yaf.use-namespace) | 0 | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`yaf.library` [string](language.types.string.md)
:   O caminho da biblioteca global, Yaf\_loader irá pesquisar a biblioteca global neste
    diretório.

`yaf.action_prefer` [int](language.types.integer.md)
:   Se houver apenas uma parte em PATH\_INFO, ela deve ser considerada como
    controlador ou ação.

    Se estiver configurado como On, será considerado como um nome de ação.

`yaf.lowcase_path` [int](language.types.integer.md)
:   Informa se todo o caminho deve ser convertido para minúsculas durante o carregamento automático da classe.

`yaf.use_spl_autoload` [int](language.types.integer.md)
:   Quando este valor estiver On, se [Yaf\_Loader](class.yaf-loader.md) não conseguir
    encontrar uma classe, ele retornará **`false`**, então dará chance para outra
    função de carregamento automático ser chamada.

    Quando este valor estiver On, se [Yaf\_Loader](class.yaf-loader.md) não conseguir
    encontrar uma classe, ele retornará **`true`**, e fará com que o carregamento automático da classe
    falhe imediatamente.

    > **Nota**:
    >
    > Yaf registrará seu carregador durante uma instanciação de
    > [Yaf\_Application](class.yaf-application.md), então quaisquer outros carregadores
    > automáticos registrados antes da instanciação serão chamados antes de
    > [Yaf\_Loader::autoload()](yaf-loader.autoload.md).

    Quando este valor estiver Off (padrão),
    [Yaf\_Loader::autoload()](yaf-loader.autoload.md) sempre retornará
    **`true`**.

`yaf.forward_limit` [int](language.types.integer.md)
:   A contagem máxima de encaminhamento, o padrão é 5. isso significa que você pode ter um
    valor máximo de 5 na pilha de encaminhamento.

    Esta é uma proteção para evitar
    [Yaf\_Controller\_Abstract::forward()](yaf-controller-abstract.forward.md) recursivo.

`yaf.name_suffix` [int](language.types.integer.md)
:   Quando ativado, Yaf\_Loader identificará uma classe por seu sufixo para
    decidir se é uma classe MVC.

    Quando estiver desativado, Yaf\_Loader examinará o prefixo do nome da classe.

`yaf.name_separator` [string](language.types.string.md)
:   Quando não estiver vazio, Yaf\_Loader identificará o sufixo de classe
    e o valor da string dela.

    Por exemplo, quando este valor for "\_", Yaf\_Loader considerará Index\_Controller como
    uma classe de controlador, IndexController como uma classe normal.

`yaf.cache_config` [int](language.types.integer.md)
:   Se estiver ligado, e o arquivo de configuração INI estiver sendo usado como o
    parâmetro de **Yaf\_Application()**, o
    resultado da compilação do arquivo de configuração INI será armazenado em cache no processo
    PHP.
    > **Nota**:
    >
    > Yaf examina o horário de modificação do arquivo INI. Se ele foi alterado desde a
    > última compilação, Yaf irá recarregá-lo.

    **Aviso**

    Yaf usa o caminho do arquivo INI como a chave de entrada para o cache, portanto é melhor usar
    o caminho absoluto do arquivo INI, caso contrário podem haver
    conflitos se duas aplicações usarem o mesmo caminho relativo do
    arquivo INI.

`yaf.environ` [string](language.types.string.md)
:   Esta valore é igual a "product" por padrão, e é usado pelo Yaf para buscar a seção
    de configuração de um arquivo INI.

    Ou seja, se este valor for igual a "product", Yaf usará a seção de nome
    "product" no arquivo de configuração INI (o primeiro parâmtro de
    [Yaf\_Application](class.yaf-application.md)) como a configuração final de
    [Yaf\_Application](class.yaf-application.md).

`yaf.use_namespace` [int](language.types.integer.md)
:   Se este valor for "On", todas as classes de Yaf serão
    nomeadas no estilo de namespace.

    For example:

    ```
    Yaf_Route_Rewrite => \Yaf\Route\Rewrite
    Yaf_Request_Http  => \Yaf\Request\Http
    ```

    Existe uma exceção, que acontece com algumas classes como
    [Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md).
    O último componente é uma palavra-chave do PHP e não pode ser usado como um nome
    de classe. Portanto, para classes deste tipo:

    ```
    Yaf_Controller_Abstract => \Yaf\Controller_Abstract
    Yaf_Route_Static => \Yaf\Route_Static
    ```

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
