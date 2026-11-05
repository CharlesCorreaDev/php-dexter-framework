# Retorna informações sobre um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.finfo-file.php

---

# finfo\_file

# finfo::file

(PHP >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

finfo\_file -- finfo::file — Retorna informações sobre um arquivo

### Descrição

Estilo procedural

function **finfo\_file**(  
    [finfo](class.finfo.md) `$finfo`,  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo orientado a objetos

public function [finfo::file](finfo.file.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = **`FILEINFO_NONE`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função é usada para obter informações sobre um arquivo.

### Parâmetros

`finfo`
:   Uma instância de [finfo](class.finfo.md), retornada por [finfo\_open()](function.finfo-open.md).

`filename`
:   Nome do arquivo a ser verificado.

`flags`
:   Uma ou disjunção de mais
    [constantes Fileinfo](fileinfo.constants.md).

`context`
:   Para uma descrição de `contexts`, consulte [Funções de Fluxo](ref.stream.md).

### Valor Retornado

Retorna uma descrição textual do conteúdo do argumento
`filename` ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `finfo` agora espera uma instância de [finfo](class.finfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | O parâmetro `context` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **finfo\_file()****

```
<?php
$finfo = finfo_open(FILEINFO_MIME_TYPE); // retorna o tipo MIME, também conhecido como extensão mimetype
foreach (glob("*") as $nome_do_arquivo) {
    echo finfo_file($finfo, $nome_do_arquivo) . "\n";
}
finfo_close($finfo);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
text/html
image/gif
application/vnd.ms-excel
```

### Veja também

- [finfo\_buffer()](function.finfo-buffer.md) - Retorna informações sobre um buffer de string

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
