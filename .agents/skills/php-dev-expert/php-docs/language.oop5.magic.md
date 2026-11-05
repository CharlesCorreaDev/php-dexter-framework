# Métodos Mágicos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.magic.php

---

## Métodos Mágicos

Métodos mágicos são métodos especiais que sobrescrevem o comportamento padrão do PHP
quando certas operações são realizadas em um objeto.

**Cuidado**

Todos os nomes de métodos prefixados com `__` são reservados pelo PHP.
Portanto, não é recomendado utilizar nomes de métodos com esse prefixo a não ser para
sobrescrever o comportamento do PHP.

Os seguintes nomes de métodos são considerados mágicos:
[\_\_construct()](language.oop5.decon.md#object.construct),
[\_\_destruct()](language.oop5.decon.md#object.destruct),
[\_\_call()](language.oop5.overloading.md#object.call),
[\_\_callStatic()](language.oop5.overloading.md#object.callstatic),
[\_\_get()](language.oop5.overloading.md#object.get),
[\_\_set()](language.oop5.overloading.md#object.set),
[\_\_isset()](language.oop5.overloading.md#object.isset),
[\_\_unset()](language.oop5.overloading.md#object.unset),
[\_\_serialize()](language.oop5.magic.md#object.serialize),
[\_\_unserialize()](language.oop5.magic.md#object.unserialize),
[\_\_sleep()](language.oop5.magic.md#object.sleep),
[\_\_wakeup()](language.oop5.magic.md#object.wakeup),
[\_\_toString()](language.oop5.magic.md#object.tostring),
[\_\_invoke()](language.oop5.magic.md#object.invoke),
[\_\_set\_state()](language.oop5.magic.md#object.set-state),
[\_\_clone()](language.oop5.cloning.md#object.clone) e
[\_\_debugInfo()](language.oop5.magic.md#object.debuginfo)

**Aviso**

Os métodos acima, com exceção de
[\_\_construct()](language.oop5.decon.md#object.construct),
[\_\_destruct()](language.oop5.decon.md#object.destruct) e
[\_\_clone()](language.oop5.cloning.md#object.clone),
*precisam* ser declarados como `public`,
de outra forma um **`E_WARNING`** é emitido.
Anteriormente ao PHP 8.0.0, nenhum diagnóstico era emitido para os métodos mágicos
[\_\_sleep()](language.oop5.magic.md#object.sleep),
[\_\_wakeup()](language.oop5.magic.md#object.wakeup),
[\_\_serialize()](language.oop5.magic.md#object.serialize),
[\_\_unserialize()](language.oop5.magic.md#object.unserialize) e
[\_\_set\_state()](language.oop5.magic.md#object.set-state).

**Aviso**

Se tipos forem utilizados na declaração de métodos mágicos, eles
precisam ser idênticos às assinaturas previstas aqui.
Senão, um erro fatal é lançado.
Anteriormente ao PHP 8.0.0, nenhum diagnóstico era emitido.
Entretanto, [\_\_construct()](language.oop5.decon.md#object.construct) e
[\_\_destruct()](language.oop5.decon.md#object.destruct) não devem declarar um tipo de retorno,
senão um erro fatal é lançado.

### [\_\_serialize()](language.oop5.magic.md#object.serialize) e [\_\_unserialize()](language.oop5.magic.md#object.unserialize)

public function **\_\_serialize**(): [array](language.types.array.md)

public function **\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

[serialize()](function.serialize.md) verifica se a classe contém uma função
com o nome mágico [\_\_serialize()](language.oop5.magic.md#object.serialize). Se sim, essa função é
executada antes de qualquer serialização. Ela precisa construir e retornar um array associativo de chaves-valores
que representam a forma serializada do objeto. Se o array não for retornado então um erro [TypeError](class.typeerror.md)
será lançado.

> **Nota**:
>
> Se ambos [\_\_serialize()](language.oop5.magic.md#object.serialize) e [\_\_sleep()](language.oop5.magic.md#object.sleep)
> estiverem definidos no mesmo objeto, somente [\_\_serialize()](language.oop5.magic.md#object.serialize) será chamado.
> [\_\_sleep()](language.oop5.magic.md#object.sleep) será ignorado. Se o objeto implementa a interface [Serializable](class.serializable.md),
> o método `serialize()` da interface será ignorado e o método mágico [\_\_serialize()](language.oop5.magic.md#object.serialize)
> será utilizado.

O uso pretendido de [\_\_serialize()](language.oop5.magic.md#object.serialize) é definir uma representação arbitrária,
amigável, da representação do objeto. Elementos do array podem corresponder a propriedades do objeto diretamente, mas
isso não é obrigatório.

Inversamente, [unserialize()](function.unserialize.md) verifica a
presença da função mágica
[\_\_unserialize()](language.oop5.magic.md#object.unserialize). Se presente, essa função será chamada
com o array retornado de [\_\_serialize()](language.oop5.magic.md#object.serialize). Ela poderá,
então, restaurar as propriedades do objeto a partir do array.

> **Nota**:
>
> Se ambos [\_\_unserialize()](language.oop5.magic.md#object.unserialize) e [\_\_wakeup()](language.oop5.magic.md#object.wakeup)
> estiverem definidos, somente [\_\_unserialize()](language.oop5.magic.md#object.unserialize) será chamado, e
> [\_\_wakeup()](language.oop5.magic.md#object.wakeup) será ignorado.

> **Nota**:
>
> Esse recurso está disponível desde o PHP 7.4.0.

**Exemplo #1 Serialize e unserialize**

```
<?php
class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __serialize(): array
    {
        return [
          'dsn' => $this->dsn,
          'user' => $this->username,
          'pass' => $this->password,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }
}?>
```

### [\_\_sleep()](language.oop5.magic.md#object.sleep) e [\_\_wakeup()](language.oop5.magic.md#object.wakeup)

**Aviso**

Este mecanismo de serialização está praticamente descontinuado a partir do PHP 8.5.0.
Foi mantido para compatibilidade com versões anteriores.
Entretanto, código novo ou existente deve ser atualizado para uso dos métodos mágicos
[\_\_serialize()](language.oop5.magic.md#object.serialize) e
[\_\_unserialize()](language.oop5.magic.md#object.unserialize)
em seu lugar.

public function **\_\_sleep**(): [array](language.types.array.md)

public function **\_\_wakeup**(): [void](language.types.void.md)

[serialize()](function.serialize.md) verifica se a classe tem uma função com
o nome mágico [\_\_sleep()](language.oop5.magic.md#object.sleep). Se tiver, a função é
executada antes de qualquer serialização. Ela pode limpar o objeto
e deve retornar um array com os nomes de todas as variáveis
do objeto que devem ser serializadas.
Se o método não retornar nada, então **`null`** é serializado e um
**`E_NOTICE`** é emitido.

> **Nota**:
>
> Não é possível que [\_\_sleep()](language.oop5.magic.md#object.sleep) retorne nomes de
> propriedades privadas da classe superior. Fazer isso causará um erro de nível
> **`E_NOTICE`**.
> Como alternativa, utilize [\_\_serialize()](language.oop5.magic.md#object.serialize).

> **Nota**:
>
> A partir do PHP 8.0.0, retornar um valor que não seja um array originado de [\_\_sleep()](language.oop5.magic.md#object.sleep) gera um alerta. Anteriormente gerava um aviso.

O intuito do método [\_\_sleep()](language.oop5.magic.md#object.sleep) é enviar dados
pendentes ou realizar tarefas de limpeza similares. Além disso, a função é
útil se um objeto muito grande não precisar ser completamente salvo.

Ao mesmo tempo, [unserialize()](function.unserialize.md) verifica a
presença da função com o nome mágico
[\_\_wakeup()](language.oop5.magic.md#object.wakeup). Se presente, essa função pode
reconstruir quaisquer recursos que o objeto possa ter.

O intuito do método [\_\_wakeup()](language.oop5.magic.md#object.wakeup) é
restabelecer quaisquer conexões com bancos de dados que possam ter sido perdidas
durante a serialização e realizar outras tarefas de
reinicialização.

**Exemplo #2 Sleep e wakeup**

```
<?php
class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }

    public function __wakeup()
    {
        $this->connect();
    }
}?>
```

### [\_\_toString()](language.oop5.magic.md#object.tostring)

public function **\_\_toString**(): [string](language.types.string.md)

O método [\_\_toString()](language.oop5.magic.md#object.tostring) permite que uma classe decida
como se comportar quando convertida para uma string. Por exemplo,
o que `echo $obj;` irá imprimir.

**Aviso**

A partir do PHP 8.0.0, o valor de retorno segue a mesma semântica de tipo do PHP,
significando que o valor será convertido para [string](language.types.string.md) se possível e se
[strict typing](language.types.declarations.md#language.types.declarations.strict)
estiver desligado.

Um objeto [Stringable](class.stringable.md)
*não* é aceito para uma declaração [string](language.types.string.md) se
[strict typing](language.types.declarations.md#language.types.declarations.strict)
estiver ativo. Caso esse comportamento seja desejado, a declaração precisa indicar
[Stringable](class.stringable.md) e [string](language.types.string.md) através de um tipo união.

A partir do PHP 8.0.0, quaisquer classe que contenha o método [\_\_toString()](language.oop5.magic.md#object.tostring)
também implementa implicitamente a interface [Stringable](class.stringable.md), e portanto passa
os testes para essa interface. Implementar explicitamente essa interface é o
recomendado.

No PHP 7.4, o valor retornado *precisa* ser uma
[string](language.types.string.md), senão um erro [Error](class.error.md) é lançado.

Anteriormente ao PHP 7.4.0, o valor retornado *precisa* ser uma
[string](language.types.string.md), senão um erro fatal **`E_RECOVERABLE_ERROR`**
é emitido.

**Aviso**

Não era possível lançar uma exception de dentro de um método
[\_\_toString()](language.oop5.magic.md#object.tostring)
antes do PHP 7.4.0. Isso gera um erro fatal.

**Exemplo #3 Exemplo Simples**

```
<?php
// Declara uma classe simples
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');
echo $class;
?>
```

O exemplo acima produzirá:

```
Hello
```

### [\_\_invoke()](language.oop5.magic.md#object.invoke)

function **\_\_invoke**( `...$values`): [mixed](language.types.mixed.md)

O método [\_\_invoke()](language.oop5.magic.md#object.invoke) é chamado quando um script tenta
chamar um objeto como uma função.

**Exemplo #4 Usando [\_\_invoke()](language.oop5.magic.md#object.invoke)**

```
<?php
class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));
?>
```

O exemplo acima produzirá:

```
int(5)
bool(true)
```

**Exemplo #5 Exemplo de [\_\_invoke()](language.oop5.magic.md#object.invoke)**

```
<?php
class Sort
{
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke(array $a, array $b): int
    {
        return $a[$this->key] <=> $b[$this->key];
    }
}

$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

// Ordena os clientes pelo primeiro nome
usort($customers, new Sort('first_name'));
print_r($customers);

// Ordena os clientes pelo último nome
usort($customers, new Sort('last_name'));
print_r($customers);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [id] => 3
            [first_name] => Alice
            [last_name] => Gustav
        )

    [1] => Array
        (
            [id] => 2
            [first_name] => Bob
            [last_name] => Filipe
        )

    [2] => Array
        (
            [id] => 1
            [first_name] => John
            [last_name] => Do
        )

)
Array
(
    [0] => Array
        (
            [id] => 1
            [first_name] => John
            [last_name] => Do
        )

    [1] => Array
        (
            [id] => 2
            [first_name] => Bob
            [last_name] => Filipe
        )

    [2] => Array
        (
            [id] => 3
            [first_name] => Alice
            [last_name] => Gustav
        )

)
```

### [\_\_set\_state()](language.oop5.magic.md#object.set-state)

static function **\_\_set\_state**([array](language.types.array.md) `$properties`): [object](language.types.object.md)

Esse método [estático](language.oop5.static.md) é chamado
em classes exportadas por [var\_export()](function.var-export.md).

O único parâmetro deste método é um array contendo propriedades
exportadas no formato `['propriedade' => valor, ...]`.

**Exemplo #6 Usando [\_\_set\_state()](language.oop5.magic.md#object.set-state)**

```
<?php

class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';

$b = var_export($a, true);
var_dump($b);
eval('$c = ' . $b . ';');
var_dump($c);
?>
```

O exemplo acima produzirá:

```
string(60) "A::__set_state(array(
   'var1' => 5,
   'var2' => 'foo',
))"
object(A)#2 (2) {
  ["var1"]=>
  int(5)
  ["var2"]=>
  string(3) "foo"
}
```

> **Nota**:
>
> Quando exportando um objeto, [var\_export()](function.var-export.md) não verifica
> se [\_\_set\_state()](language.oop5.magic.md#object.set-state) está
> implementado na classe do objeto, de forma que re-importar esses objetos falham com um erro [Error](class.error.md)
> na ausência de \_\_set\_state(). Isto afeta particularmente algumas
> classes internas.
>
> É responsabilidade do programador verificar que somente os objetos
> cuja classe implementa **\_\_set\_state()** serão
> re-importados.

### [\_\_debugInfo()](language.oop5.magic.md#object.debuginfo)

function **\_\_debugInfo**(): [array](language.types.array.md)

Este método é chamado pela função [var\_dump()](function.var-dump.md) ao despejar um
objeto para obter as propriedades que devem ser exibidas. Se este método não for
definido em um objeto, todas as propriedades públicas, protegidas e privadas
serão exibidas.

**Exemplo #7 Utilizando o [\_\_debugInfo()](language.oop5.magic.md#object.debuginfo)**

```
<?php
class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));
?>
```

O exemplo acima produzirá:

```
object(C)#1 (1) {
  ["propSquared"]=>
  int(1764)
}
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
