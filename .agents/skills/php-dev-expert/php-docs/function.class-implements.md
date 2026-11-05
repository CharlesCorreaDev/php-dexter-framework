# Retorna as interfaces que são implementadas pela classe ou interface fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.class-implements.php

---

# class\_implements

(PHP 5, PHP 7, PHP 8)

class\_implements — 
Retorna as interfaces que são implementadas pela classe ou interface fornecida

### Descrição

function **class\_implements**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna um array com os nomes das interfaces que o
`object_or_class` fornecido e seus pais implementam.

### Parâmetros

`object_or_class`
:   Um objeto (instância de classe) ou uma string (nome da classe ou interface).

`autoload`
:   Se deve ou não [carregar automaticamente](language.oop5.autoload.md)
    se ainda não estiver carregado.

### Valor Retornado

Um array em caso de sucesso, ou **`false`** quando a classe fornecida não existe.

### Examples

**Exemplo #1 Exemplo de **class\_implements()****

```
<?php

interface foo { }
class bar implements foo {}

print_r(class_implements(new bar));

// O parâmetro também poder ser especificado como uma string
print_r(class_implements('bar'));

spl_autoload_register();

// use o carregamento automático para carregar a classe 'not_loaded'
print_r(class_implements('not_loaded', true));

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
    [interface_of_not_loaded] => interface_of_not_loaded
)
```

### Notas

> **Nota**:
>
> Para verificar se um objeto implementa uma interface, use [`instanceof`](language.operators.type.md)
> ou a função [is\_a()](function.is-a.md) em vez disso.

### Veja também

- [class\_parents()](function.class-parents.md) - Retorna as classes pai da classe fornecida
- [get\_declared\_interfaces()](function.get-declared-interfaces.md) - Retorna um array com todas as interfaces declaradas
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
