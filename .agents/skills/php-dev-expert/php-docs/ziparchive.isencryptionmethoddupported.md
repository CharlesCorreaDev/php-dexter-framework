# Verifica se um método de criptografia é suportado pelo libzip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.isencryptionmethoddupported.php

---

# ZipArchive::isEncryptionMethodSupported

(PHP >= 8.0.0, PECL zip >= 1.19.0)

ZipArchive::isEncryptionMethodSupported — Verifica se um método de criptografia é suportado pelo libzip

### Descrição

public static function **ZipArchive::isEncryptionMethodSupported**([int](language.types.integer.md) `$method`, [bool](language.types.boolean.md) `$enc` = **`true`**): [bool](language.types.boolean.md)

Verifica se um método de criptografia é suportado pelo libzip.

### Parâmetros

`method`
:   O método de criptografia, uma das constantes
    **`ZipArchive::EM_*`**.

`enc`
:   Se **`true`**, verifica a criptografia; caso contrário, verifica a descriptografia.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> Esta função está disponível apenas se compilada com libzip ≥ 1.7.0.

### Veja também

- [ZipArchive::setEncryptionIndex()](ziparchive.setencryptionindex.md) - Define o método de criptografia de uma entrada definida pelo seu índice
- [ZipArchive::setEncryptionName()](ziparchive.setencryptionname.md) - Define o método de criptografia de uma entrada definida pelo seu nome

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
