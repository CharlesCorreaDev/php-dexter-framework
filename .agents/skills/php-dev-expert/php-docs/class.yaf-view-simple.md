# A classe Yaf_View_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-view-simple.php

---

# A classe Yaf\_View\_Simple

(Yaf >=1.0.0)

## Introdução

**Yaf\_View\_Simple** é o mecanismo de padrão de visualização incluído no
Yaf. É simples porém rápido, e suporta somente padrões de script
PHP.

## Resumo da classe

class **Yaf\_View\_Simple**
implements
[Yaf\_View\_Interface](class.yaf-view-interface.md) {

/\* Propriedades \*/

protected
[$\_tpl\_vars](class.yaf-view-simple.md#yaf-view-simple.props.tpl-vars);

protected
[$\_tpl\_dir](class.yaf-view-simple.md#yaf-view-simple.props.tpl-dir);

/\* Métodos \*/

final public function [\_\_construct](yaf-view-simple.construct.md)([string](language.types.string.md) `$template_dir`, [array](language.types.array.md) `$options` = ?)

public function [assign](yaf-view-simple.assign.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value` = ?): [bool](language.types.boolean.md)

public function [assignRef](yaf-view-simple.assignref.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `&$value`): [bool](language.types.boolean.md)

public function [clear](yaf-view-simple.clear.md)([string](language.types.string.md) `$name` = ?): [bool](language.types.boolean.md)

public function [display](yaf-view-simple.display.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [bool](language.types.boolean.md)

public function [eval](yaf-view-simple.eval.md)([string](language.types.string.md) `$tpl_content`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

public function [\_\_get](yaf-view-simple.get.md)([string](language.types.string.md) `$name` = ?): [void](language.types.void.md)

public function [getScriptPath](yaf-view-simple.getscriptpath.md)(): [string](language.types.string.md)

public function [\_\_isset](yaf-view-simple.isset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [render](yaf-view-simple.render.md)([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

public function [\_\_set](yaf-view-simple.set.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [setScriptPath](yaf-view-simple.setscriptpath.md)([string](language.types.string.md) `$template_dir`): [bool](language.types.boolean.md)

}

## Propriedades

\_tpl\_vars

\_tpl\_dir

## Índice

- [Yaf\_View\_Simple::assign](yaf-view-simple.assign.md) — Atribui valores
- [Yaf\_View\_Simple::assignRef](yaf-view-simple.assignref.md) — Atribui um valor de referência ao mecanismo
- [Yaf\_View\_Simple::clear](yaf-view-simple.clear.md) — Limpa valores atribuídos
- [Yaf\_View\_Simple::\_\_construct](yaf-view-simple.construct.md) — Construtor de Yaf\_View\_Simple
- [Yaf\_View\_Simple::display](yaf-view-simple.display.md) — Renderiza e exibe
- [Yaf\_View\_Simple::eval](yaf-view-simple.eval.md) — Renderiza o modelo
- [Yaf\_View\_Simple::\_\_get](yaf-view-simple.get.md) — Obtém variável atribuída
- [Yaf\_View\_Simple::getScriptPath](yaf-view-simple.getscriptpath.md) — Obtém o diretório de modelos
- [Yaf\_View\_Simple::\_\_isset](yaf-view-simple.isset.md) — \_\_isset
- [Yaf\_View\_Simple::render](yaf-view-simple.render.md) — Renderiza o modelo
- [Yaf\_View\_Simple::\_\_set](yaf-view-simple.set.md) — Define valor para o mecanismo
- [Yaf\_View\_Simple::setScriptPath](yaf-view-simple.setscriptpath.md) — Define o diretório de modelos

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
