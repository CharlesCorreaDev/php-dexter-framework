# Define a senha para o arquivo ZIP ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setpassword.php

---

# ZipArchive::setPassword

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL zip >= 1.12.4)

ZipArchive::setPassword — Define a senha para o arquivo ZIP ativo

### Descrição

public function **ZipArchive::setPassword**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`): [bool](language.types.boolean.md)

Define a senha para o arquivo ZIP ativo.

### Parâmetros

`password`
:   A senha a ser usada para o arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> A partir do PHP 7.2.0 e libzip 1.2.0, a senha é usada para descompactar o arquivo ZIP
> e também é a senha padrão para [ZipArchive::setEncryptionName()](ziparchive.setencryptionname.md)
> e [ZipArchive::setEncryptionIndex()](ziparchive.setencryptionindex.md).
> Anteriormente, esta função apenas definia a senha a ser usada para descompactar o arquivo ZIP;
> ela não transformava um [ZipArchive](class.ziparchive.md) sem senha
> em um [ZipArchive](class.ziparchive.md) com senha.

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
