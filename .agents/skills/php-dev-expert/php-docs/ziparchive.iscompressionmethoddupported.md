# Verifica se um método de compressão é suportado pelo libzip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.iscompressionmethoddupported.php

---

# ZipArchive::isCompressionMethodSupported

(PHP >= 8.0.0, PECL zip >= 1.19.0)

ZipArchive::isCompressionMethodSupported — Verifica se um método de compressão é suportado pelo libzip

### Descrição

public static function **ZipArchive::isCompressionMethodSupported**([int](language.types.integer.md) `$method`, [bool](language.types.boolean.md) `$enc` = **`true`**): [bool](language.types.boolean.md)

Verifica se um método de compressão é suportado pelo libzip.

### Parâmetros

`method`
:   O método de compressão, uma das constantes
    **`ZipArchive::CM_*`**.

`enc`
:   Se **`true`**, verifica a compressão; caso contrário, verifica a descompressão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> Esta função está disponível apenas se compilada contra libzip ≥ 1.7.0.

### Veja também

- [ZipArchive::setCompressionIndex()](ziparchive.setcompressionindex.md) - Define o método de compressão de uma entrada definida pelo seu índice
- [ZipArchive::setCompressionName()](ziparchive.setcompressionname.md) - Define o método de compressão de uma entrada definida pelo seu nome

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
