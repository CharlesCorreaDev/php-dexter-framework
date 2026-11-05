# Obtém linha do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fgets.php

---

# SplFileObject::fgets

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fgets — Obtém linha do arquivo

### Descrição

public function **SplFileObject::fgets**(): [string](language.types.string.md)

Obtém uma linha do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a próxima linha do arquivo.

### Erros/Exceções

Lança uma [RuntimeException](class.runtimeexception.md) se o arquivo não puder ser lido.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fgets()****

Este exemplo simplesmente imprime o conteúdo de `file.txt` linha por linha.

```
<?php
$file = new SplFileObject("file.txt");
while (!$file->eof()) {
    echo $file->fgets();
}
?>
```

### Veja também

- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [SplFileObject::fgetss()](splfileobject.fgetss.md) - Obtém linha do arquivo e remove tags HTML
- [SplFileObject::fgetc()](splfileobject.fgetc.md) - Obtém caractere do arquivo
- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo

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
