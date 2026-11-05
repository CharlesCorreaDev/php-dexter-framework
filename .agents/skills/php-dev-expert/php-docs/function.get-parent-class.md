# Obtém o nome da classe pai para o objeto ou classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-parent-class.php

---

# get\_parent\_class

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_parent\_class — Obtém o nome da classe pai para o objeto ou classe

### Descrição

function **get\_parent\_class**([object](language.types.object.md)|[string](language.types.string.md) `$object_or_class` = ?): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da classe pai para o objeto ou classe.

### Parâmetros

`object_or_class`
:   O objeto testado ou o nome da classe.

### Valor Retornado

Retorna o nome da classe pai da classe da qual
`object_or_class` é uma instância ou o nome.

Se o objeto não tiver um pai ou a classe informada não existir,
será retornado **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **get\_parent\_class()** sem um argumento agora emite um alerta **`E_DEPRECATED`**; anteriormente, chamar esta função de dentro de uma classe retornava o nome dessa classe. |
| 8.0.0 | O parâmetro `object_or_class` agora aceita apenas objetos ou nomes de classe válidos. |

### Examples

**Exemplo #1 Usando **get\_parent\_class()****

```
<?php

class Pai {
    function __construct()
    {
    // implemente alguma lógica
    }
}

class Filha extends Pai {
    function __construct()
    {
        echo "Eu sou filha de " , get_parent_class($this) , "\n";
    }
}

class Filha2 extends Pai {
    function __construct()
    {
        echo "Eu também sou filha de " , get_parent_class('filha2') , "\n";
    }
}

$foo = new Filha();
$bar = new Filha2();

?>
```

O exemplo acima produzirá:

```
Eu sou filha de Pai
Eu também sou filha de Pai
```

### Veja também

- [get\_class()](function.get-class.md) - Retorna o nome da classe de um objeto
- [is\_subclass\_of()](function.is-subclass-of.md) - Verifica se o objeto tem esta classe como uma de suas classes pai
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
