# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xattr.requirements.php

---

## Dependências

Para usar xattr, você precisará ter a biblioteca libattr instalada no seu sistema.
Ela está disponível em [» https://savannah.nongnu.org/projects/attr/](https://savannah.nongnu.org/projects/attr/).

> **Nota**:
>
> Essas funções só funcionarão em sistemas de arquivos que suportam atributos
> estendidos, e os quais tenham esses atributos habilitados no momento da montagem.
> Alguns sistemas de arquivos que suportam atributos estendidos são `ext2`, `ext3`,
> `reiserfs`, `jfs` e `xfs`.

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
