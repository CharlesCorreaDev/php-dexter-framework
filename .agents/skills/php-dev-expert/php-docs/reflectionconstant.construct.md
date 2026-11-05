# Constrói um objeto ReflectionConstant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionconstant.construct.php

---

# ReflectionConstant::\_\_construct

(PHP 8 >= 8.4.0)

ReflectionConstant::\_\_construct — Constrói um objeto ReflectionConstant

### Descrição

public function **ReflectionConstant::\_\_construct**([string](language.types.string.md) `$name`)

Constrói um novo objeto [ReflectionConstant](class.reflectionconstant.md).

### Parâmetros

`name`
:   O nome da constante.

### Erros/Exceções

Lança uma [ReflectionException](class.reflectionexception.md) caso a constante
fornecida não exista.

### Veja também

- [Construtores](language.oop5.decon.md#language.oop5.decon.constructor)

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
