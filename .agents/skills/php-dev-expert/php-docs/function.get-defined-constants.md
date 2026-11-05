# Retorna um array associativo com os nomes de todas as constantes e seus valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-defined-constants.php

---

# get\_defined\_constants

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

get\_defined\_constants — Retorna um array associativo com os nomes de todas as constantes e seus valores

### Descrição

function **get\_defined\_constants**([bool](language.types.boolean.md) `$categorize` = **`false`**): [array](language.types.array.md)

Retorna os nomes e valores de todas as constantes definidas atualmente.
Isto inclui aquelas criadas por extensões, bem como aquelas criados com
a função [define()](function.define.md).

### Parâmetros

`categorize`
:   Faz com que esta função retorne um array multidimensional
    com categorias nas chaves da primeira dimensão e constantes
    e seus valores na segunda dimensão.

    ```
    <?php
    define("MY_CONSTANT", 1);
    print_r(get_defined_constants(true));
    ?>
    ```

    O exemplo acima produzirá
    algo semelhante a:

    ```
    Array
    (
        [Core] => Array
            (
                [E_ERROR] => 1
                [E_WARNING] => 2
                [E_PARSE] => 4
                [E_NOTICE] => 8
                [E_CORE_ERROR] => 16
                [E_CORE_WARNING] => 32
                [E_COMPILE_ERROR] => 64
                [E_COMPILE_WARNING] => 128
                [E_USER_ERROR] => 256
                [E_USER_WARNING] => 512
                [E_USER_NOTICE] => 1024
                [E_ALL] => 2047
                [TRUE] => 1
            )

        [pcre] => Array
            (
                [PREG_PATTERN_ORDER] => 1
                [PREG_SET_ORDER] => 2
                [PREG_OFFSET_CAPTURE] => 256
                [PREG_SPLIT_NO_EMPTY] => 1
                [PREG_SPLIT_DELIM_CAPTURE] => 2
                [PREG_SPLIT_OFFSET_CAPTURE] => 4
                [PREG_GREP_INVERT] => 1
            )

        [user] => Array
            (
                [MY_CONSTANT] => 1
            )

    )
    ```

### Valor Retornado

Retorna um array de nome de constante => valor da constante, opcionalmente
agrupado por nome de extensão que registrou a constante.

### Examples

**Exemplo #1 Exemplo de **get\_defined\_constants()****

```
<?php
print_r(get_defined_constants());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [E_ERROR] => 1
    [E_WARNING] => 2
    [E_PARSE] => 4
    [E_NOTICE] => 8
    [E_CORE_ERROR] => 16
    [E_CORE_WARNING] => 32
    [E_COMPILE_ERROR] => 64
    [E_COMPILE_WARNING] => 128
    [E_USER_ERROR] => 256
    [E_USER_WARNING] => 512
    [E_USER_NOTICE] => 1024
    [E_ALL] => 2047
    [TRUE] => 1
)
```

### Veja também

- [defined()](function.defined.md) - Verifica se existe uma constante com o nome informado
- [constant()](function.constant.md) - Retorna o valor de uma constante
- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [get\_defined\_functions()](function.get-defined-functions.md) - Retorna um array com todas as funções definidas
- [get\_defined\_vars()](function.get-defined-vars.md) - Retorna um array com todas variáveis definidas

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
