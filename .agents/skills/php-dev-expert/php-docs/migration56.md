# Migrando do PHP 5.5.x para o PHP 5.6.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.php

---

# Migrando do PHP 5.5.x para o PHP 5.6.x

## Índice

- [Alterações incompatíveis com versões anteriores](migration56.incompatible.md)
- [Novas funcionalidades](migration56.new-features.md)
- [Recursos descontinuados no PHP 5.6.x](migration56.deprecated.md)
- [Funções alteradas](migration56.changed-functions.md)
- [Novas funções](migration56.new-functions.md)
- [Mudanças do OpenSSL no PHP 5.6.x](migration56.openssl.md)
- [Outras mudanças a extensões](migration56.extensions.md)
- [Novas constantes globais](migration56.constants.md)

A maioria das melhorias no PHP 5.6.x não tem impacto no código existente. Existem
[algumas incompatibilidades](migration56.incompatible.md)
e [novas funcionalidades](migration56.new-features.md) que devem
ser consideradas, e o codigo deve ser testado antes de alterar a versão
do PHP nos ambientes de produção.

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
