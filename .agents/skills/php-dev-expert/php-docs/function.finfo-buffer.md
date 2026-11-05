# Retorna informações sobre um buffer de string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.finfo-buffer.php

---

# finfo\_buffer

# finfo::buffer

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

finfo\_buffer -- finfo::buffer — Retorna informações sobre um buffer de string

### Descrição

Estilo procedural

function **finfo\_buffer**(  
    [finfo](class.finfo.md) `$finfo`,  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo orientado a objetos

public function [finfo::buffer](finfo.buffer.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função é usada para obter informações sobre dados binários em uma string.

### Parâmetros

`finfo`
:   Uma instância de [finfo](class.finfo.md), retornada por [finfo\_open()](function.finfo-open.md).

`string`
:   Conteúdo do arquivo a ser verificado.

`flags`
:   Uma ou disjunção de mais
    [constantes Fileinfo](fileinfo.constants.md).

`context`

### Valor Retornado

Retorna uma descrição textual do parâmetro `string`,
ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro `context` foi descontinuado e é ignorado. |
| 8.1.0 | O parâmetro `finfo` agora espera uma instância de [finfo](class.finfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | O parâmetro `context` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **finfo\_buffer()****

```
<?php
$finfo = new finfo(FILEINFO_MIME);
echo $finfo->buffer($_POST["script"]) . "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
application/x-sh; charset=us-ascii
```

### Veja também

- [finfo\_file()](function.finfo-file.md) - Retorna informações sobre um arquivo

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
