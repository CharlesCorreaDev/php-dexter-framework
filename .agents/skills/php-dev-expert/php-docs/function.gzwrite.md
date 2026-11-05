# Escrita segura para binário em arquivo-gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzwrite.php

---

# gzwrite

(PHP 4, PHP 5, PHP 7, PHP 8)

gzwrite — Escrita segura para binário em arquivo-gz

### Descrição

function **gzwrite**([resource](language.types.resource.md) `$stream`, [string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**gzwrite()** escreve o conteúdo de
`data` para o arquivo-gz.

### Parâmetros

`stream`
:   O ponteiro do arquivo gz. Precisa ser válido, e apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

`data`
:   A string a ser escrita.

`length`
:   O número de bytes descompactados a escrever. Se fornecido, a escrita
    irá parar depois de `length` bytes (descompactados) terem sido
    escritos, ou ao final de `data`,
    o que vier primeiro.

### Valor Retornado

Retorna o número de bytes (descompactados) escritos no fluxo informado do arquivo gz,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` permite null; anteriormente o default era `0`. |
| 7.4.0 | Esta função agora retorna **`false`** em caso de falha; anteriormente retornava `0`. |

### Examples

**Exemplo #1 Exemplo da **gzwrite()****

```
<?php
$string = 'Some information to compress';
$gz = gzopen('somefile.gz','w9');
gzwrite($gz, $string);
gzclose($gz);
?>
```

### Veja também

- [gzread()](function.gzread.md) - Leitura de arquivo gz binária segura
- [gzopen()](function.gzopen.md) - Abre arquivo gz

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
