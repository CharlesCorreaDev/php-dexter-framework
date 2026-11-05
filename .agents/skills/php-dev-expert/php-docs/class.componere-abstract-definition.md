# A classe Componere\Abstract\Definition

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.componere-abstract-definition.php

---

# A classe Componere\Abstract\Definition

(Componere 2 >= 2.1.0)

## Introdução

Este final abstract representa uma entrada de classe e não deve ser usado pelo programador.

## Resumo da classe

final
abstract
class **Componere\Abstract\Definition**
{

/\* Métodos \*/

public function [addInterface](componere-abstract-definition.addinterface.md)([string](language.types.string.md) `$interface`): Definition

public function [addMethod](componere-abstract-definition.addmethod.md)([string](language.types.string.md) `$name`, [Componere\Method](class.componere-method.md) `$method`): Definition

public function [addTrait](componere-abstract-definition.addtrait.md)([string](language.types.string.md) `$trait`): Definition

public function [getReflector](componere-abstract-definition.getreflector.md)(): [ReflectionClass](class.reflectionclass.md)

}

## Índice

- [Componere\Abstract\Definition::addInterface](componere-abstract-definition.addinterface.md) — Adiciona Interface
- [Componere\Abstract\Definition::addMethod](componere-abstract-definition.addmethod.md) — Adiciona método
- [Componere\Abstract\Definition::addTrait](componere-abstract-definition.addtrait.md) — Adiciona Trait
- [Componere\Abstract\Definition::getReflector](componere-abstract-definition.getreflector.md) — Cria ou obtém uma reflexão

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
