# Verifica se um objeto é lento e não inicializado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isuninitializedlazyobject.php

---

# ReflectionClass::isUninitializedLazyObject

(PHP 8 >= 8.4.0)

ReflectionClass::isUninitializedLazyObject — Verifica se um objeto é lento e não inicializado

### Descrição

public function **ReflectionClass::isUninitializedLazyObject**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se um objeto é lento e não inicializado.

### Parâmetros

`object`
:   O objeto a ser verificado.

### Valor Retornado

Retorna **`true`** se `object` for um objeto lento não
inicializado, **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico**

```
<?php
class Example
{
    public function __construct(public int $prop) {
    }
}

$reflector = new ReflectionClass(Example::class);

$object = $reflector->newLazyGhost(function ($object) {
    echo "Inicializador acionado\n";
    $object->__construct(1);
});

var_dump($reflector->isUninitializedLazyObject($object));

var_dump($object->prop);

var_dump($reflector->isUninitializedLazyObject($object));
?>
```

O exemplo acima produzirá:

```
bool(true)
Inicializador acionado
int(1)
bool(false)
```

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento
- [ReflectionClass::markLazyObjectAsInitialized()](reflectionclass.marklazyobjectasinitialized.md) - Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica
- [ReflectionClass::initializeLazyObject()](reflectionclass.initializelazyobject.md) - Força a inicialização de um objeto lento

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
