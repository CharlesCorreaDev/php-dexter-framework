# Retorna ao início a posição de um ponteiro para um arquivo-gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzrewind.php

---

# gzrewind

(PHP 4, PHP 5, PHP 7, PHP 8)

gzrewind — Retorna ao início a posição de um ponteiro para um arquivo-gz

### Descrição

function **gzrewind**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Define o indicador de posição para o dado arquivo gz para o início
do arquivo.

### Parâmetros

`stream`
:   O ponteiro do arquivo gz. Ele deve ser válido e deve apontar para
    um arquivo aberto corretamente com [gzopen()](function.gzopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [gzseek()](function.gzseek.md) - Posiciona um ponteiro de arquivo gz
- [gztell()](function.gztell.md) - Indica a posição de leitura/gravação em um ponteiro para arquivo-gz

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
