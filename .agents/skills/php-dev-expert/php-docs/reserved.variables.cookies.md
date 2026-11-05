# Cookies HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.cookies.php

---

# $\_COOKIE

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_COOKIE — Cookies HTTP

### Descrição

Um [array](language.types.array.md) associativo de variáveis passadas para o atual script
via HTTP Cookies.

### Examples

**Exemplo #1 Exemplo da $\_COOKIE**

```
<?php
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
?>
```

Assumindo que o "nome" do cookie tenha sido definido antes

O exemplo acima produzirá
algo semelhante a:

```
Hello Hannes!
```

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

### Veja também

- [setcookie()](function.setcookie.md) - Envia um cookie
- [Manuseando variáveis externas](language.variables.external.md)
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
