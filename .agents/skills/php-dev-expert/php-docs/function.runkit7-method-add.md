# Adiciona dinamicamente um novo método a uma determinada classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-method-add.php

---

# runkit7\_method\_add

(PECL runkit7 >= Unknown)

runkit7\_method\_add — Adiciona dinamicamente um novo método a uma determinada classe

### Descrição

function **runkit7\_method\_add**(  
    [string](language.types.string.md) `$class_name`,  
    [string](language.types.string.md) `$method_name`,  
    [string](language.types.string.md) `$argument_list`,  
    [string](language.types.string.md) `$code`,  
    [int](language.types.integer.md) `$flags` = RUNKIT7\_ACC\_PUBLIC,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

function **runkit7\_method\_add**(  
    [string](language.types.string.md) `$class_name`,  
    [string](language.types.string.md) `$method_name`,  
    [Closure](class.closure.md) `$closure`,  
    [int](language.types.integer.md) `$flags` = RUNKIT7\_ACC\_PUBLIC,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`class_name`
:   A classe à qual este método será adicionado.

`method_name`
:   O nome do método a ser adicionado.

`argument_list`
:   Lista de argumentos delimitada por vírgulas para o método recém-criado.

`code`
:   O código a ser avaliado quando `method_name`
    é chamado.

`closure`
:   Um [closure](class.closure.md) que define o método.

`flags`
:   O tipo de método a ser criado pode ser
    **`RUNKIT7_ACC_PUBLIC`**,
    **`RUNKIT7_ACC_PROTECTED`** ou
    **`RUNKIT7_ACC_PRIVATE`**, opcionalmente combinado via OR binário com
    **`RUNKIT7_ACC_STATIC`**.

`doc_comment`
:   O comentário documental do método.

`return_type`
:   O tipo de retorno do método.

`is_strict`
:   Informa se o método se comporta como se tivesse sido declarado em um arquivo com `strict_types=1`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **runkit7\_method\_add()****

```
<?php
class Example {
    function foo() {
        echo "foo!\n";
    }
}

// cria um objeto da classe Example
$e = new Example();

// Adiciona um novo método público
runkit7_method_add(
    'Example',
    'add',
    '$num1, $num2',
    'return $num1 + $num2;',
    RUNKIT7_ACC_PUBLIC
);

// adiciona 12 + 4
echo $e->add(12, 4);
?>
```

O exemplo acima produzirá:

```
16
```

### Veja também

- [runkit7\_method\_copy()](function.runkit7-method-copy.md) - Copia um método de uma classe para outra
- [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) - Altera dinamicamente o código do método fornecido
- [runkit7\_method\_remove()](function.runkit7-method-remove.md) - Remove dinamicamente o método fornecido
- [runkit7\_method\_rename()](function.runkit7-method-rename.md) - Altera dinamicamente o nome do método fornecido
- [runkit7\_function\_add()](function.runkit7-function-add.md) - Adiciona uma nova função, semelhante a create\_function

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
