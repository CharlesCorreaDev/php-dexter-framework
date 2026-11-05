# Relatando Erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.errors.php

---

# Relatando Erros

Com relação a segurança, relatório de erros é uma faca de dois gumes.
Pode beneficiar o aumento da segurança, ou fornecer informação ao atacante.

Uma tática padrão de ataque envolve determinar como um sistema funciona entrando
dados incorretos e checando os tipos e contextos dos erros
que são retornados. Isso permite que um cracker sonde
por informações sobre o servidor, para determinar possíveis fraquezas.
Por exemplo, se um atacantes tinha recolhido informação sobre uma página
baseado em uma submissão de dados anterior, ele pode tentar sobrescrever
variáveis, ou modificá-las:

**Exemplo #1 Atacando variáveis com uma página HTML personalizada**

```
<form method="post" action="attacktarget?username=badfoo&amp;password=badfoo">
<input type="hidden" name="username" value="badfoo" />
<input type="hidden" name="password" value="badfoo" />
</form>
```

Os erros do PHP que são retornados normalmente podem ser úteis para
um desenvolvedor que está tentando depurar um script, indicando coisas
como a função ou arquivo que falhou, o arquivo PHP no qual a falha ocorreu,
e o número da linha de código causadora da falha. Toda essa informação
pode ser explorada. Não é incomum para um desenvolvedor PHP
usar [show\_source()](function.show-source.md),
[highlight\_string()](function.highlight-string.md), ou
[highlight\_file()](function.highlight-file.md) como medidas de depuração, mas
em um site de produção, isso pode expor variáveis ocultas, sintaxe incorreta,
ou outra informações perigosas. Especialmente perigoso é rodar
código de fontes conhecidas com tratadores de depuração integrados, ou usar
técnicas de depuração comuns. Se o atacante pode determinar qual
técnica geral você estiver usando, eles podem tentar, por força-bruta,
enviar várias strings de depuração comuns para a página:

**Exemplo #2 Explorando variáveis comuns de depuração**

```
<form method="post" action="attacktarget?errors=Y&amp;showerrors=1&amp;debug=1">
<input type="hidden" name="errors" value="Y" />
<input type="hidden" name="showerrors" value="1" />
<input type="hidden" name="debug" value="1" />
</form>
```

Independente do método de tratamento de erros, a habilidade de sondar um
sistema por erros acaba dando informações úteis
a um atacante.

Por exemplo, o próprio estilo de um erro genérico do PHP indica que o sistema
está rodando o PHP. Se o atacante estava procurando por uma página `.html`, e
queria sondar qual o back-end (para procurar fraquezas conhecidas no
sistema) enviando dados incorretos, ele pode ser capaz de
determinar que um sistema foi feito com PHP.

Uma função de erro pode indicar se o sistema pode está executando um
engine de banco de dados específico, ou dar dicas de como uma página foi
programada ou desenhada. Isso permite uma investigação profunda sobre
portas abertas de bancos de dados, ou procurar por bugs específicos ou fraquezas
de uma página. Enviando diferentes pedaços de dados ruins, por exemplo,
um atacante pode determinar a ordem de autenticação em um script,
(a partir da linha do erro) assim como sondar por exploits que
podem ser aproveitados em diferentes partes do script.

Um erro geral do PHP ou do sistema de arquivos indicam quais permissões
o servidor web tem, assim como a estrutura e organização dos
arquivos no servidor web. Códigos de erros escritos pelo desenvolvedor podem
agravar o problema, levando à exploração fácil de informação até então
"escondida".

Existem três soluções principais para esse problema. A primeira é
verificar exaustivamente todas as funções, e tentar compensar pelo volume dos
erros. A segunda é desabilitar completamente os relatórios de erros
no código de produção. A terceira é usar as funções personalizáveis
de tratamento de erro do PHP para criar seu próprio tratador de erro.
Dependendo da sua política de segurança, você pode perceber que todas são
aplicáveis à sua situação.

Uma maneira de perceber esse problema antes que o pior aconteça é usar
a diretiva [error\_reporting()](function.error-reporting.md), para ajudar a
aumentar a segurança de seu código e achar uso de variáveis que pode ser perigoso.
Ao testar o seu código, antes de colocar em produção, com **`E_ALL`**, você pode
rapidamente encontrar áreas onde suas variáveis podem sofrer alterações nocivas
ou modificações quaisquer. Uma vez que esteja pronto para produção,
você deve ou desabilitar mensagens de erro completamente configurando a diretiva
[error\_reporting()](function.error-reporting.md) com o valor 0, ou desligar o envio
de erros usando a opção `display_errors` do arquivo php.ini,
para evitar sondagem do seu código. Se você escolher a segunda opção,
você deve também definir o caminho para o arquivo de registro usando a
diretiva `error_log`, e ligar a diretiva
`log_errors`.

**Exemplo #3 Encontrado variáveis perigosas com E\_ALL**

```
<?php
if ($username) { // Não inicializado ou verificado antes do uso
    $good_login = 1;
}
if ($good_login == 1) { // Se o teste acima falhar, não inicializado ou verificado antes do uso
    readfile ("/dados/altamente/sensiveis/index.html");
}
?>
```

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
