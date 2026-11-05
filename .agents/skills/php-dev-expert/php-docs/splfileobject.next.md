# Lê próxima linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.next.php

---

# SplFileObject::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::next — Lê próxima linha

### Descrição

public function **SplFileObject::next**(): [void](language.types.void.md)

Avança para a próxima linha no arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::next()****

```
<?php
// Lê o arquivo linha por linha
$file = new SplFileObject("misc.txt");
while (!$file->eof()) {
    echo $file->current();
    $file->next();
}
?>
```

### Veja também

- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- [SplFileObject::key()](splfileobject.key.md) - Obtém o número da linha
- [SplFileObject::seek()](splfileobject.seek.md) - Aponta para uma linha especificada
- [SplFileObject::rewind()](splfileobject.rewind.md) - Rebobina o arquivo para a primeira linha
- [SplFileObject::valid()](splfileobject.valid.md) - Não está no final do arquivo (EOF)

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
