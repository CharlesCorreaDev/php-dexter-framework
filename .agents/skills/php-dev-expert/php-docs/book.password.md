# Hash de Senhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.password.php

---

# Hash de Senhas

# Introdução

A API de hash de senhas fornece uma interface em torno de
[crypt()](function.crypt.md) de fácil utilização e alguns outros algoritmos de hash de senha,
para facilitar a criação e o gerenciamento de senhas
de forma segura.

- [Instalação/Configuração](password.setup.md)
  - [Dependências](password.requirements.md)
  - [Instalação](password.installation.md)
- [Constantes predefinidas](password.constants.md)
- [Funções da extensão Password Hashing](ref.password.md)
  - [password\_algos](function.password-algos.md) — Obtém IDs de algoritmos disponíveis de hash de senhas
  - [password\_get\_info](function.password-get-info.md) — Retorna a informações sobre o hash fornecido
  - [password\_hash](function.password-hash.md) — Cria um hash de senha
  - [password\_needs\_rehash](function.password-needs-rehash.md) — Verifica se o hash informado corresponde às opções especificadas
  - [password\_verify](function.password-verify.md) — Verifica se uma senha corresponde a um hash

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
