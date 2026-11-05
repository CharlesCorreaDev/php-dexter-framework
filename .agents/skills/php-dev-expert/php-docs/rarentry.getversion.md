# Obtém a versão mínima do programa RAR necessária para descompactar a entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getversion.php

---

# RarEntry::getVersion

(PECL rar >= 0.1)

RarEntry::getVersion — Obtém a versão mínima do programa RAR necessária para descompactar a entrada

### Descrição

public function **RarEntry::getVersion**(): [int](language.types.integer.md)

Retorna a versão mínima do programa RAR (por exemplo, WinRAR) necessária para descompactar a entrada.
É codificado como 10 \* versão principal + versão secundária.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a versão ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **RarEntry::getVersion()****

```
<?php

$rar_file = rar_open('exemplo.rar') or die("Falha ao abrir arquivo Rar");

$entry = rar_entry_get($rar_file, 'Dir/arquivo.txt') or die("Falha ao pesquisar tal entrada");

echo "Versão Rar requerida para descompactar: " . $entry->getVersion();

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
