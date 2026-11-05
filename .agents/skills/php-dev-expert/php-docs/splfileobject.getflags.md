# Obtém as opções para o SplFileObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.getflags.php

---

# SplFileObject::getFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::getFlags — Obtém as opções para o SplFileObject

### Descrição

public function **SplFileObject::getFlags**(): [int](language.types.integer.md)

Obtém as opções definidas para uma instância de SplFileObject como um [int](language.types.integer.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [int](language.types.integer.md) representando as opções.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::getFlags()****

```
<?php
$file = new SplFileObject(__FILE__, "r");

if ($file->getFlags() & SplFileObject::SKIP_EMPTY) {
    echo "Skipping empty lines\n";
} else {
    echo "Not skipping empty lines\n";
}

$file->setFlags(SplFileObject::SKIP_EMPTY);

if ($file->getFlags() & SplFileObject::SKIP_EMPTY) {
    echo "Skipping empty lines\n";
} else {
    echo "Not skipping empty lines\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Not skipping empty lines
Skipping empty lines
```

### Veja também

- [SplFileObject::setFlags()](splfileobject.setflags.md) - Define as opções para o SplFileObject

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
