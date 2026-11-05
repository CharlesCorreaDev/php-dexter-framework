# Constrói um novo objeto de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileobject.construct.php

---

# SplFileObject::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplFileObject::\_\_construct — Constrói um novo objeto de arquivo

### Descrição

public function **SplFileObject::\_\_construct**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$mode` = "r",  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
)

Constrói um novo objeto de arquivo.

### Parâmetros

`filename`
:   O arquivo para ler.

    **Dica**

    Uma URL pode ser usada como um
    nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
    Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
    o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
    sobre as capacidades de cada empacotador, notas de uso
    e informações sobre quaisquer variáveis predefinidas que eles possam
    fornecer.

`mode`
:   O modo no qual abrir o arquivo. Consulte [fopen()](function.fopen.md) para obter uma lista de modos permitidos.

`useIncludePath`
:   Se deve procurar no [include\_path](ini.core.md#ini.include-path) pelo `filename`.

`context`
:   Um recurso de contexto válido criado com [stream\_context\_create()](function.stream-context-create.md).

### Erros/Exceções

Lança uma [RuntimeException](class.runtimeexception.md) se o `filename` não puder ser aberto.

Lança uma [LogicException](class.logicexception.md) se o `filename` for um diretório.

### Examples

**Exemplo #1 Exemplo de **SplFileObject::\_\_construct()****

Este exemplo abre o arquivo atual e itera sobre seu conteúdo linha por linha.

```
<?php
$file = new SplFileObject(__FILE__);
foreach ($file as $line_num => $line) {
    echo "Linha $line_num é $line";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Linha 0 é <?php
Linha 1 é $file = new SplFileObject(__FILE__);
Linha 2 é foreach ($file as $line_num => $line) {
Linha 3 é     echo "Linha $line_num é $line";
Linha 4 é }
Linha 5 é ?>
```

### Veja também

- [SplFileInfo::openFile()](splfileinfo.openfile.md) - Obtém um objeto SplFileObject para o arquivo
- [fopen()](function.fopen.md) - Abre um arquivo ou URL

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
