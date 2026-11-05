# Interfaces de Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.interfaces.php

---

## Interfaces de Objetos

Interfaces de objetos permitem a criação de códigos que especificam quais métodos e propriedades
uma classe deve implementar, sem definir como esses métodos ou propriedades serão
implementados. Interfaces compartilham um namespace com classes, traits e enumerações, por isso eles
não podem usar os mesmos nomes.

Interfaces são definidas da mesma forma que classes, mas com a palavra-chave `interface`
substituindo `class` e com nenhum dos métodos tendo
seu conteúdo definido.

Todos os métodos declarados em uma interface devem ser públicos, essa é a natureza
de uma interface.

Na prática, interfaces servem a dois propósitos distintos:

- Elas permitem os desenvolvedores de criar objetos de classes diferentes que podem ser substituídos
  dado que eles implementam a mesma ou as mesmas interfaces. Um exemplo seriam os serviços variados de acesso a banco de dados,
  vários sistemas de pagamentos, ou estratégias de cache. Implementações diferentes podem
  ser substituídas sem requerer modificações nos códigos que as usam.
- Para permitir que uma função ou método aceite e opere em um parâmetro que se molda a uma
  interface, ao mesmo tempo que não se importa como a funcionalidade é implementada. Estas interfaces
  são conhecidas como `Iterable`, `Cacheable`, `Renderable`,
  e assim por diante, e descrevem o comportamento significativo.

Interfaces podem definir
[métodos mágicos](language.oop5.magic.md) para exigir que as classes
implementantes também implementem esses métodos.

