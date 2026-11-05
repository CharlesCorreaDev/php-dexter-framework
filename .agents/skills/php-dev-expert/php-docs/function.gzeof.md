# Testar o EOF em um ponteiro de arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzeof.php

---

# gzeof

(PHP 4, PHP 5, PHP 7, PHP 8)

gzeof — Testar o EOF em um ponteiro de arquivo gz

### Descrição

function **gzeof**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Testa o ponteiro de arquivo GZ fornecido para o EOF.

### Parâmetros

`stream`
:   O ponteiro de arquivo gz. Deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [gzopen()](function.gzopen.md).

### Valor Retornado

Retorna **`true`** se o ponteiro de arquivo gz estiver no EOF ou se ocorrer um erro;
caso contrário, retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **gzeof()****

```
<?php
$gz = gzopen('algumarquivo.gz', 'r');
while (!gzeof($gz)) {
  echo gzgetc($gz);
}
gzclose($gz);
?>
```

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
