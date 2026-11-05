# Define o método de criptografia de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setencryptionindex.php

---

# ZipArchive::setEncryptionIndex

(PHP >= 7.2.0, PHP 8, PECL zip >= 1.14.0)

ZipArchive::setEncryptionIndex — Define o método de criptografia de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::setEncryptionIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$method`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**): [bool](language.types.boolean.md)

Define o método de criptografia de uma entrada definida pelo seu índice.

### Parâmetros

`index`
:   Índice da entrada.

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

### Notas

> **Nota**:
>
> Esta função está disponível apenas se construída contra libzip ≥ 1.2.0.

### Veja também

- [ZipArchive::setPassword()](ziparchive.setpassword.md) - Define a senha para o arquivo ZIP ativo
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
