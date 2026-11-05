# Retorna os sinalizadores de entrada do arquivo Phar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.getpharflags.php

---

# PharFileInfo::getPharFlags

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::getPharFlags — Retorna os sinalizadores de entrada do arquivo Phar

### Descrição

public function **PharFileInfo::getPharFlags**(): [int](language.types.integer.md)

Este método retorna os sinalizadores definidos no manifesto para um Phar. Sempre retornará
`0` na implementação atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os sinalizadores Phar (sempre `0` na implementação atual)

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::getPharFlags()****

```
<?php
try {
    $p = new Phar('/caminho/para/meu.phar', 0, 'meu.phar');
    $p['meuarquivo.txt'] = 'olá';
    $file = $p['meuarquivo.txt'];
    var_dump($file->getPharFlags());
} catch (Exception $e) {
    echo 'Não foi possível criar/modificar meu.phar: ', $e;
}
?>
```

O exemplo acima produzirá:

```
int(0)
```

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
