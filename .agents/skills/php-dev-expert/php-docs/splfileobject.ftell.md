# Retorna a posição atual do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.ftell.php

---

# SplFileObject::ftell

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::ftell — Retorna a posição atual do arquivo

### Descrição

public function **SplFileObject::ftell**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna a posição do ponteiro do arquivo que representa o deslocamento atual no fluxo do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a posição do ponteiro do arquivo como um inteiro, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::ftell()****

```
<?php
$file = new SplFileObject("/etc/passwd");

// Lê a primeira linha
$data = $file->fgets();

// Onde nós estamos?
echo $file->ftell();
?>
```

### Veja também

- [ftell()](function.ftell.md) - Retorna a posição atual do ponteiro de leitura/gravação do arquivo

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
