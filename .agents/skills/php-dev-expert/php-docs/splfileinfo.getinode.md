# Obtém o inode para o arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getinode.php

---

# SplFileInfo::getInode

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getInode — Obtém o inode para o arquivo

### Descrição

public function **SplFileInfo::getInode**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número do inode para o objeto do sistema de arquivos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número do inode para o objeto do sistema de arquivos em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) em caso de erro.

### Veja também

- [fileinode()](function.fileinode.md) - Lê o inode do arquivo

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
