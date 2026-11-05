# Lê um caractere do ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fgetc.php

---

# fgetc

(PHP 4, PHP 5, PHP 7, PHP 8)

fgetc — Lê um caractere do ponteiro de arquivo

### Descrição

function **fgetc**([resource](language.types.resource.md) `$stream`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém um caractere de um dado ponteiro de arquivo.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna uma string contendo um único caractere lido do ponteiro do arquivo
passado por `stream`. Retorna **`false`** em EOF.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Um exemplo da **fgetc()****

```
<?php
$fp = fopen('algumarquivo.txt', 'r');
if (!$fp) {
    echo 'Não é possivel abrir algumarquivo.txt';
}
while (false !== ($char = fgetc($fp))) {
    echo "$char\n";
}
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo
- [fsockopen()](function.fsockopen.md) - Abre uma conexão socket de domínio Unix ou de Internet
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo

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
