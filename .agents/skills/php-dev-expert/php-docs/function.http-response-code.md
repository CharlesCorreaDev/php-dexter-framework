# Obtém ou define o código de resposta HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.http-response-code.php

---

# http\_response\_code

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

http\_response\_code — Obtém ou define o código de resposta HTTP

### Descrição

function **http\_response\_code**([int](language.types.integer.md) `$response_code` = 0): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Obtém ou define o código de resposta HTTP.

### Parâmetros

`response_code`
:   O opcional `response_code` definirá o código de resposta.

### Valor Retornado

Se `response_code` for fornecido, o código de status
anterior será retornado. Se `response_code` não for
fornecido, o código de status atual será retornado. Ambos os
valores terão como padrão um código de status `200` se usados ​​em um
ambiente de servidor web.

**`false`** será retornado se `response_code` não for
fornecido e a função não for chamada em um ambiente de servidor web (como em uma
aplicação CLI). **`true`** será retornado se
`response_code` for fornecido e a função não for chamada em um
ambiente de servidor web (mas somente quando nenhum status de resposta anterior
tiver sido definido).

### Examples

**Exemplo #1 Usando **http\_response\_code()** em um ambiente de servidor web**

```
<?php

// Obtém o código de resposta atual e define um novo
var_dump(http_response_code(404));

// Obtém o novo código de resposta
var_dump(http_response_code());
?>
```

O exemplo acima produzirá:

```
int(200)
int(404)
```

**Exemplo #2 Usando **http\_response\_code()** em um ambiente CLI**

```
<?php

// Obtém o código de resposta padrão atual
var_dump(http_response_code());

// Define um código de resposta
var_dump(http_response_code(201));

// Obtém o novo código de resposta
var_dump(http_response_code());
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
int(201)
```

### Veja também

- [header()](function.header.md) - Envia um cabeçalho HTTP bruto
- [headers\_list()](function.headers-list.md) - Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)

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
