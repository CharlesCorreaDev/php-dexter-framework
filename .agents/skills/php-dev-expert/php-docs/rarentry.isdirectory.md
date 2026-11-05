# Testa se uma entrada representa um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.isdirectory.php

---

# RarEntry::isDirectory

(PECL rar >= 2.0.0)

RarEntry::isDirectory — Testa se uma entrada representa um diretório

### Descrição

public function **RarEntry::isDirectory**(): [bool](language.types.boolean.md)

Testa se a entrada atual é um diretório.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se esta entrada for um diretório e **`false`** caso contrário.

### Notas

Esta função só está disponível a partir da versão 2.0.0, mas também é possível
testar se uma entrada é um diretório verificando os atributos da entrada,
como este (funciona apenas para arquivos compactados em RAR para Windows ou Unix):

```
<?php
//...
//Abre o arquivo, obtém a entrada e armazena na variável $e...
//...

$isDirectory = (bool) ((($e->getHostOs() == RAR_HOST_WIN32) && ($e->getAttr() & 0x10)) ||
    (($e->getHostOs() == RAR_HOST_UNIX) && (($e->getAttr() & 0xf000) == 0x4000)));
?>
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
