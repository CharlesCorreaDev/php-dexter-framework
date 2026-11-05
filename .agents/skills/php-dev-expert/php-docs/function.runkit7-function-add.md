# Adiciona uma nova função, semelhante a create_function

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-function-add.php

---

# runkit7\_function\_add

(PECL runkit7 >= Unknown)

runkit7\_function\_add — 
Adiciona uma nova função, semelhante a [create\_function()](function.create-function.md)

### Descrição

function **runkit7\_function\_add**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md) `$argument_list`,  
    [string](language.types.string.md) `$code`,  
    [bool](language.types.boolean.md) `$return_by_reference` = **`null`**,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

function **runkit7\_function\_add**(  
    [string](language.types.string.md) `$function_name`,  
    [Closure](class.closure.md) `$closure`,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`function_name`
:   Nome da função a ser criada

`argument_list`
:   Lista de argumentos separados por vírgula

`code`
:   Código que compõe a função

`closure`
:   Um [closure](class.closure.md) que define a função.

`return_by_reference`
:   Informa se a função deve retornar por referência.

`doc_comment`
:   O comentário documental da função.

`return_type`
:   O tipo de retorno da função.

`is_strict`
:   Informa se a função deve se comportar como se tivesse sido declarada em um arquivo com `strict_types=1`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **runkit7\_function\_add()****

```
<?php
runkit7_function_add('testme','$a,$b','echo "O valor de a é $a\n"; echo "O valor de b é $b\n";');
testme(1,2);
?>
```

O exemplo acima produzirá:

```
O valor de a é 1
O valor de b é 2
```

### Veja também

- [create\_function()](function.create-function.md) - Cria uma função dinamicamente avaliando uma string de código
- [runkit7\_function\_redefine()](function.runkit7-function-redefine.md) - Substitui uma definição de função por uma nova implementação
- [runkit7\_function\_copy()](function.runkit7-function-copy.md) - Copia uma função para um novo nome de função
- [runkit7\_function\_rename()](function.runkit7-function-rename.md) - Altera o nome de uma função
- [runkit7\_function\_remove()](function.runkit7-function-remove.md) - Remove uma definição de função
- [runkit7\_method\_add()](function.runkit7-method-add.md) - Adiciona dinamicamente um novo método a uma determinada classe

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
