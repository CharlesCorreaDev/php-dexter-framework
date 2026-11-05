# Obtém a instância da configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.getconfig.php

---

# Yaf\_Application::getConfig

(Yaf >=1.0.0)

Yaf\_Application::getConfig — Obtém a instância da configuração

### Descrição

public function **Yaf\_Application::getConfig**(): [Yaf\_Config\_Abstract](class.yaf-config-abstract.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de [Yaf\_Config\_Abstract](class.yaf-config-abstract.md).

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::getConfig()****

```
<?php
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
print_r($application->getConfig());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Yaf_Config_Simple Object
(
    [_config:protected] => Array
        (
            [application] => Array
                (
                    [directory] => /home/laruence/local/www/htdocs/application
                )

        )

    [_readonly:protected] => 1
)
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
