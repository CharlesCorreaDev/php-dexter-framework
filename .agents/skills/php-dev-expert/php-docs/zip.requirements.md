# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zip.requirements.php

---

## Dependências

Esta extensão requer [» libzip](https://libzip.org/). A versão 1.1.2 era internalizada no PHP até a versão 7.3.

A versão mínima necessária é 0.11, mas uma versão mais recente é recomendada.

- A versão 1.2 é requerida para suporte criptografia, veja [ZipArchive::setEncryptionIndex()](ziparchive.setencryptionindex.md)
- A versão 1.3 é requerida para suporte progresso, veja [ZipArchive::registerProgressCallback()](ziparchive.registerprogresscallback.md)
- A versão 1.6 é requerida para suporte de cancelamento, veja [ZipArchive::registerCancelCallback()](ziparchive.registercancelcallback.md)

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
