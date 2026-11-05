# Obtém representação de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.tostring.php

---

# RarArchive::\_\_toString

(PECL rar >= 2.0.0)

RarArchive::\_\_toString — Obtém representação de texto

### Descrição

public function **RarArchive::\_\_toString**(): [string](language.types.string.md)

Fornece uma representação de string para este objeto [RarArchive](class.rararchive.md). Atualmente mostra
o nome completo do caminho do volume de arquivo que foi aberto e se o recurso é válido
ou já foi fechado através de uma chamada para [RarArchive::close()](rararchive.close.md).

Este método pode ser utilizado apenas para fins de depuração, pois não há garantias sobre quais
informações o resultado contém ou como ele é formatado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação textual deste objeto [RarArchive](class.rararchive.md).
O conteúdo desta representação não é especificado.

### Examples

**Exemplo #1 Exemplo de **RarArchive::\_\_toString()****

```
<?php
$rar_arch = RarArchive::open('latest_winrar.rar');
echo $rar_arch."\n";
$rar_arch->close();
echo $rar_arch."\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar"
RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar" (closed)
```

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
