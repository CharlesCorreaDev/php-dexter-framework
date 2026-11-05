# Repara um arquivo e o retorna como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.repairfile.php

---

# tidy::repairFile

# tidy\_repair\_file

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.7.0)

tidy::repairFile -- tidy\_repair\_file — Repara um arquivo e o retorna como uma string

### Descrição

Estilo orientado a objetos

public static function **tidy::repairFile**(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **tidy\_repair\_file**(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Repara o arquivo fornecido e o retorna como uma string.

### Parâmetros

`filename`
:   O arquivo a ser reparado.

`config`
:   O parâmetro de configuração `config` pode ser passado como um
    array ou como uma string. Se uma string for passada, ela será interpretada como o
    nome do arquivo de configuração; caso contrário, será interpretada como as
    próprias opções.

    Consulte http://tidy.sourceforge.net/docs/quickref.html para uma
    explicação sobre cada opção.

`encoding`
:   O parâmetro `encoding` define a codificação para
    documentos de entrada/saída. Os valores possíveis para codificação são:
    `ascii`, `latin0`, `latin1`,
    `raw`, `utf8`, `iso2022`,
    `mac`, `win1252`, `ibm858`,
    `utf16`, `utf16le`, `utf16be`,
    `big5` e `shiftjis`.

`useIncludePath`
:   Procura o arquivo no [include\_path](ini.core.md#ini.include-path).

### Valor Retornado

Retorna o conteúdo reparado como uma string, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **tidy::repairFile()** agora é um método estático. |
| 8.0.0 | `config` e `encoding` agora podem ser anulados. |

### Examples

**Exemplo #1 Exemplo de **tidy::repairFile()****

```
<?php
$file = 'file.html';

$tidy = new tidy();
$repaired = $tidy->repairfile($file);
rename($file, $file . '.bak');

file_put_contents($file, $repaired);
?>
```

### Veja também

- [tidy::parseFile()](tidy.parsefile.md) - Analisar marcação em arquivo ou URI
- [tidy::parseString()](tidy.parsestring.md) - Analisa um documento armazenado em uma string
- [tidy::repairString()](tidy.repairstring.md) - Repara uma string usando um arquivo de configuração fornecido opcionalmente

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
