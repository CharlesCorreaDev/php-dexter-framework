# Define o método de criptografia de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setencryptionname.php

---

# ZipArchive::setEncryptionName

(PHP >= 7.2.0, PHP 8, PECL zip >= 1.14.0)

ZipArchive::setEncryptionName — Define o método de criptografia de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::setEncryptionName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$method`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**): [bool](language.types.boolean.md)

Define o método de criptografia de uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada.

`method`
:   O método de criptografia definido por uma das constantes ZipArchive::EM\_.

`password`
:   Senha opcional, usada por padrão quando ausente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `password` é anulável agora. |

### Examples

Este exemplo cria um arquivo ZIP
test.zip e adiciona
o arquivo test.txt
criptografado usando o método AES 256.

**Exemplo #1 Arquivar e criptografar um arquivo**

```
<?php
$zip = new ZipArchive();
if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
    $zip->setPassword('secret');
    $zip->addFile('text.txt');
    $zip->setEncryptionName('text.txt', ZipArchive::EM_AES_256);
    $zip->close();
    echo "Ok\n";
} else {
    echo "KO\n";
}
?>
```

### Notas

> **Nota**:
>
> Esta função está disponível apenas se construída contra libzip ≥ 1.2.0.

### Veja também

- [ZipArchive::setPassword()](ziparchive.setpassword.md) - Define a senha para o arquivo ZIP ativo
- [ZipArchive::setEncryptionIndex()](ziparchive.setencryptionindex.md) - Define o método de criptografia de uma entrada definida pelo seu índice

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
