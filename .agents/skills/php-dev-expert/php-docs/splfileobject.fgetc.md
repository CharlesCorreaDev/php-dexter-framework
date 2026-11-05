# Obtém caractere do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fgetc.php

---

# SplFileObject::fgetc

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::fgetc — Obtém caractere do arquivo

### Descrição

public function **SplFileObject::fgetc**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém um caractere do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo um único caractere lido do arquivo ou **`false`** no EOF.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fgetc()****

```
<?php
$file = new SplFileObject('file.txt');
while (false !== ($char = $file->fgetc())) {
    echo "$char\n";
}
?>
```

### Veja também

- [SplFileObject::fgets()](splfileobject.fgets.md) - Obtém linha do arquivo

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
