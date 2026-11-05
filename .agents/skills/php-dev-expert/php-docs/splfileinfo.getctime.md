# Obtém o tempo de mudança do inode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getctime.php

---

# SplFileInfo::getCTime

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getCTime — Obtém o tempo de mudança do inode

### Descrição

public function **SplFileInfo::getCTime**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tempo de mudança do inode para o arquivo. O tempo retornado é um timestamp de data/hora Unix.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tempo da última mudança, em um timestamp de data/hora Unix em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getCTime()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo 'Last changed at ' . date('g:i a', $info->getCTime());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Last changed at 1:49 pm
```

### Veja também

- [filectime()](function.filectime.md) - Obtém o horário de modificação de inode do arquivo
- [SplFileInfo::getATime()](splfileinfo.getatime.md) - Obtém o último horário de acesso do arquivo
- [SplFileInfo::getMTime()](splfileinfo.getmtime.md) - Obtém o tempo da última modificação

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
