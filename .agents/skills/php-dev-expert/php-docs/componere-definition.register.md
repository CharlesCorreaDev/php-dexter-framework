# Registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.register.php

---

# Componere\Definition::register

(Componere 2 >= 2.1.0)

Componere\Definition::register — Registro

### Descrição

public function **Componere\Definition::register**(): [void](language.types.void.md)

Registra a definição atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se a Definition já estiver registrada.

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
