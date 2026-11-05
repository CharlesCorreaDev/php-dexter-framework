# Tratando Formulários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tutorial.forms.php

---

# Tratando Formulários

Uma das características mais fortes do PHP é a forma como ele trata
formulários HTML. O conceito básico que é importante entender é que qualquer
elemento de formulário irá automaticamente ficar disponível para seus
scripts PHP. Por favor leia a seção
[Variáveis externas
do PHP](language.variables.external.md) para mais informações e exemplos de como usar formulários
com PHP. Aqui vai um exemplo de formulário HTML:

**Exemplo #1 Um simples formulário HTML**

```
<form action="action.php" method="post">
    <label for="nome">Seu nome:</label>
    <input name="nome" id="nome" type="text">

    <label for="idade">Sua idade:</label>
    <input name="idade" id="idade" type="number">

    <button type="submit">Enviar</button>
</form>
```

Não há nada de especial neste formulário. É um formulário HTML comum
sem nenhuma etiqueta especial de qualquer tipo. Quando o usuário preencher este formulário
e clicar no botão "Enviar", a página action.php
é chamada. Neste arquivo nós teremos algo como isto:

**Exemplo #2 Imprimindo dados de nosso formulário**

```
Olá, <?php echo htmlspecialchars($_POST['nome']); ?>.
Você tem <?php echo (int) $_POST['idade']; ?> anos de idade.
```

Um exemplo de saída deste script seria:

```
Olá, Maria. Você tem 22 anos de idade.
```

Para além de [htmlspecialchars()](function.htmlspecialchars.md) e
`(int)`, deve ser óbvio o que o script faz.
[htmlspecialchars()](function.htmlspecialchars.md) transforma caracteres que sejam
especiais no HTML na sua forma codificada, de forma que não seja possível injetar etiquetas HTML
ou JavaScript em sua página. O campo "idade", por ser um
número, pode ser simplesmente [convertido](language.types.type-juggling.md#language.types.typecasting)
para um [int](language.types.integer.md) que automaticamente eliminará qualquer
caractere estranho. Você também pode fazer o PHP automaticamente fazer isso
utilizando a extensão [filter](ref.filter.md).
As variáveis [$\_POST['nome']](reserved.variables.post.md) e [$\_POST['idade']](reserved.variables.post.md)
são criadas automaticamente pelo PHP. Anteriormente
utilizamos a superglobal [$\_SERVER](reserved.variables.server.md); acima
mostramos que a superglobal [$\_POST](reserved.variables.post.md)
contém todos os dados POST. Perceba como o
*método* (method) do formulário é POST. Se fosse utilizado
o método *GET*, os dados do formulário acabariam
na superglobal [$\_GET](reserved.variables.get.md).
Você também pode utilizar a superglobal [$\_REQUEST](reserved.variables.request.md),
se não se importar com a origem do dado enviado. Ela
conterá os dados mesclados das origens GET, POST e COOKIE.

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
