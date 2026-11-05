# Leitura de arquivo gz binária segura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzread.php

---

# gzread

(PHP 4, PHP 5, PHP 7, PHP 8)

gzread — Leitura de arquivo gz binária segura

### Descrição

function **gzread**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

**gzread()** lê até `length` bytes
do ponteiro de arquivo gz dado. A leitura para quando
`length` bytes (não comprimidos) tiverem sido lidos
ou quando EOF é alcançado, o que ocorrer primeiro.

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Ele deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

`length`
:   O número de bytes a serem lidos.

### Valor Retornado

Os dados que foram lidos, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Esta função agora retorna **`false`** em caso de falha; anteriormente, `0` era retornado. |

### Examples

**Exemplo #1 Exemplo de **gzread()****

```
<?php
// obter o conteúdo de um arquivo gz em uma string
$filename = "/usr/local/algumacoisa.txt.gz";
$zd = gzopen($filename, "r");
$contents = gzread($zd, 10000);
gzclose($zd);
?>
```

### Veja também

- [gzwrite()](function.gzwrite.md) - Escrita segura para binário em arquivo-gz
- [gzopen()](function.gzopen.md) - Abre arquivo gz
- [gzgets()](function.gzgets.md) - Obtém uma linha de um ponteiro de arquivo
- [gzgetss()](function.gzgetss.md) - Obtém linha de um ponteiro de arquivo gz e remover tags HTML
- [gzfile()](function.gzfile.md) - Lê todo o arquivo gz em um array
- [gzpassthru()](function.gzpassthru.md) - Escreve na saída todos os dados restantes em um ponteiro de arquivo gz

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
