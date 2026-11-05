# Indica a posição de leitura/gravação em um ponteiro para arquivo-gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gztell.php

---

# gztell

(PHP 4, PHP 5, PHP 7, PHP 8)

gztell — Indica a posição de leitura/gravação em um ponteiro para arquivo-gz

### Descrição

function **gztell**([resource](language.types.resource.md) `$stream`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém a posição do ponteiro de arquivo, ou seja, seu índice
dentro do arquivo.

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Precisa ser válido, e deve apontar para um
    arquivo aberto corretamente com [gzopen()](function.gzopen.md).

### Valor Retornado

A posição do ponteiro do arquivo ou **`false`** se um erro ocorrer.

### Veja também

- [gzopen()](function.gzopen.md) - Abre arquivo gz
- [gzseek()](function.gzseek.md) - Posiciona um ponteiro de arquivo gz
- [gzrewind()](function.gzrewind.md) - Retorna ao início a posição de um ponteiro para um arquivo-gz

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
