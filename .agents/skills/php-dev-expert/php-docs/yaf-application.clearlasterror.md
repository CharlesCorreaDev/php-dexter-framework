# Limpa a última informação de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.clearlasterror.php

---

# Yaf\_Application::clearLastError

(Yaf >=2.1.2)

Yaf\_Application::clearLastError — Limpa a última informação de erro

### Descrição

public function **Yaf\_Application::clearLastError**(): [Yaf\_Application](class.yaf-application.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::clearLastError()****

```
<?php
function error_handler($errno, $errstr, $errfile, $errline) {
   Yaf_Application::app()->clearLastError();
   var_dump(Yaf_Application::app()->getLastErrorNo());
}

$config = array(
 "application" => array(
   "directory" => "/tmp/nao_existe",
     "dispatcher" => array(
       "throwException" => 0, // emite um erro ao invés de lançar uma exceção quando um erro ocorrer
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
int(0)
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
