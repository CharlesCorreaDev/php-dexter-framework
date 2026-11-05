# Constantes de Classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.constants.php

---

## Constantes de Classe

É possível definir [constantes](language.constants.md)
em cada classe separadamente.
A visibilidade padrão de constantes de classe é `public`.

> **Nota**:
>
> Constantes de classe podem ser redefinidas em classes filhas.
> A partir do PHP 8.1.0, constantes de classe não podem ser redefinidas numa classe filha
> se ela for qualificada como [final](language.oop5.final.md).

Também é possível que interfaces tenham constantes. Veja na
[documentação de interface](language.oop5.interfaces.md) os
exemplos.

É possível referenciar a classe usando uma variável.
O valor da variável não pode ser uma palavra-chave (e.g. `self`,
`parent` e `static`).

Constantes de classe são alocadas por classe, e não em cada
instância da classe.

A partir do PHP 8.3.0, constantes de classe podem ter um tipo escalar tal como `bool`,
`int`, `float`, `string` ou mesmo
`array`. Ao usar `array`, seu conteúdo só pode ser
de outros tipos escalares.

**Exemplo #1 Definindo e usando uma constante**

```
<?php
class MinhaClasse
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante() {
        echo  self::CONSTANTE . "\n";
    }
}

echo MinhaClasse::CONSTANTE . "\n";

$classname = "MinhaClasse";
echo $classname::CONSTANTE;

$classe = new MinhaClasse();
$classe->mostrarConstante();

echo $classe::CONSTANTE;
?>
```

A constante especial **`::class`** permite
a resolução de classes pelo seu nome completo em tempo de compilação,
e isso é útil em classes com namespaces:

**Exemplo #2 Exemplo com informação estática**

```
<?php
namespace foo {
    class bar {
    }

    echo bar::class; // foo\bar
}
?>
```

**Exemplo #3 Exemplo de expressão constante**

```
<?php
const UM = 1;
class foo {
    const DOIS = UM * 2;
    const TRES = UM + self::DOIS;
    const FRASE = 'O valor de TRES é '.self::TRES;
}
?>
```

**Exemplo #4 Modificadores de visibilidade em constantes de classe**

```
<?php
class Foo {
    public const BAR = 'bar';
    private const BAZ = 'baz';
}
echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL;
?>
```

Saída do exemplo acima no PHP 7.1:

```
bar

Fatal error: Uncaught Error: Cannot access private const Foo::BAZ in …
```

> **Nota**:
>
> Modificadores de visibilidade estão disponíveis desde o PHP 7.1.0.

**Exemplo #5 Verificando variância de visibilidade de constantes de classe, a partir do PHP 8.3.0**

```
<?php

interface MyInterface
{
    public const VALUE = 42;
}

class MyClass implements MyInterface
{
    protected const VALUE = 42;
}
?>
```

Saída do exemplo acima no PHP 8.3:

```
Fatal error: Access level to MyClass::VALUE must be public (as in interface MyInterface) …
```

> **Nota**:
>
> A partir do PHP 8.3.0, a variância de visibilidade é verificada mais estritamente.
> Antes desta versão, a visibilidade de uma constante de classe poderia ser diferente
> da visibilidade da constante na interface implementada.

**Exemplo #6 Sintaxe de busca de constante de classe, a partir do PHP 8.3.0**

```
<?php
class Foo {
    public const BAR = 'bar';
    private const BAZ = 'baz';
}

$name = 'BAR';
echo Foo::{$name}, PHP_EOL; // bar
?>
```

> **Nota**:
>
> A partir do PHP 8.3.0, constantes de classe podem ser buscadas dinamicamente usando uma
> variável.

**Exemplo #7 Atribuindo tipos a constantes de classe, a partir do PHP 8.3.0**

```
<?php

class MyClass {
    public const bool MY_BOOL = true;
    public const int MY_INT = 1;
    public const float MY_FLOAT = 1.01;
    public const string MY_STRING = 'one';
    public const array MY_ARRAY = [self::MY_BOOL, self::MY_INT, self::MY_FLOAT, self::MY_STRING];
}

var_dump(MyClass::MY_BOOL);
var_dump(MyClass::MY_INT);
var_dump(MyClass::MY_FLOAT);
var_dump(MyClass::MY_STRING);
var_dump(MyClass::MY_ARRAY);
?>
```

Saída do exemplo acima no PHP 8.3:

```
bool(true)
int(1)
float(1.01)
string(3) "one"
array(4) {
  [0]=>
  bool(true)
  [1]=>
  int(1)
  [2]=>
  float(1.01)
  [3]=>
  string(3) "one"
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
