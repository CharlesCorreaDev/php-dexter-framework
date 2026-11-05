# Adiciona Trait

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-abstract-definition.addtrait.php

---

# Componere\Abstract\Definition::addTrait

(Componere 2 >= 2.1.0)

Componere\Abstract\Definition::addTrait — Adiciona Trait

### Descrição

public function **Componere\Abstract\Definition::addTrait**([string](language.types.string.md) `$trait`): Definition

Usa o trait fornecido para a definição atual.

### Parâmetros

`trait`
:   O nome de um trait, insensível a maiúsculas/minúsculas.

### Valor Retornado

A definição atual.

### Exceptions

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
