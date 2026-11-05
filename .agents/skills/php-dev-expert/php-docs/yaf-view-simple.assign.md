# Atribui valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.assign.php

---

# Yaf\_View\_Simple::assign

(Yaf >=1.0.0)

Yaf\_View\_Simple::assign — Atribui valores

### Descrição

public function **Yaf\_View\_Simple::assign**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value` = ?): [bool](language.types.boolean.md)

Atribui valores ao mecanismo de visualização.

### Parâmetros

`name`
:   Uma string ou um array.

    Se for uma string, o argumento seguinte, $value, é obrigatório.

`value`
:   Valor (mixed).

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_View\_Simple::assign()****

```
<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView()->assign("foo", "bar");
        $this->_view->assign( array( "key" => "value", "name" => "value"));
    }
}
?>
```

**Exemplo #2 Exemplo de modelo**

```
<html>
 <head>
  <title><?php echo $foo; ?></title>
 </head>
<body>
  <?php
    foreach ($this->_tpl_vars as $name => $value) {
         echo $$name; // ou: echo $this->_tpl_vars[$name];
    }
  ?>
</body>
</html>
```

### Veja também

- [Yaf\_View\_Simple::assignRef()](yaf-view-simple.assignref.md) - Atribui um valor de referência ao mecanismo
- **Yaf\_View\_Interface::clear()**
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
