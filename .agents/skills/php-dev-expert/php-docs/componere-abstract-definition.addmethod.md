# Adiciona método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-abstract-definition.addmethod.php

---

# Componere\Abstract\Definition::addMethod

(Componere 2 >= 2.1.0)

Componere\Abstract\Definition::addMethod — Adiciona método

### Descrição

public function **Componere\Abstract\Definition::addMethod**([string](language.types.string.md) `$name`, [Componere\Method](class.componere-method.md) `$method`): Definition

Cria ou substitui um método na definição atual.

### Parâmetros

`name`
:   O nome de um método, insensível a maiúsculas/minúsculas.

`method`
:   [Componere\Method](class.componere-method.md) que não tenha sido adicionado a outra Definition.

### Valor Retornado

A definição atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se Definition já estava registrada.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se o método já havia sido adicionado a outra definição.

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
