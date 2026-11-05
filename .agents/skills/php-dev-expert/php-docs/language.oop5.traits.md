# Traits

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.traits.php

---

## Traits

O PHP implementa uma maneira de reúso de código chamada Traits.

Traits (Traços, Características) são um mecanismo para reúso de código em linguagens de herança simples
como o PHP. A intenção de uma Trait é reduzir algumas limitações de herança simples
permitindo que um desenvolvedor reutilize livremente conjuntos de métodos em várias classes
independentes habitando em diferentes hierarquias de classe. A semântica da combinação
de Traits e classes é definida de uma maneira que reduz a complexidade, e evita
os problemas típicos associados com herança múltipla e Mixins.

Uma Trait é similar a uma classe, mas destina-se apenas a agrupar funcionalidade de uma
forma refinada e consistente. Não é possível instanciar uma Trait por
si só. Ela é uma adição à herança tradicional e permite composição e
comportamento horizontais; isto é, a aplicação de membros de classe sem
exigir herança.

**Exemplo #1 Exemplo de Trait**

```
<?php

trait TraitA {
    public function sayHello() {
        echo 'Olá,';
    }
}

trait TraitB {
    public function sayWorld() {
        echo 'mundo';
    }
}

class MyHelloWorld
{
    use TraitA, TraitB; // Uma classe pode usar vários Traits

    public function sayHelloWorld() {
        $this->sayHello();
        echo ' ';
        $this->sayWorld();
        echo "!\n";
    }
}

$myHelloWorld = new MyHelloWorld();
$myHelloWorld->sayHelloWorld();

?>
```

O exemplo acima produzirá:

```
Olá, mundo!
```

### Precedência

Um membro herdado de uma classe base é substituído por um membro inserido
por uma Trait. Na ordem de precedência, os membros da classe atual
substituem os métodos da Trait, que por sua vez substituem os métodos herdados.

**Exemplo #2 Exemplo de Ordem de Precedência**

Um membro herdado de uma classe base é substituído pelo
método inserido em MyHelloWorld da Trait SayWorld. O comportamento é
o mesmo para métodos definidos na classe MyHelloWorld. Na ordem de precedência,
os métodos da classe atual sobrescrevem os métodos da Trait, que por sua
vez substituem os métodos da classe base.

```
<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
```

O exemplo acima produzirá:

```
Hello World!
```

**Exemplo #3 Exemplo de Ordem de Precedência Alternativa**

```
<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();
?>
```

O exemplo acima produzirá:

```
Hello Universe!
```

### Traits Múltiplas

Traits múltiplas podem ser inseridas em uma classe, listando-as na declaração
`use`, separadas por vírgulas.

**Exemplo #4 Uso de Traits Múltiplas**

```
<?php
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
?>
```

O exemplo acima produzirá:

```
Hello World!
```

### Resolução de Conflitos

Se duas Trais inserem dois métodos com o mesmo nome, um erro fatal é gerado,
se o conflito não for explicitamente resolvido.

Para resolver conflitos de nomes entre Traits usados na mesma classe,
o operador `insteadof` deve ser usado para escolher exatamente
um dos métodos conflitantes.

Como isto permite apenas excluir métodos, o operador
`as` pode ser usado para adicionar um apelido a um dos métodos. Note que
o operador `as` não renomeia o método e também não
afeta nenhum outro método.

**Exemplo #5 Exemplo de Resolução de Conflito**

Neste exemplo, Talker usa as Traits A e B.
Como A e B possuem métodos conflitantes, ela especifica que usa
a variante de smallTalk da Trait B, e a variante bigTalk da
Trait A.

A classe Aliased\_Talker usa o operador `as`
para perrmitir o uso da implementação bigTalk da Trait B sob um apelido adicional
`talk`.

```
<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}
?>
```

### Mudando a Visibilidade de Método

Ao utilizar a sintaxe `as`, pode-se também ajustar a visibilidade
de métodos na classe.

**Exemplo #6 Exemplo de Mudança de Visibilidade de Método**

```
<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// Modifica a visibilidade de sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// Apelido de método com visibilidade modificada
// Visibilidade de sayHello não é modificada
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}
?>
```

### Traits Compostas de Traits

Assim como as classes podem usar Trais, outros Traits também podem. Ao utilizar uma
ou mais Traits em uma definição de Trait, ela pode ser composta parcialmente ou
integralmente dos membros definidos nessas outras Traits.

**Exemplo #7 Exemplo de Traits Compostas de Traits**

```
<?php
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld {
    use Hello, World;
}

class MyHelloWorld {
    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
?>
```

O exemplo acima produzirá:

```
Hello World!
```

### Membros abstratos de Traits

Traits suportam o uso de métodos abstratos para impor requisitos
sobre uma classe expositora. Métodos públicos, protegidos e privados são suportados.
Antes do PHP 8.0.0, apenas métodos abstratos públicos e protegidos eram suportados.

