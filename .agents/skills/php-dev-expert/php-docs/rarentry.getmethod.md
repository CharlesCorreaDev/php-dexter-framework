# Obtém método pack da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getmethod.php

---

# RarEntry::getMethod

(PECL rar >= 0.1)

RarEntry::getMethod — Obtém método pack da entrada

### Descrição

public function **RarEntry::getMethod**(): [int](language.types.integer.md)

**RarEntry::getMethod()** retorna o número do método usado ao adicionar a
entrada atual do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número do método ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **RarEntry::getMethod()****

```
<?php

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

echo "Método número: " . $entry->getMethod();

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
