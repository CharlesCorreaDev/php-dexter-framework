# Cria uma nova instância de proxy lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.newlazyproxy.php

---

# ReflectionClass::newLazyProxy

(PHP 8 >= 8.4.0)

ReflectionClass::newLazyProxy — Cria uma nova instância de proxy lento

### Descrição

public function **ReflectionClass::newLazyProxy**([callable](language.types.callable.md) `$factory`, [int](language.types.integer.md) `$options` = 0): [object](language.types.object.md)

Cria uma nova instância de proxy lento da classe, anexando a
função `factory` a ela. O construtor não é
chamado e as propriedades não são definidas com seus valores padrão. Quando é
feita uma tentativa de observar ou modificar o estado do proxy pela primeira
vez, a função de fábrica é chamada para fornecer uma instância real, que
é então anexada ao proxy. Depois disso, todas as interações subsequentes
com o proxy são encaminhadas para a instância real. Consulte
[Gatilhos de
Inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-triggers) e [Sequência
de Inicialização](language.oop5.lazy-objects.md#language.oop5.lazy-objects.initialization-sequence) .

### Parâmetros

`factory`
:   A fábrica é uma função de retorno com a seguinte assinatura:

    function factory([object](language.types.object.md) `$object`): [object](language.types.object.md)

    `object`
    :   O parâmetro `object` informa o objeto que está
        sendo inicializado. Neste ponto, o objeto não está mais marcado como
        lento e acessá-lo não aciona a inicialização novamente.

    A função de fábrica deve retornar um objeto, chamado de
    *instância real*, que é então anexado ao
    proxy. Esta instância real não deve ser lenta e não deve ser o
    próprio proxy. Se a instância real não tiver a mesma classe
    do proxy, a classe do proxy deverá ser uma subclasse da classe da
    instância real, sem propriedades adicionais, e não deverá substituir os métodos
    **\_\_destruct()** ou
    **\_\_clone()**.

`options`
:   `options` pode ser uma combinação das seguintes
    opções:

    **`ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE`**
    :   Por padrão, a serialização de um objeto lento aciona sua
        inicialização. Definir essa opção impede a inicialização, permitindo
        que objetos lentos sejam serializados sem serem inicializados.

### Valor Retornado

Retorna uma instância de proxy lento. Se o objeto não tiver propriedades, ou se todas as suas
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
$object = $reflector->newLazyProxy(function (Example $object) {
     $realInstance = new Example(1);
     return $realInstance;
});

var_dump($object);
var_dump($object instanceof Example);

// Aciona a inicialização e encaminha a busca de propriedade para a instância real
var_dump($object->prop);

var_dump($object);
?>
```

O exemplo acima produzirá:

```
lazy proxy object(Example)#3 (0) {
  ["prop"]=>
  uninitialized(int)
}
bool(true)
Example::__construct
int(1)
lazy proxy object(Example)#3 (1) {
  ["instance"]=>
  object(Example)#4 (1) {
    ["prop"]=>
    int(1)
  }
}
```

### Veja também

- [Lazy objects](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento
- [ReflectionClass::newInstanceWithoutConstructor()](reflectionclass.newinstancewithoutconstructor.md) - Cria uma nova instância de classe sem invocar o construtor
- [ReflectionClass::resetAsLazyProxy()](reflectionclass.resetaslazyproxy.md) - Redefine um objeto e o marca como lento
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
