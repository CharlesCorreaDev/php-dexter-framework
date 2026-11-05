# Posiciona um ponteiro de arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzseek.php

---

# gzseek

(PHP 4, PHP 5, PHP 7, PHP 8)

gzseek — Posiciona um ponteiro de arquivo gz

### Descrição

function **gzseek**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_SET`**): [int](language.types.integer.md)

Define o indicador de posição de arquivo para o ponteiro de arquivo
dado no byte de deslocamento na sequência de arquivo. Equivalente a chamar (em C)
`gzseek(zp, offset, SEEK_SET)`.

Se o arquivo estiver aberto para leitura, esta função é emulada mas
pode ser extremamente lenta. Se o arquivo estiver aberto para escrita, apenas
buscas para frente são suportadas; **gzseek()** então comprime
uma sequência de zeros até a nova posição inicial.

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Ele deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

`offset`
:   O deslocamento buscado.

`whence`
:   Valores de `whence` podem ser:

    - **`SEEK_SET`** - Define a posição igual a `offset` bytes.
    - **`SEEK_CUR`** - Define a posição para a localização atual mais `offset`.

    Se `whence` não for especificado, assume-se que é
    **`SEEK_SET`**.

### Valor Retornado

Em caso de sucesso, retorna 0; caso contrário, retorna -1. Note que buscar
além do EOF não é considerado um erro.

### Examples

**Exemplo #1 Exemplo de **gzseek()****

```
<?php
$gz = gzopen('algumarquivo.gz', 'r');
gzseek($gz,2);
echo gzgetc($gz);
gzclose($gz);
?>
```

### Veja também

- [gztell()](function.gztell.md) - Indica a posição de leitura/gravação em um ponteiro para arquivo-gz
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
