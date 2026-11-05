# Covariância e Contravariância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.variance.php

---

## Covariância e Contravariância

No 7.2.0, a contravariância parcial foi introduzida removendo as restrições de tipo
nos parâmetros em um método filho. A partir do PHP 7.4.0, foi adicionado suporte
a covariância e contravariância completas.

A covariância permite que um método de uma classe filha retorne um tipo mais específico que o tipo de retorno
do método da classe pai. A contravariância permite a um tipo de parâmetro ser menos
específico em um método de classe filha, em relação à classe pai.

Uma declaração de tipo é considerada mais específica nos seguintes casos:

- Um tipo é removido de um
  [tipo união](language.types.type-system.md#language.types.type-system.composite.union)
- Um tipo é adicionado a um
  [tipo interseção](language.types.type-system.md#language.types.type-system.composite.intersection)
- Um tipo de classe é alterado para um tipo de classe filha
- [iterable](language.types.iterable.md) é alterado para [array](language.types.array.md) ou [Traversable](class.traversable.md)

Uma declaração de tipo é considerada menos específica se o oposto for verdadeiro.

### Covariância

Para ilustrar como uma variância funciona, uma classe pai abstrata simples, Animal
é criada. Animal será estendida por classes filhas,
Cat e Dog.

```
<?php

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function speak();
}

class Dog extends Animal
{
    public function speak()
    {
        echo $this->name . " barks";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        echo $this->name . " meows";
    }
}
```

Observe que não há nenhum método que retorne valores neste exemplo. Serão adicionados
alguns métodos que retornam um novo objeto do tipo de classe Animal,
Cat ou Dog.

```
<?php

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat // em vez de retornar o tipo Animal, pode retornar o tipo Cat
    {
        return new Cat($name);
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog // em vez de retornar o tipo Animal, pode retornar o tipo Dog
    {
        return new Dog($name);
    }
}

$kitty = (new CatShelter)->adopt("Ricky");
$kitty->speak();
echo "\n";

$doggy = (new DogShelter)->adopt("Mavrick");
$doggy->speak();
```

O exemplo acima produzirá:

```
Ricky meows
Mavrick barks
```

### Contravariância

Continuando com o exemplo anterior com as classes Animal,
Cat e Dog, duas classes chamadas
Food e AnimalFood serão incluídas, e
um método eat(AnimalFood $food) é adicionado à classe abstrata
Animal.

```
<?php

class Food {}

class AnimalFood extends Food {}

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(AnimalFood $food)
    {
        echo $this->name . " eats " . get_class($food);
    }
}
```

Para ver o comportamento da contravariância, o método
eat é substituído na classe Dog para permitir
qualquer objeto do tipo Food. A classe Cat permanece inalterada.

```
<?php

class Dog extends Animal
{
    public function eat(Food $food) {
        echo $this->name . " eats " . get_class($food);
    }
}
```

O próximo exemplo irá mostrar o comportamento da contravariância.

```
<?php

$kitty = (new CatShelter)->adopt("Ricky");
$catFood = new AnimalFood();
$kitty->eat($catFood);
echo "\n";

$doggy = (new DogShelter)->adopt("Mavrick");
$banana = new Food();
$doggy->eat($banana);
```

O exemplo acima produzirá:

```
Ricky eats AnimalFood
Mavrick eats Food
```

Mas o que acontece se $kitty tentar comer (**eat()**) a
$banana?

```
$kitty->eat($banana);
```

O exemplo acima produzirá:

```
Fatal error: Uncaught TypeError: Argument 1 passed to Animal::eat() must be an instance of AnimalFood, instance of Food given
```

### Variância de propriedade

Por padrão, as propriedades não são covariantes nem contravariantes e, portanto, invariantes.
Ou seja, o tipo delas não pode mudar em nenhuma classe filha.
A razão para isso é que as operações "get" devem ser covariantes
e as operações "set" devem ser contravariantes.
A única maneira de uma propriedade satisfazer ambos os requisitos é ser invariante.

A partir do PHP 8.4.0, com a adição de propriedades abstratas (em uma interface ou classe abstrata) e
[propriedades virtuais](language.oop5.property-hooks.md#language.oop5.property-hooks.virtual),
é possível declarar uma propriedade que possui apenas uma operação get ou set.
Como resultado, propriedades abstratas ou propriedades virtuais que exigem apenas uma operação "get" podem ser covariantes.
Da mesma forma, uma propriedade abstrata ou propriedade virtual que requerem apenas uma operação "set" pode ser contravariante.

Uma vez que uma propriedade tenha uma operação get e set, entretanto,
ela não será mais covariante ou contravariante para extensão adicional.
Ou seja, agora é invariante.

**Exemplo #1 Variância do tipo de propriedade**

```
<?php
class Animal {}
class Dog extends Animal {}
class Poodle extends Dog {}

interface PetOwner
{
    // Apenas uma operação get é necessária, portanto isso pode ser covariante.
    public Animal $pet { get; }
}

class DogOwner implements PetOwner
{
    // Este pode ser um tipo mais restritivo, já que o lado "get"
    // ainda retorna um Animal.  Porém, como propriedade nativa,
    // os filhos desta classe não podem mais alterar o tipo.
    public Dog $pet;
}

class PoodleOwner extends DogOwner
{
    // Isso NÃO É PERMITIDO, porque DogOwner::$pet tem operações
    // get e set definidas e obrigatórias.
    public Poodle $pet;
}
?>
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
