# Variáveis de string de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.get.php

---

# $\_GET

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

$\_GET — Variáveis de string de consulta

### Descrição

Um array associativo de variáveis passadas para o script atual através dos parâmetros
da URL (também conhecidos como string de consulta). Observe que este array é
preenchido sempre que uma string de consulta estiver presente, independentemente do método
de requisição HTTP.

### Examples

**Exemplo #1 Exemplo da $\_GET**

```
<?php
echo 'Olá ' . htmlspecialchars($_GET["nome"]) . '!';
?>
```

Assumindo que o usuário digitou `http://example.com/?name=Hannes`.

O exemplo acima produzirá
algo semelhante a:

```
Olá Hannes!
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
> Os valores em $\_GET são passados automaticamente através de [urldecode()](function.urldecode.md).

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
