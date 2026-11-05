# Variáveis de ambiente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.environment.php

---

# $\_ENV

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_ENV — Variáveis de ambiente

### Descrição

Um [array](language.types.array.md) associativo de variáveis passadas para o script atual
via o método do ambiente.

Estas variáveis são importadas para o PHP do ambiente
sob o qual o parser do PHP é executado. Muitas são
providas pelo shell sob o qual o PHP é executado e diferentes
sistemas são prováveis executar diferentes tipos de shells, uma
lista definitiva é impossível. Veja a documentação de shell
para saber a lista de variáveis de ambiente definidas.

Outras variáveis de ambiente incluem variáveis CGI, elas aparecem
desconsiderando se o PHP é executado como um módulo do servidor ou
processador CGI.

### Examples

**Exemplo #1 Exemplo da $\_ENV**

```
<?php
echo 'Meu nome de usuário é ' .$_ENV["USER"] . '!';
?>
```

Assumindo que "bjori" executou este script

O exemplo acima produzirá
algo semelhante a:

```
Meu nome de usuário é bjori!
```

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

### Veja também

- [getenv()](function.getenv.md) - Obtém o valor de uma única ou de todas as variáveis ​​de ambiente
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
