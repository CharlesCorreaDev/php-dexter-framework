# Adiciona Interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-abstract-definition.addinterface.php

---

# Componere\Abstract\Definition::addInterface

(Componere 2 >= 2.1.0)

Componere\Abstract\Definition::addInterface — Adiciona Interface

### Descrição

public function **Componere\Abstract\Definition::addInterface**([string](language.types.string.md) `$interface`): Definition

Implementa a interface informada na definição atual.

### Parâmetros

`interface`
:   O nome de uma interface, insensível a maiúsculas/minúsculas.

### Valor Retornado

A definição atual.

### Exceções

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se Definition já estava registrada.

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
