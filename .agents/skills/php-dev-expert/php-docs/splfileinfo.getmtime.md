# Obtém o tempo da última modificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getmtime.php

---

# SplFileInfo::getMTime

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getMTime — Obtém o tempo da última modificação

### Descrição

public function **SplFileInfo::getMTime**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o momento em que o conteúdo do arquivo foi alterado. O tempo retornado é um timestamp de data/hora Unix.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo da última modificação do arquivo, em um timestamp de data/hora Unix em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getMTime()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo 'Last modified at ' . date('g:i a', $info->getMTime());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Last modified at 1:49 pm
```

### Veja também

- [filemtime()](function.filemtime.md) - Obtém o horário de modificação do arquivo
- [SplFileInfo::getATime()](splfileinfo.getatime.md) - Obtém o último horário de acesso do arquivo
- [SplFileInfo::getCTime()](splfileinfo.getctime.md) - Obtém o tempo de mudança do inode

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
