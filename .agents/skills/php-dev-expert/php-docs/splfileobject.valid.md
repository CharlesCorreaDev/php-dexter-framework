# Não está no final do arquivo (EOF)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.valid.php

---

# SplFileObject::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::valid — Não está no final do arquivo (EOF)

### Descrição

public function **SplFileObject::valid**(): [bool](language.types.boolean.md)

Verifica se o final do arquivo (EOF) foi alcançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o final do arquivo (EOF) não foi alcançado, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::valid()****

```
<?php
// Loop sobre um arquivo, linha por linha
$file = new SplFileObject("file.txt");
while ($file->valid()) {
    echo $file->fgets();
}
?>
```

### Veja também

- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- [SplFileObject::key()](splfileobject.key.md) - Obtém o número da linha
- [SplFileObject::seek()](splfileobject.seek.md) - Aponta para uma linha especificada
- [SplFileObject::next()](splfileobject.next.md) - Lê próxima linha
- [SplFileObject::rewind()](splfileobject.rewind.md) - Rebobina o arquivo para a primeira linha

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
