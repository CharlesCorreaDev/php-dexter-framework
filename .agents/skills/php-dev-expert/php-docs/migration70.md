# Migrando do PHP 5.6.x para o PHP 7.0.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.php

---

# Migrando do PHP 5.6.x para o PHP 7.0.x

## Índice

- [Mudanças incompatíveis com versões anteriores](migration70.incompatible.md)
- [Novos Recursos](migration70.new-features.md)
- [Recursos descontinuados no PHP 7.0.x](migration70.deprecated.md)
- [Funções alteradas](migration70.changed-functions.md)
- [Novas funções](migration70.new-functions.md)
- [Novas Classes e Interfaces](migration70.classes.md)
- [Novas Constantes Globais](migration70.constants.md)
- [Modificações nos Módulos SAPI](migration70.sapi-changes.md)
- [Extensões e SAPIs removidas](migration70.removed-exts-sapis.md)
- [Outras mudanças](migration70.other-changes.md)

Apesar do fato do PHP 7.0 ser uma nova versão principal, esforços foram feitos
para que a migração seja feita da forma mais simples possível. Essa versão
foca na remoção de funcionalidades descontinuadas em versões
anteriores e na melhoria da consistência da linguagem.

Existem [algumas incompatibilidades](migration70.incompatible.md)
e [novos recursos](migration70.new-features.md) que devem ser
considerados, e o código deve ser testado antes da atualização da versão do PHP em
ambientes de produção.

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
