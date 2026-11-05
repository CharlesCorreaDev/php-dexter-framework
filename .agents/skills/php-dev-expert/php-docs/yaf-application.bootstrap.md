# Chama o bootstrap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.bootstrap.php

---

# Yaf\_Application::bootstrap

(Yaf >=1.0.0)

Yaf\_Application::bootstrap — Chama o bootstrap

### Descrição

public function **Yaf\_Application::bootstrap**([Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md) `$bootstrap` = ?): [void](language.types.void.md)

Executa um Bootstrap, todos os métodos definidos no Bootstrap e nomeados com
o prefixo "\_init" serão chamados na ordem de suas declarações. Se o parâmetro bootstrap não for informado, Yaf procurará
um Bootstrap no diretório especificado por application.directory.

### Parâmetros

`bootstrap`
:   Uma instância de [Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md).

### Valor Retornado

Uma instância de [Yaf\_Application](class.yaf-application.md).

### Examples

**Exemplo #1 Um exemplo de Bootstrap**

```
<?php
/**
 * Este arquivo deve estar no caminho APPLICATION_PATH . "/application/" (que foi definido na configuração passada para Yaf_Application)
 * e nomeado como Bootstrap.php, para que o Yaf_Application possa encontrá-lo.
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {
    function _initConfig(Yaf_Dispatcher $dispatcher) {
        echo "primeira chamada\n";
    }

    function _initPlugin($dispatcher) {
        echo "segunda chamada\n";
    }
}
?>
```

**Exemplo #2 Exemplo de **Yaf\_Application::bootstrap()****

```
<?php

defined('APPLICATION_PATH') // APPLICATION_PATH será usado no arquivo de configuração INI
    || define('APPLICATION_PATH', __DIR__);

$application = new Yaf_Application(APPLICATION_PATH . '/conf/application.ini');
$application->bootstrap();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
primeira chamada
segunda chamada
```

### Veja também

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
