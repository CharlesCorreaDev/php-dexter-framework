# Enviando múltiplos arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.file-upload.multiple.php

---

## Enviando múltiplos arquivos

Múltiplos arquivos podem ser enviados usando diferentes
nomes (`name`) para entradas (`input`).

Também é possível carregar vários arquivos simultaneamente e
ter a informação automaticamente organizada em arrays. Para
isso, é necessário usar a mesma sintaxe das arrays submetidas pelo
formulário HTML que você usa para múltiplos selects e checkboxes:

**Exemplo #1 Carregando múltiplos arquivos**

```
<form action="file-upload.php" method="post" enctype="multipart/form-data">
  Envie esses arquivos:<br />
  <input name="userfile[]" type="file" /><br />
  <input name="userfile[]" type="file" /><br />
  <input type="submit" value="Enviar arquivos" />
</form>
```

Quando o formulário acima é submetido, os arrays
[$\_FILES['userfile']](reserved.variables.files.md),
[$\_FILES['userfile']['name']](reserved.variables.files.md), e
[$\_FILES['userfile']['size']](reserved.variables.files.md) serão
inicializados.

Por exemplo, suponha os nomes dos arquivos
/home/test/review.html e
/home/test/xwp.out. Neste caso,
[$\_FILES['userfile']['name'][0]](reserved.variables.files.md)
deve conter o valor review.html, e
[$\_FILES['userfile']['name'][1]](reserved.variables.files.md)
deve conter o valor xwp.out. Similarmente,
[$\_FILES['userfile']['size'][0]](reserved.variables.files.md) deve
conter o tamanho do arquivo review.html, e assim por diante.

[$\_FILES['userfile']['name'][0]](reserved.variables.files.md),
[$\_FILES['userfile']['tmp\_name'][0]](reserved.variables.files.md),
[$\_FILES['userfile']['size'][0]](reserved.variables.files.md), e
[$\_FILES['userfile']['type'][0]](reserved.variables.files.md)
também são definidas.

**Aviso**

O parâmetro
[max\_file\_uploads](ini.core.md#ini.max-file-uploads)
atua como um limite no número de arquivos que podem ser
enviados em uma única requisição. Você precisa ter certeza que
seu formulário não tentará enviar mais arquivos que o limite definido.

**Exemplo #2 Carregando um diretório inteiro**

Nos campos de carregamento de arquivos HTML, é possível carregar um diretório inteiro com o atributo `webkitdirectory`.
Esse recurso é suportado na maioria dos navegadores modernos.

Com a informação `full_path`, é possível armazenar os caminhos relativos,
ou reconstruir o mesmo diretório no servidor.

```
<form action="file-upload.php" method="post" enctype="multipart/form-data">
  Enviar este diretório:<br />
  <input name="userfile[]" type="file" webkitdirectory multiple />
  <input type="submit" value="Enviar arquivos" />
</form>
```

**Aviso**

O atributo `webkitdirectory` não é padronizado e não está no roteiro de padronização.
Não utilize-o em sites em produção voltados para a Web: ele não funcionará para todos os usuários.
Também podem haver grandes incompatibilidades entre implementações e o comportamento pode mudar no futuro.

O PHP analisa apenas a informação de caminho relativo enviada pelo navegador/user-agent,
e passa essa informação para o array [$\_FILES](reserved.variables.files.md).
Não há garantia de que os valores no array `full_path` contenham uma estrutura de diretórios real,
e a aplicação PHP não deve confiar nesta informação.

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
