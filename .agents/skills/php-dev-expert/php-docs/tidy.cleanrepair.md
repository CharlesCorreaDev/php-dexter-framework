# Executa operações de limpeza e reparo configuradas na marcação analisada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.cleanrepair.php

---

# tidy::cleanRepair

# tidy\_clean\_repair

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::cleanRepair -- tidy\_clean\_repair — Executa operações de limpeza e reparo configuradas na marcação analisada

### Descrição

Estilo orientado a objetos

public function **tidy::cleanRepair**(): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_clean\_repair**([tidy](class.tidy.md) `$tidy`): [bool](language.types.boolean.md)

Esta função limpa e repara o
`tidy` informado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **tidy::cleanrepair()****

```
<?php
$html = '<p>test</I>';

$tidy = tidy_parse_string($html);
$tidy->cleanRepair();

echo $tidy;
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title></title>
</head>
<body>
<p>test</p>
</body>
</html>
```

### Veja também

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
