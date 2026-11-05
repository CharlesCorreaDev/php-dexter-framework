# Construção da definição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.construct.php

---

# Componere\Definition::\_\_construct

(Componere 2 >= 2.1.0)

Componere\Definition::\_\_construct — Construção da definição

### Descrição

public function **Componere\Definition::\_\_construct**([string](language.types.string.md) `$name`)

public function **Componere\Definition::\_\_construct**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`)

public function **Componere\Definition::\_\_construct**([string](language.types.string.md) `$name`, [array](language.types.array.md) `$interfaces`)

public function **Componere\Definition::\_\_construct**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$parent`, [array](language.types.array.md) `$interfaces`)

### Parâmetros

`name`
:   O nome de uma classe, insensível a maiúsculas/minúsculas.

`parent`
:   O nome de uma classe, insensível a maiúsculas/minúsculas.

`interfaces`
:   Um array de nomes de classe, insensíveis a maiúsculas/minúsculas.

### Exceptions

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se for feita uma tentativa de substituir uma classe interna.

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se for feita uma tentativa de substituir uma interface.

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se for feita uma tentativa de substituir um trait.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se um classe em `interfaces` não puder ser encontrada.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se uma classe em `interfaces` não for uma interface.

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
