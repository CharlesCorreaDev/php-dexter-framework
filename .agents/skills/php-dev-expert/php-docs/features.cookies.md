# Cookies

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.cookies.php

---

# Cookies

O PHP suporta de forma transparente cookies HTTP. Cookies são um mecanismo para
armazenar dados no navegador remoto e assim rastrear ou identificar usuários
que retornam. Você pode criar cookies usando as funções [setcookie()](function.setcookie.md) ou
[setrawcookie()](function.setrawcookie.md).
Cookies fazem parte do cabeçalho HTTP, logo,
[setcookie()](function.setcookie.md) deve ser chamada antes que qualquer saída seja enviada ao
navegador. Esta é a mesma limitação que a função [header()](function.header.md)
tem. Você pode usar as [funções de buffering
de saída](ref.outcontrol.md) para atrasar as impressões no script até que você tenha decidido
se vai ou não configurar qualquer cookie ou enviar quaisquer cabeçalhos.

Qualquer cookie enviado para o servidor pelo cliente será automaticamente incluído
no array auto-global [$\_COOKIE](reserved.variables.cookies.md)
se [variables\_order](ini.core.md#ini.variables-order)
contém "C". Se você deseja definir vários valores em um único
cookie, simplesmente acrescente `[]` ao nome do cookie.

Para mais detalhes, incluindo comentários sobre problemas de browsers, veja as
funções [setcookie()](function.setcookie.md) e [setrawcookie()](function.setrawcookie.md).

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
