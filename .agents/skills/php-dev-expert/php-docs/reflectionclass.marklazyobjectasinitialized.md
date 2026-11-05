# Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.marklazyobjectasinitialized.php

---

# ReflectionClass::markLazyObjectAsInitialized

(PHP 8 >= 8.4.0)

ReflectionClass::markLazyObjectAsInitialized — Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica

### Descrição

public function **ReflectionClass::markLazyObjectAsInitialized**([object](language.types.object.md) `$object`): [object](language.types.object.md)

Marca um objeto lento como inicializado sem chamar o inicializador ou
a fábrica. Não tem efeito se `object` não for lento ou
se já tiver sido inicializado.

O efeito de chamar este método é o mesmo descrito para Objetos Fantasma
(independentemente da estratégia de lentidão do `object`) na
[sequência de
inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-sequence), exceto que o inicializador não é chamado.
Depois disso, o objeto é indistinguível de um objeto que nunca foi
lento e foi criado com
[ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md),
exceto pelo valor das propriedades que já foram inicializadas com
[ReflectionProperty::setRawValueWithoutLazyInitialization()](reflectionproperty.setrawvaluewithoutlazyinitialization.md)
ou [ReflectionProperty::skipLazyInitialization()](reflectionproperty.skiplazyinitialization.md).

### Parâmetros

`object`
:   O objeto a ser marcado como inicializado.

### Valor Retornado

Retorna `object`.

### Examples

**Exemplo #1 Marcando um objeto lento não inicializado como inicializado**

```
<?php
class Example
{
    public string $prop1;
    public string $prop2;
    public string $prop3 = 'valor padrão';
}

$reflector = new ReflectionClass(Example::class);

$object = $reflector->newLazyGhost(function ($object) {
    echo "Inicializador acionado\n";
    $object->prop1 = 'inicializado';
});

$reflector->getProperty('prop1')
          ->setRawValueWithoutLazyInitialization($object, 'valor de prop1');

var_dump($object);

$reflector->markLazyObjectAsInitialized($object);

var_dump($object);
?>
```

O exemplo acima produzirá:

```
lazy ghost object(Example)#3 (1) {
  ["prop1"]=>
  string(14) "valor de prop1"
  ["prop2"]=>
  uninitialized(string)
  ["prop3"]=>
  uninitialized(string)
}
object(Example)#3 (2) {
  ["prop1"]=>
  string(14) "valor de prop1"
  ["prop2"]=>
  uninitialized(string)
  ["prop3"]=>
  string(12) "valor padrão"
}
```

**Exemplo #2 Marcando um objeto inicializado como inicializado**

```
<?php
class Example
{
    public string $prop1;
    public string $prop2;
    public string $prop3 = 'valor padrão';
}

$reflector = new ReflectionClass(Example::class);

$object = $reflector->newLazyGhost(function ($object) {
    echo "Inicializador acionado\n";
    $object->prop1 = 'inicializado';
});

$reflector->getProperty('prop1')
          ->setRawValueWithoutLazyInitialization($object, 'valor de prop1');

var_dump($object->prop3);
var_dump($object);

$reflector->markLazyObjectAsInitialized($object);

var_dump($object);
?>
```

O exemplo acima produzirá:

```
Inicializador acionado
string(13) "valor padrão"
object(Example)#3 (2) {
  ["prop1"]=>
  string(11) "inicializado"
  ["prop2"]=>
  uninitialized(string)
  ["prop3"]=>
  string(13) "valor padrão"
}
object(Example)#3 (2) {
  ["prop1"]=>
  string(11) "inicializado"
  ["prop2"]=>
  uninitialized(string)
  ["prop3"]=>
  string(13) "valor padrão"
}
```

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento
- [ReflectionClass::initializeLazyObject()](reflectionclass.initializelazyobject.md) - Força a inicialização de um objeto lento
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
