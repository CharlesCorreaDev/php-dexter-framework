# Gravação binária segura em arquivo bzip2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bzwrite.php

---

# bzwrite

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

bzwrite — Gravação binária segura em arquivo bzip2

### Descrição

function **bzwrite**([resource](language.types.resource.md) `$bz`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**bzwrite()** escreve uma string no arquivo bzip2
informado.

### Parâmetros

`bz`
:   O ponteiro do arquivo. Precisa ser válido e apontar a um arquivo
    aberto com sucesso por [bzopen()](function.bzopen.md).

`data`
:   Os dados gravados.

`length`
:   Se fornecido, a gravação irá parar depois que os bytes (não comprimidos) informados em `length`
    tiverem sido escritos ou o final de
    `data` tiver sido alcançado, o que ocorrer primeiro.

### Valor Retornado

Retorna o número de bytes gravados, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **bzwrite()****

```
<?php
$str = "dados descomprimidos";
$bz = bzopen("/tmp/foo.bz2", "w");
bzwrite($bz, $str, strlen($str));
bzclose($bz);
?>
```

### Veja também

- [bzread()](function.bzread.md) - Leitura binária segura de arquivo bzip2
- [bzopen()](function.bzopen.md) - Abre um arquivo comprimido com bzip2

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
