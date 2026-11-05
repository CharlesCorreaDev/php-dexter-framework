# Obtém o valor da propriedade de classe ou instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-property.php

---

# uopz\_get\_property

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_get\_property — Obtém o valor da propriedade de classe ou instância

### Descrição

function **uopz\_get\_property**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$property`): [mixed](language.types.mixed.md)

function **uopz\_get\_property**([object](language.types.object.md) `$instance`, [string](language.types.string.md) `$property`): [mixed](language.types.mixed.md)

Obtém o valor de uma propriedade de classe estática, se `class`
for fornecido, ou o valor de uma propriedade de instância, se `instance`
for fornecido.

### Parâmetros

`class`
:   O nome da classe.

`instance`
:   A instância do objeto.

`property`
:   O nome da propriedade.

### Valor Retornado

Retorna o valor da propriedade de classe ou instância, ou **`null`** se a propriedade
não estiver definida.

### Examples

**Exemplo #1 Uso básico de **uopz\_get\_property()****

```
<?php
class Foo {
    private static $staticBar = 10;
    private $bar = 100;
}
$foo = new Foo;
var_dump(uopz_get_property('Foo', 'staticBar'));
var_dump(uopz_get_property($foo, 'bar'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(10)
int(100)
```

### Veja também

- [uopz\_set\_property()](function.uopz-set-property.md) - Define o valor da classe existente ou propriedade de instância

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
