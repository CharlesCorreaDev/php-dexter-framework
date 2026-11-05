# Cria uma nova instância de fantasma lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.newlazyghost.php

---

# ReflectionClass::newLazyGhost

(PHP 8 >= 8.4.0)

ReflectionClass::newLazyGhost — Cria uma nova instância de fantasma lento

### Descrição

public function **ReflectionClass::newLazyGhost**([callable](language.types.callable.md) `$initializer`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

Cria uma nova instância fantasma lenta da classe, anexando o
`initializer` a ela. O construtor não é chamado e
as propriedades não são definidas com seus valores padrão. Entretanto, o objeto será
inicializado automaticamente invocando o
`initializer` na primeira vez que seu estado for observado ou
modificado. Consulte
[Gatilhos de
Inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-triggers) e [Sequência
de Inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-sequence) .

### Parâmetros

`initializer`
:   O inicializador é uma função de retorno com a seguinte assinatura:

    function initializer([object](language.types.object.md) `$object`): [void](language.types.void.md)

    `object`
    :   O parâmetro `object` informa o objeto que está
        sendo inicializado. Neste ponto, o objeto não está mais marcado como
        lento e acessá-lo não aciona a inicialização novamente.

    A função `initializer` deve retornar **`null`** ou nenhum
    valor.

`options`
:   `options` pode ser uma combinação das seguintes
    opções:

    **`ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE`**
    :   Por padrão, a serialização de um objeto lento aciona sua
        inicialização. Definir essa opção impede a inicialização, permitindo
        que objetos lentos sejam serializados sem serem inicializados.

### Valor Retornado

Retorna uma instância de fantasma lento. Se o objeto não tiver propriedades ou se todas as suas
propriedades forem estáticas ou virtuais, uma instância normal (não-lenta) será retornada.
Veja também
[Ciclo de Vida de Objetos
Lentos](language.oop5.lazy-objects.md#language.oop5.lazy-objects.lifecycle).

### Erros/Exceções

Um [Error](class.error.md) se a classe for interna ou estender uma
classe interna exceto [stdClass](class.stdclass.md).

### Examples

**Exemplo #1 Uso básico**

```
<?php

class Example {
    public function __construct(public int $prop) {
        echo __METHOD__, "\n";
    }
}

$reflector = new ReflectionClass(Example::class);
$object = $reflector->newLazyGhost(function (Example $object) {
     $object->__construct(1);
});

var_dump($object);
var_dump($object instanceof Example);

// Aciona a inicialização e busca a propriedade depois disso
var_dump($object->prop);

?>
```

O exemplo acima produzirá:

```
lazy ghost object(Example)#3 (0) {
  ["prop"]=>
  uninitialized(int)
}
bool(true)
Example::__construct
int(1)
```

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyProxy()](reflectionclass.newlazyproxy.md) - Cria uma nova instância de proxy lento
- [ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md) - Cria uma nova instância de classe sem invocar o construtor
- [ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md) - Redefine um objeto e o marca como lento
- [ReflectionClass::markLazyObjectAsInitialized()](reflectionclass.marklazyobjectasinitialized.md) - Marca um objeto lento como inicializado sem chamar o inicializador ou a fábrica
- [ReflectionClass::initializeLazyObject()](reflectionclass.initializelazyobject.md) - Força a inicialização de um objeto lento
- [ReflectionClass::isUninitializedLazyObject()](reflectionclass.isuninitializedlazyobject.md) - Verifica se um objeto é lento e não inicializado
- [ReflectionProperty::setRawValueWithoutLazyInitialization()](reflectionproperty.setrawvaluewithoutlazyinitialization.md) - Define o valor bruto da propriedade sem acionar a inicialização lenta
- [ReflectionProperty::skipLazyInitialization()](reflectionproperty.skiplazyinitialization.md) - Marca a propriedade como não lenta
- [ReflectionProperty::isLazy()](reflectionproperty.islazy.md) - Verifica se uma propriedade é lenta

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
