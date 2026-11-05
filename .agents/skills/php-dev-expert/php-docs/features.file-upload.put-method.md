# Suporte ao método PUT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.file-upload.put-method.php

---

## Suporte ao método PUT

O PHP oferece suporte para o método HTTP PUT utilizado por alguns clientes
para armazenar arquivos em um servidor.
Requisições PUT são muito mais simples que o envio de arquivos usando
requisições POST, elas se parecem com algo assim:

```
PUT /path/filename.html HTTP/1.1
```

Isso normalmente significaria que o cliente remoto gostaria de salvar
o seguinte conteúdo: /path/filename.html em seu diretório web.
É óbvio não se tratar de uma boa ideia que o Apache ou o PHP permitam automaticamente que todos
sobrescrevam qualquer arquivo em seu diretório web. Então, para considerar isso como uma
requisição é necessário dizer ao seu servidor web que você quer que um determinado
script PHP cuide dessa requisição. Para fazer isso no Apache utilize
a diretiva *Script*. Ela pode ser colocada
quase em qualquer local de seu arquivo de configuração do Apache. Um
local comum é dentro de um bloco `<Directory>` ou talvez dentro de um bloco `<VirtualHost>`.
Uma linha como a seguinte deve funcionar:

```
Script PUT /put.php
```

Isto diz ao Apache para enviar todas as requisições PUT para as URIs que combinem com o
contexto dessa linha para o script put.php. Isto
assume que o PHP esteja ativo e permite extensões .php.
O destino para todas as requisições PUT
para esse script deve ser o próprio script,
não o nome do arquivo enviado.

Com o PHP pode ser feito algo como se segue no
script put.php. Isso copia o conteúdo de um arquivo enviado para o
arquivo myputfile.ext no servidor.
Provavelmente é necessário a realização de algumas verificações e/ou
autenticação de usuário antes de realizar essa cópia.

**Exemplo #1 Salvando arquivos HTTP PUT**

```
<?php
/* PUT data vem do fluxo stdin */
$putdata = fopen("php://input", "r");

/* Abre um arquivo para escrita */
$fp = fopen("myputfile.ext", "w");

/* Lê os dados 1KB de cada vez
   e escreve no arquivo */
while ($data = fread($putdata,1024))
  fwrite($fp,$data);

/* Fecha os fluxos */
fclose($fp);
fclose($putdata);
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
