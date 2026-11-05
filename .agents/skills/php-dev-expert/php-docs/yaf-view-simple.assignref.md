# Atribui um valor de referência ao mecanismo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.assignref.php

---

# Yaf\_View\_Simple::assignRef

(Yaf >=1.0.0)

Yaf\_View\_Simple::assignRef — Atribui um valor de referência ao mecanismo

### Descrição

public function **Yaf\_View\_Simple::assignRef**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `&$value`): [bool](language.types.boolean.md)

Diferentemente de [Yaf\_View\_Simple::assign()](yaf-view-simple.assign.md), este método
atribui um valor de referência ao mecanismo.

### Parâmetros

`name`
:   Uma string contendo o nome que será usado para acessar o valor no modelo.

`value`
:   Valor (mixed).

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_View\_Simple::assignRef()****

```
<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $value = "bar";
        $this->getView()->assign("foo", $value);

        /* Observe que existia um problema antes do Yaf 2.1.4
         * que fazia com que o resultado abaixo fosse "bar";
         */
        $dummy = $this->getView()->render("index/index.phtml");
        echo $value;

        // evita a auto-renderização
        Yaf_Dispatcher::getInstance()->autoRender(FALSE);
    }
}
?>
```

**Exemplo #2 Exemplo de modelo**

```
<html>
 <head>
  <title><?php echo $foo;  $foo = "alterado"; ?></title>
 </head>
<body>
</body>
</html>
```

O exemplo acima produzirá
algo semelhante a:

```
/* acessar o controlador "index" resultará em: */
alterado
```

### Veja também

- [Yaf\_View\_Simple::assign()](yaf-view-simple.assign.md) - Atribui valores
- [Yaf\_View\_Simple::\_\_set()](yaf-view-simple.set.md) - Define valor para o mecanismo

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
