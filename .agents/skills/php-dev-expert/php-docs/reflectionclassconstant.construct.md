# Constrói uma ReflectionClassConstant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclassconstant.construct.php

---

# ReflectionClassConstant::\_\_construct

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClassConstant::\_\_construct — Constrói uma ReflectionClassConstant

### Descrição

public function **ReflectionClassConstant::\_\_construct**([object](language.types.object.md)|[string](language.types.string.md) `$class`, [string](language.types.string.md) `$constant`)

Constrói um novo objeto [ReflectionClassConstant](class.reflectionclassconstant.md).

### Parâmetros

`class`
:   Uma [string](language.types.string.md) contendo o nome da classe a se
    refletir ou um objeto [object](language.types.object.md).

`constant`
:   O nome da constante de classe.

### Erros/Exceções

Lança uma [Exception](class.exception.md) caso a constante de classe fornecida não exista.

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
