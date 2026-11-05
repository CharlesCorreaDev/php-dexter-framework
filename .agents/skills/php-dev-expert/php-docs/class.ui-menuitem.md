# Item de menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-menuitem.php

---

# Item de menu

(UI 0.9.9)

## Introdução

Itens de menu devem ser criados apenas pelo objeto do menu.

## Resumo da classe

class **UI\MenuItem**
{

/\* Métodos \*/

public function [disable](ui-menuitem.disable.md)()

public function [enable](ui-menuitem.enable.md)()

public function [isChecked](ui-menuitem.ischecked.md)(): [bool](language.types.boolean.md)

protected function [onClick](ui-menuitem.onclick.md)()

public function [setChecked](ui-menuitem.setchecked.md)([bool](language.types.boolean.md) `$checked`)

}

## Índice

- [UI\MenuItem::disable](ui-menuitem.disable.md) — Desabilita item de menu
- [UI\MenuItem::enable](ui-menuitem.enable.md) — Habilita item de menu
- [UI\MenuItem::isChecked](ui-menuitem.ischecked.md) — Detecta marcação
- [UI\MenuItem::onClick](ui-menuitem.onclick.md) — Função de retorno de clique
- [UI\MenuItem::setChecked](ui-menuitem.setchecked.md) — Define marcação

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
