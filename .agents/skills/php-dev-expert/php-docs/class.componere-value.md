# A classe Componere\Value

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.componere-value.php

---

# A classe Componere\Value

(Componere 2 >= 2.1.0)

## Introdução

Um valor representa uma variável PHP de todos os tipos, incluindo indefinida

## Resumo da classe

final
class **Componere\Value**
{

/\* Constructor \*/

public function [\_\_construct](componere-value.construct.md)([mixed](language.types.mixed.md) `$default` = ?)

/\* Métodos \*/

public function [setPrivate](componere-value.setprivate.md)(): Value

public function [setProtected](componere-value.setprotected.md)(): Value

public function [setStatic](componere-value.setstatic.md)(): Value

public function [isPrivate](componere-value.isprivate.md)(): [bool](language.types.boolean.md)

public function [isProtected](componere-value.isprotected.md)(): [bool](language.types.boolean.md)

public function [isStatic](componere-value.isstatic.md)(): [bool](language.types.boolean.md)

public function [hasDefault](componere-value.hasdefault.md)(): [bool](language.types.boolean.md)

}

## Índice

- [Componere\Value::\_\_construct](componere-value.construct.md) — Construção de Valor
- [Componere\Value::setPrivate](componere-value.setprivate.md) — Modificação de acessibilidade
- [Componere\Value::setProtected](componere-value.setprotected.md) — Modificação de acessibilidade
- [Componere\Value::setStatic](componere-value.setstatic.md) — Modificação de acessibilidade
- [Componere\Value::isPrivate](componere-value.isprivate.md) — Detecção de acessibilidade
- [Componere\Value::isProtected](componere-value.isprotected.md) — Detecção de acessibilidade
- [Componere\Value::isStatic](componere-value.isstatic.md) — Detecção de acessibilidade
- [Componere\Value::hasDefault](componere-value.hasdefault.md) — Intereção de Valor

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
