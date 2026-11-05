# Sobrecarga

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.overloading.php

---

## Sobrecarga

Sobrecarga em PHP provê recursos para "criar"
dinamicamente propriedades e métodos.
Estas entidades dinâmicas são processadas por métodos mágicos fornecendo
a uma classe vários tipos de ações.

Os métodos de sobrecarga são invocados ao interagir com propriedades ou
métodos que não foram declarados ou não são
[visíveis](language.oop5.visibility.md) no
escopo corrente. O resto desta seção usará os termos
"propriedades inacessíveis" e "métodos inacessíveis"
para referir-se a esta combinação de declaração
e visibilidade.

Todos os métodos de sobrecarga devem ser definidos como `public`.

> **Nota**:
>
> Nenhum dos argumentos dos métodos mágicos podem ser
> [passados por
> referência](functions.arguments.md#functions.arguments.by-reference).

> **Nota**:
>
> A interpretação do PHP de "sobrecarga" é diferente da
> maioria das linguagens orientadas a objetos. Sobrecarga, tradicionalmente,
> provê a habilidade de ter múltiplos métodos com o mesmo nome, mas
> com quantidades e tipos de argumentos
> diferentes.

### Sobrecarga de propriedades

public function **\_\_set**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function **\_\_get**([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

public function **\_\_isset**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function **\_\_unset**([string](language.types.string.md) `$name`): [void](language.types.void.md)

[\_\_set()](language.oop5.overloading.md#object.set) é executado ao escrever dados em
propriedades inacessíveis (private ou protected) ou propriedades inexistentes.

[\_\_get()](language.oop5.overloading.md#object.get) é utilizado para ler dados de propriedades
inacessíveis (private ou protected) ou propriedades inexistentes.

[\_\_isset()](language.oop5.overloading.md#object.isset) é disparado ao chamar a função
[isset()](function.isset.md) ou [empty()](function.empty.md)
em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.

[\_\_unset()](language.oop5.overloading.md#object.unset) é invocado ao usar o construtor
[unset()](function.unset.md) em propriedades inacessíveis (private ou protected)
ou propriedades inexistentes.

O argumento $name é o nome da propriedade com o qual se está
interagindo. O argumento $value do método [\_\_set()](language.oop5.overloading.md#object.set)
especifica o valor para o qual a propriedade
$name deveria ser
definida.

A sobrecarga de propriedades funciona somente no contexto de objeto. Estes
métodos mágicos não são disparados em contexto estático. Portanto estes
métodos não podem ser declarados como
[static](language.oop5.static.md).
Um aviso é emitido se algum método mágico de sobrecarga
é declarado como `static`.

> **Nota**:
>
> O valor de retorno de [\_\_set()](language.oop5.overloading.md#object.set) é ignorado
> por causa da forma que o PHP processa o operador de atribuição.
> Similarmente, o método [\_\_get()](language.oop5.overloading.md#object.get) nunca é chamado em
> atribuições encadeadas como essa:
> ```` ```
>  $a = $obj->b = 8;
> ``` ````

> **Nota**:
>
> O PHP não irá chamar métodos sobrecarregados a partir do próprio método sobrecarregado.
> Isso significa, por exemplo, que escrever `return $this->foo` dentro de um
> [\_\_get()](language.oop5.overloading.md#object.get) irá retornar **`null`**
> e lançar um **`E_WARNING`** se não houver uma `foo` propriedade definida,
> ao invés de chamar [\_\_get()](language.oop5.overloading.md#object.get) uma segunda vez.
> Entretanto, métodos sobrecarregados podem invocar outros métodos sobrecarregados implicitamente (como um
> [\_\_set()](language.oop5.overloading.md#object.set) chamando um [\_\_get()](language.oop5.overloading.md#object.get)).

**Exemplo #1
Sobrecarregando propriedades com [\_\_get()](language.oop5.overloading.md#object.get),
[\_\_set()](language.oop5.overloading.md#object.set), [\_\_isset()](language.oop5.overloading.md#object.isset)
e [\_\_unset()](language.oop5.overloading.md#object.unset)**

```
<?php
class PropertyTest
{
    /** Local para dados sobrecarregados. */
    private $data = array();

    /** Sobrecarga não usada em propriedades declaradas. */
    public $declared = 1;

    /** Sobrecarga usada somente neste quando acessada fora da classe. */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Definindo '$name' para '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Obtendo '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Propriedade indefinida via __get(): ' . $name .
            ' em ' . $trace[0]['file'] .
            ' na linha ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        echo "'$name' está definido?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Removendo a definição de '$name'\n";
        unset($this->data[$name]);
    }

    /** Não é um método mágico, está aqui somente para exemplo. */
    public function getHidden()
    {
        return $this->hidden;
    }
}

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Vamos experimentar com a propriedade privada chamada 'hidden':\n";
echo "Propriedades privadas são visíveis dentro da classe, por isso __get() não é usado...\n";
echo $obj->getHidden() . "\n";
echo "Propriedades privadas não são visíveis fora da classe, por isso __get() é usado...\n";
echo $obj->hidden . "\n";
?>
```

O exemplo acima produzirá:

```
Definindo 'a' to '1'
Obtendo 'a'
1

'a' está definido?
bool(true)
Removendo a definição de 'a'
'a' está definido?
bool(false)

1

Vamos experimentar com a propriedade privada chamada 'hidden':
Propriedades privadas são visíveis dentro da classe, por isso __get() não é usado...
2
Propriedades privadas não são visíveis fora da classe, por isso __get() é usado...
Obtendo 'hidden'

Notice: Undefined property via __get(): hidden in script on line 71 in script on line 27
```

### Sobrecarga de método

public function **\_\_call**([string](language.types.string.md) `$name`, [array](language.types.array.md) `$arguments`): [mixed](language.types.mixed.md)

public static function **\_\_callStatic**([string](language.types.string.md) `$name`, [array](language.types.array.md) `$arguments`): [mixed](language.types.mixed.md)

[\_\_call()](language.oop5.overloading.md#object.call) é disparado ao invocar métodos
inacessíveis em um contexto de objeto.

[\_\_callStatic()](language.oop5.overloading.md#object.callstatic) é disparado quando invocando métodos
inacessíveis em um contexto estático.

O argumento $name é o nome do método sendo chamado. O
argumento $arguments é um array enumerado contendo os
parâmetros passados para o
método $name.

**Exemplo #2
Sobrecarga de métodos instanciados com [\_\_call()](language.oop5.overloading.md#object.call)
e [\_\_callStatic()](language.oop5.overloading.md#object.callstatic)**

```
<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Observação: valor de $name é sensível a maiúsculas/minúsculas.
        echo "Chamando método '$name' do objeto "
             . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        // Observação: valor de $name é sensível a maiúsculas/minúsculas.
        echo "Chamando método '$name' estático "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('no contexto do objeto');

MethodTest::runTest('no contexto estático');
?>
```

O exemplo acima produzirá:

```
Chamando método 'runTest' do objeto no contexto do objeto
Chamando método 'runTest' estático no contexto estático
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
