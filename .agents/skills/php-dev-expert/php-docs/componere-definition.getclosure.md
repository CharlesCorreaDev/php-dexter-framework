# Obtém Closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.getclosure.php

---

# Componere\Definition::getClosure

(Componere 2 >= 2.1.0)

Componere\Definition::getClosure — Obtém Closure

### Descrição

public function **Componere\Definition::getClosure**([string](language.types.string.md) `$name`): [Closure](class.closure.md)

Retorna uma Closure para o método especificado pelo nome.

### Parâmetros

`name`
:   O nome do método, insensível a maiúsculas/minúsculas.

### Valor Retornado

Uma Closure vinculada ao escopo atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se a Definition já estiver registrada.

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se `name` não puder ser encontrada.

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
