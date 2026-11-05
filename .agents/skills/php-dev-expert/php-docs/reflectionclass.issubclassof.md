# Verifica se é uma subclasse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.issubclassof.php

---

# ReflectionClass::isSubclassOf

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isSubclassOf — Verifica se é uma subclasse

### Descrição

public function **ReflectionClass::isSubclassOf**([ReflectionClass](class.reflectionclass.md)|[string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

Verifica se a classe é uma subclasse de uma classe especificada ou implementa
uma interface especificada.

### Parâmetros

`class`
:   O nome da classe como [string](language.types.string.md) ou
    um objeto [ReflectionClass](class.reflectionclass.md) da classe a ser verificada.

### Valor Retornado

Retorna **`true`** se a classe for uma subclasse da classe ou interface especificada, ou **`false`** caso contrário.

### Veja também

- [ReflectionClass::isInterface()](reflectionclass.isinterface.md) - Verifica se a classe é uma interface
- [ReflectionClass::implementsInterface()](reflectionclass.implementsinterface.md) - Implementa interface
- [is\_subclass\_of()](function.is-subclass-of.md) - Verifica se o objeto tem esta classe como uma de suas classes pai
- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe

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
