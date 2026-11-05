# Vincula um nome a um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-bind.php

---

# socket\_bind

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_bind — Vincula um nome a um soquete

### Descrição

function **socket\_bind**([Socket](class.socket.md) `$socket`, [string](language.types.string.md) `$address`, [int](language.types.integer.md) `$port` = 0): [bool](language.types.boolean.md)

Vincula o nome informado em `address` ao soquete
descrito por `socket`. Isto deve ser feito antes
que uma conexão seja estabelecida usando [socket\_connect()](function.socket-connect.md)
ou [socket\_listen()](function.socket-listen.md).

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md).

`address`
:   Se o soquete for da família **`AF_INET`**, o parâmetro
    `address` será um IP na notação de quatro inteiros separados por pontos
    (ex.: `127.0.0.1`).

    Se o soquete for da família **`AF_UNIX`**, o parâmetro
    `address` será o caminho para um
    soquete de domínio Unix (ex.: /tmp/my.sock).

`port` (opcional)
:   O parâmetro `port` é usado somente ao
    vincular um soquete **`AF_INET`**, e designa
    a porta na qual as conexões serão recebidas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

O código de erro pode ser recuperado com [socket\_last\_error()](function.socket-last-error.md).
Esse código pode ser passado para [socket\_strerror()](function.socket-strerror.md) para obter uma
explicação textual do erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `port` é menor que 0 ou maior que 65535. |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **socket\_bind()** para definir o endereço da origem**

```
<?php
// Cria um novo soquete
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Uma lista de exemplo de endereços IP de propriedade do computador
$sourceips['kevin']    = '127.0.0.1';
$sourceips['madcoder'] = '127.0.0.2';

// Vincula o endereço de origem
socket_bind($sock, $sourceips['madcoder']);

// Conexão ao endereço de destino
socket_connect($sock, '127.0.0.1', 80);

// Escreve
$request = 'GET / HTTP/1.1' . "\r\n" .
           'Host: example.com' . "\r\n\r\n";
socket_write($sock, $request);

// Fecha
socket_close($sock);

?>
```

### Notas

> **Nota**:
>
> Esta função precisa ser usada no soquete antes de
> [socket\_connect()](function.socket-connect.md).

### Veja também

- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_create()](function.socket-create.md) - Cria um soquete (ponto de extremidade para comunição)
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete

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
