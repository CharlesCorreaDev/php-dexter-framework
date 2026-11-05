# Dados de formulário de requisições POST HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.post.php

---

# $\_POST

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_POST — Dados de formulário de requisições POST HTTP

### Descrição

Um array associativo de variáveis passados para o script atual
via método HTTP POST quando utilizado `application/x-www-form-urlencoded`
ou `multipart/form-data` como valor do cabeçalho HTTP Content-Type na requisição.

### Examples

**Exemplo #1 Exemplo da $\_POST**

```
<?php
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
?>
```

Assumindo que o usuário enviou uma requisição POST com `name=Hannes`
no corpo.

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

> **Nota**:
>
> Para ler dados POST enviados com outros tipos de conteúdo (por exemplo
> `application/json` ou `application/xml`),
> deve-se usar [php://input](wrappers.php.md#wrappers.php.input).
> Ao contrário de $\_POST que só funciona com
> `application/x-www-form-urlencoded` e
> `multipart/form-data`, o uso de php://input
> fornece acesso direto ao dado bruto do corpo da requisição.

### Veja também

- [Manipulando variáveis externas](language.variables.external.md)
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
