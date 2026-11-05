# Variáveis de requisição HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.request.php

---

# $\_REQUEST

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_REQUEST — Variáveis de requisição HTTP

### Descrição

Um [array](language.types.array.md) associativo que por padrão contém informações de
[$\_GET](reserved.variables.get.md),
[$\_POST](reserved.variables.post.md) e
[$\_COOKIE](reserved.variables.cookies.md).

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

> **Nota**:
>
> Quando executando em [linha de comando](features.commandline.md), esta *não* incluirá as entradas
> [argv](reserved.variables.argv.md) e
> [argc](reserved.variables.argc.md); estas estão
> presentes no [array](language.types.array.md)
> [$\_SERVER](reserved.variables.server.md).

> **Nota**:
>
> As variáveis em $\_REQUEST são providas para o script
> via mecanismos de entradas GET, POST, e COOKIE e portanto poderia ser
> modificadas por um usuário remoto e não podem ser confiadas. A presença
> e ordem das variáveis listadas neste array
> é definido de acordo com o PHP
> [request\_order](ini.core.md#ini.request-order), e
> [variables\_order](ini.core.md#ini.variables-order)
> diretivas de configuração

### Veja também

- [Manuseamento de variáveis externas](language.variables.external.md)
- [A extensão filter](book.filter.md)

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
