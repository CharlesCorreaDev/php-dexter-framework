# Constrói um novo objeto de arquivo temporário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spltempfileobject.construct.php

---

# SplTempFileObject::\_\_construct

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplTempFileObject::\_\_construct — Constrói um novo objeto de arquivo temporário

### Descrição

public function **SplTempFileObject::\_\_construct**([int](language.types.integer.md) `$maxMemory` = 2 \* 1024 \* 1024)

Constrói um novo objeto de arquivo temporário.

### Parâmetros

`maxMemory`
:   A quantidade máxima de memória (em bytes, o padrão é 2 MB) para
    o arquivo temporário usar. Se o arquivo temporário exceder esse
    tamanho, ele será movido para um arquivo no diretório temp do sistema.

    Se `maxMemory` for negativo, apenas memória
    será usada. Se `maxMemory` for zero,
    nenhuma memória será usada.

### Erros/Exceções

Lança uma [RuntimeException](class.runtimeexception.md) se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **SplTempFileObject()****

Este exemplo escreve um arquivo temporário na memória que pode ser escrito e lido.

```
<?php
$temp = new SplTempFileObject();
$temp->fwrite("Esta é a primeira linha.\n");
$temp->fwrite("E esta é a segunda.\n");
echo "Escritos " . $temp->ftell() . " bytes no arquivo temporário.\n\n";

// Retrocede e lê o que foi escrito
$temp->rewind();
foreach ($temp as $line) {
    echo $line;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Escritos 47 bytes no arquivo temporário.

Esta é a primeira linha.
E esta é a segunda.
```

### Veja também

- [SplFileObject](class.splfileobject.md)
- [Fluxos de entrada/saída PHP](wrappers.php.md)
  (para `php://temp` e `php://memory`)

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