**Cuidado**

A partir do PHP 8.0.0, a assinatura de um método concreto deverá seguir as
[regras de compatibilidade de assinaturas](language.oop5.basic.md#language.oop.lsp).
Anteriormente, sua assinatura poderia ser diferente.

**Exemplo #8 Requisitos Expressos por Métodos Abstratos**

```
<?php
trait Hello {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}
?>
```

### Membros Estáticos de Traits

Traits podem definir variáveis estáticas, métodos estáticos e propriedades estáticas.

> **Nota**:
>
> A partir do PHP 8.1.0, chamar um método estático, ou acessar uma propriedade estática diretamente em uma Trait foi descontinuado.
> Métodos estáticos e propriedades somente devem ser acessados em uma classe utilizando a Trait.

**Exemplo #9 Variáveis Estáticas**

```
<?php

trait Counter
{
    public function inc()
    {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1
{
    use Counter;
}

class C2
{
    use Counter;
}

$o = new C1();
$o->inc();
$p = new C2();
$p->inc();

?>
```

O exemplo acima produzirá:

```
1
1
```

**Exemplo #10 Métodos Estáticos**

```
<?php

trait StaticExample
{
    public static function doSomething()
    {
        return 'Fazendo algo';
    }
}

class Example
{
    use StaticExample;
}

echo Example::doSomething();

?>
```

O exemplo acima produzirá:

```
Fazendo algo
```

**Exemplo #11 Propriedades Estáticas**

**Cuidado**

Antes do PHP 8.3.0, propriedades estáticas definidas em um trait eram compartilhadas
por todas as classes na mesma herança hierárquica que usavam o trait.
A partir do PHP 8.3.0, se uma classe filha usa um trait com uma propriedade estática,
ela será considerada distinta daquela definida na classe pai.

```
<?php

trait T
{
    public static $counter = 1;
}

class A
{
    use T;

    public static function incrementCounter()
    {
        static::$counter++;
    }
}

class B extends A
{
    use T;
}

A::incrementCounter();

echo A::$counter, "\n";
echo B::$counter, "\n";

?>
```

Saída do exemplo acima no PHP 8.3:

```
2
1
```

### Propriedades

Traits podem também definir propriedades.

**Exemplo #12 Definindo Propriedades**

```
<?php

trait PropertiesTrait
{
    public $x = 1;
}

class PropertiesExample
{
    use PropertiesTrait;
}

$example = new PropertiesExample();
$example->x;

?>
```

Se uma Trait define uma propriedade, uma classe não pode definir uma propriedade com
o mesmo nome a menos que seja compatível (mesma visibilidade, tipo,
modificador de somente-leitura e valor inicial), caso contrário um erro fatal é emitido.

**Exemplo #13 Resolução de Conflito**

```
<?php
trait PropertiesTrait {
    public $same = true;
    public $different1 = false;
    public bool $different2;
    public bool $different3;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = true;
    public $different1 = true; // Fatal error
    public string $different2; // Fatal error
    readonly protected bool $different3; // Fatal error
}
?>
```

### Constantes

Traits podem, a partir do PHP 8.2.0, também definir constantes.

**Exemplo #14 Definindo Constantes**

```
<?php
trait ConstantsTrait {
    public const FLAG_MUTABLE = 1;
    final public const FLAG_IMMUTABLE = 5;
}

class ConstantsExample {
    use ConstantsTrait;
}

$example = new ConstantsExample;
echo $example::FLAG_MUTABLE;
?>
```

O exemplo acima produzirá:

```
1
```

Se uma Trait define uma constante, uma classe não pode definir uma constante com
o mesmo nome a não ser que seja compatível (mesma visibilidade, valor inicial, e
finalidade), caso contrário um erro fatal é emitido.

**Exemplo #15 Resolução de Conflito**

```
<?php
trait ConstantsTrait {
    public const FLAG_MUTABLE = 1;
    final public const FLAG_IMMUTABLE = 5;
}

class ConstantsExample {
    use ConstantsTrait;
    public const FLAG_IMMUTABLE = 5; // Fatal error
}
?>
```

### Métodos finais

A partir do PHP 8.3.0, o modificador [final](language.oop5.final.md)
pode ser aplicado, com o uso do operador `as`,
a métodos importados de traits. Isto pode ser usado para evitar que classes filhas
substituam o método. Entretanto, a classe que usa o trait ainda poderá
substituir o método.

**Exemplo #16 Definindo um método originário de um trait como `final`**

```
<?php

trait ConstantsTrait
{
    public function method()
    {
        echo 'Olá';
    }
}

class FinalExampleA
{
    use CommonTrait {
        CommonTrait::method as final; // O 'final' evita que classes filhas substituam o método
    }
}

class FinalExampleB extends FinalExampleA
{
     public function method() {}
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Fatal error: Cannot override final method FinalExampleA::method() in ...
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
