# Construtor de Yaf_Application

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.construct.php

---

# Yaf\_Application::\_\_construct

(Yaf >=1.0.0)

Yaf\_Application::\_\_construct — Construtor de Yaf\_Application

### Descrição

public function **Yaf\_Application::\_\_construct**([mixed](language.types.mixed.md) `$config`, [string](language.types.string.md) `$environ` = ?)

Instancia uma [Yaf\_Application](class.yaf-application.md).

### Parâmetros

`config`
:   Um caminho para o arquivo de configuração, ou um array de configurações.

    Se for um arquivo de configuração, deve haver uma seção com o nome
    definido por [yaf.environ](yaf.configuration.md#ini.yaf.environ), que
    é "product" por padrão.
    > **Nota**:
    >
    > Se for usado um arquivo como o contêiner de configuração
    > da aplicação, pode-se usar [yaf.cache\_config](yaf.configuration.md#ini.yaf.cache-config) para melhorar o
    > desempenho.

    As entradas de configuração (e seus valores padrão) listadas abaixo:

    **Exemplo #1 Um exemplo de arquivo INI de configuração**

    ```
    [product]
    ;este deve estar sempre definido e não tem valor padrão
    application.directory=APPLICATION_PATH

    ;as configurações a seguir têm valor padrão, pode não ser necessário defini-las
    application.library = APPLICATION_PATH . "/library"
    application.dispatcher.throwException=1
    application.dispatcher.catchException=1

    application.baseUri=""

    ;o nome da extensão do script PHP
    ap.ext=php

    ;o nome da extensão do modelo de visualização
    ap.view.ext=phtml

    ap.dispatcher.defaultModule=Index
    ap.dispatcher.defaultController=Index
    ap.dispatcher.defaultAction=index

    ;módulos definidos
    ap.modules=Index
    ```

`environ`
:   Define que seção será carregada como a configuração final.

### Valor Retornado

### Examples

**Exemplo #2 Exemplo de **Yaf\_Application::\_\_construct()****

```
<?php
defined('APPLICATION_PATH')                  // APPLICATION_PATH será usada no arquivo INI de configuração
    || define('APPLICATION_PATH', __DIR__);

$application = new Yaf_Application(APPLICATION_PATH.'/conf/application.ini');
$application->bootstrap()->run();
?>
```

O exemplo acima produzirá
algo semelhante a:

**Exemplo #3 Exemplo de **Yaf\_Application::\_\_construct()****

```
<?php
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
$application->bootstrap()->run();
?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yaf\_Config\_Ini](class.yaf-config-ini.md)

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
