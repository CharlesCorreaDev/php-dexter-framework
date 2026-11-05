# Vinculações Estáticas Tardias

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.late-static-bindings.php

---

## Vinculações Estáticas Tardias

O PHP implementa um recurso chamado Vinculações Estáticas Tardias que
pode ser usado para referenciar a classe chamada no contexto de herança estática.

Mais precisamente, as Vinculações Estáticas Tardias funcionam através do armazenamento do nome da classe na
última "chamada não encaminhada". No caso de chamadas a métodos estáticos, é a
classe explicitamente chamada (normalmente o nome à esquerda do operador
[`::`](language.oop5.paamayim-nekudotayim.md));
no caso de chamadas a métodos não estáticos, é o nome da classe do objeto. Uma
"chamada encaminhada" é àquela estática, realizada pelos prefixos `self::`,
`parent::`, `static::`, ou, se subindo
na hierarquia de classes, [forward\_static\_call()](function.forward-static-call.md).
A função [get\_called\_class()](function.get-called-class.md) pode ser utilizada para recuperar
uma string com o nome da classe chamada e `static::`
introduz seu escopo.

Esse recurso foi chamado de "Vinculações Estáticas Tardias" de uma perspectiva interna em
mente. "Vinculação tardia" vem do fato que `static::`
não será resolvido usando a classe onde o método foi definido, mas
computada utilizando informações em tempo de execução.
É também chamado "vinculação estática" pois pode ser utilizado em (mas não
limitado a) chamadas de métodos estáticos.

### Limitações do `self::`

Referências estáticas para a atual classe como `self::` ou
`__CLASS__` são resolvidas usando a classe na qual
a função pertence, como onde ele foi definido:

**Exemplo #1 Uso do `self::`**

```
<?php

class A
{
    public static function who()
    {
        echo __CLASS__;
    }

    public static function test()
    {
        self::who();
    }
}

class B extends A
{
    public static function who()
    {
        echo __CLASS__;
    }
}

B::test();

?>
```

O exemplo acima produzirá:

```
A
```

### Uso de Vinculações Estáticas Tardias

Vinculações Estáticas Tardias tentam resolver a limitação introduzindo uma
palavra-chave que referencia a classe que foi inicialmente chamada em tempo de execução.
Basicamente, é uma palavra-chave que permite referenciar
`B` em `test()`, no exemplo
anterior. Foi decidido não introduzir uma nova palavra-chave, mas usar
`static`, já reservada.

**Exemplo #2 Uso simples de `static::`**

```
<?php

class A
{
    public static function who()
    {
        echo __CLASS__;
    }

    public static function test()
    {
        static::who(); // Aqui acontecem as Vinculações Estáticas Tardias
    }
}

class B extends A
{
    public static function who()
    {
        echo __CLASS__;
    }
}

B::test();

?>
```

O exemplo acima produzirá:

```
B
```

> **Nota**:
>
> Em contextos não estáticos, a classe chamada será a classe da instância
> do objeto. Assim como `$this->` chamará métodos privados
> do mesmo escopo, utilizar `static::` pode ter
> resultados diferentes. Outra diferença é que `static::`
> só pode referenciar propriedades estáticas.

**Exemplo #3 Uso de `static::` em um contexto não-estático**

```
<?php

class A
{
    private function foo()
    {
        echo "successo!\n";
    }

    public function test()
    {
        $this->foo();
        static::foo();
    }
}

class B extends A
{
   /* foo() será copiado para B, assim seu escopo ainda será A e
    * e a chamada funcionará */
}

class C extends A
{
    private function foo()
    {
        /* método original foi substituído, escopo agora é C */
    }
}

$b = new B();
$b->test();

$c = new C();
try {
    $c->test();
} catch (Error $e) {
    echo $e->getMessage();
}

?>
```

O exemplo acima produzirá:

```
successo!
successo!
successo!
Call to private method C::foo() from scope A
```

> **Nota**:
>
> As resoluções de Vinculações Estáticas Tardias terminarão quando a chamada for realizada
> sem retorno. Por outro lado, chamadas estáticas utilizando instruções como
> `parent::` ou `self::` irão repassar a informação
> do chamador.
>
> **Exemplo #4 Chamadas repassadas e não repassadas**
>
> ```
> <?php
>
> class A
> {
>     public static function foo()
>     {
>         static::who();
>     }
>
>     public static function who()
>     {
>         echo __CLASS__."\n";
>     }
> }
>
> class B extends A
> {
>     public static function test()
>     {
>         A::foo();
>         parent::foo();
>         self::foo();
>     }
>
>     public static function who()
>     {
>         echo __CLASS__."\n";
>     }
> }
>
> class C extends B
> {
>     public static function who()
>     {
>         echo __CLASS__."\n";
>     }
> }
>
> C::test();
>
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> A
> C
> C
> ```

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
