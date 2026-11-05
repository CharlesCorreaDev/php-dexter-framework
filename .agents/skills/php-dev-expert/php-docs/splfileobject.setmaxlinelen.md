# Define o comprimento máximo da linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.setmaxlinelen.php

---

# SplFileObject::setMaxLineLen

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::setMaxLineLen — Define o comprimento máximo da linha

### Descrição

public function **SplFileObject::setMaxLineLen**([int](language.types.integer.md) `$maxLength`): [void](language.types.void.md)

Define o comprimento máximo de uma linha a ser lida.

### Parâmetros

`maxLength`
:   O comprimento máximo de uma linha.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança [DomainException](class.domainexception.md) quando
`maxLength` é menor que zero.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::setMaxLineLen()****

```
<?php
$file = new SplFileObject("lipsum.txt");
$file->setMaxLineLen(20);
foreach ($file as $line) {
    echo $line . "\n";
}
?>
```

Conteúdo de lipsum.txt

```
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Duis nec sapien felis, ac sodales nisl.
Nulla vitae magna vitae purus aliquet consequat.
```

O exemplo acima produzirá
algo semelhante a:

```
Lorem ipsum dolor s
it amet, consectetu
r adipiscing elit.

Duis nec sapien fel
is, ac sodales nisl
.

Nulla vitae magna v
itae purus aliquet
consequat.
```

### Veja também

- [SplFileObject::getMaxLineLen()](splfileobject.getmaxlinelen.md) - Obtém o comprimento máximo da linha

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
