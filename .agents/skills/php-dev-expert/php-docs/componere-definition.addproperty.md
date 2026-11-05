# Adiciona propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.addproperty.php

---

# Componere\Definition::addProperty

(Componere 2 >= 2.1.0)

Componere\Definition::addProperty — Adiciona propriedade

### Descrição

public function **Componere\Definition::addProperty**([string](language.types.string.md) `$name`, [Componere\Value](class.componere-value.md) `$value`): Definition

Declara uma propriedade de classe na definição atual.

### Parâmetros

`name`
:   O nome para a propriedade, insensível a maiúsculas/minúsculas.

`value`
:   O valor padrão para a propriedade.

### Valor Retornado

A definição atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se a Definition já estiver registrada.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se `name` já estiver declarada como uma propriedade.

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
