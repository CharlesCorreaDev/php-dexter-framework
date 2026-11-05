# Chamáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.callable.php

---

## Chamáveis

Um chamável é uma referência a uma função ou a um método que é passada
a outra função como um argumento.
Chamáveis são representados com a declaração de tipo [callable](language.types.callable.md).

```
<?php
function foo(callable $callback) {
    $callback();
}
?>
```

Algumas funções aceitam funções como um parâmetro, por exemplo,
[array\_map()](function.array-map.md), [usort()](function.usort.md) ou
[preg\_replace\_callback()](function.preg-replace-callback.md).

### Criação de chamáveis

Um objeto chamável é um tipo que representa algo que pode ser invocado.
Os objetos invocáveis ​​podem ser passados ​​como argumentos para funções ou métodos que
esperam um parâmetro de função de retorno (callback) ou podem ser invocados diretamente.
O tipo [callable](language.types.callable.md) não pode ser usado como uma declaração de tipo para propriedades de classe.
Em vez disso, use uma declaração de tipo [Closure](class.closure.md).

Chamáveis podem ser criados de diferentes formas:

- Objeto [Closure](class.closure.md)
- [string](language.types.string.md) contendo o nome de uma função ou método
- [array](language.types.array.md) contendo um nome de classe ou um [object](language.types.object.md)
  no índice 0 e o nome do método no índice 1
