# Determina se um descritor de arquivo é um terminal interativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-isatty.php

---

# posix\_isatty

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_isatty — Determina se um descritor de arquivo é um terminal interativo

### Descrição

function **posix\_isatty**([resource](language.types.resource.md)|[int](language.types.integer.md) `$file_descriptor`): [bool](language.types.boolean.md)

Determina se o descritor de arquivo `file_descriptor` se refere a
um dispositivo de tipo de terminal válido.

### Parâmetros

`file_descriptor`
:   O descritor de arquivo, que deve ser um
    [resource](language.types.resource.md) de arquivo ou um [int](language.types.integer.md). Um [int](language.types.integer.md)
    será interpretado como um descritor de arquivo que pode ser passado diretamente
    para a chamada de sistema subjacente.

### Valor Retornado

Retorna **`true`** se `file_descriptor` for um descritor aberto conectado
a um terminal e **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora emite um **`E_WARNING`** quando um `file_descriptor` inválido é encontrado. |
| 8.4.0 | Define o número de erro para **`EBADF`** quando o fluxo/descritor de arquivo informado for inválido. |
| 8.3.0 | Erros de tipo **`E_WARNING`** agora são gerados para conversões forçadas de inteiros seguindo a semântica usual de coerção de tipo do PHP. |

### Veja também

- [posix\_ttyname()](function.posix-ttyname.md) - Determina o nome do dispositivo de terminal
- [stream\_isatty()](function.stream-isatty.md) - Verifica se um fluxo é um TTY

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
