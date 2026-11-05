# Verifica se um valor pode ser chamado como uma função a partir do escopo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-callable.php

---

# is\_callable

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

is\_callable — 
Verifica se um valor pode ser chamado como uma função a partir do escopo atual

### Descrição

function **is\_callable**([mixed](language.types.mixed.md) `$value`, [bool](language.types.boolean.md) `$syntax_only` = **`false`**, [string](language.types.string.md) `&$callable_name` = **`null`**): [bool](language.types.boolean.md)

Verifica se o valor informado em `value` é do tipo [callable](language.types.callable.md),
ou se pode ser chamado usando a função
[call\_user\_func()](function.call-user-func.md).

### Parâmetros

`value`
:   O valor a ser verificado.

`syntax_only`
:   Se definido para **`true`** a função apenas verifica se
    `value` pode ser uma função ou método. Ela irá
    rejeitar quaisquer valores que não sejam objetos [chamáveis](language.oop5.magic.md#object.invoke),
    [Closure](class.closure.md), [string](language.types.string.md)s ou [array](language.types.array.md)s que não tenham
    uma estrutura válida para ser usado como uma função de retorno. Um array chamável válido
    tem 2 entradas, a primeira delas é um objeto
    ou uma string, e a segunda uma string.

`callable_name`
:   Recebe o "nome da função chamável", por exemplo,
    `"AlgumaClasse::algumMétodo"`. Observe, entretanto, que embora
    a implicação de que `AlgumaClasse::algumMétodo()` seja um
    método estático chamável, este não é o caso.

### Valor Retornado

Retorna **`true`** se `value` puder ser chamado como função, **`false`**
caso contrário.

### Examples

**Exemplo #1 Verificando se uma string pode ser chamada como uma função**

```
<?php

function someFunction() {}

$functionVariable = 'someFunction';

var_dump(is_callable($functionVariable, false, $callable_name));

var_dump($callable_name);

?>
```

O exemplo acima produzirá:

```
bool(true)
string(12) "someFunction"
```

**Exemplo #2 Verificando se um array pode ser chamado como uma função**

```
<?php

class SomeClass
{
    function someMethod() {}
}

$anObject = new SomeClass();

$methodVariable = [$anObject, 'someMethod'];

var_dump(is_callable($methodVariable, true, $callable_name));

var_dump($callable_name);

?>
```

O exemplo acima produzirá:

```
bool(true)
string(21) "SomeClass::someMethod"
```

**Exemplo #3 Exemplo de **is\_callable()** e construtores**

Apesar do fato que construtores são métodos que são chamados quando
um objeto é criado, eles não são métodos estáticos e
**is\_callable()** retornará **`false`** para eles. Não é
possível usar **is\_callable()** para verificar se uma classe pode
ser instanciada a partir do escopo atual.

```
<?php

class Foo
{
    public function __construct() {}

    public function foo() {}
}

var_dump(
    is_callable(['Foo', '__construct']),
    is_callable(['Foo', 'foo'])
);

$foo = new Foo();
var_dump(is_callable([$foo, '__construct']));

?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(true)
```

### Notas

- Um objeto é sempre chamável se ele implementar o método [\_\_invoke()](language.oop5.magic.md#object.invoke),
  e este método estiver visível no escopo atual.
- Um nome de classe é chamável se ela implementa o método [\_\_callStatic()](language.oop5.overloading.md#object.callstatic).
- Se um objeto implementa o método [\_\_call()](language.oop5.overloading.md#object.call), então esta função
  retornará **`true`** para qualquer método neste objeto, mesmo se o método não estiver definido.
- Esta função pode disparar o auto-carregamento se chamada com o nome de uma classe.

### Veja também

- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro
- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [method\_exists()](function.method-exists.md) - Verifica se o método da classe existe

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
