# Obtém o ambiente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.environ.php

---

# Yaf\_Application::environ

(Yaf >=1.0.0)

Yaf\_Application::environ — Obtém o ambiente

### Descrição

public function **Yaf\_Application::environ**(): [void](language.types.void.md)

Obtém o ambiente que foi definido em yaf.environ cujo valor padrão é
"product".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::environ()****

```
<?php
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
print_r($application->environ());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
product
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
