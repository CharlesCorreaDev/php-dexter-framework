# Obtém um objeto SplFileObject para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.openfile.php

---

# SplFileInfo::openFile

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::openFile — Obtém um objeto SplFileObject para o arquivo

### Descrição

public function **SplFileInfo::openFile**([string](language.types.string.md) `$mode` = "r", [bool](language.types.boolean.md) `$useIncludePath` = **`false`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [SplFileObject](class.splfileobject.md)

Cria um objeto ([object](language.types.object.md) [SplFileObject](class.splfileobject.md)) a partir do
arquivo. Isso é útil porque [SplFileObject](class.splfileobject.md)
contém métodos adicionais para manipular o arquivo, enquanto
[SplFileInfo](class.splfileinfo.md) é útil apenas para obter informações,
como, por exemplo, se o arquivo é gravável.

### Parâmetros

`mode`
:   O modo de abertura do arquivo. Consulte a documentação de [fopen()](function.fopen.md)
    para descrições dos modos possíveis. O padrão
    é somente leitura.

`useIncludePath`
:   Quando definido como **`true`**, o nome do arquivo também
    é procurado no [include\_path](ini.core.md#ini.include-path)

`context`
:   Consulte a seção do manual sobre [contexto](context.md)
    para uma descrição dos `contextos`.

### Valor Retornado

O arquivo aberto como um [SplFileObject](class.splfileobject.md) [object](language.types.object.md).

### Erros/Exceções

Uma [RuntimeException](class.runtimeexception.md) se o arquivo não puder ser
aberto (por exemplo, direitos de acesso insuficientes).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` é anulável agora. |

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::openFile()****

```
<?php
$fileinfo = new SplFileInfo('/tmp/foo.txt');

if ($fileinfo->isWritable()) {

    $fileobj = $fileinfo->openFile('a');

    $fileobj->fwrite("appended this sample text");
}
?>
```

### Veja também

- [SplFileObject](class.splfileobject.md)
- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
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
