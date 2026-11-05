# Implementa interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.implementsinterface.php

---

# ReflectionClass::implementsInterface

(PHP 5, PHP 7, PHP 8)

ReflectionClass::implementsInterface — Implementa interface

### Descrição

public function **ReflectionClass::implementsInterface**([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$interface`): [bool](language.types.boolean.md)

Verifica se implementa uma interface.

### Parâmetros

`interface`
:   O nome da interface.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

**ReflectionClass::implementsInterface()** lança um
[ReflectionException](class.reflectionexception.md) se `interface`
não é uma interface.

### Veja também

- [ReflectionClass::isInterface()](reflectionclass.isinterface.md) - Verifica se a classe é uma interface
- [ReflectionClass::isSubclassOf()](reflectionclass.issubclassof.md) - Verifica se é uma subclasse
- [interface\_exists()](function.interface-exists.md) - Verifica se a interface foi definida
- [Interfaces de objetos](language.oop5.interfaces.md)

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
