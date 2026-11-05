# Retorna os traits usados pela classe fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.class-uses.php

---

# class\_uses

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

class\_uses — 
Retorna os traits usados pela classe fornecida

### Descrição

function **class\_uses**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna um array com os nomes dos traits que a
`object_or_class` fornecida usa. No entanto, isso não inclui
quaisquer traits usados por uma classe pai.

### Parâmetros

`object_or_class`
:   Um objeto (instância de classe) ou uma string (nome da classe).

`autoload`
:   Se deve [autoload](language.oop5.autoload.md)
    caso ainda não tenha sido carregado.

### Valor Retornado

Um array em caso de sucesso, ou **`false`** quando a classe fornecida não existe.

### Examples

**Exemplo #1 Exemplo de **class\_uses()****

```
<?php

trait foo { }
class bar {
  use foo;
}

print_r(class_uses(new bar));

print_r(class_uses('bar'));

spl_autoload_register();

// usando autocarregamento para carregar a classe 'not_loaded'
print_r(class_uses('not_loaded', true));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [foo] => foo
)
Array
(
    [foo] => foo
)
Array
(
    [trait_of_not_loaded] => trait_of_not_loaded
)
```

### Veja também

- [class\_parents()](function.class-parents.md) - Retorna as classes pai da classe fornecida
- [get\_declared\_traits()](function.get-declared-traits.md) - Retorna um array de todas as Traits declaradas

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
