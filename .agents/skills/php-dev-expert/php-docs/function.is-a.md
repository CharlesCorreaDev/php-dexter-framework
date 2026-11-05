# Verifica se um objeto é ou herda de uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-a.php

---

# is\_a

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

is\_a — Verifica se um objeto é ou herda de uma classe

### Descrição

function **is\_a**([mixed](language.types.mixed.md) `$object_or_class`, [string](language.types.string.md) `$class`, [bool](language.types.boolean.md) `$allow_string` = **`false`**): [bool](language.types.boolean.md)

Determina se o `object_or_class` é do
tipo `class`,
ou se tem `class` como um dos tipos herdados.

### Parâmetros

`object_or_class`
:   O nome da classe ou o objeto.

`class`
:   O nome da classe.

`allow_string`
:   Se esse parâmetro for configurado para **`false`**, um nome de classe em string em `object_or_class`
    não será permitido. Isso evita chamar o autoloader de uma classe inexistente.

### Valor Retornado

Retorna **`true`** se o `object_or_class` for do
tipo `class`
ou se tiver `class` como um dos tipos herdados, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_a()****

```
<?php
// Define uma classe
class WidgetFactory
{
  var $oink = 'moo';
}

// Cria um objeto
$WF = new WidgetFactory();

if (is_a($WF, 'WidgetFactory')) {
  echo "\$WF implementa WidgetFactory\n";
}
?>
```

**Exemplo #2 Utilizando o operador *instanceof***

```
<?php
// define uma classe
class WidgetFactory
{
  var $oink = 'moo';
}

// cria um novo objeto
$WF = new WidgetFactory();

if ($WF instanceof WidgetFactory) {
    echo "\$WF implementa WidgetFactory\n";
}
?>
```

### Veja também

- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe
- [is\_subclass\_of()](function.is-subclass-of.md) - Verifica se o objeto tem esta classe como uma de suas classes pai

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
