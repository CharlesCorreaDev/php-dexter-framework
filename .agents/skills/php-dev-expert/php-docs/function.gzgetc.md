# Obtém caractere de um ponteiro de arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzgetc.php

---

# gzgetc

(PHP 4, PHP 5, PHP 7, PHP 8)

gzgetc — Obtém caractere de um ponteiro de arquivo gz

### Descrição

function **gzgetc**([resource](language.types.resource.md) `$stream`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string contendo um único caractere (não comprimido)
lido do ponteiro de arquivo gz fornecido.

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

### Valor Retornado

O caractere não comprimido ou **`false`** em EOF (ao contrário de [gzeof()](function.gzeof.md)).

### Examples

**Exemplo #1 Exemplo de **gzgetc()****

```
<?php
$gz = gzopen('algumarquivo.gz', 'r');
while (!gzeof($gz)) {
  echo gzgetc($gz);
}
gzclose($gz);
?>
```

### Veja também

- [gzopen()](function.gzopen.md) - Abre arquivo gz
- [gzgets()](function.gzgets.md) - Obtém uma linha de um ponteiro de arquivo

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
