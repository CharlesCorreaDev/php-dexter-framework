# Obtém uma linha de um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzgets.php

---

# gzgets

(PHP 4, PHP 5, PHP 7, PHP 8)

gzgets — Obtém uma linha de um ponteiro de arquivo

### Descrição

function **gzgets**([resource](language.types.resource.md) `$stream`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém uma (descomprimida) string até o tamanho length - 1 bytes lidos a partir do
ponteiro de arquivo dado. A leitura termina quando length - 1 bytes tiverem sido lidos, em uma
nova liha ou em EOF (o que vier primeiro).

### Parâmetros

`stream`
:   O ponteiro do arquivo deve ser válido, e deve apontar para um arquivo
    aberto corretamente com [gzopen()](function.gzopen.md).

`length`
:   O tamanho dos dados a pegar.

### Valor Retornado

A string descomprimida, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` pode ser null; anteriormente, o padrão era `1024`. |

### Examples

**Exemplo #1 Exemplo de **gzgets()****

```
<?php
$handle = gzopen('somefile.gz', 'r');
while (!gzeof($handle)) {
   $buffer = gzgets($handle, 4096);
   echo $buffer;
}
gzclose($handle);
?>
```

### Veja também

- [gzopen()](function.gzopen.md) - Abre arquivo gz
- [gzgetc()](function.gzgetc.md) - Obtém caractere de um ponteiro de arquivo gz
- [gzwrite()](function.gzwrite.md) - Escrita segura para binário em arquivo-gz

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
