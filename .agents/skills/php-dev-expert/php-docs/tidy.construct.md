# Constrói um novo objeto tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.construct.php

---

# tidy::\_\_construct

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::\_\_construct — Constrói um novo objeto [tidy](class.tidy.md)

### Descrição

public function **tidy::\_\_construct**(  
    [?](language.types.null.md)[string](language.types.string.md) `$filename` = **`null`**,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$useIncludePath` = **`false`**  
)

Constrói um novo objeto [tidy](class.tidy.md).

### Parâmetros

`filename`
:   Se o parâmetro `filename` for fornecido, esta função
    também lerá esse arquivo e inicializará o objeto com o arquivo,
    agindo como [tidy\_parse\_file()](tidy.parsefile.md).

`config`
:   O parâmetro de configuração `config` pode ser passado como um
    array ou como uma string. Se uma string for passada, ela será interpretada como o
    nome do arquivo de configuração; caso contrário, será interpretada como as
    próprias opções.

    Para uma explicação sobre cada opção, visite [» https://api.html-tidy.org/#quick-reference](https://api.html-tidy.org/#quick-reference).

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

### Erros/Exceções

Lança uma exceção quando o construtor falha
(por exemplo, falha ao abrir um arquivo).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Falhas na execução do construtor agora lançam uma exceção, em vez de cleanRepair silenciosamente um objeto inutilizável. |
| 8.0.0 | `filename`, `config`, `encoding` e `useIncludePath` agora são anuláveis. |

### Examples

**Exemplo #1 Exemplo de **tidy::\_\_construct()****

```
<?php

$html = <<< HTML

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Título</title></head>
<body>
<p>paragraph <bt />
text</p>
</body></html>

HTML;

$tidy = new tidy();
$tidy->ParseString($html);

$tidy->cleanRepair();

if ($tidy->errorBuffer) {
    echo "Os seguintes erros foram detectados:\n";
    echo $tidy->errorBuffer;
}

?>
```

O exemplo acima produzirá:

```
Os seguintes erros foram detectados:
line 8 column 14 - Error: <bt> is not recognized!
line 8 column 14 - Warning: discarding unexpected <bt>
```

### Veja também

- [tidy::parseFile()](tidy.parsefile.md) - Analisar marcação em arquivo ou URI
- [tidy::parseString()](tidy.parsestring.md) - Analisa um documento armazenado em uma string

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
