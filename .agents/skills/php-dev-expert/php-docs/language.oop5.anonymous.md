# Classes Anônimas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.anonymous.php

---

## Classes Anônimas

Classes anônimas são úteis quando objetos simples e descartáveis precisarem ser criados.

```
<?php

// Usando uma classe explícita
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// Usando uma classe anônima
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});
```

Podem passar argumentos através de seus construtores, estender outras classes,
implementar interfaces, e usar traits como uma classe normal faz:

```
<?php

class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});
```

O exemplo acima produzirá:

```
object(class@anonymous)#1 (1) {
  ["Command line code0x104c5b612":"class@anonymous":private]=>
  int(10)
}
```

Aninhar uma classe anônima dentro de outra classe não dá acesso a
nenhum método privado ou protegido, ou propriedades da classe externa. Para
utilizar os métodos e propriedades protegidas da classe externa, a classe anônima
pode estender a classe externa. Para utilizar as propriedades privadas
da classe externa na classe anônima, elas devem ser passadas através do
construtor:

```
<?php

class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Outer)->func2()->func3();
```

O exemplo acima produzirá:

```
6
```

Todos os objetos criados pela mesma declaração de classe anônima são instâncias
desta mesma classe.

```
<?php
function anonymous_class()
{
    return new class {};
}

if (get_class(anonymous_class()) === get_class(anonymous_class())) {
    echo 'same class';
} else {
    echo 'different class';
}
```

O exemplo acima produzirá:

```
same class
```

> **Nota**:
>
> Classes anônimas têm nomes atribuídos automaticamente
> como demonstrado no exemplo a seguir. Este nome deve ser considerado como um
> detalhe de implementação, o qual não deve ser confiável.
>
> ```
> <?php
> echo get_class(new class {});
> ```
>
> O exemplo acima produzirá
> algo semelhante a:
>
> ```
> class@anonymous/in/oNi1A0x7f8636ad2021
> ```

### Classes anônimas somente-leitura

A partir do PHP 8.3.0, o modificador `readonly` pode
ser aplicado a classes anônimas.

**Exemplo #1 Definindo uma classe anônima somente-leitura**

```
<?php
// Usando uma classe anônima
var_dump(new readonly class('[DEBUG]') {
    public function __construct(private string $prefix)
    {
    }

    public function log($msg)
    {
        echo $this->prefix . ' ' . $msg;
    }
});
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
