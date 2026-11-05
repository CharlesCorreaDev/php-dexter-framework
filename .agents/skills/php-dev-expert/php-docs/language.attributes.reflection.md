# Lendo Atributos com a API Reflection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.attributes.reflection.php

---

## Lendo Atributos com a API Reflection

Para acessar atributos de classes, métodos, funções, parâmetros, propriedades
e constantes de classe, use o método **getAttributes()** fornecido
pela API Reflection. Este método retorna um array de instâncias de [ReflectionAttribute](class.reflectionattribute.md).
Essas instâncias podem ser consultadas para o nome do atributo, argumentos e
podem ser usadas para instanciar o atributo representado.

Separar a representação do atributo refletido de sua instância real fornece mais
controle sobre o tratamento de erros, como classes de atributos ausentes, argumentos digitados incorretamente
ou valores ausentes. Objetos da classe de atributo são instanciados somente após chamar
[ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md), garantindo que a validação do argumento
ocorra naquele ponto.

**Exemplo #1 Lendo Atributos Usando a API Reflection**

```
<?php

#[Attribute]
class MyAttribute
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

#[MyAttribute(value: 1234)]
class Thing
{
}

function dumpAttributeData($reflection) {
    $attributes = $reflection->getAttributes();

    foreach ($attributes as $attribute) {
       var_dump($attribute->getName());
       var_dump($attribute->getArguments());
       var_dump($attribute->newInstance());
    }
}

dumpAttributeData(new ReflectionClass(Thing::class));
```

O exemplo acima produzirá:

```
string(11) "MyAttribute"
array(1) {
  ["value"]=>
  int(1234)
}
object(MyAttribute)#3 (1) {
  ["value"]=>
  int(1234)
}
```

Em vez de iterar sobre todos os atributos na instância de reflexão,
você pode recuperar apenas aqueles de uma classe de atributo específica passando
o nome da classe de atributo como um argumento.

**Exemplo #2 Lendo Atributos Específicos Usando a API Reflection**

```
<?php
#[Attribute]
class MyAttribute
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

#[MyAttribute(value: 1234)]
class Thing
{
}

function dumpMyAttributeData($reflection) {
    $attributes = $reflection->getAttributes(MyAttribute::class);

    foreach ($attributes as $attribute) {
       var_dump($attribute->getName());
       var_dump($attribute->getArguments());
       var_dump($attribute->newInstance());
    }
}

dumpMyAttributeData(new ReflectionClass(Thing::class));
```

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
