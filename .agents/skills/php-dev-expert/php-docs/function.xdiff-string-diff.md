# Faz uma diferença unificada entre duas strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-diff.php

---

# xdiff\_string\_diff

(PECL xdiff >= 0.2.0)

xdiff\_string\_diff — Faz uma diferença unificada entre duas strings

### Descrição

function **xdiff\_string\_diff**(  
    [string](language.types.string.md) `$old_data`,  
    [string](language.types.string.md) `$new_data`,  
    [int](language.types.integer.md) `$context` = 3,  
    [bool](language.types.boolean.md) `$minimal` = **`false`**  
): [string](language.types.string.md)

Cria uma diferença unificada contendo as diferenças entre a string `old_data` e a string
`new_data` e o retorna. A diferença resultante é legível por humanos.
Um parâmetro opcional `context` especifica quantas linhas de contexto devem ser
adicionadas em torno de cada alteração. Definir o parâmetro `minimal`
como verdadeiro resultará na saída do menor arquivo de patch possível (pode levar muito tempo).

### Parâmetros

`old_data`
:   Primeira sequência com dados. Atua como dados "antigos".

`new_data`
:   Segunda sequência com dados. Atua como dados "novos".

`context`
:   Indica quantas linhas de contexto você deseja incluir no resultado
    da diferença.

`minimal`
:   Defina este parâmetro como **`true`** se quiser minimizar o tamanho do
    resultado (pode levar muito tempo).

### Valor Retornado

Retorna uma string com a diferença resultante ou **`false`** se ocorrer um erro interno.

### Examples

**Exemplo #1 Exemplo de **xdiff\_string\_diff()****

O código a seguir faz uma comparação unificada de dois artigos.

```
<?php
$old_article = file_get_contents('./old_article.txt');
$new_article = $_REQUEST['article']; /* Digamos que alguém colou um novo artigo em um formato HTML */

$diff = xdiff_string_diff($old_article, $new_article, 1);
if (is_string($diff)) {
    echo "Diferenças entre dois artigos:\n";
    echo $diff;
}

?>
```

### Notas

> **Nota**:
>
> Esta função não funciona bem com strings binárias. Para obter diferenças de strings
> binárias, use [xdiff\_string\_bdiff()](function.xdiff-string-bdiff.md)/[xdiff\_string\_rabdiff()](function.xdiff-string-rabdiff.md).

### Veja também

- [xdiff\_string\_patch()](function.xdiff-string-patch.md) - Altera uma string com uma correção unificada

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
