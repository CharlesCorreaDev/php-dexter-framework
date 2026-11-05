# Define/obtém as várias opções de asserção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.assert-options.php

---

# assert\_options

(PHP 4, PHP 5, PHP 7, PHP 8)

assert\_options — Define/obtém as várias opções de asserção

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.3.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **assert\_options**([int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value` = ?): [mixed](language.types.mixed.md)

Define as várias opções de controle de [assert()](function.assert.md) ou apenas consulta
suas várias configurações.

> **Nota**:
>
> O uso de **assert\_options()** é desencorajado
> em favor de definir e obter as diretivas
> [zend.assertions](ini.core.md#ini.zend.assertions) e
> [assert.exception](info.configuration.md#ini.assert.exception) do php.ini com
> [ini\_set()](function.ini-set.md) e [ini\_get()](function.ini-get.md), respectivamente.

### Parâmetros

`option`
:   **Opções de Asserção**

    | Opção | Configuração INI | Valor padrão | Descrição |
    | --- | --- | --- | --- |
    | ASSERT\_ACTIVE | assert.active | 1 | habilita avaliação de [assert()](function.assert.md) |
    | ASSERT\_EXCEPTION | assert.exception | 1 | lança uma exceção [AssertionError](class.assertionerror.md) para cada asserção falhada |
    | ASSERT\_WARNING | assert.warning | 1 | emite um alerta PHP para cada asserção falhada |
    | ASSERT\_BAIL | assert.bail | 0 | termina a execução em asserções falhadas |
    | ASSERT\_QUIET\_EVAL | assert.quiet\_eval | 0 | desabilita registro de erros durante avaliação de expressões de asserção. Removido a partir do PHP 8.0.0. |
    | ASSERT\_CALLBACK | assert.callback | (**`null`**) | Função de retorno a ser chamada em asserções falhadas |

`value`
:   Um novo valor opcional para a opção.

    A função de retorno definida via **`ASSERT_CALLBACK`** ou
    [assert.callback](info.configuration.md#ini.assert.callback)
    deve ter a seguinte assinatura:

    function **assert\_callback**(  
        [string](language.types.string.md) `$file`,  
        [int](language.types.integer.md) `$line`,  
        [?](language.types.null.md)[string](language.types.string.md) `$assertion`,  
        [string](language.types.string.md) `$description` = ?  
    ): [void](language.types.void.md)

    `file`
    :   O arquivo onde [assert()](function.assert.md) foi chamada.

    `line`
    :   A linha onde [assert()](function.assert.md) foi chamada.

    `assertion`
    :   Antes do PHP 8.0.0, a asserção que foi passada a [assert()](function.assert.md),
        mas somente quando a asserção for informada como uma string.
        (Se a asserção for uma condição booleana, este parâmetro será uma string vazia.)
        A partir do PHP 8.0.0, este parâmetro é sempre **`null`**.

    `description`
    :   A descrição que foi passada a [assert()](function.assert.md).

Passar uma string vazia no parâmetro `value` redefine a função de retorno da asserção.

### Valor Retornado

Retorna a configuração original de qualquer opção.

### Erros/Exceções

Se `option` não for uma opção válida, uma exceção
[ValueError](class.valueerror.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **assert\_options()** agora foi descontinuada. |
| 8.0.0 | Se `option` não for uma opção válida, uma exceção [ValueError](class.valueerror.md) é lançada. Anteriormente, **`false`** era retornado. |

### Examples

**Exemplo #1 Exemplo de **assert\_options()****

```
<?php
// Esta é nossa função para manipular
// falhas de asserção
function assert_failure($file, $line, $assertion, $message)
{
    echo "A asserção $assertion em $file na linha $line falhou: $message";
}

// Esta é nossa função de teste
function test_assert($parameter)
{
    assert(is_bool($parameter));
}

// Define as opções de asserção
assert_options(ASSERT_ACTIVE,   true);
assert_options(ASSERT_BAIL,     true);
assert_options(ASSERT_WARNING,  false);
assert_options(ASSERT_CALLBACK, 'assert_failure');

// Cria uma asserção que iria falhar
test_assert(1);

// Isto nunca é alcançado devido a ASSERT_BAIL
// definido como verdadeiro
echo 'Nunca alcançado';
?>
```

### Veja também

- [assert()](function.assert.md) - Executa uma asserção

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
