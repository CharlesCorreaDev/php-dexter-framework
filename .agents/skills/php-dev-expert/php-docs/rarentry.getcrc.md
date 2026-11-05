# Obtém CRC da entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rarentry.getcrc.php

---

# RarEntry::getCrc

(PECL rar >= 0.1)

RarEntry::getCrc — Obtém CRC da entrada

### Descrição

public function **RarEntry::getCrc**(): [string](language.types.string.md)

Retorna uma representação de string hexadecimal do CRC da entrada do arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o CRC da entrada do arquivo ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 2.0.0 | Este método agora retorna valores corretos para arquivos de vários volumes. |

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
