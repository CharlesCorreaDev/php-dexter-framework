# Retrocede a posição de um ponteiro de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rewind.php

---

# rewind

(PHP 4, PHP 5, PHP 7, PHP 8)

rewind — Retrocede a posição de um ponteiro de arquivos

### Descrição

function **rewind**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Define o indicador de posição de arquivo de `stream`
para o início do fluxo do arquivo.

> **Nota**:
>
> Se o arquivo foi aberto no modo de acréscimo ("a" ou "a+"), qualquer dado que
> for escrito no arquivo será sempre acrescentado, independente da posição do ponteiro.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para um arquivo
    aberto com sucesso por [fopen()](function.fopen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **rewind()** sobrescrevendo**

```
<?php
$handle = fopen('output.txt', 'r+');

fwrite($handle, 'Frase realmente longa.');
rewind($handle);
fwrite($handle, 'Foo');
rewind($handle);

echo fread($handle, filesize('output.txt'));

fclose($handle);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Foose realmente longa.
```

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo
- [ftell()](function.ftell.md) - Retorna a posição atual do ponteiro de leitura/gravação do arquivo
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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
