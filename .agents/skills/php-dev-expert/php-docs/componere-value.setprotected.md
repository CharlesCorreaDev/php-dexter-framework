# Modificação de acessibilidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-value.setprotected.php

---

# Componere\Value::setProtected

(Componere 2 >= 2.1.0)

Componere\Value::setProtected — Modificação de acessibilidade

### Descrição

public function **Componere\Value::setProtected**(): Value

### Valor Retornado

O objeto Value atual.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se o nível de acesso já tiver sido definido anteriormente.

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
