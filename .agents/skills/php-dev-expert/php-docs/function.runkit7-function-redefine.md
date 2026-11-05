# Substitui uma definição de função por uma nova implementação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-function-redefine.php

---

# runkit7\_function\_redefine

(PECL runkit7 >= Unknown)

runkit7\_function\_redefine — 
Substitui uma definição de função por uma nova implementação

### Descrição

function **runkit7\_function\_redefine**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md) `$argument_list`,  
    [string](language.types.string.md) `$code`,  
    [bool](language.types.boolean.md) `$return_by_reference` = **`null`**,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

function **runkit7\_function\_redefine**(  
    [string](language.types.string.md) `$function_name`,  
    [Closure](class.closure.md) `$closure`,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

> **Nota**:
>
> Por padrão, apenas
> funções criadas pelo usuário podem ser removidas, renomeadas ou modificadas. Para
> sobrescrever funções internas, a configuração
> `runkit.internal_override` deve ser habilitada no php.ini.

### Parâmetros

`function_name`
:   Nome da função a ser redefinida

`argument_list`
:   Nova lista de argumentos a serem aceitos pela função

`code`
:   Implementação de novo código

`closure`
:   Um [closure](class.closure.md) que define a função.

`return_by_reference`
:   Informa se a função deve retornar por referência.

`doc_comment`
:   O comentário documental da função.

`return_type`
:   O tipo de retorno da função.

`is_strict`
:   Informa se a função se comporta como se tivesse sido declarada em um arquivo com `strict_types=1`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **runkit7\_function\_redefine()****

```
<?php
function testme() {
  echo "Implementação original de Testme\n";
}
testme();
runkit7_function_redefine('testme','','echo "Nova implementação de Testme\n";');
testme();
?>
```

O exemplo acima produzirá:

```
Implementação original de Testme
Nova implementação de Testme
```

### Veja também

- [runkit7\_function\_add()](function.runkit7-function-add.md) - Adiciona uma nova função, semelhante a create\_function
- [runkit7\_function\_copy()](function.runkit7-function-copy.md) - Copia uma função para um novo nome de função
- [runkit7\_function\_rename()](function.runkit7-function-rename.md) - Altera o nome de uma função
- [runkit7\_function\_remove()](function.runkit7-function-remove.md) - Remove uma definição de função
- [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) - Altera dinamicamente o código do método fornecido

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