- [object](language.types.object.md) implementando a método mágico
  [\_\_invoke()](language.oop5.magic.md#object.invoke)

Um objeto [Closure](class.closure.md) pode ser criado usando-se
a sintaxe de [função anônima](functions.anonymous.md),
de [função seta](functions.arrow.md),
de [chamável de primeira
classe](functions.first_class_callable_syntax.md), ou com o médoto [Closure::fromCallable()](closure.fromcallable.md).

> **Nota**:
>
> A [sintaxe de chamável de
> primeira classe](functions.first_class_callable_syntax.md) está disponível somente a partir do PHP 8.1.0.

**Exemplo #1
Exemplo de função de retorno usando [Closure](class.closure.md)**

```
<?php
// Usando a sintaxe de função anônima
$double1 = function ($a) {
    return $a * 2;
};

// Usando a sintaxe de chamável de primeira classe
function double_function($a) {
    return $a * 2;
}
$double2 = double_function(...);

// Usando a sintaxe de função seta
$double3 = fn($a) => $a * 2;

// Usando Closure::fromCallable
$double4 = Closure::fromCallable('double_function');

// Usando o closure como uma função de retorno aqui para
// duplicar o tamanho de cada elemento no intervalo
$new_numbers = array_map($double1, range(1, 5));
print implode(' ', $new_numbers) . PHP_EOL;

$new_numbers = array_map($double2, range(1, 5));
print implode(' ', $new_numbers) . PHP_EOL;

$new_numbers = array_map($double3, range(1, 5));
print implode(' ', $new_numbers) . PHP_EOL;

$new_numbers = array_map($double4, range(1, 5));
print implode(' ', $new_numbers);

?>
```

Saída do exemplo acima no PHP 8.1:

```
2 4 6 8 10
2 4 6 8 10
2 4 6 8 10
2 4 6 8 10
```

Um chamável também pode ser uma string contendo o nome de uma função ou
de um método estático.
Qualquer função interna ou definida pelo usuário pode ser utilizada, com exceção dos construtores de linguagem
como: [array()](function.array.md), [echo](function.echo.md),
[empty()](function.empty.md), [eval()](function.eval.md),
[isset()](function.isset.md),
[list()](function.list.md), [print](function.print.md) ou
[unset()](function.unset.md).

Métodos estáticos também podem ser passados sem a instância de um
[object](language.types.object.md) dessa classe criando um array com
o nome da classe no índice 0 e o nome do método no índice 1 ou usando
a sintaxe especial com operador de resolução de escopo
`::` como em `'ClassName::methodName'`.

Um método de um [object](language.types.object.md) instanciado pode ser um chamável
quando fornecido como um array com o [object](language.types.object.md) no índice 0 e o
nome do método no índice 1.

A principal diferença entre um objeto [Closure](class.closure.md) e o
tipo [callable](language.types.callable.md) é que um objeto [Closure](class.closure.md) é
independente de escopo e sempre pode ser invocado, enquanto um tipo 'callable' pode ser
dependente de escopo e pode não ser invocado diretamente.
[Closure](class.closure.md) é a maneira preferida de criar objetos chamáveis.

> **Nota**:
>
> Embora os objetos [Closure](class.closure.md) estejam vinculados ao escopo
> onde são criados, os objetos chamáveis ​​que referenciam métodos de classe como strings
> ou arrays são resolvidos no escopo onde são chamados.
> Para criar um objeto chamável a partir de um método privado ou protegido, que pode então ser
> invocado de fora do escopo da classe, use
> [Closure::fromCallable()](closure.fromcallable.md) ou a
> [sintaxe de chamável de primeira
> classe](functions.first_class_callable_syntax.md).

O PHP permite a criação de chamáveis que podem ser usados como argumento de função de retorno
mas não podem ser chamadas diretamente.
Essas são funções dependentes do contexto que fazem referência a um método de classe na
hierarquia de herança de uma classe, por exemplo:
`'parent::method'` ou `["static", "method"]`.

> **Nota**:
>
> A partir do PHP 8.2.0, chamáveis dependentes de contexto
> foram descontinuados. Remova a dependência de contexto substituindo
> `'parent::method'` por
> `parent::class . '::method'` ou use a
> [sintaxe de chamável
> de primeira classe](functions.first_class_callable_syntax.md).

**Exemplo #2
Invocando vários tipos de chamáveis com [call\_user\_func()](function.call-user-func.md)**

```
<?php

// Exemplo de função de retorno
function minha_funcao_retorno() {
    echo 'olá mundo!', PHP_EOL;
}

// Exemplo de método de retorno
class MinhaClasse {
    static function meuMetodoRetorno() {
        echo 'Olá Mundo!', PHP_EOL;
    }
}

// Tipo 1: Função de Retorno Simples
call_user_func('minha_funcao_retorno');

// Tipo 2: Chamada a métodos estáticos
call_user_func(['MinhaClasse', 'meuMetodoRetorno']);

// Tipo 3: Chamada a métodos de objetos
$obj = new MinhaClasse();
call_user_func([$obj, 'meuMetodoRetorno']);

// Tipo 4: Chamada a métodos estáticos
call_user_func('MinhaClasse::meuMetodoRetorno');

// Tipo 5: Chamada a métodos estáticos usando a palavra-chave ::class
call_user_func([MyClass::class, 'myCallbackMethod']);

// Type 6: Relative static class method call
class A {
    public static function quem() {
        echo "A\n", PHP_EOL;
    }
}

class B extends A {
    public static function quem() {
        echo "B\n", PHP_EOL;
    }
}

call_user_func(['B', 'parent::quem']); // descontinuado a partir do PHP 8.2.0

// Type 7: Objetos que implementam __invoke podem ser utilizados como chamáveis
class C {
    public function __invoke($nome) {
        echo 'Olá ', $nome;
    }
}

$c = new C();
call_user_func($c, 'PHP!');
?>
```

O exemplo acima produzirá:

```
olá mundo!
Olá Mundo!
Olá Mundo!
Olá Mundo!
Olá Mundo!

Deprecated: Callables of the form ["B", "parent::who"] are deprecated in script on line 44
A
Olá, PHP!
```

> **Nota**:
>
> Callbacks registrados
> com funções como [call\_user\_func()](function.call-user-func.md) e [call\_user\_func\_array()](function.call-user-func-array.md) não serão
> chamados se houver uma exceção não capturada que foi lançada em um callback anterior.

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
