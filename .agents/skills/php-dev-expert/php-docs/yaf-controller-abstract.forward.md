# Encaminha para outra ação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.forward.php

---

# Yaf\_Controller\_Abstract::forward

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::forward — Encaminha para outra ação

### Descrição

public function **Yaf\_Controller\_Abstract::forward**([string](language.types.string.md) `$action`, [array](language.types.array.md) `$paramters` = ?): [bool](language.types.boolean.md)

public function **Yaf\_Controller\_Abstract::forward**([string](language.types.string.md) `$controller`, [string](language.types.string.md) `$action`, [array](language.types.array.md) `$paramters` = ?): [bool](language.types.boolean.md)

public function **Yaf\_Controller\_Abstract::forward**(  
    [string](language.types.string.md) `$module`,  
    [string](language.types.string.md) `$controller`,  
    [string](language.types.string.md) `$action`,  
    [array](language.types.array.md) `$paramters` = ?  
): [bool](language.types.boolean.md)

Encaminha o processo de execução atual para outra ação.
> **Nota**:
>
> Este método não altera para a ação de destino imediatamente, isso
> acontece depois que o fluxo atual termina.

### Parâmetros

`module`
:   Nome do módulo de destino, se for NULL, o módulo padrão
    será usado.

`controller`
:   Nome do controlador de destino.

`action`
:   Nome da ação de destino.

`paramters`
:   Argumentos da chamada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Controller\_Abstract::forward()****

```
<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction(){
         $logined = $_SESSION["login"];
         if (!$logined) {
             $this->forward("login", array("from" => "Index")); // forward to login action
             return FALSE;  // isto é importante, finaliza o fluxo atual
                            // e solicita ao Yaf para não fazer auto-renderização
         }

         // outros processos
    }

    public function loginAction() {
         echo "login, redirecionado da ação ", $this->_request->getParam("from");
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
login, redirecionado da ação Index
```

### Veja também

- **Yaf\_Request\_Abstrace::getParam()**

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
