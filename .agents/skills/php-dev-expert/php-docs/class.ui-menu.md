# Menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-menu.php

---

# Menu

(UI 0.9.9)

## Introdução

Menus precisam ser construídos antes da primeira janela e podem ser mostrados em qualquer janela.

## Resumo da classe

class **UI\Menu**
{

/\* Constructor \*/

public function [\_\_construct](ui-menu.construct.md)([string](language.types.string.md) `$name`)

/\* Métodos \*/

public function [append](ui-menu.append.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

public function [appendAbout](ui-menu.appendabout.md)([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

public function [appendCheck](ui-menu.appendcheck.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

public function [appendPreferences](ui-menu.appendpreferences.md)([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

public function [appendQuit](ui-menu.appendquit.md)([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

public function [appendSeparator](ui-menu.appendseparator.md)()

}

## Índice

- [UI\Menu::append](ui-menu.append.md) — Anexa um item de menu
- [UI\Menu::appendAbout](ui-menu.appendabout.md) — Anexa um item de menu "About"
- [UI\Menu::appendCheck](ui-menu.appendcheck.md) — Anexa um item de menu marcável
- [UI\Menu::appendPreferences](ui-menu.appendpreferences.md) — Anexa um item de menu de preferências
- [UI\Menu::appendQuit](ui-menu.appendquit.md) — Anexa item de menu de saída
- [UI\Menu::appendSeparator](ui-menu.appendseparator.md) — Anexa um item separador no menu
- [UI\Menu::\_\_construct](ui-menu.construct.md) — Constrói um novo menu

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
