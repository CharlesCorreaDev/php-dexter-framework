# Realiza uma sub-requisição Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.virtual.php

---

# virtual

(PHP 4, PHP 5, PHP 7, PHP 8)

virtual — Realiza uma sub-requisição Apache

### Descrição

function **virtual**([string](language.types.string.md) `$uri`): [bool](language.types.boolean.md)

**virtual()** é uma função específica do Apache
equivalente a `<!--#include virtual...-->`
no `mod_include`.
Realiza uma sub-requisição do Apache. Útil na inclusão de
scripts CGI ou arquivos .shtml, ou qualquer outra coisa que possa ser interceptada
no Apache. Note que para um script CGI, o script precisa gerar um cabeçalho
CGI válido. Isto significa que, no mínimo, ele precisa
gerar um cabeçalho `Content-Type`.

Para executar a sub-requisição, todos os buffers são finalizados e enviados para o
navegador. Cabeçalhos pendentes também serão enviados.

Esta função é suportada quando o PHP
é instalado como um módulo do servidor web Apache.

### Parâmetros

`uri`
:   A URL no qual o comando virtual será realizado.

### Valor Retornado

Realizado o comando virtual em caso de sucesso, retorna **`false`** em caso de erros.

### Examples

Veja [apache\_note()](function.apache-note.md) para um exemplo.

### Notas

**Aviso**

Uma string de consulta pode ser passada para o arquivo incluído, mas
[$\_GET](reserved.variables.get.md) será copiada do script anterior somente se
[$\_SERVER['QUERY\_STRING']](reserved.variables.server.md) for preenchida com o valor da
string de consulta. A string de consulta pode ser passada somente no Apache 2.
A página requisitada não será listada nos registros do Apache.

> **Nota**:
>
> Variáveis de ambiente configuradas no arquivo requisitado não estarão visíveis
> no script incluído.

> **Nota**:
>
> Essa função pode ser utilizada em scripts PHP. Entretanto, é geralmente melhor
> utilizar as funções [include](function.include.md) ou [require](function.require.md) para
> arquivos PHP.

### Veja também

- [apache\_note()](function.apache-note.md) - Obtêm e configura notas de requisição

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
