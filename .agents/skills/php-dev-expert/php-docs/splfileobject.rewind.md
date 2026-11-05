# Rebobina o arquivo para a primeira linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.rewind.php

---

# SplFileObject::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::rewind — Rebobina o arquivo para a primeira linha

### Descrição

public function **SplFileObject::rewind**(): [void](language.types.void.md)

Rebobina o arquivo de volta para a primeira linha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança um [RuntimeException](class.runtimeexception.md) se não puder ser rebobinado.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::rewind()****

```
<?php
$file = new SplFileObject("misc.txt");

// Loop sobre todo o arquivo
foreach ($file as $line) { }

// Rebobina para a primeira linha
$file->rewind();

// Saída da primeira linha
echo $file->current();
?>
```

### Veja também

- [SplFileObject::current()](splfileobject.current.md) - Recupera linha atual do arquivo
- [SplFileObject::key()](splfileobject.key.md) - Obtém o número da linha
- [SplFileObject::seek()](splfileobject.seek.md) - Aponta para uma linha especificada
- [SplFileObject::next()](splfileobject.next.md) - Lê próxima linha
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
