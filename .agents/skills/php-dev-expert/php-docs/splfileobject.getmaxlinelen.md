# Obtém o comprimento máximo da linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.getmaxlinelen.php

---

# SplFileObject::getMaxLineLen

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::getMaxLineLen — Obtém o comprimento máximo da linha

### Descrição

public function **SplFileObject::getMaxLineLen**(): [int](language.types.integer.md)

Obtém o comprimento máximo da linha definido por [SplFileObject::setMaxLineLen()](splfileobject.setmaxlinelen.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o comprimento máximo da linha se um tiver sido definido com
[SplFileObject::setMaxLineLen()](splfileobject.setmaxlinelen.md), o padrão é `0`.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::getMaxLineLen()****

```
<?php
$file = new SplFileObject("file.txt");
var_dump($file->getMaxLineLen());

$file->setMaxLineLen(20);
var_dump($file->getMaxLineLen());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(0)
int(20)
```

### Veja também

- [SplFileObject::setMaxLineLen()](splfileobject.setmaxlinelen.md) - Define o comprimento máximo da linha

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
