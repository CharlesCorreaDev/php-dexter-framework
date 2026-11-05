# Derivaçaõ de Patch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-patch.derive.php

---

# Componere\Patch::derive

(Componere 2 >= 2.1.1)

Componere\Patch::derive — Derivaçaõ de Patch

### Descrição

public function **Componere\Patch::derive**([object](language.types.object.md) `$instance`): Patch

Deriva um Patch para a `instance` informada.

### Parâmetros

`instance`
:   O destino para o Patch derivado.

### Valor Retornado

Patch para `instance` derivado do Patch atual.

### Exceções

**Aviso**

Lança uma [InvalidArgumentException](class.invalidargumentexception.md) se `instance` não for compatível.

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
