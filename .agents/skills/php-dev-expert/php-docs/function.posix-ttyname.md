# Determina o nome do dispositivo de terminal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-ttyname.php

---

# posix\_ttyname

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_ttyname — Determina o nome do dispositivo de terminal

### Descrição

function **posix\_ttyname**([resource](language.types.resource.md)|[int](language.types.integer.md) `$file_descriptor`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma [string](language.types.string.md) para o caminho absoluto para o dispositivo
de terminal atual que está aberto no descritor de arquivo
`file_descriptor`.

### Parâmetros

`file_descriptor`
:   O descritor de arquivo, que deve ser um
    [resource](language.types.resource.md) de arquivo ou um [int](language.types.integer.md). Um [int](language.types.integer.md)
    será interpretado como um descritor de arquivo que pode ser passado diretamente
    para a chamada de sistema subjacente.

### Valor Retornado

Em caso de sucesso, retorna uma [string](language.types.string.md) do caminho absoluto do
`file_descriptor`. Em caso de falha, retorna **`false`**.

### Erros/Exceções

Caso o valor de `file_descriptor` seja um inteiro inválido,
um **`E_WARNING`** é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | last\_error agora é definido para **`EBADF`** quando um `file_descriptor` inválido é encontrado. |
| 8.3.0 | Erros do tipo **`E_WARNING`** agora são gerados para conversões forçadas de inteiros seguindo a semântica usual de coerção de tipo PHP. |
| 8.3.0 | Caso o valor de `file_descriptor` seja um inteiro inválido, um **`E_WARNING`** é gerado. |

### Veja também

- [posix\_isatty()](function.posix-isatty.md) - Determina se um descritor de arquivo é um terminal interativo
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
