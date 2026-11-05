# Aponta para uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fseek.php

---

# SplFileObject::fseek

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fseek — Aponta para uma posição

### Descrição

public function **SplFileObject::fseek**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_SET`**): [int](language.types.integer.md)

Aponta para uma posição no arquivo medida em bytes
a partir do início do arquivo, obtida ao adicionar o
`offset` à posição especificada por
`whence`.

### Parâmetros

`offset`
:   O deslocamento. Um valor negativo pode ser usado para mover-se para trás no arquivo o que
    é útil quando SEEK\_END é usado como o valor de `whence`.

`whence`
:   Os valores de `whence` são:

    - **`SEEK_SET`** - Define a posição igual a `offset` bytes.
    - **`SEEK_CUR`** - Define a posição para a localização atual mais `offset`.
    - **`SEEK_END`** - Define a posição para o final do arquivo mais `offset`.

    Se `whence` não for especificado, é assumido como **`SEEK_SET`**.

### Valor Retornado

Retorna 0 se a busca for bem-sucedida, -1 caso contrário. Note que buscar
além do EOF não é considerado um erro.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fseek()****

```
<?php
$file = new SplFileObject("somefile.txt");

// Lê a primeira linha
$data = $file->fgets();

// Move de volta para o início do arquivo
// Mesmo como $file->rewind();
$file->fseek(0);
?>
```

### Veja também

- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo

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
