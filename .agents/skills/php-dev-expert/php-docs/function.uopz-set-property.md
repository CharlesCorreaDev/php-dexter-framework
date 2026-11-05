# Define o valor da classe existente ou propriedade de instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-set-property.php

---

# uopz\_set\_property

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_set\_property — Define o valor da classe existente ou propriedade de instância

### Descrição

function **uopz\_set\_property**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$property`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

function **uopz\_set\_property**([object](language.types.object.md) `$instance`, [string](language.types.string.md) `$property`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor de uma propriedade de classe estática existente, se `class`
for fornecido, ou o valor de uma propriedade de instância (independentemente de a propriedade de instância já existir), se `instance`
for fornecido.

### Parâmetros

`class`
:   O nome da classe.

`instance`
:   A instância do objeto.

`property`
:   O nome da propriedade.

`value`
:   O valor a ser atribuído à propriedade.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Uso básico de **uopz\_set\_property()****

```
<?php
class Foo {
   private static $staticBar;
   private $bar;
   public static function testStaticBar() {
      return self::$staticBar;
   }
   public function testBar() {
      return $this->bar;
   }
}
$foo = new Foo;
uopz_set_property('Foo', 'staticBar', 10);
uopz_set_property($foo, 'bar', 100);
var_dump(Foo::testStaticBar());
var_dump($foo->testBar());
?>
```

O exemplo acima produzirá:

```
int(10)
```

### Veja também

- [uopz\_get\_property()](function.uopz-get-property.md) - Obtém o valor da propriedade de classe ou instância

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
