# Constrói um objeto ReflectionProperty

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionproperty.construct.php

---

# ReflectionProperty::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionProperty::\_\_construct — Constrói um objeto ReflectionProperty

### Descrição

public function **ReflectionProperty::\_\_construct**([object](language.types.object.md)|[string](language.types.string.md) `$class`, [string](language.types.string.md) `$property`)

### Parâmetros

`class`
:   Uma string contendo o nome da classe a ser refletida ou um objeto.

`property`
:   O nome da propriedade que está sendo refletida.

### Erros/Exceções

Tentando obter ou definir valores de propriedades de classe privada ou protegida
resultará no lançamento de uma exceção.

### Examples

**Exemplo #1 Exemplo de **ReflectionProperty::\_\_construct()****

```
<?php

class Str
{
    public $length  = 5;
}

// Cria uma instância da classe ReflectionProperty
$prop = new ReflectionProperty('Str', 'length');

// Imprime informações básicas
printf(
    "===> A propriedade%s%s%s%s '%s' (que foi %s)\n" .
    "     com os modificadores %s\n",
        $prop->isPublic() ? ' pública' : '',
        $prop->isPrivate() ? ' privada' : '',
        $prop->isProtected() ? ' protegida' : '',
        $prop->isStatic() ? ' estática' : '',
        $prop->getName(),
        $prop->isDefault() ? 'declarada no momento da compilação' : 'criada durante a execução',
        var_export(Reflection::getModifierNames($prop->getModifiers()), true)
);

// Cria uma instância de Str
$obj= new Str();

// Obtém o valor atual
printf("---> O valor é: ");
var_dump($prop->getValue($obj));

// Altera o valor
$prop->setValue($obj, 10);
printf("---> Definindo o valor para 10, o novo valor é: ");
var_dump($prop->getValue($obj));

// Exibe o objeto
var_dump($obj);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
===> A propriedade pública 'length' (que foi declarada no momento da compilação)
     com os modificadores array (
  0 => 'public',
)
---> O valor é: int(5)
---> Definindo o valor para 10, o novo valor é: int(10)
object(Str)#2 (1) {
  ["length"]=>
  int(10)
}
```

**Exemplo #2 Obtendo valor de propriedades privadas e protegidas usando a classe [ReflectionProperty](class.reflectionproperty.md)**

```
<?php

class Foo
{
    public $x = 1;
    protected $y = 2;
    private $z = 3;
}

$obj = new Foo;

$prop = new ReflectionProperty('Foo', 'y');
$prop->setAccessible(true);
var_dump($prop->getValue($obj)); // int(2)

$prop = new ReflectionProperty('Foo', 'z');
$prop->setAccessible(true);
var_dump($prop->getValue($obj)); // int(2)

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(2)
int(3)
```

### Veja também

- [ReflectionProperty::getName()](reflectionproperty.getname.md) - Obtém o nome da propriedade
- [Construtores](language.oop5.decon.md#language.oop5.decon.constructor)

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
