# Define as opções para o SplFileObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.setflags.php

---

# SplFileObject::setFlags

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::setFlags — Define as opções para o SplFileObject

### Descrição

public function **SplFileObject::setFlags**([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

Define as opções a serem usadas pelo [SplFileObject](class.splfileobject.md).

### Parâmetros

`flags`
:   Máscara de bits das opções a serem definidas. Veja
    [Constantes SplFileObject](class.splfileobject.md#splfileobject.constants)
    para as opções disponíveis.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::setFlags()****

```
<?php
$file = new SplFileObject("data.csv");
$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $fields) {
    var_dump($fields);
}
?>
```

### Veja também

- [SplFileObject::getFlags()](splfileobject.getflags.md) - Obtém as opções para o SplFileObject

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
