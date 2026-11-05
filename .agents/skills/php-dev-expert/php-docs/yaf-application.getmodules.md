# Obtém os nomes dos módulos definidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.getmodules.php

---

# Yaf\_Application::getModules

(Yaf >=1.0.0)

Yaf\_Application::getModules — Obtém os nomes dos módulos definidos

### Descrição

public function **Yaf\_Application::getModules**(): [array](language.types.array.md)

Obtém a lista de módulos definidos na configuração. Se nenhum tiver sido definido, sempre
haverá um módulo com nome "Index".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::getModules()****

```
<?php
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
print_r($application->getModules());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Index
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
