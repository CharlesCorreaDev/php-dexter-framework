# Retorna as classes pai da classe fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.class-parents.php

---

# class\_parents

(PHP 5, PHP 7, PHP 8)

class\_parents — 
Retorna as classes pai da classe fornecida

### Descrição

function **class\_parents**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna um array com o nome das classes pai da
`object_or_class` fornecida.

### Parâmetros

`object_or_class`
:   Um objeto (instância de classe) ou uma string (nome da classe).

`autoload`
:   Se deve [carregar automaticamente](language.oop5.autoload.md)
    caso ainda não tenha sido carregado.

### Valor Retornado

Um array em caso de sucesso, ou **`false`** quando a classe fornecida não existe.

### Examples

**Exemplo #1 Exemplo de **class\_parents()****

```
<?php

class foo { }
class bar extends foo {}

print_r(class_parents(new bar));

// O parâmetro também pode ser especificado como uma string
print_r(class_parents('bar'));

spl_autoload_register();

// use autocarregamento para carregar a classe 'not_loaded'
print_r(class_parents('not_loaded', true));

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
    [parent_of_not_loaded] => parent_of_not_loaded
)
```

### Notas

> **Nota**:
>
> Para verificar se um objeto estende uma classe, [`instanceof`](language.operators.type.md)
> ou a função [is\_a()](function.is-a.md) deve ser usada em vez disso.

### Veja também

- [class\_implements()](function.class-implements.md) - Retorna as interfaces que são implementadas pela classe ou interface fornecida
- [is\_a()](function.is-a.md) - Verifica se um objeto é ou herda de uma classe
- [`instanceof`](language.operators.type.md)

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
