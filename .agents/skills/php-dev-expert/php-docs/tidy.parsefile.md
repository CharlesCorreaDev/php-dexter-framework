# Analisar marcação em arquivo ou URI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.parsefile.php

---

# tidy::parseFile

# tidy\_parse\_file

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::parseFile -- tidy\_parse\_file — Analisar marcação em arquivo ou URI

### Descrição

Estilo orientado a objetos

public function **tidy::parseFile**(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_parse\_file**(  
    [string](language.types.string.md) `$filename`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
): [tidy](class.tidy.md)|[false](language.types.singleton.md)

Analisa o arquivo fornecido.

### Parâmetros

`filename`
:   Se o parâmetro `filename` for fornecido, esta função
    também lerá esse arquivo e inicializará o objeto com o arquivo,
    agindo como **tidy\_parse\_file()**.

`config`
:   O parâmetro de configuração `config` pode ser passado como um
    array ou como uma string. Se uma string for passada, ela será interpretada como o
    nome do arquivo de configuração; caso contrário, será interpretada como as
    próprias opções.

    Para uma explicação sobre cada opção, consulte
    [» https://api.html-tidy.org/#quick-reference](https://api.html-tidy.org/#quick-reference).

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

**tidy::parseFile()** retorna **`true`** em caso de sucesso.
**tidy\_parse\_file()** retorna uma nova instância de [tidy](class.tidy.md)
em caso de sucesso.
Tanto o método quanto a função retornam **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `config` e `encoding` agora podem ser anulados. |

### Examples

**Exemplo #1 Exemplo de **tidy::parseFile()****

```
<?php
$tidy = new tidy();
$tidy->parseFile('file.html');

$tidy->cleanRepair();

if(!empty($tidy->errorBuffer)) {
    echo "Os seguintes erros ou avisos ocorreram:\n";
    echo $tidy->errorBuffer;
}
?>
```

### Veja também

- [tidy::parseString()](tidy.parsestring.md) - Analisa um documento armazenado em uma string
- [tidy::repairFile()](tidy.repairfile.md) - Repara um arquivo e o retorna como uma string
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
