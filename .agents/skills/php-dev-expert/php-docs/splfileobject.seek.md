# Aponta para uma linha especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.seek.php

---

# SplFileObject::seek

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::seek — Aponta para uma linha especificada

### Descrição

public function **SplFileObject::seek**([int](language.types.integer.md) `$line`): [void](language.types.void.md)

Aponta para a linha especificada no arquivo.

### Parâmetros

`line`
:   O número da linha baseada em zero para apontar.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança uma [LogicException](class.logicexception.md) se
`line` for negativa.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::seek()****

Este exemplo imprime a terceira linha do script, que é encontrada na posição 2.

```
<?php
$file = new SplFileObject(__FILE__);
$file->seek(2);
echo $file->current();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
$file->seek(2);
```

### Veja também

- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- [SplFileObject::key()](splfileobject.key.md) - Obtém o número da linha
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
