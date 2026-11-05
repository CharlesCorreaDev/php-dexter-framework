# Adiciona constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.addconstant.php

---

# Componere\Definition::addConstant

(Componere 2 >= 2.1.0)

Componere\Definition::addConstant — Adiciona constante

### Descrição

public function **Componere\Definition::addConstant**([string](language.types.string.md) `$name`, [Componere\Value](class.componere-value.md) `$value`): Definition

Declara uma constante de classe na definição atual.

### Parâmetros

`name`
:   O nome para a constante, insensível a maiúsculas/minúsculas.

`value`
:   O valor para a constante, não pode ser indefinida ou estática.

### Valor Retornado

A definição atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se Definition já estiver registrada.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se `name` já estiver declarado como uma constante.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se `value` for estático.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se `value` for indefinido.

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
