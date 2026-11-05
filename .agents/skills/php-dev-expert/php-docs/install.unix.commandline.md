# CGI e instalações de linha de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.commandline.php

---

## CGI e instalações de linha de comando

Por padrão o PHP é compilado como programas CLI e
CGI, os quais podem ser utilizados para processamento
CGI. Se você estiver executando um servidor web que suporta o PHP como módulo,
você deve geralmente usar essa opção por
razões de performance. No entanto, a versão CGI permite que usuários executem
diferentes páginas com PHP usando diferentes ids de usuário.

**Aviso**

Um servidor instalado em modo CGI está aberto
a várias vulnerabilidades possíveis. Leia nossa
[seção de segurança CGI](security.cgi-bin.md) para aprender como
se defender de tais ataques.

### Testando

Se você compilou o PHP como um programa CGI, você pode testá-lo
usando o comando **make test**. É sempre uma boa idéia
testar os software que você compila. Dessa maneira, você pode achar um problema
com o PHP na sua plataforma cedo, ao invés de ter de lidar com isso mais tarde.

### Usando Variáveis

Algumas [variáveis de ambientes
fornecidas pelo servidor](reserved.variables.server.md) não são definidas na
atual [» CGI/1.1 specification](https://datatracker.ietf.org/doc/html/rfc3875).
Apenas as seguintes variáveis são definidas: AUTH\_TYPE,
CONTENT\_LENGTH, CONTENT\_TYPE,
GATEWAY\_INTERFACE, PATH\_INFO,
PATH\_TRANSLATED, QUERY\_STRING,
REMOTE\_ADDR, REMOTE\_HOST,
REMOTE\_IDENT, REMOTE\_USER,
REQUEST\_METHOD, SCRIPT\_NAME,
SERVER\_NAME, SERVER\_PORT,
SERVER\_PROTOCOL, e SERVER\_SOFTWARE.
Todo o resto deve ser tratado como 'vendor extensions'.

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
