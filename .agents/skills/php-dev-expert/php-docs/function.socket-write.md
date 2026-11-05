# Escreve em um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.socket-write.php

---

# socket\_write

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

socket\_write — Escreve em um soquete

### Descrição

function **socket\_write**([Socket](class.socket.md) `$socket`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

A função **socket\_write()** escreve no soquete
`socket` os dados informados em
`data`.

### Parâmetros

`socket`

`data`
:   O buffer para escrita.

`length`
:   O parâmetro opcional `length` pode especificar um
    comprimento alternativo de bytes escritos no soquete. Se esse comprimento for
    maior que o comprimento de `data`,
    ele será truncado silenciosamente para o comprimento de `data`.

### Valor Retornado

Retorna o número de bytes escritos com sucesso no soquete ou **`false`** em caso de falha.
O código de erro pode ser recuperado com
[socket\_last\_error()](function.socket-last-error.md). Este código pode ser passado para
[socket\_strerror()](function.socket-strerror.md) para obter uma explicação textual do
erro.

> **Nota**:
>
> É perfeitamente válido que **socket\_write()** retorne
> zero, o que significa que nenhum byte foi escrito. Certifique-se de usar o
> operador `===` para verificar **`false`** em caso de
> erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `socket` agora espera uma instância de [Socket](class.socket.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `length` agora pode ser nulo. |

### Notas

> **Nota**:
>
> **socket\_write()** não escreve necessariamente todos os bytes
> do parâmetro `data` fornecido. É válido que, dependendo dos buffers
> de rede etc., apenas uma certa quantidade de dados, mesmo que um byte, seja escrita,
> embora `data` seja maior.
> Um laço precisa ser usado para assegurar que o resto de `data`
> seja transmitido.

### Veja também

- [socket\_accept()](function.socket-accept.md) - Aceita uma conexão em um soquete
- [socket\_bind()](function.socket-bind.md) - Vincula um nome a um soquete
- [socket\_connect()](function.socket-connect.md) - Inicia uma conexão em um soquete
- [socket\_listen()](function.socket-listen.md) - Escuta uma conexão em um soquete
- [socket\_read()](function.socket-read.md) - Lê um máximo de bytes de um soquete
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
