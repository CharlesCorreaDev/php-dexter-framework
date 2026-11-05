# Modificação de acessibilidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-value.setprivate.php

---

# Componere\Value::setPrivate

(Componere 2 >= 2.1.0)

Componere\Value::setPrivate — Modificação de acessibilidade

### Descrição

public function **Componere\Value::setPrivate**(): Value

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
