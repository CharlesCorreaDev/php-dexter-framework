# A classe Componere\Method

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.componere-method.php

---

# A classe Componere\Method

(Componere 2 >= 2.1.0)

## Introdução

Um Method representa uma função com opções de acessibilidade modificáveis

## Resumo da classe

final
class **Componere\Method**
{

/\* Constructor \*/

public function [\_\_construct](componere-method.construct.md)([Closure](class.closure.md) `$closure`)

/\* Métodos \*/

public function [setPrivate](componere-method.setprivate.md)(): Method

public function [setProtected](componere-method.setprotected.md)(): Method

public function [setStatic](componere-method.setstatic.md)(): Method

public function [getReflector](componere-method.getreflector.md)(): [ReflectionMethod](class.reflectionmethod.md)

}

## Índice

- [Componere\Method::\_\_construct](componere-method.construct.md) — Construção de método
- [Componere\Method::setPrivate](componere-method.setprivate.md) — Modificação de acessibilidade
- [Componere\Method::setProtected](componere-method.setprotected.md) — Modificação de acessibilidade
- [Componere\Method::setStatic](componere-method.setstatic.md) — Modificação de acessibilidade
- [Componere\Method::getReflector](componere-method.getreflector.md) — Cria ou obtém Reflexão

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
