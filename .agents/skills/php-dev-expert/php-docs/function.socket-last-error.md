# Retorna o último erro no soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-last-error.php

---

# socket\_last\_error

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_last\_error — Retorna o último erro no soquete

### Descrição

function **socket\_last\_error**([?](language.types.null.md)[Socket](class.socket.md) `$socket` = **`null`**): [int](language.types.integer.md)

Se uma instância de [Socket](class.socket.md) for passada para esta função, o último erro
que ocorreu neste soquete específico será retornado. Se `socket` for
**`null`**, o código de erro da última função de soquete com falha será retornado.
O último é particularmente útil para funções como
[socket\_create()](function.socket-create.md) que não retorna um soquete em
caso de falha e [socket\_select()](function.socket-select.md) que pode falhar por motivos
não diretamente ligados a um soquete específico. O código de erro é adequado
para ser usado em [socket\_strerror()](function.socket-strerror.md) que retorna uma string
descrevendo o código de erro fornecido.

Se nenhum erro ocorreu ou o erro foi eliminado com
[socket\_clear\_error()](function.socket-clear-error.md), a função retorna `0`.

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

### Valor Retornado

Esta função retorna um código de erro de soquete.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `socket` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **socket\_last\_error()****

```
<?php
$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if ($socket === false) {
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Não foi possível criar o soquete: [$errorcode] $errormsg");
}
?>
```

### Notas

> **Nota**:
>
> **socket\_last\_error()** não limpa o código de erro,
> [socket\_clear\_error()](function.socket-clear-error.md) deve ser usado para este fim.

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
