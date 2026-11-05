# Recurso de Sobrecarga de Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.overload.php

---

# Recurso de Sobrecarga de Funções

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 7.2.0 e foi *REMOVIDO* a partir do PHP 8.0.0. O uso deste recurso
é fortemente desencorajado.

É possível que frequentemente sejam encontradas dificuldades ao fazer com que uma aplicação PHP existente
funcione em um ambiente multibyte específico. Isso acontece porque a maioria
das aplicações PHP por aí são escritas com funções de string padrão
como [substr()](function.substr.md), que são conhecidas por
não lidar corretamente com strings codificadas em multibyte.

mbstring suporta um recurso de 'sobrecarga de funções' que permite
adicionar suporte a multibyte a uma aplicação dessas sem
modificar o código, sobrecarregando as contrapartes multibyte
das funções de string padrão. Por exemplo,
[mb\_substr()](function.mb-substr.md) é chamada em vez de
[substr()](function.substr.md) se a sobrecarga de funções estiver ativada.
Esse recurso facilita a migração de aplicações que suportam apenas
codificações de byte único para um ambiente multibyte em muitos casos.

Para usar a sobrecarga de funções, defina
`mbstring.func_overload` no php.ini para um
valor positivo que represente uma combinação de máscaras de bits especificando
as categorias de funções a serem sobrecarregadas. Deve ser definido
como 1 para sobrecarregar a função [mail()](function.mail.md), 2 para funções de string,
4 para funções de expressão regular. Por exemplo,
se for definido como 7, as funções de correio, strings e expressões regulares serão
sobrecarregadas. A lista de funções sobrecarregadas é mostrada abaixo.

**Funções a serem sobrecarregadas**

| valor de mbstring.func\_overload | função original | função sobrecarregada |
| --- | --- | --- |
| 1 | [mail()](function.mail.md) | [mb\_send\_mail()](function.mb-send-mail.md) |
| 2 | [strlen()](function.strlen.md) | [mb\_strlen()](function.mb-strlen.md) |
| 2 | [strpos()](function.strpos.md) | [mb\_strpos()](function.mb-strpos.md) |
| 2 | [strrpos()](function.strrpos.md) | [mb\_strrpos()](function.mb-strrpos.md) |
| 2 | [substr()](function.substr.md) | [mb\_substr()](function.mb-substr.md) |
| 2 | [strtolower()](function.strtolower.md) | [mb\_strtolower()](function.mb-strtolower.md) |
| 2 | [strtoupper()](function.strtoupper.md) | [mb\_strtoupper()](function.mb-strtoupper.md) |
| 2 | [stripos()](function.stripos.md) | [mb\_stripos()](function.mb-stripos.md) |
| 2 | [strripos()](function.strripos.md) | [mb\_strripos()](function.mb-strripos.md) |
| 2 | [strstr()](function.strstr.md) | [mb\_strstr()](function.mb-strstr.md) |
| 2 | [stristr()](function.stristr.md) | [mb\_stristr()](function.mb-stristr.md) |
| 2 | [strrchr()](function.strrchr.md) | [mb\_strrchr()](function.mb-strrchr.md) |
| 2 | [substr\_count()](function.substr-count.md) | [mb\_substr\_count()](function.mb-substr-count.md) |

> **Nota**:
>
> Não é recomendado usar a opção de sobrecarga de funções no
> contexto por diretório, porque ainda não foi confirmado como
> sendo estável o suficiente em um ambiente de produção e pode levar a um
> comportamento indefinido.

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
