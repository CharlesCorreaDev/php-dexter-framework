# Retorna metadados específicos do arquivo salvos com um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.getmetadata.php

---

# PharFileInfo::getMetadata

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::getMetadata — Retorna metadados específicos do arquivo salvos com um arquivo

### Descrição

public function **PharFileInfo::getMetadata**([array](language.types.array.md) `$unserializeOptions` = []): [mixed](language.types.mixed.md)

Retorna metadados que foram salvos no manifesto do arquivo Phar para este arquivo.

### Parâmetros

### Valor Retornado

Qualquer variável PHP que possa ser serializada e armazenada como metadados para o arquivo,
ou **`null`** se nenhum metadado for armazenado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `unserializeOptions` foi adicionado. |

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::getMetadata()****

```
<?php
// garantindo que o arquivo não existe
@unlink('novophar.phar');
try {
    $p = new Phar(dirname(__FILE__) . '/novophar.phar', 0, 'novophar.phar');
    $p['arquivo.txt'] = 'olá';
    $p['arquivo.txt']->setMetadata(array('usuario' => 'igor', 'mime-type' => 'text/plain'));
    var_dump($p['arquivo.txt']->getMetadata());
} catch (Exception $e) {
    echo 'Não foi possível criar/modificar novophar.phar: ', $e;
}
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["usuario"]=>
  string(4) "igor"
  ["mime-type"]=>
  string(10) "text/plain"
}
```

### Veja também

- [PharFileInfo::setMetadata()](pharfileinfo.setmetadata.md) - Define metadados específicos de arquivo salvos com um arquivo
- [PharFileInfo::hasMetadata()](pharfileinfo.hasmetadata.md) - Retorna os metadados da entrada
- [PharFileInfo::delMetadata()](pharfileinfo.delmetadata.md) - Exclui os metadados da entrada
- [Phar::setMetadata()](phar.setmetadata.md) - Define metadados do arquivo phar
- [Phar::hasMetadata()](phar.hasmetadata.md) - Informa se o phar tem metadados globais
- [Phar::getMetadata()](phar.getmetadata.md) - Retorna metadados do arquivo phar

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
