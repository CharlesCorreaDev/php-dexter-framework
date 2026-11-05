# Constrói um objeto ReflectionZendExtension

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionzendextension.construct.php

---

# ReflectionZendExtension::\_\_construct

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionZendExtension::\_\_construct — Constrói um objeto ReflectionZendExtension

### Descrição

public function **ReflectionZendExtension::\_\_construct**([string](language.types.string.md) `$name`)

Constrói um novo objeto [ReflectionZendExtension](class.reflectionzendextension.md).

### Parâmetros

`name`
:   O nome da extensão.

### Erros/Exceções

Lança [ReflectionException](class.reflectionexception.md) se a extensão a ser refletida não existir.

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
