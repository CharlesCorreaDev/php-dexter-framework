# Força a inicialização de um objeto lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.initializelazyobject.php

---

# ReflectionClass::initializeLazyObject

(PHP 8 >= 8.4.0)

ReflectionClass::initializeLazyObject — Força a inicialização de um objeto lento

### Descrição

public function **ReflectionClass::initializeLazyObject**([object](language.types.object.md) `$object`): [object](language.types.object.md)

Força a inicialização do objeto especificado em `object`. Este
método não tem efeito se o objeto não for lento ou já tenha sido
inicializado. Caso contrário, a inicialização procederá como descrito na
[Sequência de
Inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-sequence).

> **Nota**:
>
> Na maioria dos casos, chamar esse método é desnecessário, pois os objetos lentos
> se inicializam automaticamente quando seu estado é observado
> ou modificado.

### Parâmetros

`object`
:   O objeto a ser inicializado.

### Valor Retornado

Se `object` for um proxy lento, retorna sua instância real.
Caso contrário, retorna o próprio `object`.

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
    echo "Initializer called\n";
    $object->__construct(1);
});

var_dump($object);

$reflector->initializeLazyObject($object);

var_dump($object);
?>
```

O exemplo acima produzirá:

```
lazy ghost object(Example)#3 (0) {
  ["prop"]=>
  uninitialized(int)
}
Initializer called
object(Example)#3 (1) {
  ["prop"]=>
  int(1)
}
```

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento
- [ReflectionClass::markLazyObjectAsInitialized()](reflectionclass.marklazyobjectasinitialized.md) - Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica
- [ReflectionClass::isUninitializedLazyObject()](reflectionclass.isuninitializedlazyobject.md) - Verifica se um objeto é lento e não inicializado

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
