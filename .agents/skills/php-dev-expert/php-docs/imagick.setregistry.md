# Define a chave nomeada do registro do ImageMagick para um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setregistry.php

---

# Imagick::setRegistry

(PECL imagick 3 >= 3.3.0)

Imagick::setRegistry — Define a chave nomeada do registro do ImageMagick para um valor

### Descrição

public static function **Imagick::setRegistry**([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define a chave nomeada do registro do ImageMagick para um valor. Isso é mais
útil para definir o "caminho temporário" que controla onde o ImageMagick
cria imagens temporárias, por exemplo, durante o processamento de PDFs.

### Parâmetros

`key`

`value`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
