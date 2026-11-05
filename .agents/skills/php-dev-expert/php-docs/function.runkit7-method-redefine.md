# Altera dinamicamente o código do método fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-method-redefine.php

---

# runkit7\_method\_redefine

(PECL runkit7 >= Unknown)

runkit7\_method\_redefine — Altera dinamicamente o código do método fornecido

### Descrição

function **runkit7\_method\_redefine**(  
    [string](language.types.string.md) `$class_name`,  
    [string](language.types.string.md) `$method_name`,  
    [string](language.types.string.md) `$argument_list`,  
    [string](language.types.string.md) `$code`,  
    [int](language.types.integer.md) `$flags` = RUNKIT7\_ACC\_PUBLIC,  
    [string](language.types.string.md) `$doc_comment` = **`null`**,  
    [string](language.types.string.md) `$return_type` = ?,  
    [bool](language.types.boolean.md) `$is_strict` = ?  
): [bool](language.types.boolean.md)

function **runkit7\_method\_redefine**(  
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
:   A classe na qual o método será redefinido.

`method_name`
:   O nome do método a ser redefinido.

`argument_list`
:   Lista de argumentos delimitada por vírgulas para o método redefinido.

`code`
:   O novo código a ser avaliado quando `method_name`
    for chamado.

`closure`
:   Um [closure](class.closure.md) que define o método.

`flags`
:   O método redefinido pode ser
    **`RUNKIT7_ACC_PUBLIC`**,
    **`RUNKIT7_ACC_PROTECTED`** ou
    **`RUNKIT7_ACC_PRIVATE`**, opcionalmente combinado via OR binário com
    **`RUNKIT7_ACC_STATIC`**.

`doc_comment`
:   O comentário documental do método.

`return_type`
:   O tipo de retorno do método.

`is_strict`
:   Informa se o método deve se comportar como se tivesse sido declarado em um arquivo com `strict_types=1`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **runkit7\_method\_redefine()****

```
<?php
class Example {
    function foo() {
        return "foo!\n";
    }
}

// cria um objeto da classe Example
$e = new Example();

// exibe Example::foo() (antes da redefinição)
echo "Antes: " . $e->foo();

// Redefine o método 'foo'
runkit7_method_redefine(
    'Example',
    'foo',
    '',
    'return "bar!\n";',
    RUNKIT7_ACC_PUBLIC
);

// exibe Example::foo() (depois da redefinição)
echo "Depois: " . $e->foo();
?>
```

O exemplo acima produzirá:

```
Antes: foo!
Depois: bar!
```

### Veja também

- [runkit7\_method\_add()](function.runkit7-method-add.md) - Adiciona dinamicamente um novo método a uma determinada classe
- [runkit7\_method\_copy()](function.runkit7-method-copy.md) - Copia um método de uma classe para outra
- [runkit7\_method\_remove()](function.runkit7-method-remove.md) - Remove dinamicamente o método fornecido
- [runkit7\_method\_rename()](function.runkit7-method-rename.md) - Altera dinamicamente o nome do método fornecido
- [runkit7\_function\_redefine()](function.runkit7-function-redefine.md) - Substitui uma definição de função por uma nova implementação

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
