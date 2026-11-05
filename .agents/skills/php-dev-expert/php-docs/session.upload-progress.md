# Progresso de Upload em Sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.upload-progress.php

---

# Progresso de Upload em Sessão

Quando a configuração INI
[session.upload\_progress.enabled](session.configuration.md#ini.session.upload-progress.enabled)
estiver habilitada, o PHP será capaz de rastrear o progresso do upload de
arquivos individuais que estiverem sendo feito upload.
Esta informação não é muito útil para a requisição atual,
mas durante o upload do arquivo uma aplicação pode enviar uma requisição POST
para um endpoint separado (via XHR por exemplo) para checar o
status.

O progresso do upload estará disponível na variável super global [$\_SESSION](reserved.variables.session.md)
quando um upload estiver em progresso e quando a requisição POST tiver uma variável com
o mesmo nome que a configuração INI
[session.upload\_progress.name](session.configuration.md#ini.session.upload-progress.name)
estiver configurada.
Quando o PHP detectar requisições como essa, ele preencherá um array em
[$\_SESSION](reserved.variables.session.md), onde o índice é um valor resultante da concatenação de
[session.upload\_progress.prefix](session.configuration.md#ini.session.upload-progress.prefix)
e
[session.upload\_progress.name](session.configuration.md#ini.session.upload-progress.name)
(configurações INI).
O índice normalmente é obtido lendo essas configurações INI, ou seja

```
<?php
$key = ini_get("session.upload_progress.prefix") . $_POST[ini_get("session.upload_progress.name")];
var_dump($_SESSION[$key]);
?>
```

Também é possível *cancelar* o upload do arquivo em
andamento ao definir o índice `$_SESSION[$key]["cancel_upload"]` para
**`true`**.
Quando houver upload de múltiplos arquivos em uma mesma requisição, isso vai cancelar apenas o
upload dos arquivos que ainda estiverem em andamento e pendentes, mas não
removerá uploads já concluídos com sucesso.
Quando um upload é cancelado dessa forma, o índice `error` no array
[$\_FILES](reserved.variables.files.md) será alterado para
**`UPLOAD_ERR_EXTENSION`**.

As configurações INI
[session.upload\_progress.freq](session.configuration.md#ini.session.upload-progress.freq)
e
[session.upload\_progress.min\_freq](session.configuration.md#ini.session.upload-progress.min-freq)
controlam a frequência com que a informação do progresso do upload deve ser
recalculado.
Com um valor razoável para estas duas configurações, a sobrecarga
desse recurso é quase inexistente.

**Exemplo #1 Exemplo de informação**

Exemplo de estrutura do array de progresso de upload.

```
<form action="upload.php" method="POST" enctype="multipart/form-data">
 <input type="hidden" name="<?php echo ini_get("session.upload_progress.name"); ?>" value="123" />
 <input type="file" name="file1" />
 <input type="file" name="file2" />
 <input type="submit" />
</form>
```

Os dados armazenados na sessão serão parecidos com isto:

```
<?php
$_SESSION["upload_progress_123"] = array(
 "start_time" => 1234567890,   // A hora da requisição
 "content_length" => 57343257, // tamanho do conteúdo de POST
 "bytes_processed" => 453489,  // Quantidade de bytes recebidos e processados
 "done" => false,              // true quando o manipulador do POST finalizar, com sucesso ou não
 "files" => array(
  0 => array(
   "field_name" => "file1",       // Nome do campo <input/>
   // Os próximos 3 elementos se assemelham aos de $_FILES
   "name" => "foo.avi",
   "tmp_name" => "/tmp/phpxxxxxx",
   "error" => 0,
   "done" => true,                // True quando o manipulador do POST terminar de manipular este arquivo
   "start_time" => 1234567890,    // Quando este arquivo começou a ser processado
   "bytes_processed" => 57343250, // Quantidade de bytes recebidos e processados para este arquivo
  ),
  // Um outro arquivo, em que o upload ainda não acabou, na mesma requisição
  1 => array(
   "field_name" => "file2",
   "name" => "bar.avi",
   "tmp_name" => NULL,
   "error" => 0,
   "done" => false,
   "start_time" => 1234567899,
   "bytes_processed" => 54554,
  ),
 )
);
```

**Aviso**

O buffer de requisições do servidor web deve estar desabilitado para que isso funcione
corretamente ou o PHP pode enxergar o upload apenas quando ele já estiver completado. É de conhecimento que servidores
como Nginx criam buffer para requisições maiores.

**Cuidado**

A informação do progresso do upload é escrita na sessão antes da execução de
quaisquer scripts. Portanto, alterar o nome da sessão através da função [ini\_set()](function.ini-set.md)
ou [session\_name()](function.session-name.md) resultará em uma sessão sem as informações de
progresso do upload.

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
