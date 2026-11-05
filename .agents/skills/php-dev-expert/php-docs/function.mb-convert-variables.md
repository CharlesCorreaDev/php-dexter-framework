# Converte o código de caracteres em variável(is)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-convert-variables.php

---

# mb\_convert\_variables

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_convert\_variables — Converte o código de caracteres em variável(is)

### Descrição

function **mb\_convert\_variables**(  
    [string](language.types.string.md) `$to_encoding`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$from_encoding`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [mixed](language.types.mixed.md) `&...$vars`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Converte
a codificação de caracteres das variáveis `var` e `vars`
de codificação `from_encoding` para a codificação
`to_encoding`.

**mb\_convert\_variables()** une strings em Arrays
ou Objetos para detectar a codificação, já que a detecção de codificação tende a
falhar para strings curtas. Portanto, é impossível misturar
codificações em um único array ou objeto.

### Parâmetros

`to_encoding`
:   A codificação para a qual a [string](language.types.string.md) está sendo convertida.

`from_encoding`
:   Se `from_encoding` for especificado como um [array](language.types.array.md)
    ou uma [string](language.types.string.md) separada por vírgula, ele tenta detectar a codificação de
    `from-coding`. Quando `from_encoding`
    é omitido, é usado `detect_order`.

`var`
:   `var` é a referência para a
    variável sendo convertida. String, Array e Object são aceitos.
    **mb\_convert\_variables()** assume que todos os parâmetros
    têm a mesma codificação.

`vars`
:   Variáveis adicionais `var`s.

### Valor Retornado

A codificação de caracteres antes da conversão para sucesso,
ou **`false`** para falha.

### Examples

**Exemplo #1 Exemplo de **mb\_convert\_variables()****

```
<?php
/* Converte as variáveis $post1, $post2 para a codificação interna */
$interenc = mb_internal_encoding();
$inputenc = mb_convert_variables($interenc, "ASCII,UTF-8,SJIS-win", $post1, $post2);
?>
```

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
