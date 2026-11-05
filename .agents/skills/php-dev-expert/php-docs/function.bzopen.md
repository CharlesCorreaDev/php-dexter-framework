# Abre um arquivo comprimido com bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzopen.php

---

# bzopen

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzopen — Abre um arquivo comprimido com bzip2

### Descrição

function **bzopen**([string](language.types.string.md)|[resource](language.types.resource.md) `$file`, [string](language.types.string.md) `$mode`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

**bzopen()** abre um arquivo bzip2 (.bz2) para leitura
ou gravação.

### Parâmetros

`file`
:   O nome do arquivo a abrir, ou um recurso de fluxo existente.

`mode`
:   Os modos `'r'` (leitura), e `'w'` (gravação) são suportados.
    Qualquer outro valor fará com que **bzopen()** retorne **`false`**.

### Valor Retornado

Se a abertura falhar, **bzopen()** retorna **`false`**, caso contrário
retorna um ponteiro para o arquivo aberto.

### Examples

**Exemplo #1 Exemplo de **bzopen()****

```
<?php

$file = "/tmp/foo.bz2";
$bz = bzopen($file, "r") or die("Não foi possível abrir $file para leitura");

bzclose($bz);

?>
```

### Veja também

- [bzclose()](function.bzclose.md) - Fecha um ponteiro de arquivo bzip2

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
