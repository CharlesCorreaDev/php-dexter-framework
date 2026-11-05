# Ponto de entrada da ação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-action-abstract.execute.php

---

# Yaf\_Action\_Abstract::execute

(Yaf >=1.0.0)

Yaf\_Action\_Abstract::execute — Ponto de entrada da ação

### Descrição

abstract publicfunction **Yaf\_Action\_Abstract::execute**([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

O usuário sempre deve definir este método para uma ação, este é o ponto de entrada
de uma ação.
**Yaf\_Action\_Abstract::execute()** pode ter argumentos.
> **Nota**:
>
> O valor obtida da requisição não é seguro. Deve ser feito um
> trabalho de filtragem antes de usá-lo.

### Parâmetros

`args`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Action\_Abstract::execute()****

```
<?php
/**
 * Um exemplo de controlador
 */
class ProductController extends Yaf_Controller_Abstract {
      protected $actions = array(
          "index" => "actions/Index.php",
      );
}
?>
```

**Exemplo #2 Exemplo de **Yaf\_Action\_Abstract::execute()****

```
<?php
/**
 * ListAction
 */
class ListAction extends Yaf_Action_Abstract {
     public function execute ($name, $id) {
         assert($name == $this->getRequest()->getParam("name"));
         assert($id   == $this->getRequest()->getParam("id"));
     }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/**
 * Agora assumindo o uso da rota Yaf_Route_Static
 * para a requisição http://yourdomain/product/list/name/yaf/id/22,
 * o resultado será:
 */
 bool(true)
 bool(true)
```

### Veja também

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
