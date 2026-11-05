# Dados Enviados pelo Usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.variables.php

---

# Dados Enviados pelo Usuário

A maior fraqueza na maioria dos programas PHP não é inerente à
linguagem em si, mas meramente um problema de código escrito desconsiderando a
segurança. Por essa razão, você sempre deve investir um pouco de tempo
considerando as implicações de um certo pedaço de código, para ter certeza
que o dano possí­vel se uma variável não esperada for submetida ao mesmo.

**Exemplo #1 Uso Perigoso de Variáveis**

```
<?php
// remove um arquivo do diretório home do usuário... ou talvez
// de outra pessoa?
unlink ($evil_var);

// Escreve registro do acesso... ou talvez uma entrada em /etc/passwd?
fwrite ($fp, $evil_var);

// Executa algo trivial... ou rm -rf *?
system ($evil_var);
exec ($evil_var);

?>
```

Você sempre deve examinar cuidadosamente seu código para se assegurar que
quaisquer variáveis sendo enviadas do navegador web estão sendo checadas
de maneira correta, e faz a si mesmo as seguintes perguntas:

- Seu script só afetará os arquivos desejados?
- Dados incomuns ou indesejados podem ser utilizados?
- Esse script pode ser usado de maneiras não intencionadas?
- Ele pode ser usado em conjunto com outros scripts de maneira
  negativa?
- As transações serão registradas adequadamente?

Respondendo essas perguntas adequadamente enquanto escrevendo o script,
ao invés de depois, previne a reescrita indesejada quando você
precisar aumentar a segurança. Começando com essa linha de raciocí­nio,
você não garante a segurança do seu sistema, mas pode ajudar
a aumentá-la.

Melhore a segurança desabilitando configurações de conveniência que obscurecem a origem,
validade ou integridade dos dados de entrada. A criação implícita de variáveis
​​e a entrada não verificada podem levar a vulnerabilidades como ataques de injeção e
manipulação de dados.

Recursos como `register_globals` e
`magic_quotes` (ambos removidos no PHP 5.4.0) contribuíram
para esses riscos criando variáveis ​​automaticamente a partir da entrada do usuário e
escapando dados inconsistentemente. Embora não esteja mais no PHP, riscos semelhantes
persistem se o tratamento de entrada for mal gerenciado.

Habilite [error\_reporting(E\_ALL)](function.error-reporting.md) para
ajudar a detectar variáveis ​​não inicializadas e validar a entrada. Use tipos estritos
([declare(strict\_types=1)](language.types.declarations.md#language.types.declarations.strict),
introduzido no PHP 7) para reforçar a segurança de tipos, evitar conversões de tipos não intencionais
e melhorar a segurança geral.

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
