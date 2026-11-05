# Obtém o último horário de acesso do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getatime.php

---

# SplFileInfo::getATime

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getATime — Obtém o último horário de acesso do arquivo

### Descrição

public function **SplFileInfo::getATime**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o último horário de acesso ao arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o horário em que o arquivo foi acessado pela última vez em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getATime()****

```
<?php
$info = new SplFileInfo('example.jpg');
echo 'Last accessed at ' . date('g:i a', $info->getATime());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Last accessed at 1:49 pm
```

### Veja também

- [fileatime()](function.fileatime.md) - Obtém o último horário de acesso do arquivo
- [SplFileInfo::getCTime()](splfileinfo.getctime.md) - Obtém o tempo de mudança do inode
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
