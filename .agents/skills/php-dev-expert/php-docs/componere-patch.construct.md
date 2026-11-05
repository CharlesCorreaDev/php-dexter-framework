# Construção de Patch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-patch.construct.php

---

# Componere\Patch::\_\_construct

(Componere 2 >= 2.1.0)

Componere\Patch::\_\_construct — Construção de Patch

### Descrição

public function **Componere\Patch::\_\_construct**([object](language.types.object.md) `$instance`)

public function **Componere\Patch::\_\_construct**([object](language.types.object.md) `$instance`, [array](language.types.array.md) `$interfaces`)

### Parâmetros

`instance`
:   O destino para este Patch

`interfaces`
:   Um array de nomes de classe, insensíveis a maiúsculas/minúsculas.

### Exceções

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se uma classe em `interfaces` não puder ser encontrada.

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
