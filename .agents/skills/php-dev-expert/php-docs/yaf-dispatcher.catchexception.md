# Ativa/desativa a captura de exceções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.catchexception.php

---

# Yaf\_Dispatcher::catchException

(Yaf >=1.0.0)

Yaf\_Dispatcher::catchException — Ativa/desativa a captura de exceções

### Descrição

public function **Yaf\_Dispatcher::catchException**([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

Enquanto application.dispatcher.throwException estiver On (pode-se também chamar
**Yaf\_Dispatcher::throwException(TRUE)()** para habilitá-lo), Yaf lançará uma Exception quando
ocorrer um erro, em vez de emitir um erro.

Se **Yaf\_Dispatcher::catchException()** for ativado (também pode ser ativado definindo
[application.dispatcher.catchException](yaf.appconfig.md#configuration.yaf.dispatcher.catchexception)),
todas as exceções não capturadas serão ser capturadas por ErrorController::error se estiver definido.

### Parâmetros

`flag`
:   Booleano.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Dispatcher::catchException()****

```
/* Definido um ErrorController */
<?php
class ErrorController extends Yaf_Controller_Abstract {
     /**
      * Também pode-se chamar Yaf_Request_Abstract::getException para obter a
      * exceção não capturada.
      */
     public function errorAction($exception) {
        /* ocorre o erro */
        switch ($exception->getCode()) {
            case YAF_ERR_NOTFOUND_MODULE:
            case YAF_ERR_NOTFOUND_CONTROLLER:
            case YAF_ERR_NOTFOUND_ACTION:
            case YAF_ERR_NOTFOUND_VIEW:
                echo 404, ":", $exception->getMessage();
                break;
            default :
                $message = $exception->getMessage();
                echo 0, ":", $exception->getMessage();
                break;
        }
     }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* Agora, se ocorrer algum erro, supondo que um controlador inexistente seja acessado (ou que uma exceção seja lançada pelo usuário): */
404:Could not find controller script **/aplicacao/controladores/controlador_nao_existente.php
```

### Veja também

- [Yaf\_Dispatcher::throwException()](yaf-dispatcher.throwexception.md) - Ativa/desativa o lançamento de exceção
- [Yaf\_Dispatcher::setErrorHandler()](yaf-dispatcher.seterrorhandler.md) - Define o manipulador de erros

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
