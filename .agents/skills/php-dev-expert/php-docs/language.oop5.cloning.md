# Clonando Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.cloning.php

---

## Clonando Objetos

Criar uma cópia de um objeto com propriedades totalmente replicadas nem sempre
é o comportamento desejado. Um bom exemplo da necessidade de construtores de cópia
é quando se tem um objeto que representa uma janela do GTK e ele
guarda o recurso dessa janela GTK. Ao criar uma duplicata,
pode-se desejar a criação de uma nova janela com as mesmas propriedades e fazer o
novo objeto guardar o recurso da nova janela. Outro exemplo é se seu
objeto guarda uma referência a outro objeto que usa e ao
replicar o objeto pai, deseja-se que seja criada uma nova instância desse outro
objeto para que a réplica tenha sua própria cópia separada.

Uma cópia de objeto é criada usando a palavra-chave `clone`
(que chama o método [\_\_clone()](language.oop5.cloning.md#object.clone) do objeto,
se possível).

```
$copia_do_objeto = clone $objeto;
```

Ao clonar um objeto, o PHP fará uma cópia superficial de todas as
propriedades do objeto. Qualquer propriedade que seja referência a outra variável,
permanecerá como referência.

function **\_\_clone**(): [void](language.types.void.md)

Depois que a clonagem se completa, se um método [\_\_clone()](language.oop5.cloning.md#object.clone) estiver definido,
o objeto recém criado terá seu método [\_\_clone()](language.oop5.cloning.md#object.clone) chamado, permitindo que
as prorpriedades necessárias sejam alteradas.

**Exemplo #1 Clonando um objeto**

```
<?php
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Força uma cópia de this->object, caso contrário
        // aponta para o mesmo objeto.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print "Objeto original:\n";
print_r($obj);

print "Objeto clonado:\n";
print_r($obj2);

?>
```

O exemplo acima produzirá:

```
Objeto original:
MyCloneable Object
(
    [object1] => SubObject Object
        (
            [instance] => 1
        )

    [object2] => SubObject Object
        (
            [instance] => 2
        )

)
Objeto clonado:
MyCloneable Object
(
    [object1] => SubObject Object
        (
            [instance] => 3
        )

    [object2] => SubObject Object
        (
            [instance] => 2
        )

)
```

É possível acessar um membro de um objeto recém clonado
em uma expressão única:

**Exemplo #2 Acessar um membro de um objeto recém clonado**

```
<?php
$dateTime = new DateTime();
echo (clone $dateTime)->format('Y');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2016
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
