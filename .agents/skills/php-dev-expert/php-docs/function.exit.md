# Termina o script atual com um código ou uma mensagem de status

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exit.php

---

# exit

(PHP 4, PHP 5, PHP 7, PHP 8)

exit — Termina o script atual com um código ou uma mensagem de status

### Descrição

function **exit**([string](language.types.string.md)|[int](language.types.integer.md) `$status` = 0): [never](language.types.never.md)

Termina a execução do script.
[Funções de desligamento](function.register-shutdown-function.md)
e [destrutores de objeto](language.oop5.decon.md#language.oop5.decon.destructor)
sempre serão executados mesmo que **exit()** seja chamada.
Entretanto, blocos `finally` nunca são executados.

Um código de saída igual a `0` é usado para indicar que o programa
foi bem sucedido em suas tarefas.
Qualquer outro valor indica que algum tipo de erro ocorreu durante a execução.

**exit()** é uma função especial
porque tem um token dedicado no analisador,
e como tal pode ser usada como uma instrução (ou seja, sem parênteses) para
terminar o script com o código de status padrão.

**Cuidado**

Não é possível desabilitar ou criar uma função com namespace ocultando
a função global **exit()**.

### Parâmetros

`status`
:   Se `status` for uma string,
    esta função exibe o `status` logo antes de sair.
    O código de saída retornado pelo PHP será `0`.

    Se `status` for um [int](language.types.integer.md),
    o código de saída retornado pelo PHP será `status`.
    > **Nota**:
    >
    > Códigos de saída devem estar no intervalo `0` a `254`,
    > o código de saída `255` é reservado pelo PHP e não deve ser usado.

    **Aviso**

    Antes do PHP 8.4.0, **exit()** não seguia o padrão do PHP de
    [conversão automática de tipos](language.types.type-juggling.md#language.types.type-juggling.function) e
    nem respeitava a
    declaração
    [`strict_types`](language.types.declarations.md#language.types.declarations.strict).

    Qualquer valor que não fosse do tipo [int](language.types.integer.md) era convertido para [string](language.types.string.md),
    incluindo valores dos tipos [resource](language.types.resource.md) e [array](language.types.array.md).
    A partir do PHP 8.4.0, ela segue a conversão automática de tipos e lança uma
    exceção do tipo [TypeError](class.typeerror.md) para valores inválidos.

### Valor Retornado

Como a função termina o script PHP, nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **exit()** agora é uma função verdadeira, portanto segue a [conversão automática de tipos](language.types.type-juggling.md#language.types.type-juggling.function) usual, é afetada pela declaração [`strict_types`](language.types.declarations.md#language.types.declarations.strict), pode ser chamada com argumentos nomeados, e pode ser uma [função variável](functions.variable-functions.md). |
| 8.4.0 | Uma chamada a **exit()** sem parâmetros de dentro de [funções de desligamento](function.register-shutdown-function.md) ou de [destrutores de objetos](language.oop5.decon.md#language.oop5.decon.destructor) agora redefine o código de saída para `0`; anteriormente, o código de saída definido por uma chamada anterior de **exit()** era mantido. |

### Examples

**Exemplo #1 Exemplo básico de **exit()****

```
<?php

// sai do programa normalmente
exit();
exit(0);

// sai com um código de erro
exit(1);

?>
```

**Exemplo #2 Exemplo de **exit()** com uma [string](language.types.string.md)**

```
<?php

$filename = '/caminho/para/arquivo-de-dados';
$file = fopen($filename, 'r')
    or exit("não foi possível abrir o arquivo ($filename)");

?>
```

**Exemplo #3 Funções de desligamento e destrutores de objeto são executados independentemente**

```
<?php
class Foo
{
    public function __destruct()
    {
        echo 'Destrutor: ' . __METHOD__ . '()' . PHP_EOL;
    }
}

function shutdown()
{
    echo 'Desligamento: ' . __FUNCTION__ . '()' . PHP_EOL;
}

$foo = new Foo();
register_shutdown_function('shutdown');

exit();
echo 'Este texto não será mostrado.';
?>
```

O exemplo acima produzirá:

```
Desligamento: shutdown()
Destrutor: Foo::__destruct()
```

**Exemplo #4 **exit()** como uma instrução**

```
<?php

// sai do programa normalmente com um código de saída igual a 0
exit;

?>
```

### Notas

**Aviso**

Antes do PHP 8.4.0, **exit()** era uma construção de linguagem
e não uma função, portanto não era possível chamá-la usando
[funções variáveis](functions.variable-functions.md),
ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

### Veja também

- [register\_shutdown\_function()](function.register-shutdown-function.md) - Registra uma função para ser executada no final da execução do script
- [Funções de desligamento](function.register-shutdown-function.md)
- [Destrutores de objeto](language.oop5.decon.md#language.oop5.decon.destructor)

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
