# Retorna o caminho do diretório usado para arquivos temporários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sys-get-temp-dir.php

---

# sys\_get\_temp\_dir

(PHP 5 >= 5.2.1, PHP 7, PHP 8)

sys\_get\_temp\_dir — Retorna o caminho do diretório usado para arquivos temporários

### Descrição

function **sys\_get\_temp\_dir**(): [string](language.types.string.md)

Retorna o caminho do diretório onde o PHP armazena arquivos temporários por
padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho do diretório de arquivos temporários.

### Examples

**Exemplo #1 Exemplo de **sys\_get\_temp\_dir()****

```
<?php
// Cria um arquivo no diretório de
// arquivos temporários usando sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');

echo $temp_file;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
C:\Windows\Temp\TuxA318.tmp
```

### Veja também

- [tmpfile()](function.tmpfile.md) - Cria um arquivo temporário
- [tempnam()](function.tempnam.md) - Cria arquivo com nome único

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
