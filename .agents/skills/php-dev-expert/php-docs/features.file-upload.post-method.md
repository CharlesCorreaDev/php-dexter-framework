# Envio de arquivos com o método POST

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.file-upload.post-method.php

---

## Envio de arquivos com o método POST

Este recurso permite realizar envios de arquivos de texto e binários.
Com as funções de autenticação e manipulação de arquivos do PHP,
você tem o controle completo de quem pode fazer o envio e
o que deve ser feito com o arquivo após o envio estar completo.

O PHP é capaz de receber envios de arquivos de qualquer navegador
compatível com RFC-1867.

> **Nota**:
> **Nota Sobre Configurações Relacionadas**  
>
> Veja também as diretivas [file\_uploads](ini.core.md#ini.file-uploads),
> [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize),
> [upload\_tmp\_dir](ini.core.md#ini.upload-tmp-dir),
> [post\_max\_size](ini.core.md#ini.post-max-size),
> [max\_input\_time](info.configuration.md#ini.max-input-time)
> no php.ini

O PHP também suporta o método PUT para envio de arquivos como o usado pelo
Netscape Composer e clientes para
Amaya W3C. Veja [Suporte ao Método PUT](features.file-upload.put-method.md) para maiores detalhes.

**Exemplo #1 Formulário para Envio de Arquivo**

Uma interface para envio de arquivo pode ser criada com um formulário especial
parecido com este:

```
<!-- O tipo de codificação de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O nome do elemento input determina o nome do array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>
```

O parâmetro `__URL__` no exemplo acima deve ser substituído
e apontar para um arquivo PHP.

O campo escondido (input type="hidden") `MAX_FILE_SIZE` (medido em bytes) deve
preceder o campo de entrada do arquivo (input type="file"), e o seu valor é o tamanho limite aceito pelo PHP.
Este elemento do formulário deve sempre ser usado para evitar que usuários tenham o problema de
ter que esperar pela transferência de um arquivo para só então descobrir que ele era grande
demais e a transferência falhar. Fique ciente: é muito simples burlar esse parâmetro pelo
lado do navegador, portanto nunca dependa exclusivamente desse recurso para
bloquear arquivos com maior tamanho. Isso é um recurso meramente conveniente para
usuários da aplicação no lado do cliente. Os parâmetros do PHP (no servidor)
para "maximum-size", no entanto, não podem ser burlados.

> **Nota**:
>
> Tenha certeza que seu formulário de envio tenha o atributo `enctype="multipart/form-data"`
> do contrário o envio não irá funcionar.

A variável global [$\_FILES](reserved.variables.files.md) conterá toda a informação do arquivo enviado.
O conteúdo do formulário de exemplo acima será como o exemplo descrito abaixo. Note que isso assume o
nome do arquivo enviado *userfile*, como foi usado no script de exemplo
acima, contudo isso pode ter qualquer nome.

[$\_FILES['userfile']['name']](reserved.variables.files.md)
:   O nome original do arquivo na máquina do cliente.

[$\_FILES['userfile']['type']](reserved.variables.files.md)
:   O tipo mime do arquivo, se o navegador fornecer essa
    informação. Um exemplo poderia ser
    `"image/gif"`. O tipo mime
    não é verificado pelo PHP portanto não considere que esse valor
    será concedido.

[$\_FILES['userfile']['size']](reserved.variables.files.md)
:   O tamanho, em bytes, do arquivo enviado.

[$\_FILES['userfile']['tmp\_name']](reserved.variables.files.md)
:   O nome temporário com o qual o arquivo enviado
    foi armazenado no servidor.

[$\_FILES['userfile']['error']](reserved.variables.files.md)
:   O [código de erro](features.file-upload.errors.md)
    associado a esse envio de arquivo.

[$\_FILES['userfile']['full\_path']](reserved.variables.files.md)
:   O caminho completo conforme enviado pelo navegador. Esse valor nem sempre contém uma estrutura de diretórios real, e não se pode confiar nele.
    Disponível a partir do PHP 8.1.0.

Os arquivos serão guardados por padrão no diretório temporário do
servidor, a menos que outro local seja especificado através da diretiva
[upload\_tmp\_dir](ini.core.md#ini.upload-tmp-dir) no
php.ini. O diretório padrão do servidor pode
ser alterado através da configuração da variável de ambiente
TMPDIR no ambiente onde o PHP está sendo executado.
Configurando isso usando [putenv()](function.putenv.md) em um script PHP
não irá funcionar. Esta variável de ambiente também pode ser usada
para certificar que outras operações também estão funcionando nos arquivos
enviados.

**Exemplo #2 Validando o envio de arquivos**

Veja também as funções [is\_uploaded\_file()](function.is-uploaded-file.md)
e [move\_uploaded\_file()](function.move-uploaded-file.md) para maiores informações. O
exemplo a seguir irá processar o envio de um arquivo que vem de um formulário.

```
<?php
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";

?>
```

O script PHP que recebe o arquivo enviado deve implementar
qualquer lógica que for necessária para determinar o que deve ser feito
com o arquivo enviado. Você pode, por exemplo, usar a
variável [$\_FILES['userfile']['size']](reserved.variables.files.md)
para descartar qualquer arquivo que seja muito pequeno ou muito grande. Você
pode usar a
variável [$\_FILES['userfile']['type']](reserved.variables.files.md)
para descartar arquivos incompatíveis com um determinado critério, mas
use isso apenas como a primeira de uma série de verificações, porque esse valor
está totalmente sob o controle do cliente e não é verificado pelo
PHP.
Você também pode usar [$\_FILES['userfile']['error']](reserved.variables.files.md)
e planejar sua lógica de acordo com os [Códigos de erro](features.file-upload.errors.md).
Independente da lógica, você também deve apagar o arquivo do
diretório temporário ou movê-lo para outro local.

Se nenhum arquivo for selecionado em seu formulário, o PHP irá retornar
[$\_FILES['userfile']['size']](reserved.variables.files.md) como 0, e
[$\_FILES['userfile']['tmp\_name']](reserved.variables.files.md) como "none" (nenhum).

O arquivo será excluído do diretório temporário ao fim da requisição
se ele não for movido ou renomeado.

**Exemplo #3 Enviando um array de arquivos**

O PHP suporta [array HTML](faq.html.md#faq.html.arrays)
mesmo com arquivos.

```
<form action="" method="post" enctype="multipart/form-data">
<p>Imagens:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Enviar" />
</p>
</form>
```

```
<?php
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() pode prevenir ataques de percorrer o sistema de arquivos,
        // mas mais validações são necessárias
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "data/$name");
    }
}
?>
```

O progresso do envio de arquivos pode ser implementado usando a [Sessão de Progresso de Envio](session.upload-progress.md).

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
