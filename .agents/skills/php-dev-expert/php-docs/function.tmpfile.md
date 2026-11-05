# Cria um arquivo temporário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tmpfile.php

---

# tmpfile

(PHP 4, PHP 5, PHP 7, PHP 8)

tmpfile — Cria um arquivo temporário

### Descrição

function **tmpfile**(): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Cria um arquivo temporário com um nome único em modo de leitura-gravação-binário (w+b) e
retorna um manipulador do arquivo.

O arquivo é automaticamente removido quando ele é fechado (por exemplo, ao chamar
[fclose()](function.fclose.md), ou quando não há mais referências para
o manipulador do arquivo retornado por **tmpfile()**), ou quando o
script finalizar.

**Cuidado**

Se o script terminar inesperadamente, o arquivo temporário pode não ser removido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o manipulador de arquivo, similar ao que é retornado por
[fopen()](function.fopen.md), para o novo arquivo ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo da **tmpfile()****

```
<?php
$temp = tmpfile();
fwrite($temp, "escrevendo no arquivo temporario");
fseek($temp, 0);
echo fread($temp, 1024);
fclose($temp); // isto remove o arquivo
?>
```

O exemplo acima produzirá:

```
writing to tempfile
```

### Veja também

- [tempnam()](function.tempnam.md) - Cria arquivo com nome único
- [sys\_get\_temp\_dir()](function.sys-get-temp-dir.md) - Retorna o caminho do diretório usado para arquivos temporários

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
