# Lê um máximo de bytes de um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-read.php

---

# socket\_read

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_read — Lê um máximo de bytes de um soquete

### Descrição

function **socket\_read**([Socket](class.socket.md) `$socket`, [int](language.types.integer.md) `$length`, [int](language.types.integer.md) `$mode` = **`PHP_BINARY_READ`**): [string](language.types.string.md)|[false](language.types.singleton.md)

A função **socket\_read()** lê da instância [Socket](class.socket.md),
o `socket` criado pelas funções
[socket\_create()](function.socket-create.md) ou
[socket\_accept()](function.socket-accept.md).

### Parâmetros

`socket`
:   Uma instância de [Socket](class.socket.md) criada com [socket\_create()](function.socket-create.md)
    ou [socket\_accept()](function.socket-accept.md).

`length`
:   O número máximo de bytes lidos é especificado pelo
    parâmetro `length`. De outra forma, podem ser usados os caracteres
    `\r`, `\n`,
    ou `\0` para encerrar a leitura (dependendo do parâmetro `mode`,
    veja abaixo).

`mode`
:   O parâmetro opcional `mode` é uma constante nomeada:

    - **`PHP_BINARY_READ`** (Padrão) - usa a função de sistema
      `recv()`. Segura para ler dados binários.
    - **`PHP_NORMAL_READ`** - a leitura é interrompida em
      `\n` ou `\r`.

### Valor Retornado

**socket\_read()** retorna os dados como uma string em caso de sucesso,
ou **`false`** em caso de erro (inclusive se o servidor remoto tiver fechado a
conexão). O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md). Este código pode ser passado para
[socket\_strerror()](function.socket-strerror.md) para obter uma representação textual
do erro.

> **Nota**:
>
> **socket\_read()** retorna uma string de comprimento zero ("")
> quando não houver mais dados para leitura.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [socket\_accept()](function.socket-accept.md) - Aceita uma conexão em um soquete
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_last\_error()](function.socket-last-error.md) - Retorna o último erro no soquete
- [socket\_strerror()](function.socket-strerror.md) - Retorna uma string descrevendo um erro no soquete
- [socket\_write()](function.socket-write.md) - Escreve em um soquete

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
