# Define valor para o mecanismo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.set.php

---

# Yaf\_View\_Simple::\_\_set

(Yaf >=1.0.0)

Yaf\_View\_Simple::\_\_set — Define valor para o mecanismo

### Descrição

public function **Yaf\_View\_Simple::\_\_set**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Este método oferece uma alternativa mais fácil para
[Yaf\_View\_Simple::assign()](yaf-view-simple.assign.md).

### Parâmetros

`name`
:   Uma string contendo o nome do valor.

`value`
:   O valor (mixed).

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_View\_Simple::\_\_set()****

```
<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView()->foo = "bar"; // o mesmo que assign("foo", "bar");
    }
}
?>
```

### Veja também

- [Yaf\_View\_Simple::assignRef()](yaf-view-simple.assignref.md) - Atribui um valor de referência ao mecanismo
- [Yaf\_View\_Interface::assign()](yaf-view-interface.assign.md) - Atribui valor ao mecanismo de visualização

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
