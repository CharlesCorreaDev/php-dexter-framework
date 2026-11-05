# Recupera o nome do arquivo onde o erro ocorreu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.getfile.php

---

# Error::getFile

(PHP 7, PHP 8)

Error::getFile — Recupera o nome do arquivo onde o erro ocorreu

### Descrição

final public function **Error::getFile**(): [string](language.types.string.md)

Recupera o nome do arquivo onde o erro ocorreu.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo onde o erro ocorreu.

### Examples

**Exemplo #1 Exemplo do método **Error::getFile()****

```
<?php
try {
    throw new Error;
} catch(Error $e) {
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
