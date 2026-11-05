# Retorna um array com todas as funções definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-defined-functions.php

---

# get\_defined\_functions

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

get\_defined\_functions — Retorna um array com todas as funções definidas

### Descrição

function **get\_defined\_functions**([bool](language.types.boolean.md) `$exclude_disabled` = **`true`**): [array](language.types.array.md)

Obtém um array com todas as funções definidas.

### Parâmetros

`exclude_disabled`
:   Opção para definir se funções desabilitadas devem ser excluídas do valor de retorno. Este parâmetro não tem efeito
    desde o PHP 8.0.0.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso
    é fortemente desencorajado.

### Valor Retornado

Retorna um array multidimensional contendo uma lista de todas
as funções definidas, tanto as internas quanto as definidas pelo usuário. As
funções internas podem ser acessadas em $arr["internal"], e
as definidas por usuário em $arr["user"] (veja exemplo
abaixo).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro `exclude_disabled` foi descontinuado, pois não tem mais efeito. |
| 8.0.0 | O valor padrão do parâmetro `exclude_disabled` mudou de **`false`** para **`true`**. Entretanto, ele não terá qualquer efeito já que as funções desabilitadas são removidas da tabela de funções no momento da compilação. |
| 7.0.15, 7.1.1 | O parâmetro `exclude_disabled` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **get\_defined\_functions()****

```
<?php
function myrow($id, $data)
{
    return "<tr><th>$id</th><td>$data</td></tr>\n";
}

$arr = get_defined_functions();

print_r($arr);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [internal] => Array
        (
            [0] => zend_version
            [1] => func_num_args
            [2] => func_get_arg
            [3] => func_get_args
            [4] => strlen
            [5] => strcmp
            [6] => strncmp
            ...
            [750] => bcscale
            [751] => bccomp
        )

    [user] => Array
        (
            [0] => myrow
        )

)
```

### Veja também

- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
- [get\_defined\_vars()](function.get-defined-vars.md) - Retorna um array com todas variáveis definidas
- [get\_defined\_constants()](function.get-defined-constants.md) - Retorna um array associativo com os nomes de todas as constantes e seus valores
- [get\_declared\_classes()](function.get-declared-classes.md) - Retorna um array com os nomes das classes definidas

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
