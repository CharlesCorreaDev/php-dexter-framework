# Recupera linha atual do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.current.php

---

# SplFileObject::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::current — Recupera linha atual do arquivo

### Descrição

public function **SplFileObject::current**(): [string](language.types.string.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

Recupera a linha atual do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recupera a linha atual do arquivo. Se a flag **`SplFileObject::READ_CSV`** estiver definida, este método retorna um array contendo a linha atual interpretada como dados CSV.
Se o final do arquivo for alcançado, é retornado **`false`**.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::current()****

```
<?php
$file = new SplFileObject(__FILE__);
foreach ($file as $k => $line) {
   echo ($file->key() + 1) . ': ' . $file->current();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1: <?php
2: $file = new SplFileObject(__FILE__);
3: foreach ($file as $line) {
4:     echo ($file->key() + 1) . ': ' . $file->current();
5: }
6: ?>
```

### Veja também

- [SplFileObject::key()](splfileobject.key.md) - Obtém o número da linha
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