> **Nota**:
>
> Apesar de possível, incluir [construtores](language.oop5.decon.md#language.oop5.decon.constructor)
> em interfaces é altamente desencorajado. Fazer isso reduz significativamente a flexibilidade do objeto implementante
> da interface. Além disso, construtores não são verificados pelas regras de herança, o que pode causar comportamentos
> inconsistentes ou inesperados.

### `implements`

Para implementar uma interface, o operador `implements` é utilizado.
Todos os métodos na interface devem ser implementados na classe; não fazê-lo
resultará em um erro fatal. Classes podem implementar mais de uma interface se
assim for desejado, separando cada interface com uma vírgula.

**Aviso**

Uma classe que implemente uma interface pode utilizar um nome diferente para seus parâmetros,
em relação à interface. Entretanto, o PHP 8.0 suporta [argumentos nomeados](functions.arguments.md#functions.named-arguments), ou seja,
chamadores podem usar os nomes de parâmetros conforme definidos na interface implementada. Por essa razão, é altamente
recomendado que desenvolvedores utilizem os mesmos nomes de parâmetros que da interface implementada.

> **Nota**:
>
> Interfaces podem ser estendidas como as classes, usando o operador
> [extends](language.oop5.inheritance.md).

> **Nota**:
>
> A classe que implementa a interface precisa declarar todos os métodos da interface
> com uma [assinatura compatível](language.oop5.basic.md#language.oop.lsp). Uma classe pode implementar várias interfaces
> que declarem um método com o mesmo nome. Neste caso, a implementação precisa seguir as
> [regras de compatibilidade de assinaturas](language.oop5.basic.md#language.oop.lsp) de todas as interfaces. É possível
> assim aplicar [covariância e contravariância](language.oop5.variance.md).

### Constantes

É possível ter constantes em interfaces. Constantes de interfaces funcionam exatamente
como [constantes de classes](language.oop5.constants.md), com exceção de
não podem ser sobrescritas por uma classe/interface herdeira.

### Propriedades

A partir do PHP 8.4.0, as interfaces também podem declarar propriedades.
Se o fizerem, a declaração deverá especificar se a propriedade deve ser legível,
gravável ou ambas.
A declaração da interface se aplica apenas ao acesso público de leitura e gravação.

Uma classe pode satisfazer uma propriedade de interface de diversas maneiras.
Pode definir uma propriedade pública.
Pode definir uma
[propriedade virtual](language.oop5.property-hooks.md#language.oop5.property-hooks.virtual) pública
que implementa apenas o gancho correspondente.
Ou uma propriedade de leitura pode ser satisfeita por uma propriedade `somente leitura`.
Entretanto, uma propriedade de interface configurável não pode ser `somente leitura`.

**Exemplo #1 Exemplo de propriedades de interface**

```
<?php
interface I
{
    // Uma classe de implementação DEVE ter uma propriedade legível publicamente,
    // mas ser ou não configurável publicamente é irrestrito.
    public string $readable { get; }

    // Uma classe de implementação DEVE ter uma propriedade gravável publicamente,
    // mas ser ou não legível publicamente é irrestrito.
    public string $writeable { set; }

    // Uma classe de implementação DEVE ter uma propriedade que seja
    // tanto legível quanto gravável publicamente.
    public string $both { get; set; }
}

    // Esta classe implementa todas as três propriedades como propriedades tradicionais
    // e sem ganchos; Isso é totalmente válido.
class C1 implements I
{
    public string $readable;

    public string $writeable;

    public string $both;
}

// Esta classe implementa todas as três propriedades usando apenas os
// ganchos solicitados. Isto também é inteiramente válido.
class C2 implements I
{
    private string $written = '';
    private string $all = '';

    // Usa apenas um gancho get para criar uma propriedade virtual.
    // Isso satisfaz o requisito "public get".
    // Não é gravável, mas não é exigido pela interface.
    public string $readable { get => strtoupper($this->writeable); }

    // A interface requer apenas que a propriedade seja configurável,
    // mas incluir operações get também é totalmente válido.
    // Este exemplo cria uma propriedade virtual, o que é aceitável.
    public string $writeable {
        get => $this->written;
        set {
            $this->written = $value;
        }
    }

    // Esta propriedade exige que tanto a leitura quanto a gravação
    // sejam possíveis, portanto, precisamos implementar ambas ou
    // permitir que ela tenha o comportamento padrão.
    public string $both {
        get => $this->all;
        set {
            $this->all = strtoupper($value);
        }
    }
}
?>
```

### Examples

**Exemplo #2 Exemplo de Interface**

```
<?php

// Declara a interface 'Template'
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Implementa a interface
// Exemplo correto
class WorkingTemplate implements Template
{
    private $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// Exemplo incorreto
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (Template::getHtml)
class BadTemplate implements Template
{
    private $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
}
?>
```

**Exemplo #3 Interfaces extensíveis**

```
<?php
interface A
{
    public function foo();
}

interface B extends A
{
    public function baz(Baz $baz);
}

// Isto funciona
class C implements B
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// Isso não funcionará, e gerará um erro fatal
class D implements B
{
    public function foo()
    {
    }

    public function baz(Foo $foo)
    {
    }
}
?>
```

**Exemplo #4 Compatibilidade de variância com interfaces múltiplas**

```
<?php
class Foo {}
class Bar extends Foo {}

interface A {
    public function myfunc(Foo $arg): Foo;
}

interface B {
    public function myfunc(Bar $arg): Bar;
}

class MyClass implements A, B
{
    public function myfunc(Foo $arg): Bar
    {
        return new Bar();
    }
}
?>
```

**Exemplo #5 Herança de várias interfaces**

```
<?php
interface A
{
    public function foo();
}

interface B
{
    public function bar();
}

interface C extends A, B
{
    public function baz();
}

class D implements C
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}
?>
```

**Exemplo #6 Interfaces com constantes**

```
<?php
interface A
{
    const B = 'Constante de interface';
}

// Imprime: Constante de interface
echo A::B;

class B implements A
{
    const B = 'Constante de classe';
}

// Imprime: Constante de classe
// Anteriormente ao PHP 8.1.0 isto não funcionaria porque não era possível
// sobrescrever constantes.
echo B::B;
?>
```

**Exemplo #7 Interfaces com classes abstratas**

```
<?php
interface A
{
    public function foo(string $s): string;

    public function bar(int $i): int;
}

// Uma classe abstrata pode implementar apenas uma parte da interface.
// Classes que estendem a classe abstrata precisam implementar o resto.
abstract class B implements A
{
    public function foo(string $s): string
    {
        return $s . PHP_EOL;
    }
}

class C extends B
{
    public function bar(int $i): int
    {
        return $i * 2;
    }
}
?>
```

**Exemplo #8 Estendendo e implementando ao mesmo tempo**

```
<?php

class One
{
    /* ... */
}

interface Usable
{
    /* ... */
}

interface Updatable
{
    /* ... */
}

// A ordem de palavras chave aqui é importante. 'extends' precisa aparecer primeiro.
class Two extends One implements Usable, Updatable
{
    /* ... */
}
?>
```

Uma interface, juntamente com a declaração de tipo, fornecem uma boa maneira de garantir
que um objeto em particular possua determinados métodos. Veja o operador
[instanceof](language.operators.type.md) e
[declaração de tipo](language.types.declarations.md).

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
