# Obtém o nome dos métodos da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-class-methods.php

---

# get\_class\_methods

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_class\_methods — Obtém o nome dos métodos da classe

### Descrição

function **get\_class\_methods**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class`): [array](language.types.array.md)

Obtém o nome dos métodos da classe.

### Parâmetros

`object_or_class`
:   O nome da classe ou a instância do objeto

### Valor Retornado

Retorna um array de nome de métodos definidos para a classe especificada por
`object_or_class`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `object_or_class` agora aceita apenas objetos ou nomes de classe válidos. |

### Examples

**Exemplo #1 Exemplo de **get\_class\_methods()****

```
<?php

class minhaclasse {
    // construtor
    function __construct()
    {
        return(true);
    }

    // método 1
    function minhafuncao1()
    {
        return(true);
    }

    // método 2
    function minhafuncao2()
    {
        return(true);
    }
}

$metodos_da_classe = get_class_methods('minhaclasse');
// ou
$metodos_da_classe = get_class_methods(new minhaclasse());

foreach ($metodos_da_classe as $nome_do_metodo) {
    echo "$nome_do_metodo\n";
}

?>
```

O exemplo acima produzirá:

```
__construct
minhafuncao1
minhafuncao2
```

### Veja também

- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
- [get\_class\_vars()](function.get-class-vars.md) - Obtém as propriedades padrão da classe
- [get\_object\_vars()](function.get-object-vars.md) - Obtém as propriedades de um objeto

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
