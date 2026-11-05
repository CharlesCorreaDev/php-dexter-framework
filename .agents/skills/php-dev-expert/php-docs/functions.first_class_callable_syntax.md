# Sintaxe de Chamáveis de Primeira Classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.first_class_callable_syntax.php

---

## Sintaxe de Chamáveis de Primeira Classe

A sintaxe de chamáveis de primeira classe é introduzida a partir do PHP 8.1.0, como uma maneira de criar [funções anônimas](functions.anonymous.md) a partir de um [chamável](language.types.callable.md).
Ela substitui a sintaxe de chamáveis existente usando strings e arrays.
A vantagem dessa sintaxe é que ela é acessível à análise estática, e usa o escopo no ponto onde o chamável é adquirido.

A sintaxe `CallableExpr(...)` é usada para criar um objeto [Closure](class.closure.md) a partir de um chamável. `CallableExpr` aceita qualquer expressão que possa ser diretamente chamada na gramática do PHP:

**Exemplo #1 Sintaxe de chamável de primeira classe simples**

```
<?php
class Foo {
   public function metodo() {}
   public static function metodoestatico() {}
   public function __invoke() {}
}

$obj = new Foo();
$strClasse = 'Foo';
$strMetodo = 'metodo';
$strMetodoestatico = 'metodoestatico';

$f1 = strlen(...);
$f2 = $obj(...);  // objeto chamável
$f3 = $obj->metodo(...);
$f4 = $obj->$strMetodo(...);
$f5 = Foo::metodoestatico(...);
$f6 = $strClasse::$strMetodoestatico(...);

// Chamável tradicional usando string, array
$f7 = 'strlen'(...);
$f8 = [$obj, 'metodo'](...);
$f9 = [Foo::class, 'metodoestatico'](...);
```

> **Nota**:
>
> As reticências `...` são parte da sintaxe e não uma omissão.

`CallableExpr(...)` tem a mesma semântica que [Closure::fromCallable()](closure.fromcallable.md).
Isto é, ao contrário de um chamável usando string e array, `CallableExpr(...)` respeita o escopo no ponto onde ela é criada:

**Exemplo #2 Comparação de escopo de `CallableExpr(...)` e chamável tradicional**

```
<?php
class Foo {
    public function obterMetodoPrivado() {
        return [$this, 'metodoPrivado'];
    }

    private function metodoPrivado() {
        echo __METHOD__, "\n";
    }
}

$foo = new Foo;
$metodoPrivado = $foo->obterMetodoPrivado();
$metodoPrivado();
// Fatal error: Call to private method Foo::metodoPrivado() from global scope
// Isso acontece porque a chamada é realizada fora de Foo e a visibilidade será verificada a partir desse ponto.
```

```
<?php
class Foo1 {
    public function obterMetodoPrivado() {
        // Usa o escopo onde o chamável é adquirido.
        return $this->metodoPrivado(...); // Idêntico a Closure::fromCallable([$this, 'metodoPrivado']);
    }

    private function metodoPrivado() {
        echo __METHOD__, "\n";
    }
}

$foo1 = new Foo1;
$metodoPrivado = $foo1->obterMetodoPrivado();
$metodoPrivado();  // Foo1::metodoPrivado
```

> **Nota**:
>
> Criação de objetos por essa sintaxe (por exemplo `new Foo(...)`) não é suportada porque a sintaxe `new Foo()` não é considerada uma chamada.

> **Nota**:
>
> A sintaxe de chamável de primeira classe não pode ser combinada com o [operador nullsafe](language.oop5.basic.md#language.oop5.basic.nullsafe). Ambos os resultados a seguir resultam em um erro de tempo de compilação:
>
> ```
> <?php
> $obj?->metodo(...);
> $obj?->prop->metodo(...);
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
