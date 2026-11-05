# A classe Componere\Patch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.componere-patch.php

---

# A classe Componere\Patch

(Componere 2 >= 2.1.0)

## Introdução

A classe Patch permite ao programador alterar o tipo de uma instância em tempo de execução sem registrar uma nova Definição (Definition)

Quando um Patch é destruído, ele é revertido, de modo que as instâncias que foram corrigidas durante a vida do Patch sejam restauradas ao seu tipo formal.

## Resumo da classe

final
class **Componere\Patch**

extends
[Componere\Abstract\Definition](class.componere-abstract-definition.md)
{

/\* Constructors \*/

public function [\_\_construct](componere-patch.construct.md)([object](language.types.object.md) `$instance`)

public function [\_\_construct](componere-patch.construct.md)([object](language.types.object.md) `$instance`, [array](language.types.array.md) `$interfaces`)

/\* Métodos \*/

public function [apply](componere-patch.apply.md)(): [void](language.types.void.md)

public function [revert](componere-patch.revert.md)(): [void](language.types.void.md)

public function [isApplied](componere-patch.isapplied.md)(): [bool](language.types.boolean.md)

public function [derive](componere-patch.derive.md)([object](language.types.object.md) `$instance`): Patch

public function [getClosure](componere-patch.getclosure.md)([string](language.types.string.md) `$name`): [Closure](class.closure.md)

public function [getClosures](componere-patch.getclosures.md)(): [array](language.types.array.md)

/\* Métodos herdados \*/

public function [Componere\Abstract\Definition::addInterface](componere-abstract-definition.addinterface.md)([string](language.types.string.md) `$interface`): Definition

public function [Componere\Abstract\Definition::addMethod](componere-abstract-definition.addmethod.md)([string](language.types.string.md) `$name`, [Componere\Method](class.componere-method.md) `$method`): Definition

public function [Componere\Abstract\Definition::addTrait](componere-abstract-definition.addtrait.md)([string](language.types.string.md) `$trait`): Definition

public function [Componere\Abstract\Definition::getReflector](componere-abstract-definition.getreflector.md)(): [ReflectionClass](class.reflectionclass.md)

}

## Índice

- [Componere\Patch::\_\_construct](componere-patch.construct.md) — Construção de Patch
- [Componere\Patch::apply](componere-patch.apply.md) — Aplica o patch
- [Componere\Patch::revert](componere-patch.revert.md) — Reversão
- [Componere\Patch::isApplied](componere-patch.isapplied.md) — Definição de estado
- [Componere\Patch::derive](componere-patch.derive.md) — Derivaçaõ de Patch
- [Componere\Patch::getClosure](componere-patch.getclosure.md) — Obtém Closure
- [Componere\Patch::getClosures](componere-patch.getclosures.md) — Obtém Closures

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
