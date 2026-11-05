# Analisa um documento armazenado em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.parsestring.php

---

# tidy::parseString

# tidy\_parse\_string

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::parseString -- tidy\_parse\_string — Analisa um documento armazenado em uma string

### Descrição

Estilo orientado a objetos

public function **tidy::parseString**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_parse\_string**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$config` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [tidy](class.tidy.md)|[false](language.types.singleton.md)

Analisa um documento armazenado em uma string.

### Parâmetros

`string`
:   Os dados a serem analisados.

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

### Valor Retornado

**tidy::parseString()** retorna **`true`** em caso de sucesso.
**tidy\_parse\_string()** retorna uma nova instância de [tidy](class.tidy.md)
em caso de sucesso.
Tanto o método quanto a função retornam **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `config` e `encoding` agora podem ser anulados. |

### Examples

**Exemplo #1 Exemplo de **tidy::parseString()****

```
<?php
ob_start();
?>

<html>
  <head>
   <title>teste</title>
  </head>
  <body>
   <p>erro<br>outra linha</i>
  </body>
</html>

<?php

$buffer = ob_get_clean();
$config = array('indent' => TRUE,
                'output-xhtml' => TRUE,
                'wrap' => 200);

$tidy = tidy_parse_string($buffer, $config, 'UTF8');

$tidy->cleanRepair();
echo $tidy;
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      teste
    </title>
  </head>
  <body>
    <p>
      erro<br />
      outra linha
    </p>
  </body>
</html>
```

### Veja também

- [tidy::parseFile()](tidy.parsefile.md) - Analisar marcação em arquivo ou URI
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
