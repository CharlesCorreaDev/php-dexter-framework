# Altera uma string com uma correção unificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-patch.php

---

# xdiff\_string\_patch

(PECL xdiff >= 0.2.0)

xdiff\_string\_patch — Altera uma string com uma correção unificada

### Descrição

function **xdiff\_string\_patch**(  
    [string](language.types.string.md) `$str`,  
    [string](language.types.string.md) `$patch`,  
    [int](language.types.integer.md) `$flags` = ?,  
    [string](language.types.string.md) `&$error` = ?  
): [string](language.types.string.md)

Corrige uma string `str` com uma correção unificada no parâmetro `patch`
e retorna o resultado. `patch` deve ser uma correção unificada criada pela
função [xdiff\_file\_diff()](function.xdiff-file-diff.md)/[xdiff\_string\_diff()](function.xdiff-string-diff.md).
Um parâmetro opcional `flags` especifica o modo de operação. Quaisquer
partes rejeitadas da correção serão armazenadas dentro da variável `error` se
forem fornecidas.

### Parâmetros

`str`
:   A string original.

`patch`
:   A string de correção unificada. Ela deve ser criada usando as funções [xdiff\_string\_diff()](function.xdiff-string-diff.md),
    [xdiff\_file\_diff()](function.xdiff-file-diff.md) ou ferramentas compatíveis.

`flags`
:   `flags` podem ser
    **`XDIFF_PATCH_NORMAL`** (modo padrão, correção normal)
    ou **`XDIFF_PATCH_REVERSE`** (correção reversa).

    A partir da versão 1.5.0, também pode-se usar a operação binária OR para habilitar o sinalizador
    **`XDIFF_PATCH_IGNORESPACE`**.

`error`
:   Se fornecido, as partes rejeitadas serão armazenadas dentro desta variável.

### Valor Retornado

Retorna a string corrigida ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **xdiff\_string\_patch()****

O código a seguir aplica alterações a alguns artigos.

```
<?php
$old_article = file_get_contents('./old_article.txt');
$diff = $_SERVER['patch']; /* Digamos que alguém colou uma correção em um formulário HTML */

$errors = '';

$new_article = xdiff_string_patch($old_article, $diff, XDIFF_PATCH_NORMAL, $errors);
if (is_string($new_article)) {
    echo "Novo artigo:\n";
    echo $new_article;
}

if (strlen($errors)) {
    echo "Rejeições: \n";
    echo $errors;
}

?>
```

### Veja também

- [xdiff\_string\_diff()](function.xdiff-string-diff.md) - Faz uma diferença unificada entre duas strings

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
