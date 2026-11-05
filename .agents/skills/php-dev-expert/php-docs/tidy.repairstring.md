# Repara uma string usando um arquivo de configuração fornecido opcionalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.repairstring.php

---

# tidy::repairString

# tidy\_repair\_string

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.7.0)

tidy::repairString -- tidy\_repair\_string — Repara uma string usando um arquivo de configuração fornecido opcionalmente

### Descrição

Estilo orientado a objetos

public static function **tidy::repairString**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **tidy\_repair\_string**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Repara a string fornecida.

### Parâmetros

`string`
:   Os dados a serem reparados.

`config`
:   O parâmetro de configuração `config` pode ser passado como um
    array ou como uma string. Se uma string for passada, ela será interpretada como o
    nome do arquivo de configuração; caso contrário, será interpretada como as
    próprias opções.

    Confira [» https://api.html-tidy.org/#quick-reference](https://api.html-tidy.org/#quick-reference) para
    uma explicação sobre cada opção.

`encoding`
:   O parâmetro `encoding` define a codificação para
    documentos de entrada/saída. Os valores possíveis para codificação são:
    `ascii`, `latin0`, `latin1`,
    `raw`, `utf8`, `iso2022`,
    `mac`, `win1252`, `ibm858`,
    `utf16`, `utf16le`, `utf16be`,
    `big5` e `shiftjis`.

### Valor Retornado

Retorna a string reparada, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **tidy::repairString()** agora é um método estático. |
| 8.0.0 | `config` e `encoding` agora podem ser anulados. |
| 8.0.0 | Esta função não aceita mais o parâmetro `useIncludePath`. |

### Examples

**Exemplo #1 Exemplo de **tidy::repairString()****

```
<?php
ob_start();
?>

<html>
  <head>
    <title>teste</title>
  </head>
  <body>
    <p>erro</i>
  </body>
</html>

<?php

$buffer = ob_get_clean();
$tidy = new tidy();
$clean = $tidy->repairString($buffer);

echo $clean;
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>teste</title>
</head>
<body>
<p>erro</p>
</body>
</html>
```

### Veja também

- [tidy::parseFile()](tidy.parsefile.md) - Analisar marcação em arquivo ou URI
- [tidy::parseString()](tidy.parsestring.md) - Analisa um documento armazenado em uma string
- [tidy::repairFile()](tidy.repairfile.md) - Repara um arquivo e o retorna como uma string

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
