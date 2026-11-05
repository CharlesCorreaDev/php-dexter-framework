# Obtém o arquivo no qual a exceção foi criada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.getfile.php

---

# Exception::getFile

(PHP 5, PHP 7, PHP 8)

Exception::getFile — Obtém o arquivo no qual a exceção foi criada

### Descrição

final public function **Exception::getFile**(): [string](language.types.string.md)

Obtém o nome do arquivo de onde a exceção foi criada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo no qual a exceção foi criada.

### Examples

**Exemplo #1 Exemplo da **Exception::getFile()****

```
<?php
try {
    throw new Exception;
} catch(Exception $e) {
    echo $e->getFile();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/home/bjori/tmp/ex.php
```

### Veja também

- [Throwable::getFile()](throwable.getfile.md) - Obtém o arquivo no qual o objeto foi criado

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
