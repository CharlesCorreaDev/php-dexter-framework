# Obtém o número da linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.key.php

---

# SplFileObject::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::key — Obtém o número da linha

### Descrição

public function **SplFileObject::key**(): [int](language.types.integer.md)

Obtém o número da linha atual.

> **Nota**:
>
> Este número pode não refletir o número real da linha no arquivo
> se [SplFileObject::setMaxLineLen()](splfileobject.setmaxlinelen.md) for usado
> para ler comprimentos fixos do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da linha atual.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::key()****

```
<?php
$file = new SplFileObject("lipsum.txt");
foreach ($file as $line) {
    echo $file->key() . ". " . $line;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
0. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
1. Duis nec sapien felis, ac sodales nisl.
2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
```

**Exemplo #2 Exemplo de **SplFileObject::key()** com [SplFileObject::setMaxLineLen()](splfileobject.setmaxlinelen.md)**

```
<?php
$file = new SplFileObject("lipsum.txt");
$file->setMaxLineLen(20);
foreach ($file as $line) {
    echo $file->key() . ". " . $line . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
0. Lorem ipsum dolor s
1. it amet, consectetu
2. r adipiscing elit.
3.

4. Duis nec sapien fel
5. is, ac sodales nisl
6. .

7. Lorem ipsum dolor s
8. it amet, consectetu
9. r adipiscing elit.
```

### Veja também

- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- [SplFileObject::seek()](splfileobject.seek.md) - Aponta para uma linha especificada
- [SplFileObject::next()](splfileobject.next.md) - Lê próxima linha
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
