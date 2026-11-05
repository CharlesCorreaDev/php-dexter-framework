# Verifica se o objeto tem esta classe como uma de suas classes pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-subclass-of.php

---

# is\_subclass\_of

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_subclass\_of — Verifica se o objeto tem esta classe como uma de suas classes pai

### Descrição

function **is\_subclass\_of**([mixed](language.types.mixed.md) `$object_or_class`, [string](language.types.string.md) `$class`, [bool](language.types.boolean.md) `$allow_string` = **`true`**): [bool](language.types.boolean.md)

Verifica se `object_or_class` informado tem a classe
`class` como uma de suas classes pai ou o/a implementa.

### Parâmetros

`object_or_class`
:   O nome da classe ou um instância do objeto. Nenhum erro é gerado se a classe não existir.

`class`
:   O nome da classe

`allow_string`
:   Se este parâmetro for definido para falso, nome de classe em string no parâmetro `object_or_class`
    não será permitido. Isto também evita chamada ao carregamento automático se a classe não existir.

### Valor Retornado

Esta função retorna **`true`** se o objeto `object_or_class`,
pertencer a uma classe que é uma subclasse de
`class`, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_subclass\_of()****

```
<?php
// define uma classe
class WidgetFactory
{
  var $oink = 'moo';
}

// define uma classe filha
class WidgetFactory_Child extends WidgetFactory
{
  var $oink = 'oink';
}

// cria um novo objeto
$WF = new WidgetFactory();
$WFC = new WidgetFactory_Child();

if (is_subclass_of($WFC, 'WidgetFactory')) {
  echo "sim, \$WFC é uma subclasse de WidgetFactory\n";
} else {
  echo "não, \$WFC não é uma subclasse de WidgetFactory\n";
}

if (is_subclass_of($WF, 'WidgetFactory')) {
  echo "sim, \$WF é uma subclasse de WidgetFactory\n";
} else {
  echo "não, \$WF não é uma subclasse de WidgetFactory\n";
}

if (is_subclass_of('WidgetFactory_Child', 'WidgetFactory')) {
  echo "sim, WidgetFactory_Child é uma subclasse de WidgetFactory\n";
} else {
  echo "não, WidgetFactory_Child não é uma subclasse de WidgetFactory\n";
}
?>
```

O exemplo acima produzirá:

```
sim, $WFC é uma subclasse de WidgetFactory
não, $WF não é uma subclasse de WidgetFactory
sim, WidgetFactory_Child é uma subclasse de WidgetFactory
```

**Exemplo #2 Exemplo de **is\_subclass\_of()** usando interface**

```
<?php
// Define a Interface
interface MyInterface
{
  public function MyFunction();
}

// Define a implementação de classe da interface
class MyClass implements MyInterface
{
  public function MyFunction()
  {
    return "MyClass Implementa MyInterface!";
  }
}

// Instancia o objeto object
$my_object = new MyClass;

// Funciona desde 5.3.7

// Teste usando a instância do objeto da classe
if (is_subclass_of($my_object, 'MyInterface')) {
  echo "Sim, \$my_object é uma subclasse de MyInterface\n";
} else {
  echo "No, \$my_object não é uma subclasse de MyInterface\n";
}

// Teste usando a string do nome da classe
if (is_subclass_of('MyClass', 'MyInterface')) {
  echo "Sim, MyClass é uma subclasse de MyInterface\n";
} else {
  echo "No, MyClass não é uma subclasse de MyInterface\n";
}
?>
```

O exemplo acima produzirá:

```
Sim, $my_object é uma subclasse de MyInterface
Sim, MyClass é uma subclasse de MyInterface
```

### Notas

> **Nota**:
>
> Usar esta função fará com que qualquer
> [autoloader](language.oop5.autoload.md) registrado seja usado se a classe ainda não for conhecida.

### Veja também

- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe
- [is\_a()](function.is-a.md) - Verifica se um objeto é ou herda de uma classe
- [class\_parents()](function.class-parents.md) - Retorna as classes pai da classe fornecida

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
