# Ativa/desativa a renderização automática

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.autorender.php

---

# Yaf\_Dispatcher::autoRender

(Yaf >=1.0.0)

Yaf\_Dispatcher::autoRender — Ativa/desativa a renderização automática

### Descrição

public function **Yaf\_Dispatcher::autoRender**([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

[Yaf\_Dispatcher](class.yaf-dispatcher.md) será renderizado automaticamente após
despachar uma solicitação recebida, pode-se evitar a renderização chamando
este método com `flag` igual a **`true`**.
> **Nota**:
>
> Pode-se simplesmente retornar **`false`** em uma ação para evitar a renderização automática
> dessa ação.

### Parâmetros

`flag`
:   bool
    > **Nota**:
    >
    > Desde a versão 2.2.0, se este parâmetro não for informado, o estado
    > atual será retornado.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Dispatcher::autoRender()****

```
<?php
class IndexController extends Yaf_Controller_Abstract {
     /* O método init() será chamado assim que um controlador for inicializado */
     public function init() {
         if ($this->getRequest()->isXmlHttpRequest()) {
             // Não chama render para solicitação ajax,
             // uma string json será gerada
             Yaf_Dispatcher::getInstance()->autoRender(FALSE);
         }
     }

}
?>
```

O exemplo acima produzirá
algo semelhante a:

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
