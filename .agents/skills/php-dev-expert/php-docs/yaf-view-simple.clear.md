# Limpa valores atribuídos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.clear.php

---

# Yaf\_View\_Simple::clear

(Yaf >=2.2.0)

Yaf\_View\_Simple::clear — Limpa valores atribuídos

### Descrição

public function **Yaf\_View\_Simple::clear**([string](language.types.string.md) `$name` = ?): [bool](language.types.boolean.md)

Limpa variável atribuída.

### Parâmetros

`name`
:   Nome da variável atribuída.

    Se vazio, limpa todas as variáveis atribuídas.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_View\_Simple::clear()****

```
<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {
        $this->getView()->clear("foo")->clear("bar"); // limpa "foo" e "bar"
        $this->_view->clear(); // limpa todas as variáveis atribuídas
    }
}
?>
```

### Veja também

- [Yaf\_View\_Simple::assignRef()](yaf-view-simple.assignref.md) - Atribui um valor de referência ao mecanismo
- [Yaf\_View\_Interface::assign()](yaf-view-interface.assign.md) - Atribui valor ao mecanismo de visualização
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
