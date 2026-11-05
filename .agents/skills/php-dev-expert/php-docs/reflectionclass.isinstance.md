# Verifica a classe por instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isinstance.php

---

# ReflectionClass::isInstance

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isInstance — Verifica a classe por instância

### Descrição

public function **ReflectionClass::isInstance**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se um objeto é uma instância de uma classe.

### Parâmetros

`object`
:   O objeto com o qual está sendo comparado.

### Valor Retornado

Retorna **`true`** se o objeto for uma instância da classe ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplos relacionados com **ReflectionClass::isInstance()****

```
<?php

class Foo {}

$object = new Foo();

$reflection = new ReflectionClass('Foo');

if ($reflection->isInstance($object)) {
    echo "Sim\n";
}

// Equivalente a
if ($object instanceof Foo) {
    echo "Sim\n";
}

// Equivalente a
if (is_a($object, 'Foo')) {
    echo "Sim";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Sim
Sim
Sim
```

### Veja também

- [ReflectionClass::isInterface()](reflectionclass.isinterface.md) - Verifica se a classe é uma interface
- [Operadores de tipo (instanceof)](language.operators.type.md)
- [Interfaces de Objetos](language.oop5.interfaces.md)
- [is\_a()](function.is-a.md) - Verifica se um objeto é ou herda de uma classe

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
