# Retorna uma string descrevendo um erro no soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-strerror.php

---

# socket\_strerror

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_strerror — Retorna uma string descrevendo um erro no soquete

### Descrição

function **socket\_strerror**([int](language.types.integer.md) `$error_code`): [string](language.types.string.md)

A função **socket\_strerror()** recebe o código de erro no soquete no
parâmetro `error_code` como retornado pela função
[socket\_last\_error()](function.socket-last-error.md) e retorna o texto explanatório
correspondente.

> **Nota**:
>
> Embora as mensagens de erro geradas pela extensão do soquete estejam em
> inglês, as mensagens do sistema recuperadas com esta função aparecerão
> dependendo da localidade atual (**`LC_MESSAGES`**).

### Parâmetros

`error_code`
:   Um número de erro de soquete válido, provavelmente produzido por
    [socket\_last\_error()](function.socket-last-error.md).

### Valor Retornado

Retorna a mensagem de erro associada com o parâmetro
`error_code`.

### Examples

**Exemplo #1 Exemplo de **socket\_strerror()****

```
<?php
if (false == ($socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP))) {
   echo "socket_create() falhou. Motivo: " . socket_strerror(socket_last_error()) . "\n";
}

if (false == (@socket_bind($socket, '127.0.0.1', 80))) {
   echo "socket_bind() falhou. Motivo: " . socket_strerror(socket_last_error($socket)) . "\n";
}
?>
```

A saída esperada do exemplo acima (assumindo que o script
não seja executado com privilégios de root):

```
socket_bind() falhou. Motivo: Permission denied
```

### Veja também

- [socket\_accept()](function.socket-accept.md) - Aceita uma conexão em um soquete
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)

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
