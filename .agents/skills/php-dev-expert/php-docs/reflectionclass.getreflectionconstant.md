# Obtém um ReflectionClassConstant para a constante de uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getreflectionconstant.php

---

# ReflectionClass::getReflectionConstant

(PHP 7 >= 7.1.0, PHP 8)

ReflectionClass::getReflectionConstant — Obtém um [ReflectionClassConstant](class.reflectionclassconstant.md) para a constante de uma classe

### Descrição

public function **ReflectionClass::getReflectionConstant**([string](language.types.string.md) `$name`): [ReflectionClassConstant](class.reflectionclassconstant.md)|[false](language.types.singleton.md)

Obtém um [ReflectionClassConstant](class.reflectionclassconstant.md) para a constante de uma classe.

### Parâmetros

`name`
:   O nome da constante da classe.

### Valor Retornado

Um [ReflectionClassConstant](class.reflectionclassconstant.md), ou **`false`** em caso de falha.

### Veja também

- [ReflectionClass::getReflectionConstants()](reflectionclass.getreflectionconstants.md) - Obtém constantes de classe
- [ReflectionClassConstant](class.reflectionclassconstant.md)

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
