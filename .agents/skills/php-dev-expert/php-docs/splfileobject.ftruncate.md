# Trunca o arquivo para um determinado comprimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.ftruncate.php

---

# SplFileObject::ftruncate

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::ftruncate — Trunca o arquivo para um determinado comprimento

### Descrição

public function **SplFileObject::ftruncate**([int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

Trunca o arquivo para `size` bytes.

### Parâmetros

`size`
:   O tamanho para o qual truncar.

    > **Nota**:
    >
    > Se `size` for maior que o arquivo, ele será estendido com bytes nulos.
    >
    > Se `size` for menor que o arquivo, os dados extras serão perdidos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::ftruncate()****

```
<?php
// Cria arquivo contendo "Hello World!"
$file = new SplFileObject("/tmp/ftruncate", "w+");
$file->fwrite("Hello World!");

// Trunca para 5 bytes
$file->ftruncate(5);

// Rebobina e lê os dados
$file->rewind();
echo $file->fgets();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Hello
```

### Veja também

- [ftruncate()](function.ftruncate.md) - Trunca um arquivo a um tamanho especificado

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
