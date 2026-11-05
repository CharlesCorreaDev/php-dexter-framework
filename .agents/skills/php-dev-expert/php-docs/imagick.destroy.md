# Destrói o objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.destroy.php

---

# Imagick::destroy

(PECL imagick 2, PECL imagick 3)

Imagick::destroy — Destrói o objeto Imagick

### Descrição

public function **Imagick::destroy**(): [bool](language.types.boolean.md)

Destrói o objeto Imagick e libera todos os recursos associados a ele.
Este método está preterido em favor de [Imagick::clear](imagick.clear.md).

### Parâmetros

Esta função não possui parâmetros.

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
