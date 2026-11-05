# Trunca o descritor de arquivo fd para o deslocamento em bytes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dio-truncate.php

---

# dio\_truncate

(PHP 4 >= 4.2.0, PHP 5 < 5.1.0)

dio\_truncate — 
Trunca o descritor de arquivo fd para o deslocamento em bytes

### Descrição

function **dio\_truncate**([resource](language.types.resource.md) `$fd`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

**dio\_truncate()** trunca um arquivo para no máximo
`offset` bytes de tamanho.

Se o arquivo era anteriormente maior do que esse tamanho, os dados extras são
perdidos. Se o arquivo era anteriormente menor, não é especificado se o
arquivo permanece inalterado ou é estendido. No último caso, a parte
estendida é preenchida com bytes zero.

### Parâmetros

`fd`
:   O descritor de arquivo retornado por [dio\_open()](function.dio-open.md).

`offset`
:   O deslocamento (offset) em bytes

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

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
