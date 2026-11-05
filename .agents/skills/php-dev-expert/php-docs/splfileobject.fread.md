# Lê do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.fread.php

---

# SplFileObject::fread

(PHP 5 >= 5.5.11, PHP 7, PHP 8)

SplFileObject::fread — Lê do arquivo

### Descrição

public function **SplFileObject::fread**([int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

Lê o número dado de bytes do arquivo.

### Parâmetros

`length`
:   O número de bytes a serem lidos.

### Valor Retornado

Retorna a string lida do arquivo ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::fread()****

```
<?php
// Obtém o conteúdo de um arquivo em uma string
$filename = "/usr/local/something.txt";
$file = new SplFileObject($filename, "r");
$contents = $file->fread($file->getSize());
?>
```

### Notas

> **Nota**:
>
> Observe que **SplFileObject::fread()** lê a partir da posição atual
> do ponteiro do arquivo. Use [SplFileObject::ftell()](splfileobject.ftell.md)
> para encontrar a posição atual do ponteiro e [SplFileObject::rewind()](splfileobject.rewind.md)
> (ou [SplFileObject::fseek()](splfileobject.fseek.md)) para retroceder a posição do ponteiro.

### Veja também

- [fread()](function.fread.md) - Leitura de arquivo segura para binário

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
