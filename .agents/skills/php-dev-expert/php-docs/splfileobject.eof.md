# Chegou ao final do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.eof.php

---

# SplFileObject::eof

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::eof — Chegou ao final do arquivo

### Descrição

public function **SplFileObject::eof**(): [bool](language.types.boolean.md)

Determina se o final do arquivo foi alcançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o arquivo estiver no final (EOF), **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::eof()****

```
<?php
$file = new SplFileObject("fruits.txt");
while ( ! $file->eof()) {
    echo $file->fgets();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
apple
banana
cherry
date
elderberry
```

### Veja também

- [SplFileObject::valid()](splfileobject.valid.md) - Não está no final do arquivo (EOF)
- [feof()](function.feof.md) - Testa pelo fim-de-arquivo em um ponteiro de arquivo

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
