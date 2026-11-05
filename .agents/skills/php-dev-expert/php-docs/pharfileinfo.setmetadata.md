# Define metadados específicos de arquivo salvos com um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.setmetadata.php

---

# PharFileInfo::setMetadata

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::setMetadata — Define metadados específicos de arquivo salvos com um arquivo

### Descrição

public function **PharFileInfo::setMetadata**([mixed](language.types.mixed.md) `$metadata`): [void](language.types.void.md)

**PharFileInfo::setMetadata()** deve ser usado apenas para armazenar dados personalizados
que não podem ser representados com informações existentes armazenadas em um arquivo.
Metadados podem reduzir significativamente o desempenho do carregamento de um arquivo phar
se os dados forem grandes ou se houver muitos arquivos contendo metadados.
É importante observar que as permissões de arquivo são suportadas nativamente dentro de um
phar; é possível defini-las com o método
[PharFileInfo::chmod()](pharfileinfo.chmod.md). Assim como acontece com todas as funcionalidades que modificam o conteúdo de
um phar, a variável INI [phar.readonly](phar.configuration.md#ini.phar.readonly)
deve estar desativada para funcionar se o arquivo estiver dentro de um arquivo [Phar](class.phar.md).
Arquivos dentro de arquivos [PharData](class.phardata.md) não têm
essa restrição.

Alguns usos possíveis para metadados incluem a passagem de um usuário/grupo que deve ser definido
quando um arquivo é extraído do PHAR para o disco. Outros usos podem incluir
a especificação explícita de um tipo MIME a ser retornado. No entanto, quaisquer dados úteis que
descrevam um arquivo, mas que não devam estar contidos nele, podem ser armazenados.

### Parâmetros

`metadata`
:   Qualquer variável PHP contendo informações para armazenar junto com um arquivo

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::setMetadata()****

```
<?php
// garantindo que o arquivo não existe
@unlink('novophar.phar');
try {
    $p = new Phar(dirname(__FILE__) . '/novophar.phar', 0, 'novophar.phar');
    $p['arquivo.txt'] = 'olá';
    $p['arquivo.txt']->setMetadata(array('usuario' => 'igor', 'mime-type' => 'text/plain'));
    var_dump($p['arquivo.txt']->getMetaData());
} catch (Exception $e) {
    echo 'Não foi possível criar/modificar o phar: ', $e;
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

- [PharFileInfo::hasMetadata()](pharfileinfo.hasmetadata.md) - Retorna os metadados da entrada
- [PharFileInfo::getMetadata()](pharfileinfo.getmetadata.md) - Retorna metadados específicos do arquivo salvos com um arquivo
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
