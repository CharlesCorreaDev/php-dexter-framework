# A classe Yaf_View_Interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-view-interface.php

---

# A classe Yaf\_View\_Interface

(Yaf >=1.0.0)

## Introdução

Yaf fornece aos desenvolvedores a capacidade de usar um mecanismo de visualização personalizado em vez
do mecanismo incluído que é [Yaf\_View\_Simple](class.yaf-view-simple.md). Há
um exemplo para explicar como isto é feito. Consulte
[Yaf\_Dispatcher::setView()](yaf-dispatcher.setview.md).

## Resumo da classe

class **Yaf\_View\_Interface**
{

/\* Métodos \*/

abstract public function [assign](yaf-view-interface.assign.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?): [bool](language.types.boolean.md)

abstract public function [display](yaf-view-interface.display.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [bool](language.types.boolean.md)

abstract public function [getScriptPath](yaf-view-interface.getscriptpath.md)(): [void](language.types.void.md)

abstract public function [render](yaf-view-interface.render.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

abstract public function [setScriptPath](yaf-view-interface.setscriptpath.md)([string](language.types.string.md) `$template_dir`): [void](language.types.void.md)

}

## Índice

- [Yaf\_View\_Interface::assign](yaf-view-interface.assign.md) — Atribui valor ao mecanismo de visualização
- [Yaf\_View\_Interface::display](yaf-view-interface.display.md) — Renderiza e exibe um modelo
- [Yaf\_View\_Interface::getScriptPath](yaf-view-interface.getscriptpath.md) — getScriptPath
- [Yaf\_View\_Interface::render](yaf-view-interface.render.md) — Renderiza um modelo
- [Yaf\_View\_Interface::setScriptPath](yaf-view-interface.setscriptpath.md) — Define o diretório base dos modelos

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
