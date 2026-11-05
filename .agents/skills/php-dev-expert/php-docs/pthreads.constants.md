# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pthreads.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`PTHREADS_INHERIT_ALL`** ([int](language.types.integer.md))
:   A opção padrão para todos os Threads fazem com que os pthreads copiem o ambiente quando novos Threads são iniciados

**`PTHREADS_INHERIT_NONE`** ([int](language.types.integer.md))
:   Não herda nada quando novos Threads são iniciados

**`PTHREADS_INHERIT_INI`** ([int](language.types.integer.md))
:   Herda entradas INI quando novos Threads são iniciados

**`PTHREADS_INHERIT_CONSTANTS`** ([int](language.types.integer.md))
:   Herda constantes declaradas pelo usuário quando novos Threads são iniciados

**`PTHREADS_INHERIT_CLASSES`** ([int](language.types.integer.md))
:   Herda classes declaradas pelo usuário quando novos Threads são iniciados

**`PTHREADS_INHERIT_FUNCTIONS`** ([int](language.types.integer.md))
:   Herda funções declaradas pelo usuário quando novos Threads são iniciados

**`PTHREADS_INHERIT_INCLUDES`** ([int](language.types.integer.md))
:   Herda informações de arquivo incluídas quando novos Threads são iniciados

**`PTHREADS_INHERIT_COMMENTS`** ([int](language.types.integer.md))
:   Herda todos os comentários quando novos Threads forem iniciados

**`PTHREADS_ALLOW_HEADERS`** ([int](language.types.integer.md))
:   Permite que novos Threads enviem cabeçalhos para saída padrão (normalmente proibido)

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
