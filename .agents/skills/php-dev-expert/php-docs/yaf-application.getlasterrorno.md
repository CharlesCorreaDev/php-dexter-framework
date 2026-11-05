# Obtém o código do último erro ocorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.getlasterrorno.php

---

# Yaf\_Application::getLastErrorNo

(Yaf >=2.1.2)

Yaf\_Application::getLastErrorNo — Obtém o código do último erro ocorrido

### Descrição

public function **Yaf\_Application::getLastErrorNo**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::getLastErrorNo()****

```
<?php
function error_handler($errno, $errstr, $errfile, $errline) {
   var_dump(Yaf_Application::app()->getLastErrorNo());
   var_dump(Yaf_Application::app()->getLastErrorNo() == YAF_ERR_NOTFOUND_CONTROLLER);
}

$config = array(
  "application" => array(
   "directory" => "/tmp/notexists",
     "dispatcher" => array(
       "throwException" => 0, // emite erro ao invés de lançar exceção
      ),
  ),
);

$app = new Yaf_Application($config);
$app->getDispatcher()->setErrorHandler("error_handler", E_RECOVERABLE_ERROR);
$app->run();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(516)
bool(true)
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
