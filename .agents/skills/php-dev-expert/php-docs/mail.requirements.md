# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mail.requirements.php

---

## Dependências

Para que as funções da extensão Mail estejam disponíveis, o PHP deve ter acesso ao
binário do `sendmail` no sistema durante a compilação.
Se outro programa de correio eletrônico for utilizado, como qmail
ou postfix, certifique-se de
usar os empacotadores de sendmail apropriados que o acompanham. O PHP irá
primeiramente procurar pelo sendmail na variável PATH, e depois nos
seguintes locais:
`/usr/bin:/usr/sbin:/usr/etc:/etc:/usr/ucblib:/usr/lib`.
É altamente recomendado ter o sendmail disponível em
PATH. Além disso, o usuário sob o qual o processo PHP é executado deve ter
permissão para acessar o binário sendmail.

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
