# Registra um plugin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.registerplugin.php

---

# Yaf\_Dispatcher::registerPlugin

(Yaf >=1.0.0)

Yaf\_Dispatcher::registerPlugin — Registra um plugin

### Descrição

public function **Yaf\_Dispatcher::registerPlugin**([Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md) `$plugin`): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

Registra um plugin (consulte [Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md)).
Geralmente, os plugins são registrados no Bootstrap (consulte
[Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md)).

### Parâmetros

`plugin`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Dispatcher::registerPlugin()****

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {
  public function _initPlugin(Yaf_Dispatcher $dispatcher) {
    /**
    * Yaf assume que os plugins estão em [application.directory] .  "/plugins"
    * Para este caso, será:
    * [application.directory] . "/plugins/" . "User" . [application.ext]
    */
    $user = new UserPlugin();
    $dispatcher->registerPlugin($user);
  }
}
?>
```

### Veja também

- [Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md)

- [Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md)

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
