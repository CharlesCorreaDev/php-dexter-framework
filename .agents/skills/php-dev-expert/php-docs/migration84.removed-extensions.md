# Extensões Removidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.removed-extensions.php

---

## Extensões Removidas

Estas extensões foram movidas para a PECL e não fazem mais parte da distribuição
do PHP. Novas versões dos pacotes PECL serão publicadas numa base
ad-hoc, de acordo com a demanda dos usuários.

- [IMAP](book.imap.md)
- [OCI8](book.oci8.md)
- [PDO\_OCI](ref.pdo-oci.md)
- [PSpell](book.pspell.md)

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
