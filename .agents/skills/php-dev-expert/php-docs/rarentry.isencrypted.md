# Testa se uma entrada está criptografada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.isencrypted.php

---

# RarEntry::isEncrypted

(PECL rar >= 2.0.0)

RarEntry::isEncrypted — Testa se uma entrada está criptografada

### Descrição

public function **RarEntry::isEncrypted**(): [bool](language.types.boolean.md)

Testa se o conteúdo da entrada atual está criptografado.

> **Nota**:
>
> A senha usada pode diferir entre arquivos dentro do mesmo arquivo RAR.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a entrada atual estiver criptografada e **`false`** caso contrário.

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
