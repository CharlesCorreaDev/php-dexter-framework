# A classe Componere\Definition

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.componere-definition.php

---

# A classe Componere\Definition

(Componere 2 >= 2.1.0)

## Introdução

A classe Definition permite ao programador construir e registrar um tipo em tempo de execução.

Caso uma Definition substitua uma classe existente, a classe existente será restaurada quando a Definition for destruída.

## Resumo da classe

final
class **Componere\Definition**

extends
[Componere\Abstract\Definition](class.componere-abstract-definition.md)
{

/\* Constructors \*/

public function [\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`)

public function [\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`)

public function [\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [array](language.types.array.md) `$interfaces`)

public function [\_\_construct](componere-definition.construct.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`, [array](language.types.array.md) `$interfaces`)

/\* Métodos \*/

public function [addConstant](componere-definition.addconstant.md)([string](language.types.string.md) `$name`, [Componere\Value](class.componere-value.md) `$value`): Definition

public function [addProperty](componere-definition.addproperty.md)([string](language.types.string.md) `$name`, [Componere\Value](class.componere-value.md) `$value`): Definition

public function [register](componere-definition.register.md)(): [void](language.types.void.md)

public function [isRegistered](componere-definition.isregistered.md)(): [bool](language.types.boolean.md)

public function [getClosure](componere-definition.getclosure.md)([string](language.types.string.md) `$name`): [Closure](class.closure.md)

public function [getClosures](componere-definition.getclosures.md)(): [array](language.types.array.md)

/\* Métodos herdados \*/

public function [Componere\Abstract\Definition::addInterface](componere-abstract-definition.addinterface.md)([string](language.types.string.md) `$interface`): Definition

public function [Componere\Abstract\Definition::addMethod](componere-abstract-definition.addmethod.md)([string](language.types.string.md) `$name`, [Componere\Method](class.componere-method.md) `$method`): Definition

public function [Componere\Abstract\Definition::addTrait](componere-abstract-definition.addtrait.md)([string](language.types.string.md) `$trait`): Definition

public function [Componere\Abstract\Definition::getReflector](componere-abstract-definition.getreflector.md)(): [ReflectionClass](class.reflectionclass.md)

}

## Índice

- [Componere\Definition::\_\_construct](componere-definition.construct.md) — Construção da definição
- [Componere\Definition::addConstant](componere-definition.addconstant.md) — Adiciona constante
- [Componere\Definition::addProperty](componere-definition.addproperty.md) — Adiciona propriedade
- [Componere\Definition::register](componere-definition.register.md) — Registro
- [Componere\Definition::isRegistered](componere-definition.isregistered.md) — Detecção de estado
- [Componere\Definition::getClosure](componere-definition.getclosure.md) — Obtém Closure
- [Componere\Definition::getClosures](componere-definition.getclosures.md) — Obtém Closures

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
